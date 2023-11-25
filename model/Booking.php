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
 function createOrder($recieve, $return, $maPhong, $userid,$donGia)
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
        $tongtien=(($year2*365 +$month2*30+$day2)-($year1*365 +$month1*30+$day1))*$donGia;
        $sql = "INSERT INTO donhang (ngayNhan, ngayTra, maPhong, maKhachHang, tongTien)
        VALUES ('$newRecieve', '$newReturn', $maPhong, $userid,$tongtien)";
        return pdo_execute($sql);
    }
?>
