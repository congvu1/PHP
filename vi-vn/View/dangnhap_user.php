<!-- ----style -->
<style>
    @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;


    }

    html,
    body {
        background-image: url(https://pdp.edu.vn/wp-content/uploads/2021/05/hinh-nen-mau-xam.jpg)
    }


    ::selection {
        background: #4158d0;
        color: #fff;


    }

    .wrapper {

        width: 380px;
        background: #fff;
        border-radius: 15px;
        box-shadow: 0px 15px 20px rgba(0, 0, 0, 0.1);
    }

    .wrapper .title {

        font-size: 35px;
        font-weight: 600;
        text-align: center;
        line-height: 100px;
        color: #fff;
        user-select: none;
        border-radius: 15px 15px 0 0;
        background: linear-gradient(black, white);
    }

    .wrapper form {
        padding: 10px 30px 50px 30px;
    }

    .wrapper form .field {
        height: 50px;
        width: 100%;
        margin-top: 20px;
        position: relative;
    }

    .wrapper form .field input {
        height: 100%;
        width: 100%;
        outline: none;
        font-size: 17px;
        padding-left: 20px;
        border: 1px solid lightgrey;
        border-radius: 25px;
        transition: all 0.3s ease;
    }

    .wrapper form .field input:focus,
    form .field input:valid {
        border-color: #4158d0;
    }

    .wrapper form .field label {
        position: absolute;
        top: 50%;
        left: 20px;
        color: #999999;
        font-weight: 400;
        font-size: 17px;
        pointer-events: none;
        transform: translateY(-50%);
        transition: all 0.3s ease;
    }

    form .field input:focus~label,
    form .field input:valid~label {
        top: 0%;
        font-size: 16px;
        color: #4158d0;
        background: #fff;
        transform: translateY(-50%);
    }

    form .content {
        display: flex;
        width: 100%;
        height: 50px;
        font-size: 16px;
        align-items: center;
        justify-content: space-around;
    }

    form .content .checkbox {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    form .content input {
        width: 15px;
        height: 15px;
        background: red;
    }

    form .content label {
        color: #262626;
        user-select: none;
        padding-left: 5px;
    }

    form .content .pass-link {
        color: "";
    }

    form .field input[type="submit"] {
        color: #fff;
        border: none;
        padding-left: 0;
        margin-top: -10px;
        font-size: 20px;
        font-weight: 500;
        cursor: pointer;
        background: linear-gradient(black, white);

        transition: all 0.3s ease;
    }

    form .field input[type="submit"]:active {
        transform: scale(0.95);
    }

    form .signup-link {
        color: #262626;
        margin-top: 40px;
        text-align: center;
    }

    form .pass-link a,
    form .signup-link a {
        color: #4158d0;
        text-decoration: none;
    }

    form .pass-link a:hover,
    form .signup-link a:hover {
        text-decoration: underline;
    }
    /* font */
    b{


    }
       /* font */
</style>

<!-- ----style -->

<head>



    <meta charset="utf-8">
    <title></title>

</head>

<body>
    <center>

        <div class="wrapper">
            <div class="title" style="width: 200px;height:410px;">

                <b style="width: auto;"> Login Now</b>
            </div>
            <form action="index.php?act=login&&action=dangnhap_act" name="frm" method="post" ng-controller="myctrl">
                <form action="#">
                    <div class="field">
                        <label for="" class="text-white-50">Nhập Email</label>
                        <input type="email" name="email" id="hoten" required class="form-control"
                            placeholder="Nhập Email" aria-describedby="helpId">
                        <span id="kq_hoten" class="text-danger "> </span>
                    </div>
                    <div class="field">
                        <label for="" class="text-white-50">Nhập Mật Khẩu</label>
                        <input type="password" name="pass" required class="form-control" placeholder="Nhập Password"
                            aria-describedby="helpId">
                        <span id="kq_email" class="text-danger"></span>
                    </div>
                    <div class="content">


                    </div>
                    <div class="field">
                        <input type="submit" value="Login">
                    </div>
                    <div class="signup-link">
                        Not a member? <a href="index.php?act=dangky&&action=dangky_user">Signup now</a>
                    </div>
                </form>
        </div>
</body>
</center>
</head>