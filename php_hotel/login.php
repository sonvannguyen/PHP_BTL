<?php
session_start();
if (isset($_GET["account"]) && $_GET["account"] == "dangxuat") {
    unset($_SESSION["dangnhap"]);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/register_login.css">
    <title>ĐĂNG KÍ TÀI KHOẢN</title>
    <title>ĐĂNG NHẬP TÀI KHOẢN</title>
</head>

<body>
        <form action="" method="POST">
            <table class="table_dangky">
                <th colspan="2" style="text-align: center"><b>ĐĂNG NHẬP</b></th>
                <tr>
                    <td colspan="2" style="text-align: center"><img src="https://statics.vinpearl.com/lux%20Nha%20trang-02_1679990219.svg" alt="Logo" width="100" height="100"></td>
                </tr>
                <tr>
                    <td>Tên đăng nhập</td>
                    <td><input value="" type="text" name="username" placeholder="Tên đăng nhập"></td>
                </tr>
                <tr>
                    <td>Mật khẩu</td>
                    <td><input value="" type="password" name="matkhau" placeholder="Mật Khẩu"></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center"><button type="submit" class="button" name="dangnhapuser">ĐĂNG NHẬP</button></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <p style="margin-left: 20px; text-align:left;color:blue">Bạn chưa có tài khoản? <i><a href="register.php">Đăng ký</a></i></p>
                    </td>
                </tr>
                <tr><a href="../index.php">Trang chủ</a></tr>
            </table>
        </form>
</body>

</html>


<?php
include("../db.php");
if (isset($_POST['dangnhapuser'])) {
    $taikhoan = $_POST['username'];
    $matkhau = md5($_POST['matkhau']);
    echo $taikhoan;
    echo $matkhau;
    $sql = " SELECT * FROM  tbl_dangki  WHERE tendangnhap='" . $taikhoan . "' AND matkhau='" . $matkhau . "' ";
    $rows = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($rows);
    echo $row["id_dangki"];
    if ($row) {
        $_SESSION['dangnhap']["id"] = $row["id_dangki"];
        $_SESSION['dangnhap']["name"] = $row["hovaten"];
        header("Location:../index.php");
    } else {
        echo "Tài khoản hoặc mật khẩu không đúng";
    }
}
?>

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
        background-color: #dddd;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.2);
    }

    .table_dangky th {
        font-size: 24px;
        padding: 10px;
    }

    .table_dangky td {
        padding: 10px;
    }

    .table_dangky input[type="text"],
    .table_dangky input[type="password"] {
        width: 100%;
        padding: 10px;
        margin: 5px 0px;
        border-radius: 5px;
        border: none;
        box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.2);
    }

    .table_dangky button {
        width: 100%;
        padding: 10px;
        margin: 10px 0px;
        border-radius: 5px;
        border: none;
        background-color: #008CBA;
        color: #fff;
        font-size: 18px;
        cursor: pointer;
        box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.2);
    }

    .table_dangky button:hover {
        background-color: #006B9F;
    }

    .table_dangky a {
        text-decoration: none;
        color: #008CBA;
        font-weight: bold;
        margin-left: 10px;
    }

    .table_dangky a:hover {
        text-decoration: underline;
    }

    .table_dangky img {
        margin-bottom: 20px;
    }
</style>