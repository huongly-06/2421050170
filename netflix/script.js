var danhSachPhim = [
    {
        id: 1,
        ten: "Cảnh sát trưởng Labrado",
        thoiLuong: 20,
        banner: "./anh/haihuoc1.jpg",
        trailer: "https://www.youtube.com/embed/wCkerYMffMo?si=MYGPicMs-xqiGA-0"
    },
    {
        id: 2,
        ten: "oggy",
        thoiLuong: 15,
        banner: "./anh/haihuoc2.jpg",
        trailer: "https://www.youtube.com/embed/pxiOAfQWNNc?si=k0O_EbkP5a62fx-h"

    }
    
]
var phimDangChon = danhSachPhim[0];
var trailer = document.getElementsByClassName("banner-anh")[1];
var banner = document.getElementsByClassName("banner-anh")[0];

function xemTrailer(){
    //An banner
    document.getElementsByClassName("banner-anh")[0].style = "display: none";
    //Hien trailer
    document.getElementsByClassName("banner-anh")[1].style = "display: block";
}

function chonPhim(id){

    for (var i = 0; i<danhSachPhim.length; i++){
        if(danhSachPhim[i].id == id){
            debugger
            banner.src = danhSachPhim[i].banner;
            trailer.src = danhSachPhim[i].trailer;
            banner.style = "display: block";
            trailer.style = "display: none";
        }
    }
}