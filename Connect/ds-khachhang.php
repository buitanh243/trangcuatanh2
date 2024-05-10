<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>DANH SACH KHACH HANG</h1>
    <?php 
        include_once __DIR__ . '/connect.php';

        $sql = " SELECT kh_ten,kh_diachi FROM khachhang; ";

        $data = mysqli_query($connect,$sql);

        $arrDSkhachhang = [];
        while($row = mysqli_fetch_array($data, MYSQLI_ASSOC)) {
            $arrDSkhachhang[] = array (
                'kh_ten' => $row['kh_ten'],
                'kh_diachi' => $row['kh_diachi'],
            );
        }
    ?>

    <ul>
        <?php foreach($arrDSkhachhang as $kh) : ?>
        <li>
            <?= $kh['kh_ten'];?>
        </li>
        <li>
            <? $kh['kh_diachi'];?>
        </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>