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
        include_once __DIR__ . '/connect.php';

        // 2 goi truy van
        $sql = "SELECT * FROM loaisanpham;"    ;

        // 3 yeu cau thuc thi se co mot khoi DL
       $data =  mysqli_query($connect,$sql);

       // Phan tach DL thanh mang
       $arrDSLoaiSP = [];
       while($row = mysqli_fetch_array($data, MYSQLI_ASSOC)) {
                            //  ten ,            kieu lay
            $arrDSLoaiSP[] = array(
                'lsp_ma' => $row['lsp_ma'],
                'lsp_ten' => $row['lsp_ten'],
                'lsp_mota' => $row['lsp_mota'],
            ); 
       }
       //var_dump($arrDSLoaiSP);
    ?>
    <table border="1" >
       <tr>
            <th>Ma LSP</th>
            <th>Ten LSP</th>
            <th>Mo ta</th>
       </tr>
       <?php foreach($arrDSLoaiSP as $lsp): ?>
       <tr>
        <td><?=$lsp['lsp_ma'];?></td>
        <td><?=$lsp['lsp_ten']; ?></td>
        <td><?=$lsp['lsp_mota'];?></td>
       </tr>
       <?php endforeach; ?>
    </table>
</body>
</html>