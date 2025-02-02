<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Lấy dữ liệu từ ajax đẩy lên
    $id_tour = $_POST['id'];

    // Kiểm giỏ hàng có tồn tại hay không
    if (!empty($_SESSION['giohang'])) {
        // Kiểm tra sản phẩm đã có trong giỏ hàng chưa
        $index = array_search($id_tour, array_column($_SESSION['giohang'], 'id'));

        // Nếu sản phẩm tồn tại thì cập nhật lại số lượng
        if ($index !== false) {
            // Xóa sản phẩm khỏi giỏ hàng
            unset($_SESSION['giohang'][$index]);
            $_SESSION['giohang'] = array_values($_SESSION['giohang']);
        } else {
            echo 'Sản phầm ko tồn tại trong giỏ hàng';
        }
    }

} else {
    echo 'Yêu cầu không hợp lệ';
}
?>