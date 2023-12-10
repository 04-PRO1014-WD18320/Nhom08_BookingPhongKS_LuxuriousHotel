<?php
session_start();
include "../../model/pdo.php";
include "../../model/binhluan.php";
$idpro = $_REQUEST['idpro'];
$dsbl = loadall_binhluan($idpro);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
    <style>
        .binhluan table {
            width: 100%;
            margin: 0 auto;
        }

        .binhluan table td:nth-child(1) {
            width: 50%;
        }

        .binhluan table td:nth-child(2) {
            width: 20%;
        }

        .binhluan table td:nth-child(3) {
            width: 30%;
        }

        h2 {
            text-align: center;
            margin-top: 80px;
            color: red;
        }

        .form_binhluan {
            margin-top: 160px;
            display: flex;
        }

        .form_binhluan input {
            padding: 10px;
        }

        .noidungbl {
            width: 100%;
            border-radius: 0px 0px 0px 10px;
        }

        .submit {
            border-radius: 0px 0px 10px 0px;
            background-color: blue;
            color: white;
        }
    </style>
</head>

<body>
    <div class="sidebar_danhmuc">

        <div class="danhmuc_title"></div>
        <div class="danhmuc_box2 binhluan">
            <table>
                <?php
                foreach ($dsbl as $bl) {
                    extract($bl);
                    echo '<tr></tr><td>' . $noidung . '</td>';
                    echo '<td>' . $iduser . '</td>';
                    echo '<td>' . $ngaybinhluan . '</td></tr>';
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
                                <form class="form_binhluan" id="commentForm" action="' . $_SERVER['PHP_SELF'] . '" method="POST">
                                    <input type="hidden" name="idpro" value="' . $idpro . '">
                                    <input type="text" class="noidungbl" name="noidung" placeholder="Nội dung bình luận">
                                    <input type="submit" class="submit" name="guibinhluan" value="Gửi bình luận">
                                </form>
                                ';
            } else {
                echo '<h2>Bạn vui lòng đăng nhập để bình luận <a href="index.php?act=dangnhap">Đăng Nhập</a></h2> ';
            }
            ?>

        </div>
        <?php
        // Kiểm tra và xử lý bình luận
        if (isset($_POST['guibinhluan']) && $_POST['guibinhluan']) {
            $noidung = $_POST['noidung'];
            $idpro = $_POST['idpro'];
            $iduser = $_SESSION['user']['id'];
            $ngaybinhluan = date('d/m/Y');

            $badWords = ["cmm", "dmm", "cc"];
            $hasBadWord = false;
            foreach ($badWords as $badWord) {
                if (stripos($noidung, $badWord) !== false) {
                    $hasBadWord = true;
                    break;
                }
            }

            if ($hasBadWord) {
                // echo '<h2>Bình luận không phù hợp!</h2>';
            } else {
                insert_binhluan($noidung, $iduser, $idpro, $ngaybinhluan);
                header("location: " . $_SERVER['HTTP_REFERER']);
                exit();
            }
        }
    }

    if ($hasBadWord) {
        // echo '<h2>Bình luận không phù hợp!</h2>';
        header("location: " . $_SERVER['HTTP_REFERER']);
        exit();
    } else {
        insert_binhluan($noidung, $iduser, $idpro, $ngaybinhluan);
        header("location: " . $_SERVER['HTTP_REFERER']);
        exit();
    }
}
?>
</body>

</html>
<script>
    commentForm.addEventListener("submit", function (event) {
        // event.preventDefault(); // Ngăn chặn form submit mặc định

        var commentInput = document.getElementsByName("noidung")[0].value;
        var badWords = ["cmm", "dmm", "cc"]; // Các từ khóa bậy bạ

        for (var i = 0; i < badWords.length; i++) {
            if (commentInput.includes(badWords[i])) {
                alert("Bình luận không phù hợp!"); // Thông báo lỗi
                return;
            }
        }
        // Nếu không có từ khóa bậy bạ, gửi form bằng Ajax
        var xhr = new XMLHttpRequest();
        xhr.open("POST", commentForm.action, true);
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                // Xử lý phản hồi từ máy chủ (nếu cần)
            }
        };
        xhr.send(new FormData(commentForm));
    });
</script>