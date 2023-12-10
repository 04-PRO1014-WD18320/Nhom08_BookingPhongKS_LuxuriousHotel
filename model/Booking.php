<?php
class Booking
{
    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function createBooking($id, $bill_id, $product_id, $check_in_date, $check_out_date, $total_money, $full_name, $email, $address, $phone_number)
    {
        $sql = "INSERT INTO bookings (id, bill_id, product_id, check_in_date, check_out_date, total_money, full_name, email, address, phone_number)
                VALUES ('$id', '$bill_id', '$product_id', '$check_in_date', '$check_out_date', '$total_money', '$full_name', '$email', '$address', '$phone_number')";

        if ($this->conn->query($sql) === TRUE) {
            return true;
        } else {
            return false;
        }
    }
}

function checkAvailability($recieve, $return, $maPhong)
{
    $newRecieve = date('Y-m-d', strtotime($recieve));
    $newReturn = date('Y-m-d', strtotime($return));

    $sql = "SELECT COUNT(*) AS count FROM donhang WHERE maPhong = $maPhong 
            AND ('$newRecieve' BETWEEN ngayNhan AND ngayTra OR '$newReturn' BETWEEN ngayNhan AND ngayTra)";

    // Đảm bảo bạn đã thay thế pdo_query_one() bằng hàm tương tự trong mã của bạn
    $result = pdo_query_one($sql);

    return $result['count'] == 0; // Trả về true nếu không có lịch trùng, ngược lại trả về false
}
function loadall_donhang(){
    $sql = "select * from donhang order by id desc";
    $listdonhang=pdo_query($sql);
    return $listdonhang;
}
function checkin($id) {
    $currentTime = date('Y-m-d H:i:s'); 
    $sql = "UPDATE donhang SET ngayCheckIn = '$currentTime' WHERE id = '$id'";
    pdo_query($sql);
}
function checkout($id) {
    $currentTime = date('Y-m-d H:i:s'); 
    $sql = "UPDATE donhang SET ngayCheckOut = '$currentTime' WHERE id = '$id'";
    pdo_query($sql);
}
function delete_donhang($id){
    $sql = "delete  from donhang where id=".$id;
    pdo_execute($sql);
}
function tim_kiem_phong(){
    $sql = "SELECT * FROM donhang WHERE ngayNhan NOT BETWEEN 'ngay_nhan_phong' AND 'ngay_tra_phong' AND ngayTra NOT BETWEEN 'ngay_nhan_phong' AND 'ngay_tra_phong'";
    $timkiem=pdo_query($sql);
    return $timkiem;
}
function createOrder($recieve, $return, $maPhong, $userid, $donGia)
{
    $newRecieve = date('Y-m-d', strtotime($recieve));
    $newReturn = date('Y-m-d', strtotime($return));
    $timestamp1 = strtotime($newRecieve);
    $day1 = date('d', $timestamp1);
    $month1 = date('m', $timestamp1);
    $year1 = date('Y', $timestamp1);
    $timestamp2 = strtotime($newReturn);
    $day2 = date('d', $timestamp2);
    $month2 = date('m', $timestamp2);
    $year2 = date('Y', $timestamp2);
    $tongtien = (($year2 * 365 + $month2 * 30 + $day2) - ($year1 * 365 + $month1 * 30 + $day1)) * $donGia;
    
    // Kiểm tra lịch trùng
    if (!checkAvailability($newRecieve, $newReturn, $maPhong)) {
        echo '<script>alert("Lịch đặt bị trùng. Vui lòng đặt lại!")</script>';
        return false;
    }
    $sql = "INSERT INTO donhang (ngayNhan, ngayTra, maPhong, maKhachHang, tongTien) VALUES ('$newRecieve', '$newReturn', $maPhong, $userid, $tongtien)";
           
    // Đảm bảo bạn đã thay thế pdo_execute_return_lastInsertId() bằng hàm tương tự trong mã của bạn
    return pdo_execute_return_lastInsertId($sql);
}

function checkin($id) {
    $currentTime = date('Y-m-d H:i:s'); 
    $sql = "UPDATE donhang SET ngayCheckIn = '$currentTime' WHERE id = '$id'";
    pdo_query($sql);
}
function checkout($id) {
    $currentTime = date('Y-m-d H:i:s'); 
    $sql = "UPDATE donhang SET ngayCheckOut = '$currentTime' WHERE id = '$id'";
    pdo_query($sql);
}
?>
