<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1> insert php</h1>

<?php
include_once(__DIR__ .'/../dbconnect.php');

$chuyenkhoan='Chuyen ATM';
$sql="insert into `hinhthucthanhtoan` (httt_ten) values('$chuyenkhoan')";
mysqli_query($conn, $sql);

?>

    
</body>
</html>