<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1> update php</h1>

<?php
include_once(__DIR__ .'/../dbconnect.php');

$chuyenkhoan='Chuyển khoản bằng ví momo';
$sql=<<<EOT
    update  `hinhthucthanhtoan` set httt_ten='$chuyenkhoan' where httt_ma=2

EOT;




$result=mysqli_query($conn, $sql);

?>

    
</body>
</html>