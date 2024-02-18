<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>


<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat&display=swap');
   /* text on shop */
   sup{
    padding: 2px 7px;
    border-radius: 10px;
    -moz-border-radius: 20px;
    -webkit-border-radius: 20px;
    border: none;
    background: red;
    color: #fff;
    cursor: pointer;
            }
    /* text on shop */

    * {

        box-sizing: border-box;
        font-family: 'Montserrat', sans-serif;
    }

    body {
        background: #e0dbef;
        


    }

    .wrapper {

  
        display: flex;
        justify-content: center;
        align-items: center;

    }

    .search_box {
        top : 7.5px;
        right: -300px;
        background: #191919;
        position: relative;
        padding: 4px;
        border-radius: 40px;
        display: flex;

    }

    .search_box .search_btn {
        width: 40px;
        height: 4   0px;
        border-radius: 100%;
        background: white;
        display: flex;
        justify-content: center;
        align-items: center;
        color: black;
        margin-right: 9px;
        cursor: pointer;
    }

    .search_box .input_search {
        outline: none;
        border: 0;
        background: white;
        border-radius: 40px;
        padding: 15px 20px;
        width: 500px;
        height: 40px;
        color: black;
    }

    ::placeholder {
        color: black;
    }

    ::-webkit-input-placeholder {
        color: black;
    }

    :-ms-input-placeholder {
        color: #fff;
    }
</style>



<header>
    <div class="header">

        <div class="container-fluid">

            <div class="row">

                <div class="menu">
                    <a href="index.php?act=trangchu" class="custom-logo-link" rel="home"><img width="249" height="100"
                            src="https://www.recknstudios.com/wp-content/uploads/2018/11/frank-logo-cs6-01.png"
                            sizes="(max-width: 249px) 100vw, 249px"></a>

                </div>
                <div class="giohang">

                    <!-- <a href=".bd-example-modal-lg" data-toggle="modal">Giỏ Hàng <i class="fa fa-shopping-cart"></i> </a> -->

                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <p style="background-color:black;">
                            <a class="dropdown-item" href="index.php?act=dangnhap_user" style="color:blue">User</a>
                            <a class="dropdown-item" href="index.php?act=dangnhap_admin">Admin</a>
                        </p>
                    </div>


                </div>
            </div>
        </div>

</header>
<counter>
    <nav class=" navbar navbar-expand-sm navbar-light bg-light ">

        <a class="navbar-brand" href=""></a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
            aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">

                <li class="nav-item active ml-2 mr-2 ">
                    <a class="nav-link"style='font-size:34px' href="index.php?act=trangchu"> <i class="fas fa-home"style='font-size:34px'></i>FRANK</a>

                </li>
                <center>
                    <a>
                        <form action="index.php?action=search&act=sanpham" method="post">


                            <div class="search_box">
                                <input type="search" style="display:none;" name="search" class="form-control ip-search"
                                    autocomplete="off" placeholder="Search" />

                                <input type="text" autocomplete="off" class="input_search" name="search"
                                    placeholder="Mời bạn tìm sản phẩm..">
                                <button type="submit" class="search_btn"><i class="fas fa-search"></i></button>
                            </div>


                    </a>
                </center>


            </ul>
            <ul class="navbar-nav  mt-0 mt-lg-0">

                <p style="color: #9e9e9e; margin-top: 10px; margin-left: 0px;"> Hello! </p>



                <li class="nav-item dropdown">
                    <a>
                        <?php
                        if (!isset($_SESSION['id'])) {
                            ?>
                            <a class="nav-link" style="color: black;" href="" id="dropdownId" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false"><i class='far fa-user-circle'
                                    style='font-size:26px'></i></a>
                        <?php }
                        ; ?>
                        <div class="dropdown-menu" style="left:-83px" aria-labelledby="dropdownId">
                            <a class="dropdown-item" href="index.php?act=login&&action=dangnhap_user">User</a>
                            <a class="dropdown-item" href="index.php?act=login_admin&&action=dangnhap_admin">Admin</a>
                        </div>
                        <a>
                            <?php if (isset($_SESSION['id'])) { ?>
                    <li class="nav-item " style="position:none!important;">
                        <a class="nav-link" style="color: black;" href="" id="dropdownId" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['ten'] ?> <img
                                src="https://gocbao.net/wp-content/uploads/2020/10/avatar-trang-4.jpg"
                                style="width:30px;height:30px;border-radius:50%" alt=""></a>

                        <div class="dropdown-menu" style="position:absolute;left:85%;top:100%;"
                            aria-labelledby="dropdownId">

                            <a style="color: #9e9e9e; margin-top: 10px; margin-left: 0px;" class="dropdown-item"
                                href="index.php?act=login&&action=dangxuat">Đăng xuất</a>
                            <a style="color: #9e9e9e; margin-top: 10px; margin-left: 0px;" class="dropdown-item"
                                href="index.php?act=sanpham&&action=yeuthich">Danh Sách yêu Thích</a>
                        </div>
                    </li>
                    </a>
                <?php }
                            ; ?>
                </a>
                <li>


                    </form>

                </li>


                <li>
                    <a class="nav-link" href="index.php?act=giohang&&action=them" style="color:black;">
                        <i class='fas fa-shopping-cart' style='font-size:34px'>
                         <sup style='font-size:12px'>
                                <?php if (isset($_SESSION['cart']) && count($_SESSION['cart']) >= 1) {
                                    //   echo '<meta http-equiv="refresh" content="0; url=./index.php?act=giohang"/>';
                                
                                    echo count($_SESSION['cart']);
                                } ?>
                            </sup>
                        </i>

                    </a>

                </li>
            </ul>
        </div>
    </nav>
    </div>
</counter>




<div class="counter"></div>
<script>    
</script>