<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form name ="frmdangnhap" action="xulydangky.php" method="POST" id="frmxulydangnhap">
full name:<input type="text" name="fullname" id="fullname"/></br>
Ten tai khoan:<input type="text" name="username" id="username"/></br>
password:<input type="text" name="password" id="password"/></br>
Tuy chon:

<input type="checkbox" name="checkKhoaHoc[]" id=" checkKhoaHoc[]-1" valule="1"/>Hoc online</br>
<input type="checkbox" name="checkKhoaHoc[]" id=" checkKhoaHoc[]-2" valule="2"/>Hoc online</br>
Dang Ky:<input type="submit" name="dangky" id="dangky"/></br>

</form>
    
</body>
</html>