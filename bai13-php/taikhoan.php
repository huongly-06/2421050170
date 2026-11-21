<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            width: 100%;
            /* border-collapse: collapse;  */
            margin-top: 15px; 
        }
        tr,th,td{
            border: 1px solid black;
            padding: 8px; 
        }
        .btn-add{
            display: block; 
            width: 150px; 
            background-color: green;
            color: white;
            padding: 10px 15px;
            text-decoration: none;
            border-radius: 5px;
            margin-bottom: 20px; 
        }
        .capnhat{
            background-color: green;
        }
        .xoa{
            background-color: red;
        }
    </style>
</head>
<body>
    <h1>Tài khoản</h1>
    <div>
        <a class="btn-add" href ="index.php?page_layout=themtaikhoan"></a>
    </div>
    <?php
        $sql = "select * from nguoi_dung";
        $result = mysqli_query($conn, $sql);
    ?>

    <div>
        <table>
            <tr>
                <th>ID</th>
                <th>Tên đang nhập</th>
                <th>email</th>
                <th>Họ tên</th>
                <th>Ngày sinh</th>
                <th>Số điện thoại</th>
                <th>Giới tính</th>
                <th>Chức năng</th>
            </tr>
            <?php
                while($row = mysqli_fetch_array($result)){
            ?>
            <tr>
                <td><?php echo $row ['id'] ?></td>
                <td><?php echo $row ['ten_dang_nhap'] ?></td>
                <td><?php echo $row ['email'] ?></td>
                <td><?php echo $row ['ho_ten'] ?></td>
                <td><?php echo $row ['ngay_sinh'] ?></td>
                <td><?php echo $row ['so_dien_thoai'] ?></td>
                <td><?php echo $row ['gioi_tinh'] == true?"Nam":"Nữ" ?></td>
                <td>
                    <a class="capnhat" href="index.php?page_layout=capnhattaikhoan&id=<?php echo $row['id']?>">Cập nhật</a>
                    <a class="xoa" href="index.php?page_layout=xoataikhoan.php&id=<?php echo $row['id']?>">Xoá</a>
                </td>
            </tr>
            <?php
                }
            ?>
        </table>
    </div>
</body>
</html>