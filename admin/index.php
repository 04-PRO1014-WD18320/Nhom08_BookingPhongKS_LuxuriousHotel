<?php 
    include "../model/pdo.php";
    include "../model/danhmuc.php";
    include "../model/sanpham.php";
    include "../model/binhluan.php";
    include "../model/taikhoan.php";
    include "../model/lienhe.php";
    include "../model/cart.php";
    include "../model/Booking.php";
    include "header.php";
       if(isset($_GET['act'])){
        $act=$_GET['act'];
        switch ($act) {
            // =======================DANH MỤC
            case 'listdonhang':
                $listdonhang =  loadall_donhang();
                include "donhang/list.php";
                break;
            case 'xoadh':  
                if (isset($_GET['id'])&&($_GET['id']>0)){
                    delete_donhang($_GET['id']);
                }
                $listdonhang=loadall_donhang();
                include "donhang/list.php";
                break;
            case 'adddm':
                // kiểm tra người dùng có click vào add hay ko
                if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                    $tenloai=$_POST['tenloai'];
                    insert_danhmuc($tenloai);
                    $thongbao = "thêm thành công";
                }
                include "danhmuc/add.php";
                break;
            case 'lisdm':
                $listdanhmuc=loadall_danhmuc();
                include "danhmuc/list.php";
                break;
            case 'xoadm':  
                if (isset($_GET['id'])&&($_GET['id']>0)){
                    delete_danhmuc($_GET['id']);
                }
                $listdanhmuc=loadall_danhmuc();
                include "danhmuc/list.php";
                break;
            case 'suadm':
                if (isset($_GET['id'])&&($_GET['id']>0)){
                    $dm=loadone_danhmuc($_GET['id']);
                }               
                include "danhmuc/update.php";
            break;
            case 'updatedm':
                if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                    $tenloai=$_POST['tenloai'];
                    $id=$_POST['id'];
                    update_danhmuc($id,$tenloai);
                    $thongbao = "cập nhập thành công thành công";
                }
                $listdanhmuc=loadall_danhmuc();
                include "danhmuc/list.php";
                break;
                
            // ==========phần sản phẩm
            // THÊM SẢN PHẨM
            case 'addsp':
                
                if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                    $iddm = $_POST['iddm'];
                    $tensp = $_POST['tensp'];
                    $giasp = $_POST['giasp'];
                    $mota = $_POST['mota'];
                    $dientich = $_POST['dientich'];
    
                    $hinh = $_FILES['hinh']['name'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES['hinh']['name']);
                    if (move_uploaded_file($_FILES['hinh']['tmp_name'], $target_file)) {
                        
                    } else {
                        
                    }
    
                    insert_sanpham($tensp, $giasp, $hinh, $mota, $dientich, $iddm);
                    $thongbao = "Thêm thành công";
                }

                $listdanhmuc=loadall_danhmuc();
                include "sanpham/add.php";
            break;
                // DANH SÁCH SẢN PHẨM VÀ TÌM KIẾM SẢN PHẨM 
            case 'listsp':
                if (isset($_POST['listok']) && ($_POST['listok'])) {
                    $kyw = isset($_POST['kyw']) ? $_POST['kyw'] : '';
                    $iddm = isset($_POST['iddm']) ? $_POST['iddm'] : 0;
                    $locgia = isset($_POST['locgia']) ? $_POST['locgia'] : '';
                } else {
                    $kyw = '';
                    $iddm = 0;
                    $locgia = "";
                }
    
                $listdanhmuc = loadall_danhmuc();
                $listsanpham = loadall_sanpham($kyw, $iddm, $locgia);
                include "sanpham/list.php";
                break;
                // XÓA SẢN PHẨM 
            case 'xoasp':
                    if (isset($_GET['id']) && $_GET['id'] > 0) {
                        delete_sanpham($_GET['id']);
                    }
                    $listsanpham = loadall_sanpham("", 0);
                    include "sanpham/list.php";
            break;
            // SỬA SẢN PHẨM THEO ID 
                case 'suasp':
                if (isset($_GET['id']) && $_GET['id'] > 0) {
                    $sanpham = loadone_sanpham($_GET['id']);
                }
                $listdanhmuc = loadall_danhmuc();
                include "sanpham/update.php";
                break;
            
            // CẬP NHẬT SẢN PHẨM
            case 'updatesp':
                if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                    // var_dump($_POST);die;
                    $id=$_POST['id'];
                    $iddm=$_POST['iddm'];
                    $tensp=$_POST['tensp'];
                    $giasp=$_POST['giasp'];
                    $dientich=$_POST['dientich'];
                    
                    $mota=$_POST['mota'];
                    $hinh = $_FILES['hinh']['name'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                    if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                       // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                      } else {
                       // echo "Sorry, there was an error uploading your file.";
                      }
                    update_sanpham($id,$iddm,$tensp,$giasp,$dientich,$mota,$hinh);
                    $thongbao = "cập nhập thành công thành công";
                }
                if (isset($_POST['listok']) && ($_POST['listok'])) {
                    $kyw = isset($_POST['kyw']) ? $_POST['kyw'] : '';
                    $iddm = isset($_POST['iddm']) ? $_POST['iddm'] : 0;
                } else {
                    $kyw = '';
                    $iddm = 0;
                }
    
                $listsanpham=loadall_sanpham($kyw, $iddm, $locgia);
                $listdanhmuc=loadall_danhmuc();
                include "sanpham/list.php";
                break;

                //================= BÌNH LUẬN VÀ DANH SÁCH KHÁCH HÀNG
                case 'dsbl':
                    $listbinhluan=loadall_binhluan(0);    
                    include "binhluan/list.php";
                    break;
                case 'xoabl':
                if (isset($_GET['id']) && $_GET['id'] > 0) {
                    delete_binhluan($_GET['id']);
                }
                $listbinhluan = loadall_binhluan(0);
                include "binhluan/list.php";
                break;
                default:
                    include "home.php";
                    
                    break; 
            case 'dskh':
                $listtaikhoan=loadall_taikhoan();    
                include "taikhoan/list.php";
                break;  
                
                // =============LIÊN HỆ 
            case 'lienhe':
                $listlienhe = loadall_lienhe();    
                include "taikhoan/lienhe.php";
                break;

            case 'xoalienhe':
                    if (isset($_GET['id']) && $_GET['id'] > 0) {
                        delete_lienhe($_GET['id']);
                    }
                    $listlienhe = loadall_lienhe();
                    include "taikhoan/lienhe.php";
            break;
            case 'thongke':
                $listthongke = loadall_thongke();
                include "thongke/list.php";
                # code...
                break;
            case 'bieudo':
                $listthongke = loadall_thongke();
                include "thongke/bieudo.php";
                # code...
                break;
                case 'checkin':
                    if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                        date_default_timezone_set('Asia/Ho_Chi_Minh');
                        checkin($_GET['id']);
                    }
                    $listdonhang = loadall_donhang();
                    include "donhang/list.php";
                    break;
                case 'checkout':
                    if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                        date_default_timezone_set('Asia/Ho_Chi_Minh');
                        checkout($_GET['id']);
                    }
                    $listdonhang = loadall_donhang();
                    include "donhang/list.php";
                    break;

             

        }
       }else {
        include "home.php";
       }
    include "footer.php";
?>