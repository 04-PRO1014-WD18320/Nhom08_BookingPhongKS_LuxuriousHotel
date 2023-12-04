<!DOCTYPE html>
<html>
<head>
    <title>Lịch sử đặt hàng</title>
</head>
<body>
    <h1>Lịch sử đặt hàng</h1>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h1 {
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f5f5f5;
        }
    </style>
    <table>
    <thead>
    <tr>
        <th>STT</th>
        <th>Tên Khách Hàng</th>
        <th>Tên Phòng</th>
        <th>Ảnh Phòng</th>
        <th>Ngày Nhận</th>
        <th>Ngày Trả</th>
        <th>Tổng Tiền</th>

    </tr>
  </thead>
  <tbody>
  <?php 
    if (isset($lichsudathang) && is_array($lichsudathang) && $lichsudathang != null) {
        for ($i = 0; $i < count($lichsudathang); $i++) {
            $id = $lichsudathang[$i]['id'];
            $maKhachHang = $lichsudathang[$i]['maKhachHang'];
            $maPhong = $lichsudathang[$i]['maPhong'];
            $url = "./image/";
            $ngayNhan = $lichsudathang[$i]['ngayNhan'];
            $ngayTra = $lichsudathang[$i]['ngayTra'];
            $tongTien = $lichsudathang[$i]['tongTien'];


            // Lấy tên phòng từ mã phòng
            $tenPhong = getTenPhongByMaPhong($maPhong);
            $tenKhachHang = getTenKhachHangByMaKhachHang($maKhachHang);
            // $url = "./image"
            $anhPhong = $url.getAnhPhongByAnhPhong($maPhong);
            // var_dump ($anhPhong);
            // Hiển thị thông tin lịch sử đặt hàng
            ?>
            <tr>
                <th scope="row"><?= $id ?></th>
                <td><?= $tenKhachHang ?></td>
                <td><?= $tenPhong ?></td>
                <td><img src="<?= $anhPhong ?>" alt="Ảnh Phòng" width="100"></td>
                <td><?= $ngayNhan ?></td>   
                <td><?= $ngayTra ?></td>
                <td><?= $tongTien ?></td>   

            </tr>
        <?php
        }
    }

?>
     
    
  </tbody>
    </table>
</body>
</html>
