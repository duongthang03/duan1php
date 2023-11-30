<?php
session_start();
// Kiểm tra xem có tồn tại mảng giỏ hàng hay không.
if (!isset($_SESSION['giohang'])) {
    // Nếu không có thì đi khởi tạo
    $_SESSION['giohang'] = [];
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Lấy dữ liệu từ ajax đẩy lên
    $id_tour = $_POST['id'];
    $tenkhuvuichoi = $_POST['name'];
    $gia = $_POST['price'];
    // $ngaydat = '';
    // echo $ngaydat;
    // $_SESSION['giohang'] = [];
    // Kiểm tra sản phẩm đã có trong giỏ hàng chưa
    $index = array_search($id_tour, array_column($_SESSION['giohang'], 'id'));
    // array_column() trích xuất một cột từ mảng giỏ hàng và trả về một mảng chứ giá trị của cột id
    if ($index !== false) {
        $_SESSION['giohang'][$index]['quantity'] += 1;
        // $_SESSION['giohang'][$index]['date'] += 1;
    } else {
        // Nếu sản phẩm chưa tồn tại thì thêm mới vào giỏ hàng
        $product = [
            'id' => $id_tour,
            'name' => $tenkhuvuichoi,
            'price' => $gia,
            'quantity' => 1,
            // 'date' => $ngaydat
        ];
        $_SESSION['giohang'][] = $product;
    }
    // Trả về số lượng sản phẩm của giỏ hàng
    echo count($_SESSION['giohang']);
} else {
    echo 'Yêu cầu không hợp lệ';
}
?>