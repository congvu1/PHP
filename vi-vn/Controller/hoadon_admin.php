<?php 
$act="hoadon";
if(isset($_GET['action'])){
    $act=$_GET['action'];
}
switch($act){
        case "hoadon":
        include "./View/Admin/hoadon.php";
        break;
        case "cthd":
        include "./View/Admin/chitiet_hoadon.php";
        break;

}
?>