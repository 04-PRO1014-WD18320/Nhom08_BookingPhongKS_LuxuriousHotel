<div class="row">
<script src="https://www.gstatic.com/charts/loader.js"></script>

<body>
<div
id="myChart" style="width:100%; max-width:800px; height:600px;">
</div>

<?php
$tongdm = count($listthongke);
$dataArray = [];
$thongkeArray = [];

foreach ($listthongke as $thongke) {
    $maPhong = $thongke['maPhong'];
    $tongTien = $thongke['maPhong'];
    // var_dump($maPhong);
    $tenPhong = getTenPhongByMaPhong($maPhong);

    if (!isset($thongkeArray[$tenPhong])) {
        $thongkeArray[$tenPhong] = $tongTien;
    } else {
        $thongkeArray[$tenPhong] += $tongTien;
    }
}

foreach ($thongkeArray as $maPhong => $tongTien) {
    $dataArray[] = [$maPhong, $tongTien];
}
?>
<script>
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {

// Set Data
const data = google.visualization.arrayToDataTable([
  ['Contry', 'Mhl'],
  <?php
    foreach ($dataArray as $row) {
        echo "['" . $row[0] . "', " . $row[1] . "],";
    }
  ?>
]);

// Set Options
const options = {
  title: 'Biểu đồ thống kê Theo Đơn Hàng',
  is3D: true
};

// Draw
const chart = new google.visualization.PieChart(document.getElementById('myChart'));
chart.draw(data, options);

}
</script>
<div class="row_mb21">
          <a href="index.php?act=thongke"><input type="button" value="Xem Chi Tiêt"></a>
        </div>
</body>