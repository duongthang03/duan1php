<?php
// session_start();
function loadall_nguoidung()
{
    $sql = "SELECT * FROM nguoidung 
                ORDER BY id_nguoidung DESC";
    $list_nguoidung = pdo_query($sql);
    return $list_nguoidung;
}
function loadone_nguoidung($id_nguoidung)
{
    $sql = "SELECT * FROM nguoidung 
                WHERE id_nguoidung = " . $id_nguoidung;
    $list_nguoidung = pdo_query_one($sql);
    return $list_nguoidung;
}
function update_nguoidung($id_nguoidung, $username, $password, $email, $sdt, $role)
{
    $sql = "UPDATE `nguoidung` SET `id_nguoidung` = '{$id_nguoidung}', `username` = '{$username}', `password` = '{$password}', `email` = '{$email}', `sdt` = '{$sdt}', `role` = '{$role}'  WHERE `nguoidung`.`id_nguoidung` = $id_nguoidung";
    pdo_execute($sql);
}
function delete_nguoidung($id_nguoidung)
{
    $sql = "DELETE FROM nguoidung 
                WHERE id_nguoidung=" . $id_nguoidung;
    pdo_execute($sql);
}
//dang ky
function insert_nguoidung($username, $password, $email, $sdt)
{
    $sql = "INSERT INTO nguoidung (username,password,email,sdt) VALUES ('$username', '$password', '$email', '$sdt')";
    pdo_execute($sql);
}

function checkuser($username, $password)
{
    $sql = "SELECT * FROM nguoidung WHERE username='" . $username . "' AND password='" . $password . "' ";
    $sp = pdo_query_one($sql);
    return $sp;
}
function insert_nguoidung2($username, $password, $email, $sdt, $role)
{
    $sql = "INSERT INTO `nguoidung` (`username`, `password`, `email`, `sdt`, `role`) VALUES ('$username', '$password', '$email', '$sdt', '$role')";
    pdo_execute($sql);
}

function dangnhap($username, $password)
{
    $sql = "SELECT * FROM nguoidung WHERE username = '$username' and password = '$password'";
    $dangnhap = pdo_query_one($sql);

    // if ($dangnhap != false) {
    //     $_SESSION['username'] = $username;
    // } else {
    //     return "Thông tin tài khoản sai";
    // }
    return $dangnhap;
}

function dangxuat()
{
    if (isset($_SESSION['username'])) {
        unset($_SESSION['username']);
    }
}

function sendMail($email)
{
    $sql = "SELECT * FROM nguoidung WHERE email='$email'";
    $nguoidung = pdo_query_one($sql);

    if ($nguoidung != false) {
        sendMailPass($email, $nguoidung['user'], $nguoidung['pass']);

        return "gui email thanh cong";
    } else {
        return "Email bạn nhập ko có trong hệ thống";
    }
}

function sendMailPass($email, $username, $pass)
{
    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';

    $mail = new PHPMailer\PHPMailer\PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = PHPMailer\PHPMailer\SMTP::DEBUG_OFF;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host = 'sandbox.smtp.mailtrap.io';                     //Set the SMTP server to send through
        $mail->SMTPAuth = true;                                   //Enable SMTP authentication
        $mail->Username = '6bda0a4c1abcfc';                     //SMTP username
        $mail->Password = '4430da6c8b9967';                               //SMTP password
        $mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
        $mail->Port = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('duanmau@example.com', 'DuAnMau');
        $mail->addAddress($email, $username);     //Add a recipient

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Nguoi dung quen mat khau';
        $mail->Body = 'Mau khau cua ban la' . $pass;

        $mail->send();
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>