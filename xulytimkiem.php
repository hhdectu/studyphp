<?php 
$fullname=$_POST['tensanpham'];

//xu ly checkbox
//khai bao gia tri default la array rong
$loaisp=[];

//xu ly radio
//khai bao gia tri default la array rong
$khuyenmai=[];
$khuyenmai=$_POST['radioKM'];


if(isset($_POST['check_loaisp'])){
    $loaisp=$_POST['check_loaisp'];
}


if(isset($_POST['radioKM'])){
    $khuyenmai=$_POST['radioKM'];
}



echo "<ul>";
echo "<li> full name la: {$fullname}</li";

if(isset($_POST['check_loaisp'])){

    $chuoiloaisp=implode(',',$loaisp);
    echo "<li> loai san pham la: {$chuoiloaisp}</li";
}

echo "<li> khuyen mai la: {$khuyenmai}</li";


echo "</ul>";


?>