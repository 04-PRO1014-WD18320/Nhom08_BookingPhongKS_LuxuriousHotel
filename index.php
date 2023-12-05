
<?php
    session_start();
    include "model/pdo.php";
    include "model/sanpham.php";
    include "model/Booking.php";
    include "model/danhmuc.php";
    include "model/taikhoan.php";
    include "model/thanhtoan.php";
    include "model/lichsudathang.php";
    include "model/lienhe.php";
    include "model/binhluan.php";
    include "view/header.php";
    include "global.php";

    if(!isset($_SESSION['mycart'])) $_SESSION['mycart']=[];

    // if(!isset($_SESSION['mycart'])) $_SESSION['mycart']=[];


    $top10 =  loadall_sanpham_top10();
    $spnew = loadall_sanpham_home();
    $dsdm = loadall_danhmuc();
    // $sp_cung_loai = loadone_sanpham_cungloai();
    // $sptrangct = loadall_sanpham_ct();

    if ((isset($_GET['act']))&&($_GET['act']!="")) {
        $act=($_GET['act']);
        switch ($act) { 
            //=============================SẢN PHẨM 
            case 'timkiem':
                if (isset($_POST['timkiemngay'])) {
                    $check_in_date = $_POST['ngaynhan'];
                    $check_out_date = $_POST['ngaytra'];
            
                    date_default_timezone_set('Asia/Ho_Chi_Minh');
                    $today = date('Y-m-d');
            
                    if ($check_in_date < $today) {
                        $condition = false;
                        echo '<script>alert("Ngày đặt phải lớn hơn hoặc bằng ngày hôm nay!")</script>';
                    } else if ($check_in_date >= $check_out_date) {
                        $condition = false;
                        echo '<script>alert("Ngày đặt phải nhỏ hơn ngày trả!")</script>';
                    } else {
                        $condition = true;
                    }
            
                    if ($condition) {
                        $availableRooms = getAvailableRooms($check_in_date, $check_out_date);
                        include "view/sanphamngay.php";
                    }
                }
                break;

            case 'sanpham':
                if (isset($_POST['timkiem'])) {
                    $kyw = isset($_POST['kyw']) ? $_POST['kyw'] : '';
                    $iddm = isset($_POST['iddm']) ? $_POST['iddm'] : 0;
                    $locgia = isset($_POST['locgia']) ? $_POST['locgia'] : '';

                    $check_in_date = $_POST['ngaynhan'];
                    $check_out_date = $_POST['ngaytra'];

                    $check_in_date = isset($_POST['ngaynhan']) ? $_POST['ngaynhan'] : '';
                    $check_out_date = isset($_POST['ngaytra']) ? $_POST['ngaytra'] : '';
            
                    date_default_timezone_set('Asia/Ho_Chi_Minh');
                    $today = date('Y-m-d');
            
                    if ($check_in_date < $today) {
                        $condition = false;
                        echo '<script>alert("Ngày đặt phải lớn hơn hoặc bằng ngày hôm nay!")</script>';
                    } else if ($check_in_date >= $check_out_date) {
                        $condition = false;
                        echo '<script>alert("Ngày đặt phải nhỏ hơn ngày trả!")</script>';
                    } else {
                        $condition = true;
                    }
            
                    if ($condition) {
                        $tensp = loadall_sanpham($kyw, $iddm, $locgia, $check_in_date, $check_out_date);
                        $tendm = load_ten_dm($iddm);
                        include "view/sanpham.php";
                    }
                } else {
                    $kyw = "";
                    $iddm = 0;
                    $locgia = "";
                    $check_in_date = "";
                    $check_out_date = "";
                    $tensp = loadall_sanpham($kyw, $iddm, $locgia, $check_in_date, $check_out_date);
                    $tendm = load_ten_dm($iddm);
                    include "view/sanpham.php";
                }
                break;
            
                case 'sanphamtheongay':
                        include "view/sanpham.php";
                    break;
                    
                case 'sanphamct':
                    if (isset($_POST['order-btn'])) {
                        date_default_timezone_set('Asia/Ho_Chi_Minh');
                        $today = date('Y-m-d');
                    
                        if ($_POST['recieve'] < $today) {
                            $condition = false;
                            echo '<script>alert("Ngày đặt phải lớn hơn hoặc bằng ngày hôm nay!")</script>';
                       } else if ($_POST['recieve'] >= $_POST['return']) {
                            $condition = false;
                            echo '<script>alert("Ngày đặt phải nhỏ hơn ngày trả!")</script>';
                        } else {
                            $condition = true;
                        }
                    
                        if ($condition) {
                            $check = createOrder($_POST['recieve'], $_POST['return'], $_POST['maPhong'], $_SESSION['user']['id'], $_POST['donGia']);
                            // var_dump($check);
                            if ($check) {
                                echo '<script>alert("Đặt phòng thành công!")</script>';
                                header("Location: index.php?act=thanhtoan&id-bill=$check");
                                exit(); // Thêm lệnh exit() để chắc chắn dừng việc thực thi sau khi chuyển hướng trang
                            } else {
                                echo '<script>alert("Đặt phòng không thành công!")</script>';
                            }
                        }
                    }
                    
                if (isset($_GET['idsp']) && ($_GET['idsp']>0)) {
                    // Mã lệnh khi điều kiện đúng
                    $id = $_GET['idsp'];
                    
                    $onesp = loadone_sanpham($id);
                    extract($onesp);
                    $sp_cung_loai =  loadone_sanpham_cungloai($id,$iddm);
                    include "view/sanphamct.php";
                }else{
                    include "view/home.php";
                }
                break;


                ///==========================TÀI KHOẢN
            case 'dangky':
                # code...
                if (isset($_POST['dangky']) && ($_POST['dangky'])){
                    $email = $_POST['email'];
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    insert_taikhoan($email,$user,$pass);
                    $thongbao = "Đã Đăng Ký Thành công vui lòng đăng nhập";
                }
                include "view/taikhoan/dangky.php";
                break;
                
            case 'dangnhap':
                # code...
                if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])){
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    
                    $checkuser=checkuser($user,$pass);
                    if (is_array($checkuser)) {
                        # code...
                        $_SESSION['user']=$checkuser;
                        // $thongbao = "Đã nhập Ký Thành công vui lòng đăng nhập";
                        header('Location: index.php');                   
                    }else {
                        $thongbao = "Tài khoản không tồn tại vui lòng đăng nhập lại";
                    }
                    
                }
                include "view/taikhoan/dangnhap.php";
                break;

            case 'edit_taikhoan':
                # code...
                if (isset($_POST['capnhat']) && ($_POST['capnhat'])){
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    $email = $_POST['email'];
                    $address = $_POST['address'];
                    $tel = $_POST['tel'];
                    $id = $_POST['id'];
                    update_taikhoan($id,$user,$pass,$email,$address,$tel);
                    $_SESSION['user']=checkuser($user,$pass);
                    header('Location: index.php?act=edit_taikhoan');  
                    
                }
                include "view/taikhoan/edit_taikhoan.php";
                break;
            case 'quenmk':
                # code...
                if (isset($_POST['guiemail']) && ($_POST['guiemail'])){
                    $email = $_POST['email'];
                    $checkemail = checkemail($email);
                    if (is_array($checkemail)) {
                        # code...
                        $thongbao = "Mật khẩu của bạn là ".$checkemail['pass'];
                    }else {
                        $thongbao ="Email này không tồn tại";
                    }
                    
                }
                include "view/taikhoan/quenmatmk.php";
                break;

                //============================LIÊN HỆ
                case 'lienhe':
                    if (isset($_POST['submit']) && ($_POST['submit'])){
                        $email = $_POST['email'];
                        $name = $_POST['name'];
                        $sdt = $_POST['sdt'];
                        $noidung = $_POST['noidung'];

                        insert_lienhe($name, $sdt, $email, $noidung);
                        $thongbao = "Đã Gửi Thành Công!";
                    }
                    
                    include "view/lienhe.php";
                break; 

            case 'thoat':
                # code...
                session_unset();
                header('Location: index.php');  
                break;
            case 'chinhsach':
                include "view/chinhsach.php";
                break;
            case 'chitiettk':
                include "view/taikhoan/chitiettk.php";
                break;  

            case 'thanhtoan':
                $id_bill = $_GET['id-bill'];
                $one_bill = getOneBill($id_bill);
                # code...
                include "view/thanhtoan.php";
                break;

            case 'lichsudathang': 

                if(isset($_SESSION['user'])){
                    $maKhachHang = $_SESSION['user']['id'];   
                    $lichsudathang = select_bill_idUser_done($maKhachHang);

                }
          
                include "view/lichsudathang.php";
                break;


      
            
        }
    }else{
       include "view/home.php"; 
    }
    
    include "view/footer.php";
    

?>
