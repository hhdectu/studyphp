<?php
$conn=mysqli_connect ('localhost','root','','salomon') or die('khong ket noi duoc');

$conn->query("SET NAME 'utf8mb4'");
$conn->query("SET CHARACTER SET UTF8MB4");
$conn->query("SET SESSION collation_connecttion='utf8mb4_unicode_ci'");

?>