<?php
    session_start();
    include "../../model/pdo.php";
    include "../../model/binhluan.php";
    $idpro = $_REQUEST['idpro'];
    $dsbl=loadall_binhluan($idpro);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
    <style>
        .binhluan table{
            width: 100%;
            margin: 0 auto;
        }   
        .binhluan table td:nth-child(1){
            width: 50%;
        }
        .binhluan table td:nth-child(2){
            width: 20%;
        }
        .binhluan table td:nth-child(3){
            width: 30%;
        }
    </style>
</head>
<body>
    <div class="sidebar_danhmuc">
        <div class="danhmuc_box2 binhluan">
            <table>
               <?php
                    foreach ($dsbl as $bl) {
                    extract ($bl);
                    echo '<tr></tr><td>'.$noidung.'</td>';
                    echo '<td>'.$iduser.'</td>';
                    echo '<td>'.$ngaybinhluan.'</td></tr>';
                    }                 
                ?> 
            </table>
            <ul>
                
            </ul>
        </div>
        <div>
        <?php
                            if (isset($_SESSION['user'])) {
                                extract($_SESSION['user']);
                                echo '
                                <form action="'. $_SERVER['PHP_SELF'] .'" method="POST">
                                    <input type="hidden" name="idpro" value="'. $idpro .'">
                                    <input type="text" name="noidung" placeholder="Nội dung bình luận">
                                    <input type="submit" name="guibinhluan" value="Gửi bình luận">
                                </form>
                                ';
                            }else {
                                echo'<h1>Bạn vui lòng đăng nhập để bình luận</h1>  ';
                            }
                        ?>
        
        </div>
        <?php

        if ((isset($_POST['guibinhluan'])) && ($_POST['guibinhluan'])) {
            $noidung = $_POST['noidung'];
            $idpro = $_POST['idpro'];
            $iduser = $_SESSION['user']['id'];
            $ngaybinhluan = date('d/m/Y');

            insert_binhluan($noidung, $iduser, $idpro, $ngaybinhluan);
            header("location: " . $_SERVER['HTTP_REFERER']);
        }

        ?> 
</body>
</html>

