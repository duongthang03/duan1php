<?php
function insert_nguoidung($username, $password ,$email, $sdt){
    $sql = "INSERT INTO nguoidung(username,passsword,email,sdt) VALUES ('$username', '$password', '$email', '$sdt')";
    pdo_execute($sql);
}
?>