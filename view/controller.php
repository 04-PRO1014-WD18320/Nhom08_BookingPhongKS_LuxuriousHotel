<?php
require_once 'Booking.php';

class Controller {
    private $bookingModel;

    public function __construct($conn) {
        $this->bookingModel = new Booking($conn);
        }

    public function addBooking($data) {
        // Xử lý dữ liệu đầu vào nếu cần
        // Gọi phương thức từ model để thêm đặt phòng
        return $this->bookingModel->createBooking($data['id'], $data['bill_id'], $data['product_id'], $data['check_in_date'], $data['check_out_date'], $data['total_money'], $data['full_name'], $data['email'], $data['address'], $data['phone_number']);
    }
}
?>
