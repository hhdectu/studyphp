<?php 
$fullname=$_POST['fullname'];
$username=$_POST['username'];
$password=$_POST['password'];
//xu ly checkbox
//khai bao gia tri default la array rong
$tuychon=[];
$tuychon=$_POST['checkKhoaHoc[]'];



if(isset($_POST['checkKhoaHoc[]']){
    $tuychon=$_POST['checkKhoaHoc[]'];
}
echo "<ul>";
echo "<li> full name la: {$fullname}</li";
echo "<li> user name la: {$username}</li";
if(isset($_POST['checkKhoaHoc[]']){

    $chuoituychon=implode(',',$tuychon);
    echo "<li> tuy chon la: {$chuoituychon}</li";
}

echo "</ul>";


?>