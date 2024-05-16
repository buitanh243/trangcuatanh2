<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Thêm mới nhà sản xuất</h1>
    <form action="" name="themmoi" method="post" >
    <label for="">Tên nhà sản xuất </label><input type="text" name="nsx_ten">
    <label for="">Mô tả </label><input type="text" name="mota">
    <input type="submit" name="add" value="Thêm">
    <a href="./index.php">Quay về</a>
    </form>
    
    <?php 
    if(isset($_POST['add'])) {
        include_once __DIR__.'/../connect.php';
        $nsx_ten = $_POST['nsx_ten'];
        $nsx_mota = $_POST['mota'];
        $sql = "INSERT INTO nhasanxuat(nsx_ten,nsx_mota) VALUES ('$nsx_ten','$nsx_mota');";

        mysqli_query($connect,$sql);
        echo '<script>location.href = "index.php"</script>';

    }
    ?>
</body>
</html>