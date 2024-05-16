<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // 1 them ket noi 
        include_once __DIR__ . '/../connect.php';

        // 2 goi truy van
        $sql = "SELECT * FROM nhasanxuat;"    ;

        // 3 yeu cau thuc thi se co mot khoi DL
       $data =  mysqli_query($connect,$sql);

       // Phan tach DL thanh mang
       $arrDSLoaiSP = [];
       while($row = mysqli_fetch_array($data, MYSQLI_ASSOC)) {
                            //  ten ,            kieu lay
            $arrDSLoaiSP[] = array(
                'nsx_ma' => $row['nsx_ma'],
                'nsx_ten' => $row['nsx_ten'],
                'nsx_mota' => $row['nsx_mota'],
            ); 
       }
       //var_dump($arrDSLoaiSP);
    ?>
    <table border="1" >
       <tr>
            <th>Ma NSX</th>
            <th>Ten NSX</th>
            <th>Mo ta</th>
            <th>Hành động</th>
       </tr>
       <?php foreach($arrDSLoaiSP as $nsx): ?>
       <tr>
        <td><?=$nsx['nsx_ma'];?></td>
        <td><?=$nsx['nsx_ten']; ?></td>
        <td><?=$nsx['nsx_mota'];?></td>
        <td>
            <a href="./update.php?id=<?= $nsx['nsx_ma']?>">Sửa</a>
            <a href="./delete.php?id=<?= $nsx['nsx_ma']?>">Xoá</a>
            <!-- Lấy id để loại sản phậm -->
        </td>
       </tr>
       <?php endforeach; ?>
    </table>

    <a href="./add.php">Thêm</a>
    <a href="./delete.php">Xoá</a>
</body>
</html>