<?php 
    $act = "";
    if(isset($_GET['action'])){
        $act=$_GET['action'];
    }
    switch($act){
        case "dangnhap_user":
            include "./View/$act.php";
            break;
        case "dangnhap_admin":
             include "./View/$act.php";
             break;
         case "dangnhap_act":
            if(isset($_POST['email']) && isset($_POST['pass'])){
                $dn= new user();
                $result=$dn->dangnhap($_POST['email'],md5($_POST['pass']));
                // echo "<script>alert($result)</script>";
                if($result){
                    $_SESSION['id']=$result['id'];
                    $_SESSION['ten']=$result['hoten'];
                    echo "<script>alert('Đăng nhập thành công')</script>";
                    // echo '<meta http-equiv="refresh" content="0; url=./index.php?act=trangchu"/>';
                    echo "<script type='text/javascript'>window.top.location='./index.php?act=trangchu';</script>";

                }else{
                    echo "<script>alert('Đăng nhập không thành công')</script>";
                    include "./View/dangnhap_user.php";
                }
            }
            break;   
          case "dangxuat":
            if($_SESSION['id']){
                unset($_SESSION['id']);  
                unset($_SESSION['ten']); 
                // echo '<meta http-equiv="refresh" content="0; url=./index.php?act=trangchu"/>';
                echo "<script type='text/javascript'>window.top.location='./index.php?act=trangchu';</script>";

            }
             break;

            case "tdmk":
                    if(isset($_SESSION['mkmoiErr'])||isset($_SESSION['mkcuErr'])||isset($_SESSION['nlmkmoiErr'])){
                        unset($_SESSION['mkmoiErr']);
                        unset($_SESSION['mkcuErr']);
                        unset($_SESSION['nlmkmoiErr']);
                    }
                if(isset($_POST['mkcu']) && isset($_POST['mkmoi'])&& isset($_POST['nlmkmoi'])){
                        $us = new user();
                        $result=$us->validateTdmk($_POST['mkcu'],$_POST['mkmoi'],$_POST['nlmkmoi']);
                        if($result==true){
                           $kq=$us->thaydoimatkhau($_SESSION['id'],md5($_POST['mkmoi']));
                              echo "<script>alert('Thay Đổi Mật Khẩu Thành Công')</script>";
                            include "./View/dangnhap_user.php";
                            return;
                        }
                }
                include "./View/tdmk.php";
                break;

    }

?>