<?php
    //Nội dung chú thích php
    echo "Hello world! <br>";  // in ra màn hình
    //Biến: $Tên biến = giá trị;
    $hoTen = "Hương Ly";

    $tuoi = 20;
    // nối chuỗi trong php dùng dấu .
    echo $hoTen . " " . $tuoi . "<br> ";

    // Trả về độ dài chuỗi: strlen()
    echo strlen ($hoTen) . "<br>";

    // Đếm số từ: str_word_count()
    echo str_word_count($hoTen)."<br>";

    // Tìm kiếm kí tự trong chuỗi: strpos()
    echo strpos($hoTen, "y"). "<br>";

    // Thay thế kí tự trong chuoi
    echo str_replace("Hương", "Do", $hoTen) . "<br>";

    $soThuNhat = 10;
    $soThuHai = 5;
    //Phep cong
    $ketqua = $soThuNhat + $soThuHai ;
    echo $ketqua . "<br>";
    //Phep tru
    echo $soThuNhat - $soThuHai . "<br>";
    //Phep nhan
    echo $soThuNhat * $soThuHai . "<br>";
    //Phep chia
    echo $soThuNhat / $soThuHai . "<br>";
    //Phep chia lay du
    echo $soThuNhat % $soThuHai . "<br>";

    //Toán tử gán
    // +=, -=, *=, /=, %=
    $soThuNhat += $soThuHai;
    echo $soThuNhat . "<br>";

    //Toan tu so sanh: ==; !=; >; <; >=; <=; ===
    echo $soThuNhat != $soThuHai . "<br>";
    
    //Câu điều kiện
    // if("Điều kiện){
            //logic
    //  }
    //  elseif("Điều kiện"){
            //logic
    //  }else{
            //logic
    //  }
    
    if($ketqua < 15){
        echo "Nhỏ hơn 15";
    }elseif($ketqua == 15){
        echo "Tổng = 15";
    }else{
        echo "Lớn hơn 15";
    }

    //Switch case
    
    $color = "red";
    switch($color){
        case "red":
            echo "<br>";
            echo "IS RED <br>";
            break;
        case "blue":
            echo "<br>";
            echo "IS BLUE <br>";
            break;
        default:
            echo "<br>";
            echo "no color <br>";
            break;
    }

    //for
    for($i = 0; $i <10; $i++){
        echo $i . "<br>";
    }

    //Mảng
    echo "<br>";

    $mang = ["Ly", "Huong Ly", "Minh Hong"];
    //Đếm ptu
    echo count ($mang). "<br>";
    echo $mang[1] . "<br>";

    //Them ptu vao mang
    $mang[] = "Phuong Ngan";
    print_r($mang);

    //xoa ptu trong mang
    echo "<br>";
    unset($mang[3]);
    print_r($mang);
?>