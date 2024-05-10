<?php 
    // $username = $_POST['username'];
    // echo 'Tai khoan ' .$username .'<br>';
    // $matkhau = $_POST['password'];
    // echo 'Mat khau '.$matkhau;
    $connect = mysqli_connect('localhost','root','','salamon') or die ('Bị Lỗi');

    if (isset($_POST['dangnhap'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT kh_tendangnhap,kh_matkhau FROM khachhang WHERE $username=kh_tendangnhap && $password=kh_matkhau; ";

        if ($username == 'admin' and $matkhau == '123') 
        echo ' <span style="color:blue;" ><br>Dang nhap Thanh cong</span> ';
    else echo ' <span style="color:red;" ><br>Dang nhap That bai</span>  ';
?>
    }
    //kiem tra tai khoan
    
    