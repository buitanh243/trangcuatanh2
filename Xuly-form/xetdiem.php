<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="xulydiem.php" method="post" name="xetdiem"  >
        <h1>Xét điểm</h1>
        <label for="">Nhập tên </label><input type="text" name="ten"><br>
        <label for="">Giới tính </label>
            <!-- đặt value để phân biệt -->
            <input type="radio" name="gioitinh" id="nam" value="1" checked ><label for="">Nam</label>
            <input type="radio" name="gioitinh" id="nu" value="2"><label for="">Nữ</label><br>
            
        <label for="">Nhập điểm </label ><input type="text" name="diem" id=""><br>
        <input type="submit" name="guidiem" value="Gửi">
    </form>
    
</body>
</html>