
<?php
    session_start();
    include "model/pdo.php";
    include "model/sanpham.php";
    include "model/danhmuc.php";
    include "model/taikhoan.php";
    include "view/header.php";
    include "global.php";

    // if(!isset($_SESSION['mycart'])) $_SESSION['mycart']=[];


    $top10 =  loadall_sanpham_top10();
    $spnew = loadall_sanpham_home();
    $dsdm = loadall_danhmuc();
    // $sptrangct = loadall_sanpham_ct();

    if ((isset($_GET['act']))&&($_GET['act']!="")) {
        $act=($_GET['act']);
        switch ($act) {
            case 'sanpham':
                if (isset($_POST['timkiem'])) {
                    $kyw = isset($_POST['kyw']) ? $_POST['kyw'] : '';
                    $iddm = isset($_POST['iddm']) ? $_POST['iddm'] : 0;
                    $locgia = isset($_POST['locgia']) ? $_POST['locgia'] : '';
                } else {
                    $kyw = "";
                    $iddm = 0;
                    $locgia = "";
                }
                    $tensp = loadall_sanpham($kyw, $iddm, $locgia);
                    $tendm = load_ten_dm($iddm);
                    include "view/sanpham.php";
                break;
                
            case 'sanphamct':
                
                if (isset($_GET['idsp']) && ($_GET['idsp'])) {
                    // Mã lệnh khi điều kiện đúng
                    $id = $_GET['idsp'];
                    $sp_cung_loai =  loadone_sanpham_cungloai($id);
                }
                $onesp = loadone_sanpham($id);
                include "view/sanphamct.php";
                break;

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
                include "view/taikhoan/quenmk.php";
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
                # code...
                include "view/taikhoan/chitiettk.php";
                break;
        }
    }else{
       include "view/home.php"; 
    }
    
    include "view/footer.php";
    

?>
