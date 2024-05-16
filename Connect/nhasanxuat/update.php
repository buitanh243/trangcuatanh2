<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
        include_once __DIR__.'/../connect.php';

        $id=$_GET['id']; //tuỳ vào key đặt bên index

        //lấy dữ liệu cũ
        $sql_old = "SELECT * FROM nhasanxuat WHERE 
        nsx_ma = $id;";
        $data_old = mysqli_query($connect,$sql_old);
        //Phân tách DL
        $arr_old = [];
        $arr_old = mysqli_fetch_array($data_old, MYSQLI_ASSOC);
?>
    <h1>Chỉnh sửa nội dung</h1>
    <form action="" method="post" name="update">
        <input type="text" name="nsx_ten" id="" value="<?= $arr_old['nsx_ten']?>">
        <input type="text" name="nsx_mota" id="" value="<?= $arr_old['nsx_mota']?>">
        <input type="submit" value="Lưu" name="luu">
    </form>
    <?php
        if(isset($_POST['luu'])) {
            include_once __DIR__.'/../connect.php';

            //chuan bi cau lenh
            $nsx_ma = $_GET['id'];
            $nsx_ten = $_POST['nsx_ten'];
            $nsx_mota = $_POST['nsx_mota'];
            
            $sql = "UPDATE nhasanxuat SET nsx_ten = '$nsx_ten',nsx_mota = '$nsx_mota' WHERE nsx_ma = $nsx_ma;";

            mysqli_query($connect,$sql);
            echo '<script>location.href = "index.php"</script>';    
        }
    ?>

    
    
</body>
</html>