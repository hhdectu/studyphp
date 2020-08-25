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
   select httt_ma, httt_ten from `hinhthucthanhtoan`

EOT;




$result=mysqli_query($conn, $sql);

$data=[];
while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
    $data[]=array('ma' => $row['httt_ma'], 'ten' => $row['httt_ten'],);
}

?>
<table border="1">

<tr>
<th>Ma TT</th>

<th>Ten TT</th>
</tr>
<?php
foreach($data as $tt):?>
<tr>
<td><?php echo  $tt['ma']?></td>
<td><?php echo  $tt['ten']?></td>
</tr>
<?php endforeach;?>  

</table>

    
</body>
</html>