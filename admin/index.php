<?php 
    include "../model/pdo.php";
    include "../model/danhmuc.php";
    include "../model/sanpham.php";
    include "header.php";
       if(isset($_GET['act'])){
        $act=$_GET['act'];
        switch ($act) {
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
                    $dien_tich = $_POST['dien_tich'];
    
                    $hinh = $_FILES['hinh']['name'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES['hinh']['name']);
                    if (move_uploaded_file($_FILES['hinh']['tmp_name'], $target_file)) {
                        
                    } else {
                        
                    }
    
                    insert_sanpham($tensp, $giasp, $hinh, $mota, $dien_tich, $iddm);
                    $thongbao = "Thêm thành công";
                }

                $listdanhmuc=loadall_danhmuc();
                include "sanpham/add.php";
            break;
                // DANH SÁCH SẢN PHẨM 
            case 'listsp':
                if (isset($_POST['listok']) && ($_POST['listok'])) {
                    $kyw = $_POST['kyw'];
                    $iddm = $_POST['iddm'];
                } else {
                    $kyw = '';
                    $iddm = 0;
                }
    
                $listdanhmuc = loadall_danhmuc();
                $listsanpham = loadall_sanpham($kyw, $iddm);
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
                    if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                        
                        $id = $_POST['id'];
                        $iddm = $_POST['iddm'];
                        $tensp = $_POST['tensp'];
                        $giasp = $_POST['giasp'];
                        $mota = $_POST['mota'];
                        $dien_tich = $_POST['dien_tich'];
        
                        $hinh = $_FILES['hinh']['name'];
                        $target_dir = "../upload/";
                        $target_file = $target_dir . basename($_FILES['hinh']['name']);
                        if (move_uploaded_file($_FILES['hinh']['tmp_name'], $target_file)) {
                            
                        } else {
                            
                        }
                        update_sanpham($id,$iddm,$tensp,$giasp,$dien_tich,$mota,$hinh);
                        $thongbao = "cập nhập thành công";
                    }
                    $listsanpham=loadall_sanpham();
                    $listdanhmuc=loadall_danhmuc();
                    include "sanpham/list.php";
                    break;
                

        }
       }else {
        include "home.php";
       }
    include "footer.php";
?>