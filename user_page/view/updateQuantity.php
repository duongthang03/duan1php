<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Lấy dữ liệu từ ajax đẩy lên
    $id_tour = $_POST['id'];
    $newQuantity = $_POST['quantity'];
    // $newDate = $_POST['date'];

    // Kiểm giỏ hàng có tồn tại hay không
    if (!empty($_SESSION['giohang'])) {
        // Kiểm tra sản phẩm đã có trong giỏ hàng chưa
        $index = array_search($id_tour, array_column($_SESSION['giohang'], 'id'));

        // Nếu sản phẩm tồn tại thì cập nhật lại số lượng
        if ($index !== false) {
            $_SESSION['giohang'][$index]['quantity'] = $newQuantity;
            // $_SESSION['giohang'][$index]['date'] = $newDate;
            echo '<script>window.alert("")</script>';
        } else {
            echo 'Sản phầm ko tồn tại trong giỏ hàng';
        }
    }

} else {
    echo 'Yêu cầu không hợp lệ';
}
?>