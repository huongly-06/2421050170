<?php
    echo $_GET['ID'];
    sql = "DELETE FROM `NGUOI-DUNG` WHERE id ='$id';
    mysqli_query($conn, $sql);
    header("Location: index.php?page_layout=taikhoan");
?>