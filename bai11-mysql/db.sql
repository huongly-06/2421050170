CREATE DATABASE netflix;

-- Table nguoi dung
id INT
ten_dang_nhap VARCHAR(30)
mat_khau VARCHAR(30)
email VARCHAR(30)
ho_ten VARCHAR(50)
ngay_sinh DATE
so_dien_thoai VARCHAR(10)
gioi_tinh boolean. -- true: nam / false: nu

CREATE TABLE if NOT EXISTS nguoi_dung(
    id INT AUTO_INCREMENT PRIMARY KEY,
    ten_dang_nhap VARCHAR(30) NOT NULL,
    mat_khau VARCHAR(30) NOT NULL,
    email VARCHAR(30) NOT NULL,
    ho_ten VARCHAR(50) NOT NULL,
    ngay_sinh DATE NOT NULL,
    so_dien_thoai VARCHAR(10) NOT NULL,
    gioi_tinh boolean NOT NULL
);

-- Table the loai
CREATE TABLE if NOT EXISTS the_loai(
    id INT AUTO_INCREMENT PRIMARY KEY,
    ten_the_loai VARCHAR(255) NOT NULL
)


-- Table dien_vien
CREATE Table if NOT EXISTS dien_vien(
    id INT AUTO_INCREMENT PRIMARY KEY,
    ho_ten VARCHAR (100) NOT NULL,
    ngay_sinh DATE NOT NULL
)

-- Table dao_dien
CREATE Table if NOT EXISTS dao_dien(
    id INT AUTO_INCREMENT PRIMARY KEY,
    ho_ten VARCHAR (100) NOT NULL,
    ngay_sinh DATE NOT NULL
)


-- phim
CREATE Table if NOT EXISTS phim(
    id INT AUTO_INCREMENT PRIMARY KEY,
    ten_phim VARCHAR(255) NOT NULL,
    quoc_gia VARCHAR(100) NOT NULL,
    dao_dien_id INT NOT NULL,
    nam datetime NOT NULL,
    do_tuoi INT NOT NULL,
    mo_ta VARCHAR(255) NOT NULL
)


--phim_the_loai
CREATE Table if NOT EXISTS phim_the_loai(
    id INT AUTO_INCREMENT PRIMARY KEY,
    phim_id INT NOT NULL,
    the_loai_id INT NOT NULL
)

-- phim_dien_vien
CREATE Table if NOT EXISTS phim_dien_vien(
    id INT AUTO_INCREMENT PRIMARY KEY,
    phim_id INT NOT NULL, 
    dien_vien_id INT NOT NULL
)
-- thêm thông tin vào bảng dien vien

INSERT INTO `dien_vien`( `ho_ten`, `ngay_sinh`) VALUES ('Đỗ Hương Ly','2006-07-11');
INSERT INTO `dien_vien`( `ho_ten`, `ngay_sinh`) VALUES ('Lê Thị Minh Hồng','2006-03-30');
INSERT INTO `dien_vien`( `ho_ten`, `ngay_sinh`) VALUES ('Nguyễn Phương Ngân','2006-10-16');
INSERT INTO `dien_vien`( `ho_ten`, `ngay_sinh`) VALUES ('Lee Min Hoo','2993-09-23');
INSERT INTO `dien_vien`( `ho_ten`, `ngay_sinh`) VALUES ('Trần Huy Phúc','2008-05-25');

-- thong tin bang dao dien
INSERT INTO `dao_dien`( `ho_ten`, `ngay_sinh`) VALUES ('Lý Hải','1968-09-26');
INSERT INTO `dao_dien`( `ho_ten`, `ngay_sinh`) VALUES ('Trấn Thành','1987-02-05');
INSERT INTO `dao_dien`( `ho_ten`, `ngay_sinh`) VALUES ('Vũ Ngọc Đãng','1974-10-23');
INSERT INTO `dao_dien`( `ho_ten`, `ngay_sinh`) VALUES ('Ngô Thanh Vân','1979-02-26');
INSERT INTO `dao_dien`( `ho_ten`, `ngay_sinh`) VALUES ('Victor Vũ','1975-11-25');

-- thong tin bang ng dung
INSERT INTO `nguoi_dung`( `ten_dang_nhap`, `mat_khau`, `email`, `ho_ten`, `ngay_sinh`, `so_dien_thoai`, `gioi_tinh`) VALUES ('hly','abc','hly@gmail.com','Đỗ Hương Ly','2006-07-11','0961079306', '0');
INSERT INTO `nguoi_dung`( `ten_dang_nhap`, `mat_khau`, `email`, `ho_ten`, `ngay_sinh`, `so_dien_thoai`, `gioi_tinh`) VALUES ('pngan','xyz','pngan@gmail.com','Nguyễn Phương Ngân','2006-10-16','0974995173', '0');
INSERT INTO `nguoi_dung`( `ten_dang_nhap`, `mat_khau`, `email`, `ho_ten`, `ngay_sinh`, `so_dien_thoai`, `gioi_tinh`) VALUES ('mhong','djdh','mhong@gmail.com','Lê Thị Minh Hồng','2006-03-30','0961079456', '0');
INSERT INTO `nguoi_dung`( `ten_dang_nhap`, `mat_khau`, `email`, `ho_ten`, `ngay_sinh`, `so_dien_thoai`, `gioi_tinh`) VALUES ('tuong','jsjs','tuong@gmail.com','Đỗ Việt Anh','2006-07-15','0961079378', '1');
INSERT INTO `nguoi_dung`( `ten_dang_nhap`, `mat_khau`, `email`, `ho_ten`, `ngay_sinh`, `so_dien_thoai`, `gioi_tinh`) VALUES ('qchi','jdh','qchi@gmail.com','Nguyễn Thị Quỳnh CHi','2006-05-16','0961079392', '0');

-- thong tin phim 

INSERT INTO `phim` (`ten_phim`, `quoc_gia`, `dao_dien_id`, `nam`, `do_tuoi`, `mo_ta`) 
VALUES 
('Mắt Biếc', 'Việt Nam', 1, 2019, '16+', 'Phim chuyển thể từ tiểu thuyết cùng tên'),
('Lật Mặt 6', 'Việt Nam', 2, 2023, '16+', 'Phim hành động, tâm lý kịch tính'),
('Nhà Bà Nữ', 'Việt Nam', 3, 2023, '16+', 'Phim xoay quanh chủ đề gia đình, xã hội'),
('Bố Già', 'Việt Nam', 3, 2021, '13+', 'Phim tâm lý tình cảm gia đình cảm động'),
('Hai Phượng', 'Việt Nam', 5, 2019, '18+', 'Phim hành động võ thuật đặc sắc');

--phim dien vien
INSERT INTO `phim_dien_vien` (`phim_id`, `dien_vien_id`) VALUES (1, 1);
INSERT INTO `phim_dien_vien` (`phim_id`, `dien_vien_id`) VALUES (1, 2);
INSERT INTO `phim_dien_vien` (`phim_id`, `dien_vien_id`) VALUES (2, 3);
INSERT INTO `phim_dien_vien` (`phim_id`, `dien_vien_id`) VALUES (3, 4);
INSERT INTO `phim_dien_vien` (`phim_id`, `dien_vien_id`) VALUES (4, 5);

-- phim the loai
INSERT INTO `phim_the_loai` (`phim_id`, `the_loai_id`) VALUES (1, 1);
INSERT INTO `phim_the_loai` (`phim_id`, `the_loai_id`) VALUES (2, 3);
INSERT INTO `phim_the_loai` (`phim_id`, `the_loai_id`) VALUES (3, 2);
INSERT INTO `phim_the_loai` (`phim_id`, `the_loai_id`) VALUES (4, 4);
INSERT INTO `phim_the_loai` (`phim_id`, `the_loai_id`) VALUES (5, 5);