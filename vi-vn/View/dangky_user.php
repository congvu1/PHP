<style>
  .btnbtn {


    font-size: 16px;


  }

  body {
    background-image: url(https://pdp.edu.vn/wp-content/uploads/2021/05/hinh-nen-mau-xam.jpg)
  }
</style>


<div class="container mt-5 mb-5">
  <div class="row">
    <div class="col-lg-3">
    </div>
    <div class="col-lg-6">
      <!-- "" -->
      <!--  index.php?act=dangky&&action=dangky_act"-->

      <form action="index.php?act=dangky&&action=dangky_act" method="post">

        <div class="card">
          <div class="card-header" style="background-image: linear-gradient(to right,#000000, white);">
            <h3 class="text-center text-white"><b>Registration</b> </h3>
          </div>
          <div class="card-body" style="background-image:linear-gradient(#444444,white);">
            <div class="form-group">
              <label for="" class="text-black">Nhập Họ Tên</label>
              <input type="text" name="hoten" required class="form-control" placeholder="Nhập Họ Tên..."
                aria-describedby="helpId">
              <span class="error  text-dark">
                <?php if (isset($_SESSION['nameErr'])) {
                  echo $_SESSION['nameErr'];
                } ?>
              </span>
            </div>
            <div class="form-group">
              <label for="" class="text-black">Nhập Email</label>
              <input type="email" name="email" required class="form-control" placeholder="Nhập Email..."
                aria-describedby="helpId">
              <span class="error  text-dark">
                <?php if (isset($_SESSION['emailErr'])) {
                  echo $_SESSION['emailErr'];
                } ?>
              </span>
            </div>
            <div class="form-group">
              <label for="" class="text-black">Nhập Mật Khẩu</label>
              <input type="password" name="password" required class="form-control" placeholder="Nhập Mật Khẩu..."
                aria-describedby="helpId">
              <span class="error  text-dark">
                <?php if (isset($_SESSION['passwordErr'])) {
                  echo $_SESSION['passwordErr'];
                } ?>
              </span>
            </div>
            <div class="form-group">
              <label for="" class="text-black">Nhập Lại Mật Khẩu</label>
              <input type="password" required name="nlpassword" required class="form-control"
                placeholder="Nhập Lại Mật Khẩu..." aria-describedby="helpId">
              <span class="error  text-dark">
                <?php if (isset($_SESSION['nlpasswordErr'])) {
                  echo $_SESSION['nlpasswordErr'];
                } ?>
              </span>
            </div>
            <div class="form-group">
              <label for="" class="text-black">Nhập Số Điện Thoại</label>
              <input type="text" name="phone" required class="form-control" placeholder="Nhập Số Điện Thoại..."
                aria-describedby="helpId">
              <span class="error  text-dark">
                <?php if (isset($_SESSION['phoneErr'])) {
                  echo $_SESSION['phoneErr'];
                } ?>
              </span>
            </div>
            <div class="form-group">
              <label for="" class="text-black">Nhập Địa Chỉ</label>
              <input type="text" name="diachi" required class="form-control" placeholder="Nhập Địa Chỉ..."
                aria-describedby="helpId">
              <span class="error text-dark">
                <?php if (isset($_SESSION['adressErr'])) {
                  echo $_SESSION['adressErr'];
                } ?>
              </span>
            </div>

          </div>
          <button type="submit" class="btn btn" style="background-image: linear-gradient(white,#000000);">
            <h3 class="text-center text-white">Submit</h3>
          </button>
          <div class="dangnhap text-center">

          </div>

        </div>

    </div>
    </form>
  </div>

</div>
</div>
</div>