<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1{
            color: white;
        }
        ul{
            list-style: none;
            display: flex;
            gap: 10px;
            background-color: blue;
            padding: 20px ;
        }

        a{
            text-decoration: none;
            color: white;
        }
        form {
            width: 300px;
            margin: 40px auto; 
            padding: 20px;
            border: 1px solid #ccc; 
            border-radius: 5px;
        }

        div {
            margin-bottom: 15px;
        }

        input {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: green;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        
    </style>
</head>
<body>
    <h1>Thêm tài khoản</h1>
    <form class="khoi" action="index.php?page_layout=themtaikhoan" method="POST">
        <div class="">
            <input type="text" name="tenDangNhap" id="" placeholder="Tên đăng nhập">
        </div>
        <div class="">
            <input type="password" name="matKhau" id="" placeholder="Mật khẩu">
        </div>
        <div class="">
            <input type="email" name="email" id="" placeholder="Email">
        </div>
        <div class="">
            <input type="text" name="hoTen" id="" placeholder="Họ và tên">
        </div>
        <div class="">
            <input type="date" name="ngaySinh" id="" placeholder="Ngày sinh">
        </div>
        <div class="">
            <input type="text" name="sdt" id="" placeholder="Số điện thoại">
        </div>
        <div class="">
            <input type="radio" name="gioiTinh" id="" value="1" checked> Nam
            <input type="radio" name="gioiTinh" id="" value="0"> Nữ
        </div>
        <button>Thêm</button>
    </form>

    <?php
        if(isset($_POST['tenDangNhap']) && 
           isset($_POST['matKhau']) && 
           isset($_POST['email']) && 
           isset($_POST['hoTen']) &&
           isset($_POST['ngaySinh']) &&
           isset($_POST['sdt']) &&
           isset($_POST['gioiTinh']))
        {
            $tenDangNhap = $_POST['tenDangNhap'];
            $matKhau = $_POST['matKhau'];
            $email = $_POST['email'];
            $hoTen = $_POST['hoTen'];
            $ngaySinh = $_POST['ngaySinh'];
            $sdt = $_POST['sdt'];
            $gioiTinh = $_POST['gioiTinh'];
       
            if(!empty($tenDangNhap) && 
                !empty($matKhau) && 
                !empty($email) && 
                !empty($hoTen) &&
                !empty($ngaySinh) &&
                !empty($sdt)){
                //người dùng nhập đủ thông tin

                $sql= "INSERT INTO `nguoi_dung`( `ten_dang_nhap`, `mat_khau`, `email`, `ho_ten`, `ngay_sinh`, `so_dien_thoai`, `gioi_tinh`) 
                VALUES ('$tenDangNhap','$matKhau','$email','$hoTen','$ngaySinh','$sdt','$gioiTinh')";

                $result = mysqli_query($conn, $sql);

                if($result){
                    header ("Location: index.php?page_layout=taikhoan");
                }else{
                    echo "Thêm người dùng thất bại";
                }
            }
            else{
                //người dùng nhập thiếu thông tin
                echo "<p style='color: red'>Vui lòng nhập đầy đủ thông tin</p>";
            }
        }

    ?>
</body>
</html>