<?php 
    // kết nối đến DB
    $connect = mysqli_connect('localhost','root','','salomon');
                        //   địa chỉ,tài khoản, mật khẩu, tên server
    if ($connect==true) {
        echo 'Kết nối thành công';
    }
    else echo 'Kết nối thất bại';


?>