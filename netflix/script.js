var danhSachPhim = [
    {
        id: 1, ten: "Masha", banner: "./anh/masha.jpg", trailer: "https://www.youtube.com/embed/U9U89oTYguA?si=xiA_0B_bY4WHdRpz"
    },
    {
        id: 2, ten: "Khó dỗ dành", banner: "./anh/phim2.jpg", trailer: "https://www.youtube.com/embed/IVDbvfp-Z0E?si=bZ5_eP66sWPXRaoJ"

    },
    {
        id: 3, ten: "Snoopy", banner: "./anh/phim3.jpg", trailer: "https://www.youtube.com/embed/c_kEJNJv_hE?si=qifQB06zRvpZoCro"
    },
    {
        id: 4, ten: "Nghề thế thân", banner: "./anh/phim4.jpg", trailer: "https://www.youtube.com/embed/cEnWPSXKXCU?si=AgSnRgm6WpCF6ROI"
    },
    {
        id: 5, ten: "Our beloved summer", banner: "./anh/Our beloved summer.jpg", trailer: "https://www.youtube.com/embed/--txgg1KI68?si=rmrUpsQ6TQBrjt9V"
    },
    {
        id: 6, ten: "Minions", banner: "./anh/haihuoc1.jpg", trailer: "https://www.youtube.com/embed/SX4VrP3fW8Q?si=Zla_B6sy3-moHXQe"
    },
    {
        id: 7, ten: "Oggy", banner: "./anh/haihuoc2.jpg", trailer: "https://www.youtube.com/embed/wfQSoT0cx2k?si=vxG2PrFOvpxla4Qu"
    },
    {
        id: 8, ten: "Doremon", banner: "./anh/doremon.jpg", trailer: "https://www.youtube.com/embed/8UbTYSkgl70?si=G4VlFtnS3_yXzV3R"
    },
    {
        id: 9, ten: "Bọt biển", banner: "./anh/haihuoc4.jpg", trailer: "https://www.youtube.com/embed/bZJDMcyfkFI?si=Vz-6NXsplqcqHU_M"
    },
    {
        id: 10, ten: "Gia đình là số 1", banner: "./anh/giadinhlaso1.jpg", trailer: "https://www.youtube.com/embed/p0bXT0nSiA0?si=6Eil2CwMdomClad6"
    },
    {
        id: 11, ten: "Hoạt hình tổng hợp", banner: "./anh/hoathinh1.jpg", trailer: "https://www.youtube.com/embed/O3Lpflwj5yg?si=UQgetifi2gH0f4dn"
    },
    {
        id: 12, ten: "Zootopia", banner: "./anh/hoathinh2.jpg", trailer: "https://www.youtube.com/embed/n8bL2-VZfXY?si=8Bv76mxx4vwDrKNv"
    },
    {
        id: 13, ten: "Shin", banner: "./anh/shin.jpg", trailer: "https://www.youtube.com/embed/2UtFv1K10_8?si=3rU_M5cSI1gMOjbR"
    },
    {
        id: 14, ten: "Woody", banner: "./anh/woody.jpg", trailer: "https://www.youtube.com/embed/6F8k_cJ3JPA?si=s1WrULUviprSsiI9"
    },
    {
        id: 15, ten: "Larva", banner: "./anh/lava.jpg", trailer: "https://www.youtube.com/embed/bfeoEf5BzUI?si=X4ZLsMDsa8g0xlKo"
    },
    {
        id: 16, ten: "Gấu masha", banner: "./anh/a1.jpg", trailer: "https://www.youtube.com/embed/T5S17ElgPhI?si=ovChCKrW3MdDVD16"
    },
    {
        id: 17, ten: "Toy", banner: "./anh/a2.jpg", trailer: "https://www.youtube.com/embed/cqqxRqnDuHg?si=wfrRWwpWW5nD7QXt"
    },
    {
        id: 18, ten: "Love next door", banner: "./anh/a3.jpg", trailer: "https://www.youtube.com/embed/oM9PDepMPUk?si=4756RcgxjgaudDQ_"
    },
    {
        id: 19, ten: "Doraemon1", banner: "./anh/a4.jpg", trailer: "https://www.youtube.com/embed/pzL_FW80zoY?si=fQ-5w-ZbX5wgJBg9"
    },
    {
        id: 20, ten: "Tom and jerry", banner: "./anh/tomandjerry.jpg", trailer: "https://www.youtube.com/embed/3YHO81QWQmU?si=UafyfkZUv6O4bzIa"
    },
    {
        id: 21, ten: "Turning red", banner: "./anh/b1.jpg", trailer: "https://www.youtube.com/embed/qRkXRgI0R10?si=iBIB7LSj8dK-aoXx"
    },
    {
        id: 22, ten: "2 ngày 1 đêm", banner: "./anh/b2.jpg", trailer: "https://www.youtube.com/embed/rhgSlq-RSHk?si=ujwL4E_KMU51d0Xf"
    },
    {
        id: 23, ten: "Về nhà đi con", banner: "./anh/venhadicon.jpg", trailer: "https://www.youtube.com/embed/8U5jz8uE2bA?si=MW47h5gPOdwvaLIZ"
    },
    {
        id: 24, ten: "Tây du ký", banner: "./anh/tayduky.jpg", trailer: "ttps://www.youtube.com/embed/hGhdUz8A4OI?si=eH8JQCuu2jxjMwfh"
    },
    {
        id: 25, ten: "Disney", banner: "./anh/b4.jpg", trailer: "https://www.youtube.com/embed/TeQ_TTyLGMs?si=Pmzdebjcx_k46WSj"
    },
    {
        id: 26, ten: "Red fish Blue fish", banner: "./anh/giaitri1.jpg", trailer: "https://www.youtube.com/embed/4fgFX95EIRM?si=VesWbKPeBExQZPLY"
    },
    {
        id: 27, ten: "Mighty little Bheem", banner: "./anh/giaitri2.jpg", trailer: "https://www.youtube.com/embed/-hlMFv7HjLU?si=PFKs6a_hIFZzoJ75"
    },
    {
        id: 28, ten: "Quà tặng cuộc sống", banner: "./anh/giaitri3.jpg", trailer: "https://www.youtube.com/embed/idpYDS8uYQE?si=vSBeKvBdPD0Neugi"
    },
    {
        id: 29, ten: "Mẹ", banner: "./anh/me.jpg", trailer: "https://www.youtube.com/embed/_x6oIMOFv4c?si=3sibH9rIDnWe1NWQ"
    },
    {
        id: 30, ten: "Thói sĩ diện", banner: "./anh/thoisydien.jpg", trailer: "https://www.youtube.com/embed/Mjb9dtYl8V0?si=bQRfw2eY3QAwbcWt"
    },
    
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