<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form name ="frmdangnhap" action="xulytimkiem.php" method="POST" id="frmxulydangnhap">

Ten san pham:<input type="text" name="tensanpham" id="tensanpham"/></br>

Loai san pham:</br>
<input type="checkbox" name="check_loaisp[]" id="check_loaisp[]" value="1"/>May tinh bang</br>
<input type="checkbox" name="check_loaisp[]" id="check_loaisp[]" value="2"/>may tinh xach tay</br>
<input type="checkbox" name="check_loaisp[]" id="check_loaisp[]" value="3"/>Dien thoai</br>
<input type="checkbox" name="check_loaisp[]" id="check_loaisp[]" value="4"/>Lnh phu kien</br>
Khuyen mai:</br>
<input type="radio" name="radioKM" id="radio-1" value="1"/>Khuyen mai trung thu</br>
<input type="radio" name="radioKM" id="radio-2" value="2"/>Khuyen mai sinh nhat</br>

Dang Ky:<input type="submit" name="dangky" id="dangky"/></br>

</form>

    
</body>
</html>