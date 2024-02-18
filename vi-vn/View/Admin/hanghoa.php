<?php
 $db = new sanpham_admin();
$count = $db->getAllSp()->rowCount();
$limit=6;
$pg = new page();
$page = $pg->getTotalPage($count,$limit);
$currentPage=isset($_GET['page'])?$_GET['page']:1;
$start=$pg->getStart($currentPage,$limit);
echo $start;
echo $currentPage;
?>
<div class="container-fluid" style="margin-top:20px">
    <div class="col-12 text-center ">
<h3><b>DANH SÁCH HÀNG HÓA</b></h3>
    </div>
<div class="row col-12" >
<a href="index.php?act=sanpham_admin&action=them&type=them" class="text-dark"><h4>Thêm Sản Phẩm</h4></a>
</div>
<div class="row" style="margin:0">
<table class="table table-hover table text-center">
    <thead class="thead-dark">
      <tr>
        <th>Mã hàng</th>
        <th>Tên hàng</th>
        <th>Loại Sản Phẩm</th>
        <th>Đơn giá</th>
        <th>Giảm giá</th>
        <th>Hình</th>
        <th>Size</th>
        <th>Màu sắc</th>
        <th>Số lượng tồn</th>
        <th>Edit</th>
        <th></th>
       
      </tr>
    </thead>
  
    <tbody>
    <?php 
     
      $kq= $db->getAllSpLimit($start,$limit);
      while($row=$kq->fetch()):
    ?>
      <tr>
        <td><?php echo $row['id'] ?></td>
        <td><?php echo $row['tensp'] ?></td>
        <td><?php
       $set=$db->getNameLoai($row['id_loai']);
       echo $set['TenLoai'];
        ?></td>
        <td><?php echo number_format($row['gia'])?> VND</td>
        <td><?php echo number_format($row['giamgia'])?> VND</td>
        <td><img width="50px" height="50px" src="./View/Anh/<?php echo $row['img'] ?>"/></td>
        <td><?php echo $row['size'] ?></td>
        <td><?php echo $row['mausac'] ?></td>
        <td><?php echo $row['slton'] ?></td>
        <td><a href="index.php?act=sanpham_admin&&action=capnhat&type=capnhat&id=<?php echo $row['id'] ?>">Cập nhật</a></td>
        <td><a href="index.php?act=sanpham_admin&action=xoa&id=<?php echo $row['id']?>">Xóa</a></td>
      </tr>
     <?php endwhile; ?>
    </tbody>
  </table>
</div>
</div>
<nav aria-label="Page navigation example">
  <ul class="pagination d-flex justify-content-center mt-3 mb-5">
  <?php 
     if($currentPage>1):
     ?>
    <li class="page-item"><a class="page-link" href="index.php?act=sanpham_admin&page=<?php echo $currentPage-1?>">Previous</a></li>
    <?php  endif;?>
    <!-- for -->
    <?php 
        for($i=1;$i<=$page;$i++):
     ?>
        <?php 
        if($i!=$currentPage){
        ?>
         <?php
        if($i>$currentPage-5&&$i<$currentPage+5){ 
     ?>
    <li class="page-item"><a class="page-link" href="index.php?act=sanpham_admin&page=<?php echo $i;?>"><?php echo $i; ?></a></li>
    <?php };?>
    <?php 
        }else{
    ?>
    <li class="page-item active"><a class="page-link" href="index.php?act=sanpham_admin&page=<?php echo $i;?>"><?php echo $i; ?></a></li>
    
    <?php }?>
   
    <?php endfor?>
    <!-- for -->
    <?php
        if($currentPage<$page):
    ?>
    <li class="page-item"><a class="page-link" href="index.php?act=sanpham_admin&page=<?php echo $currentPage+1?>">Next</a></li>
            <?php  endif;?>
  </ul>
</nav>
