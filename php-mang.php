<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MANG</title>
</head>

<body>
    <?php 
    $sv1 = array (
        'sv_ma' => 'SV001',
        'sv_hoten'=> 'Nguyen Van A',
        'sv_diem'=> '10'
    );
    $sv2 = array (
        'sv_ma' => 'SV002',
        'sv_hoten'=> 'Nguyen Thi B',
        'sv_diem'=> '9'
    );
    $sv3 = array (
        'sv_ma'=> 'SV003',
        'sv_hoten' =>  'Tran Van C',
        'sv_diem'  =>   '8'          
    );
    //Cần một mạng bao quanh các mảng con để trình diễn - Cách đơn gian nhất
    $ds_sinhvien = array (
        $sv1, $sv2, $sv3
    );
   ?>
    <!-- Bắt đầu trình diễn dữ liệu -->
    <table border="1">
        <tr>
            <th>Mã</th>
            <th>Họ tên</th>
            <th>Điểm</th>
        </tr>
        <?php 
        foreach ($ds_sinhvien as $key => $sv): 
            // dữ liệu sẽ được show theo số con của array
    ?>
        <tr>
            <td><?= $sv['sv_ma'] ?></td>
            <td><?php echo $sv['sv_hoten'] ?></td>
            <td><?php echo $sv['sv_diem']?></td>
        </tr>
        <?php endforeach; ?>
    </table>

    <?php 
    $ngaytrongtuan = array (
        'ntt_t2'=> 'Thứ 2',
        'ntt_t3'=> 'Thứ 3',
        'ntt_t4'=> 'Thứ 4',
        'ntt_t5'=> 'Thứ 5',
        'ntt_t6'=> 'Thứ 6',
        'ntt_t7'=> 'Thứ 7',
        'ntt_cn'=> 'Chủ nhật',
    );
   ?>
    <table>
        <?php foreach($ngaytrongtuan as $key => $ntt): ?>
        <tr>
            <th><?= $ntt ?></th>
        </tr>
        <?php endforeach ?>
    </table>
</body>

</html>