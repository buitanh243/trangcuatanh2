<?php 
    $username = $_POST['username'];
    echo 'Tai khoan ' .$username .'<br>';
    $matkhau = $_POST['password'];
    echo 'Mat khau '.$matkhau;

    //kiem tra tai khoan

    if ($username == 'admin' and $matkhau == '123') 
        echo ' <span style="color:blue;" ><br>Dang nhap Thanh cong</span> ';
    else echo ' <span style="color:red;" ><br>Dang nhap That bai</span>  ';
?>