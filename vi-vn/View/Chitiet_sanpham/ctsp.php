<link rel="stylesheet" href="../Css.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    .love {
  
        padding: 5px 20px;
        border-radius: 20px;
        -moz-border-radius: 20px;
        -webkit-border-radius: 20px;
        border: none;
        background: crimson;
        color: #fff;
        cursor: pointer;
        text-decoration: none;
    }

    .add {
        text-decoration: none;
        padding: 5px 20px;
        border-radius: 20px;
        -moz-border-radius: 20px;
        -webkit-border-radius: 20px;
        border: none;
        background: black;
        color: #fff;
        cursor: pointer;
    }
</style>
<script>
    function laysize(v) {
        document.getElementById('size').value = v;
    }

</script>
<!-- header -->

<!-- header -->

<!-- CHitietsanpham -->

<?php

$bl = new binhluan();
$db = new sanpham();
if (isset($_GET['id'])) {
    $_SESSION['idsp'] = $_GET['id'];
}

$row = $db->getctsp($_SESSION['idsp']);
$result = $bl->getPeopleCmt($row['id'])->fetch();

?>
<form action="index.php?act=giohang&&action=them" method="post">
    <div class="container mb-5 mt-5 ">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-6">
                <img src="./View/Anh/<?php echo $row['img']; ?>" width="100%" alt="">
            </div>
            <div class="col-12 col-md-6 col-lg-6">
                <div class="product-content">
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    <h3 class="product-title">
                        <?php echo $row['tensp'] ?>
                    </h3>
                    <?php if ($result['count(id_sanpham)'] > 0) { ?>
                        <?php
                        $kq = $bl->getrate($row['id']);
                        $rate = $kq->fetch();
                        $lengtRate = ceil($rate['sum(rate)'] / $result['count(id_sanpham)']);
                        for ($rate = 1; $rate <= $lengtRate; $rate++) {
                            ?>
                            <i class="stars text-warning"></i>
                            <?php
                        }
                        ;

                        ?>
                        <a style="font-size: 12px;" style="">
                            (
                            <?php echo $result['count(id_sanpham)']; ?> Đánh Giá)
                        </a>
                    <?php } else { ?>
                        <i class="fa fa-star text-warning"></i>
                        <i class="fa fa-star text-warning"></i>
                        <i class="fa fa-star text-warning"></i>
                        <i class="fa fa-star text-warning"></i>
                        <i class="fa fa-star text-warning"></i>
                    <?php }
                    ; ?>
                    <p>Bạn là người thích sự lịch lãm, sang trọng khi đi làm. Nhưng bạn lại muốn thể hiện được sự trẻ
                        trung, năng động khi đi chơi với bạn bè. Frank chính là giải pháp cho bạn. Với những combo được
                        Frank chọn lọc dưới đây, chắc chắn bộ trang phục của bạn sẽ được nâng tầm. Những món phụ kiện sẽ
                        giúp bạn biến tấu phù hợp cho mọi sự kiện bạn tham gia</p>
                </div>
                <div class="mau">
                    <select name="mausac" id="" style="width:200px">
                        <?php
                        $result = $db->getmau($row['nhomsp']);

                        while ($kq = $result->fetch()):
                            ?>

                            <option value="<?php echo $kq['mausac']; ?>"><?php echo $kq['mausac']; ?></option>

                        <?php endwhile; ?>
                    </select>
                </div>
                <div class="size mt-3 mb-3">
                    <input type="hidden" name="size" id="size" value="">
                    <?php
                    $size = $db->getsize($row['nhomsp']);
                    while ($s = $size->fetch()):
                        ?>
                        <button class="btn btn-dark" type="button" onclick="laysize(<?php echo $s['size'] ?>)"
                            style="border-radius:50%"><?php echo $s['size'] ?></button>

                    <?php endwhile; ?>
                </div>
                <div class="soluong d-flex">
                    <h5 class=""> Số Lượng:</h5>

                    <input class="ml-2" type="number" id="soluong" name="soluong" min="1" max="100" value="1"
                        size="10" />
                </div>
                <h5 class="mt-3">Gía:
                    <?php
                    if ($row['giamgia']) {
                        echo number_format($row['giamgia']);
                    } else {
                        echo number_format($row['gia']);
                    }
                    ?> VND
                </h5>
                <div class="product-price">
                    <p class="new-price text-danger" style="font-size: 25px;font-weight: 600;"></p>
                </div>
                <div class="form-cart d-flex">
                    <?php
                    $kq = $db->ktsoluongton($row['id']);
                    if ($kq['slton'] == 0) {
                        ?>
                        <button type="submit" class="btn btn-danger mr-2">Hết Hàng</button>
                        <?php
                    } else {
                        ?>
                        <?php if (isset($_SESSION['id'])) { ?>
                            <a href="index.php?act=dsyeuthich&&action=yeuthich&id=<?php echo $row['id'] ?>" class="love">
                                Yêu Thích<i class="fa fa-heart ml-1"></i>
                        </a > &nbsp;
                        <?php }
                        ; ?>
                        <button type="submit" class="add">Thêm vào giỏ
                            hàng<i class="fa fa-shopping-cart ml-1"></i></button>

                    <?php }
                    ; ?>
                </div>
                <!-- collaspe -->

                <!-- collaspe -->

            </div>
        </div>
    </div>
</form>
<!-- dangiasanpham -->
<div class="container mb-5">
    <div class="row">
        <div class="col-12 fl-left">

            <nav>

                <div class="nav nav-pills mb-3 " id="pills-tab" role="tablist">


                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" data-target="#nav-home"
                        role="tab" aria-controls="nav-home" aria-selected="true">
                        <font size="5px" color="Black" style="color: lightcoral;">Đánh Giá Sản Phẩm
                            <hr width="100%" size="5px" align="center" />


                        </font>
                    </a>
                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" data-target="#nav-profile"
                        role="tab" aria-controls="nav-profile" aria-selected="false">
                        <font size="5px" color="Black">Thông Tin Sản Phẩm
                            <hr width="100%" size="5px" align="center" />



                        </font>
                    </a>
                </div>

            </nav>

            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div class="container">
                        <div class="row">
                            <div class="col-6">
                                <!--  -->
                                <a style="color:white;" style="font-size:10px;">
                                    <?php

                                    $count = $bl->getCmtPagation($row['id'])->rowCount();
                                    $limit = 4;
                                    $pg = new page();
                                    $page = $pg->getTotalPage($count, $limit);
                                    $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
                                    $start = $pg->getStart($currentPage, $limit);
                                    echo $start;
                                    echo $currentPage;
                                    ?>
                                </a>
                                <h5 class="mt-4">Đánh giá của khách hàng

                                </h5>
                                <?php

                                $result = $bl->getCmt($row['id'], $start, $limit);
                                while ($dgsp = $result->fetch()):
                                    if (!empty($dgsp)) {
                                        ?>
                                        <div class="user-review">
                                            <div class="row mt-3">

                                                <div class="col-2">
                                                    <img src="https://taytou.com/wp-content/uploads/2022/08/Anh-Avatar-dai-dien-mac-dinh-nam-nen-xam.jpeg"
                                                        alt="">
                                                </div>
                                                <div class="col-10">
                                                    <p class="text-primary m-0 mb-1" style="font-weight:100px;">
                                                        <a style="font-size:10px"> <b style="color: dimgrey;">
                                                                <?php echo $dgsp['hoten'] ?></a>

                                                    </p></b>
                                                    <p class="m-0 mb-1" style="font-size:12px">
                                                        <?php
                                                        if (!empty($dgsp['rate'])) {
                                                            for ($i = 0; $i < $dgsp['rate']; $i++) {
                                                                echo "<i class='fa fa-star text-warning mr-1 '></i>";

                                                            }
                                                        }
                                                        ?>
                                                    </p>
                                                    <p class="m-0 mb-1">
                                                        <?php echo $dgsp['binhluan'] ?>
                                                    </p>
                                                    <?php
                                                    if (isset($_SESSION['id'])):
                                                        $like = $bl->getlike($dgsp['id'], $row['id'], $dgsp['user_id'])->fetch();
                                                        ?>
                                                        <p class="p-0 m-0"> <a class="review like mr-4 text-primary"
                                                                href="index.php?act=binhluan&idcmt=<?php echo $dgsp['id'] ?>&type=like"
                                                                style="cursor:pointer"><i style="font-size:15px"
                                                                    class="fa">&#xf087;</i>Thích</a>
                                                            <a class="review" href="#"><i style="font-size:15px"
                                                                    class="fa">&#xf0e6;</i>Phản Hồi</a>
                                                        </p>
                                                        <span class="text-dark p-0" style="font-size:10px;font-weight:600;">
                                                            <?php echo $dgsp['ngaycmt'] ?>
                                                        </span>


                                                    <?php endif; ?>


                                                </div>

                                            </div>
                                            <hr width="0%" size="200px" align="center" />
                                        </div>
                                        <hr width="90%" size="" align="" color="" />

                                        <?php
                                    }
                                endwhile;
                                ?>
                                <!-- <div class="user-review">
                                        <div class="row mt-3">

                                            <div class="col-2">
                                                <img src="./View/Anh/anh-gai-xinh-deo-kinh-toc-ngan-2k4-3.jpg" alt="">
                                            </div>
                                            <div class="col-10">
                                                <p class="text-primary m-0  mb-1" style="font-weight:500;">Nguyễn Công
                                                    Xuân Hùng</p>
                                                <p class=
                                                <p> <a class="review mr-4" href="">Thích</a> <a class="review"
                                                        href="">Phản Hồi</a> </p>
                                            </div>
                                        </div>
                                    </div> -->
                                <!--  -->
                                <!-- Pagination -->
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination d-flex justify-content-center mt-3 mb-5">
                                        <?php if ($page > 1): ?>
                                            <?php
                                            if ($currentPage > 1):
                                                ?>
                                                <li class="page-item"><a class="page-link"
                                                        href="index.php?act=sanpham&action=chitiet&page=<?php echo $currentPage - 1 ?>">Previous</a>
                                                </li>
                                            <?php endif; ?>
                                            <!-- for -->
                                            <?php
                                            for ($i = 1; $i <= $page; $i++):
                                                ?>
                                                <?php
                                                if ($i != $currentPage) {
                                                    ?>
                                                    <?php
                                                    if ($i > $currentPage - 5 && $i < $currentPage + 5):
                                                        ?>
                                                        <li class="page-item"><a class="page-link"
                                                                href="index.php?act=sanpham&action=chitiet&page=<?php echo $i; ?>"><?php
                                                                   echo $i; ?></a></li>
                                                    <?php endif; ?>
                                                    <?php
                                                } else {
                                                    ?>
                                                    <li class="page-item active"><a class="page-link"
                                                            href="index.php?act=sanpham&action=chitiet&page=<?php echo $i; ?>"><?php
                                                               echo $i; ?></a></li>

                                                <?php } ?>

                                            <?php endfor ?>
                                            <!-- for -->
                                            <?php
                                            if ($currentPage < $page):
                                                ?>
                                                <li class="page-item"><a class="page-link"
                                                        href="index.php?act=sanpham&action=chitiet&page=<?php echo $currentPage + 1 ?>">Next</a>
                                                </li>
                                            <?php endif; ?>
                                        </ul>
                                    <?php endif; ?>
                                </nav>
                                <!-- Pagination -->
                            </div>
                            <div class="col-6 mt-4">
                                <!--  -->
                                <?php
                                if (isset($_SESSION['id'])) {

                                    ?>
                                    <h4>Thêm Đánh Giá</h4>
                                    <form class="form" method="post" action="index.php?act=binhluan">
                                        <div class="form-row">
                                            <div class="col-12">
                                                <input type="hidden" name="star" id="ipstar" value="">
                                                <p>Đánh Giá</p>
                                                <div class="rate">
                                                    <i class="fa fa-star " data-index=1></i>
                                                    <i class="fa fa-star " data-index=2></i>
                                                    <i class="fa fa-star " data-index=3></i>
                                                    <i class="fa fa-star " data-index=4></i>
                                                    <i class="fa fa-star " data-index=5></i>
                                                </div>
                                            </div>
                                            <!-- <div class="col-12">
                                                                                                                    <p class="mt-5 mb-0">Thông Tin Của Bạn</p>
                                                                                                                    <div class="row">
                                                                                                                        <div class="form-group col-md-6">
                                                                                                                            <label for="inputEmail4"></label>
                                                                                                                            <input type="email" class="form-control" id="inputEmail4"
                                                                                                                                placeholder="Họ Tên">
                                                                                                                        </div>
                                                                                                                        <div class="form-group col-md-6">
                                                                                                                            <label for="inputPassword4"></label>
                                                                                                                            <input type="password" class="form-control" id="inputPassword4"
                                                                                                                                placeholder="Email">
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div> -->
                                        </div>
                                        <div class="form-group">
                                            <label for="inputAddress"></label>
                                            <input type="hidden" name="idsp" value="<?php echo $row['id'] ?>">
                                            <textarea class="w-100" name="cmt" id="" cols="30" rows="10"
                                                placeholder="Đánh Giá..."></textarea>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-danger">Gửi đi</button>
                                        </div>
                                    </form>
                                <?php } else { ?>
                                    <div class="justify-content-center d-flex align-items-center mt-5 ">
                                        <a class="pt-2 text-white btn btn-dark"
                                            href="index.php?act=login&action=dangnhap_user">Vui Lòng Đăng Nhập Để Bình
                                            Luận</a>
                                    </div>
                                <?php } ?>
                                <!--  -->
                            </div>

                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <h3 class="ml-2 mt-3">Thông Tin Sản Phẩm</h3>
                    <p style="font-size: 14px;font-weight: 400">
                        Da thuộc là một dạng vật liệu bền và dẻo được tạo thành thông qua quá trình thuộc da từ da động
                        vật như da bò, trâu, dê, cừu non, nai, cá sấu, đà điểu... Da thuộc được sản xuất bằng nhiều
                        phương pháp khác nhau, từ quy mô cá thể đến quy mô công nghiệp.

                        Chế tác thủ công từ da bò Epi và nhung cùng tông màu Midnight Black, chiếc túi này là item có
                        thể
                        kết hợp linh hoạt với hầu hết các loại quần áo. Bên cạnh ngăn chính rộng rãi có khóa zip, Paul
                        Duo
                        Messenger Bag còn có thêm 1 chiếc túi nhỏ để có thể đựng vật dụng nhỏ như tai nghe. Cùng với đó,
                        dây
                        đeo có thể điều chỉnh độ dài sẽ mang đến cho bạn đa dạng những tùy chọn phong cách mà bạn muốn.
                    </p>
                    <br>
                    <h3 class="ml-2 mt-3">Thông Tin Chi Tiết</h3>
                    <p>
                        -- x -- x -- cm<br>
                        (Dài x Cao x Rộng)
                    </p>
                    <ul>
                        <li>Da bò Epi màu đen Midnight và da bò trơn</li>
                        <li>Chất liệu: Da bò Nappa</li>
                        <li>Cấu trúc: Mckay</li>
                        <li>Thiết kế và hoàn thiện tại Việt Nam</li>
                        <li>Sản phẩm có túi vải (dust bag) và hộp cứng</li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    // $(document).ready(function(){
    //     $('.review.like').click(function(){
    //           let id=$(this).attr('id');
    //           $.ajax({
    //                 url:"index.php?act=binhluan",
    //                 type:"get",
    //                 data:"type=like&idcmt="+id,
    //                 success : function (result){
    //                 },
    //             });
    //     });
    //     $('.review.dislike').click(function(){
    //           let id=$(this).attr('id');
    //           console.log(id)
    //           $.ajax({
    //                 url:"index.php?act=binhluan",
    //                 type:"get",
    //                 data:"type=dislike&idcmt="+id,
    //                 success : function (result){
    //                 },
    //             });
    //     });
    // });

    // let rv=document.querySelectorAll('.review.like')
    //     rv.forEach(e=>{
    // e.onclick=function(){
    //     if(e.innerHTML=="Bỏ Thích"){
    //         // e.innerHTML="Thích";
    //         $.ajax({
    //                 url : "index.php?act=binhluan",
    //                 type : "post",
    //                 async:false
    //                 data : {
    //                      'idcmt':e.dataset.id,
    //                 },
    //                 success : function (result){

    //                 }
    //             });
    //     }else{
    //         // e.innerHTML="Bỏ Thích";
    //     }
    // }

    //     })

    let stars = document.querySelectorAll('.rate .fa-star');
    let flag = true;
    function clear() {
        stars.forEach(e => {
            e.classList.remove("text-warning")
        })
    }
    stars.forEach((el, i) => {
        el.onmouseleave = function (e) {
            if (flag == true) {
                for (var e = 0; e <= i; e++) {
                    stars[e].classList.remove('text-warning')
                }
            }
        }
        el.onmouseenter = function () {
            for (var ed = 0; ed <= i; ed++) {
                if (flag != false) {
                    stars[ed].classList.add('text-warning');
                }
            }
        }
        stars[i].onclick = function (e) {
            clear()
            document.getElementById('ipstar').value = el.dataset.index;
            for (var c = 0; c <= i; c++) {
                stars[c].classList.add('text-warning');
            }
            flag = false;
        }
    })
// let btn1 =document.querySelector('button.btn1');
// let btn2 =document.querySelector('button.btn2');
// let btn3 =document.querySelector('button.btn3');
// btn1.onclick=function(){
//         document.getElementById('collapseOne').classList.toggle('show');
// }
// btn2.onclick=function(){
//         document.getElementById('collapseTwo').classList.toggle('show');
// }
// btn3.onclick=function(){
//         document.getElementById('collapseThree').classList.toggle('show');
// }
</script>
<!-- dangiasanpham -->



<!-- CHitietsanpham -->