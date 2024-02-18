<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-lg-3">
        </div>
        <div class="col-lg-6">
            <form action="index.php?act=login_admin&&action=dangnhap_admin_act" method="post" name="frm">
                <div class="card">
                    <div class="card-header" style="background-image: linear-gradient(to right,#555555, white);">
                        <h3 class="text-center text-white">Đăng Nhập Admin</h3>
                    </div>
                    <div class="card-body" style="background-image:linear-gradient(#555555, white) ;">
                        <div class="form-group">
                            <label for="" class="text-white-50">Nhập Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Nhập Email"
                                aria-describedby="helpId">
                            <span id="kq_hoten" class="text-danger "> </span>
                        </div>
                        <div class="form-group">
                            <label for="" class="text-white-50">Nhập Mật Khẩu</label>
                            <input type="password" name="password" class="form-control" placeholder="Nhập Password"
                                aria-describedby="helpId">
                            <span id="kq_email" class="text-danger"></span>
                        </div> 
                       
                    </div>
                    <button type="submit" class="dangnhap text-center" style="background-image: linear-gradient(white,#777777);">
                            <h3 class="text-center text-white">Submit</h3>
                        </button>
                </div>
        </div>
        </form>
    </div>
    <div class="col-lg-3">
    </div>
</div>
</div>