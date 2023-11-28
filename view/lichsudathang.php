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
    <th>ID Bill</th>
            <th>Ngày Nhận</th>
            <th>Ngày Trả</th>
            <th>Mã Phòng</th>
            <th>Mã Khách Hàng</th>
            <th>Tổng Tiền</th>
    </tr>
  </thead>
  <tbody>
  <?php 
            if (is_array($lichsudathang) && $lichsudathang != null){
                for ($i = 0; $i < count($lichsudathang); $i++) {
                    $id = $lichsudathang[$i]['id'];
                    $ngayNhan = $lichsudathang[$i]['ngayNhan'];
                    $ngayTra = $lichsudathang[$i]['ngayTra'];
                    $maPhong = $lichsudathang[$i]['maPhong'];
                    $maKhachHang = $lichsudathang[$i]['maKhachHang'];
                    $tongTien = $lichsudathang[$i]['tongTien'];
                   ?>

                            <tr>
                                <th scope="row"><?= $id ?></th>
                                <td><?= $ngayNhan ?></td>
                                <td><?= $ngayTra ?></td>
                                <td><?= $maPhong ?></td>
                                <td><?= $maKhachHang ?></td>
                                <td><?= $tongTien ?></td>
                                </tr>
                                <?php } }?>
   
   
  </tbody>
      

      



    </table>
</body>
</html>

