
<form action="test.php" method="post" enctype="multipart/form-data">
    <input type="file" name="img">
    <button type="submit">click</button>
</form>
<?php 
if($_SERVER['REQUEST_METHOD'] == 'POST'){
  echo md5(123);
  // $file="./View/Anh/".basename($_FILES['img']['name'])."1";
  // echo $file;
  // $kq=move_uploaded_file($_FILES['img']['tmp_name'],$file);
  // if($kq==1)
  // {
  //   echo "Thanh COng";
  // }else{
  //   echo "That bai";
  // }
}


?>