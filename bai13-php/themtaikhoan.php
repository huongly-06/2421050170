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
    <form action="" method="POST">
        <div class="">
            <input type="text" name="tenDangNhap" id="" placeholder="Tên Đăng Nhập">
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
            <input type="datet" name="ngaySinh" id="" placeholder="Ngày sinh">
        </div>
        <div class="">
            <input type="text" name="sdt" id="" placeholder="Số điện thoại">
        </div>
</body>
</html>