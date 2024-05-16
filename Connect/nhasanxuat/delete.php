
    <?php
        include_once __DIR__.'/../connect.php';

        $id=$_GET['id']; //tuỳ vào key đặt bên kid]
        $sql = "DELETE FROM nhasanxuat WHERE nsx_ma = $id;";

        mysqli_query($connect,$sql);

        // Chuyen huong ve index
        echo '<script>location.href = "index.php"</script>';
    ?>