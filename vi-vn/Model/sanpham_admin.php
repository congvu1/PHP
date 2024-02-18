<?php 
class sanpham_admin{
    public function getAllSpLimit($start,$limit){
        $db = new connect();
        $select ="SELECT * from sanpham limit $start,$limit";
        return $db->getList($select);
    } 
    public function getAllSp(){
        $db = new connect();
        $select ="SELECT * from sanpham ";
        return $db->getList($select);
    } 
    public function xoaSanPham($id){
        $db = new connect();
        $query="delete from sanpham where id=$id";
        $kq=$db->themsuaxoa($query);
        return $kq;
    }
    public function getInstance($id){
        $db = new connect();
        $select="SELECT * FROM sanpham where id=$id";
       $result= $db->getctsp($select);
       return $result;
    }
    public function getImage($id){
        $db = new connect();
        $select ="select img from sanpham where id =$id";
      $kq=  $db->getctsp($select);
      return $kq->fetch();
    }
    public function capNhatSanPham($id,$tensp,$gia,$img,$giamgia,$size,$mausac,$slton,$maloai){
        $db = new connect();
        $query="update sanpham set tensp='$tensp',gia=$gia,img='$img',giamgia=$giamgia,size=$size,mausac='$mausac',slton=$slton,id_loai=$maloai where id =$id";
        $kq=$db->themsuaxoa($query);
        return $kq;
    }
    public function themSanPham($tensp,$gia,$img,$giamgia,$size,$mausac,$slton,$idloai){
        $db = new connect();
        $query="insert into sanpham (tensp,gia,img,giamgia,size,mausac,slton,id_loai)
        values('$tensp',$gia,'$img',$giamgia,$size,'$mausac',$slton,$idloai)";
       return $db->themsuaxoa($query);
    }
    public function getLoaiSp($start,$limit){
        $db =  new connect();
        $query="select * from loai limit $start,$limit";
       $kq= $db->getlist($query);
        return $kq;
    }
    public function getAllLoaiSp(){
        $db = new connect();
        $select ="SELECT * from loai ";
        return $db->getList($select);
    } 
    public function getInstanceSp($id){
        $db = new connect();
        $select = "select * from loai where MaLoai=$id";
        $kq=$db->getctsp($select);
        return $kq->fetch(); 
    }
    public function addLoaiSp($maloai,$tenloai,$iddanhmuc){
        $db = new connect();
        $select = "insert into loai (TenLoai,id_danhmuc) values('$tenloai',$iddanhmuc)";
        $kq=$db->getctsp($select);
        return $kq->fetch(); 
    }
    public function updateLoaiSp($maloai,$tenloai,$iddanhmuc){
        $db = new connect();
        $select = "update loai set TenLoai='$tenloai',id_danhmuc=$iddanhmuc where MaLoai=$maloai";
        $kq=$db->getctsp($select);
        return $kq->fetch(); 
    }
    public function getNameDm($iddm){
        $db= new connect();
        $select="select tendanhmuc from danhmucsanpham where id=$iddm";
        $kq= $db->getctsp($select);
        return $kq->fetch();
    }
    public function getNameLoai($idloai){
        $db= new connect();
        $select="select TenLoai from loai where MaLoai=$idloai";
        $kq= $db->getctsp($select);
        return $kq->fetch();
    }
   public function xoaLoaiSp($id){
    $db = new connect();
    $query="Delete from loai where MaLoai=$id";
    $db->themsuaxoa($query);
   }
   public function getDanhMuc(){
    $db = new connect();
    $select = "select * from danhmucsanpham";
   return  $db->getlist($select);
   }
    public function AddImg(){
        $targetDir="./View/Anh/";
        $targetFile=$targetDir.basename($_FILES['image']['name']);
        $imgFileType= strtolower(pathinfo($targetFile,PATHINFO_EXTENSION));
        $flag=true;
        if(file_exists($targetFile)){
            echo "Hình Đã Tồn Tại";
            $flag=false;
        }else{
            $flag=true;
        }
        $check=getimagesize($_FILES["image"]["tmp_name"]);
        if($check!=true){
            echo "Đây Không Phải Là ảnh";
            $flag=false;
        }else{
            $flag=true;
        }
        if($_FILES['image']['size']>50000){
            echo "Hình Vượt quá kích thước cho phép";
            $flag=false;
        }else{
            $flag=true;
        }
        if($imgFileType!="jpg"&&$imgFileType != "png" &&$imgFileType !="git" && $imgFileType && "jpeg"){
            echo "Đây Không phải là hình";
            $flag=false;
        }
        if($flag!=false){
               $kq= move_uploaded_file($_FILES['image']['tmp_name'],$targetFile);
               if($kq==1){
                echo "Upload Thanh COng";
               }else{
                echo "Upload that bai";
               }
        }else{
            echo "Vui Long chon lai hinh";
        }
   

    }
}
?>