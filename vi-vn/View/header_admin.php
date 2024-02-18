<div class=" mb-5">
    <header class="row no-gutters ">
        <!-- nav san pham -->
        <section class="col-12" style="height:40px;">
            <div class="col-12 ">

                <div class="row">

                    <!-- test -->
                    <nav class="navbar navbar-expand-sm bg-dark navbar-light w-100 justify-content-between ">
                        <!-- Brand -->
                        <a href="index.php?act=sanpham_admin&action=hanghoa"
                            href="index.php?act=sanpham_admin&action=hanghoa" class="navbar-brand bg-dark"
                            rel="home"><img width="249" height="100"
                                src="https://www.recknstudios.com/wp-content/uploads/2018/11/frank-logo-cs6-01.png"
                                style="width:100px;height:50px"></a>

                        <!-- Links -->
                     
                        <ul class="navbar-nav">
                            <li class="nav-item">

                            </li>
                            <!-- Quản trị Doanh Mục -->
                        
                            <li class="nav-item dropdown"style="right:550px;" >
                      
                                <a class="nav-link dropdown text-white" href="#" id="navbardrop "
                                    data-toggle="dropdown" >
                                    Quản Trị Doanh Mục
                                </a>
                                <div class="dropdown-menu" >
                                    <a class="dropdown-item" href="index.php?action=loaisp&act=sanpham_admin">Loại Sản
                                        Phẩm</a>
                                    <a class="dropdown-item" href="index.php?act=sanpham_admin&action=hanghoa">Sản
                                        Phẩm</a>
                                    <a href="index.php?act=hoadon_admin&action=hoadon" class="dropdown-item"
                                        href="#">Hóa Đơn</a>
                                </div>
                            </li>
                            <!-- Thống kê -->
                            <li class="nav-item dropdown">
                                <!-- <a class="nav-link dropdown-toggle text-white" href="#" id="navbardrop" data-toggle="dropdown">
                                Thống Kê
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Sản Phẩm bán được nhiều Nhất</a>
                                <a class="dropdown-item" href="#">Sản Phẩm chưa được giao</a>
                                <a class="dropdown-item" href="#">Sản phẩm bán ít nhất</a>
                                <a class="dropdown-item" href="">Thống kê</a>
                            </div> -->
                            </li>
                            <!-- Báo cáo -->
                            <li class="nav-item dropdown">
                                <!-- <a class="nav-link dropdown-toggle text-white" href="#" id="navbardrop" data-toggle="dropdown">
                                Báo Cáo
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Tháng</a>
                                <a class="dropdown-item" href="#">Quý</a>
                                <a class="dropdown-item" href="#">Năm</a>
                            </div> -->
                            </li>
                            <!-- Báo cáo Tồn kho -->
                            <li class="nav-item">
                                <!-- <a class="nav-link text-white" href="#">Tồn Kho</a> -->
                            </li>
                        </ul>
                        <ul class="navbar-nav ">

                            <li class="nav-item float-left">

                                <!--  -->
                                <div class="dropdown">
                                    <a class="dropdown-toggle" type="button" id="dropdownMenuButton "
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="text-success"  >
                                            <?php echo "Hello! " . $_SESSION['admin_name'] ?>
                                        </span>
                                    </a>
                                    <div class="dropdown-menu text-center" aria-labelledby="dropdownMenuButton">
                                        <a class="nav-link text-dark"
                                            href="index.php?act=login_admin&&action=dangxuat ">Đăng Xuất</a>
                                        <!-- <a class="nav-link text-dark" href="index.php?act=login_admin&&action=tdmk"> Đổi
                                            Mật Khẩu</a> -->

                                    </div>
                                </div>
                                <!--  -->
                            </li>
                        </ul>

                    </nav>
                    <!-- end test -->
                </div>
            </div>
        </section>
    </header>
</div>

<!-- dang ky -->