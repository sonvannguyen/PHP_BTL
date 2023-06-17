<?php
include("../db.php");
if(isset($_POST['dangky'])){
    $hovaten=$_POST['hovaten'];
    $gioitinh=$_POST['gioitinh'];
    $sodienthoai=$_POST['sodienthoai'];
    $diachi=$_POST['diachi'];
    $tendn=$_POST['username'];
    $matkhau=md5($_POST['matkhau']);

    $sql_dangki="INSERT INTO tbl_dangki(hovaten,gioitinh,sodienthoai,tendangnhap,matkhau,diachi)
    VALUE('".$hovaten."','".$gioitinh."','".$sodienthoai."','".$tendn."','".$matkhau."','".$diachi."')";
    mysqli_query($con,$sql_dangki);
    header("location: login.php");
}
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="~/css/variabledocument.css" type="text/css" />
    <link rel="stylesheet" href="../css/register_login.css" >
    <title>ĐĂNG KÍ TÀI KHOẢN</title>
</head>
<body>
<form action="register.php" method="POST">
    <table class="table_dangky" >
        <th colspan="2" style="text-align: center"><b>ĐĂNG KÝ</b></th>
        <tr>
            <td colspan="2" style="text-align: center"><img  src="https://statics.vinpearl.com/lux%20Nha%20trang-02_1679990219.svg" alt="Logo" width="80" height="80"></td>
        </tr>
        <tr>
            <td>Họ và tên</td>
            <td><input  type="text" name="hovaten" placeholder="Họ và tên..."></td>
            
        </tr>
        
        <tr>
            <td>Giới tính</td>
            <td>
                <select name="gioitinh" >
                    <option value=0 >Nam</option>
                    <option value=1 >Nữ</option>
                </select>
             </td>
        </tr>
         <tr>
            <td>Địa chỉ</td>
            <td><input  type="text" name="diachi"></td>
        </tr>
        <tr>

            <td>Email</td>
            <td><input  type="text" name="email" placeholder="abc@gmail.com"></td>
        </tr>
        <tr>
            <td>Số điện thoại</td>
            <td><input  type="text" name="sodienthoai" placeholder="Số điện thoại"></td>
        </tr>
        <tr>
            <td>Tên đăng nhập</td>
            <td><input  type="text" name="username" placeholder="Tên đăng nhập"></td>
        </tr>
        <tr>
            <td>Mật khẩu</td>
            <td><input  type="password" name="matkhau" placeholder="Mật Khẩu"></td>
        </tr>
        <tr>
            <td>Nhắc lại mật khẩu</td>
            <td><input type="password" name="repassword" placeholder="Nhắc lại mật khẩu"></td>
        </tr>
        <tr>
            <td colspan="2" style="text-align: center"><button type="submit" class="button" name="dangky" >ĐĂNG KÝ</button></td>
        </tr>
        <tr>
            <td colspan="2"  ><p style="margin-left: 20px"> <i>Bạn đã có tài khoản? <a style="color:blue" href="login.php">ĐĂNG NHẬP</a></i></p></td>
        </tr>

    </table>
</form>

    </div>
</body>
</html>

<style>
    body {
        background-image: url("https://image.bnews.vn/MediaUpload/Org/2020/07/17/anh-1.jpg");
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
    }

    .form {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
    
    .table_dangky {
        width: 400px;
        margin: 0 auto;
        margin-top: 50px;
        background-color: #dddd;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.2);
    }

   
</style>