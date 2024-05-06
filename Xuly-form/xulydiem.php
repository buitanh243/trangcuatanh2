<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .lv1 {color: red;}
        .lv2 {color: blue;}
        .lv3 {color: gray;}
        .lv3 {color: yellow;}
        .lv4 {color: orange;}
        .lv5 {color: brown;}
        .lv0 {color: aqua;}

        table {
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <?php
    $ten = $_POST['ten'];
    //xét mặc định nếu ko chọn
    $gioitinh = isset( $_POST['gioitinh']) ? $_POST['gioitinh'] : '1';
    $diem = $_POST['diem'];
    
    

    $ketqua;

    if($diem >0 &&$diem<=3) 
        $ketqua = '<span class="lv1";>Rớt</span>';
    else if($diem >3 && $diem<=5) 
        $ketqua = '<span class="lv2";>Trung bình</span>';
    else if($diem >5 && $diem<=7) 
        $ketqua = '<span class="lv3";>Khá</span>';
    else if($diem >7 && $diem<=8) 
        $ketqua = '<span class="lv4";>Giỏi</span>';
    else if($diem >8 && $diem<=10) 
        $ketqua = '<span class="lv5";>Xuất sắc</span>';
    else 
        $ketqua = '<span class="lv0";>Nhập sai điểm!!!</span>';
    ?>
    <h1>Kết quả xét tốt nghiệp</h1>
    <table>
        <tr>
            <th>
                Tên
            </th>
            <th>
                Giới tính
            </th>
            <th>
                Điểm
            </th>
        </tr>
        <tr>
            <td><?= $ten ?></td>
            <td><?php  if ($gioitinh ==1) { 
                echo 'Nam';
            } else echo 'Nữ';
             ?></td>
            <td><?= $diem ?></td>
        </tr>
    </table>
    <h2>Kết quả là: <?= $ketqua ?></h2>
</body>
</html>


