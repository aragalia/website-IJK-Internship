<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,
                wght@0,400..900;1,400..900&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,
                200..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
    <title>Document</title>
    <style>
        *{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    text-decoration: none;
    list-style: none;
    font-family: "Plus Jakarta Sans", serif;
}
body{
    background-color: #F9FAFB;

   
}
footer{
  margin-top: 150px;
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  background-color: #FFFFFF;
  padding: 20px;
  align-items: flex-end;
  
}

footer .fkiri{
  width: 351px;
  height: 225px;
  margin-top: 32px;
  margin-left: 88px;
  margin-bottom:32px;
}
footer .fkiri img{
  width: 264px;
  height: 39px;
  margin-left: -10px;
  

}
footer .fkiri h1{
  font-family: "Plus Jakarta Sans", serif;
  font-weight: 700;
  font-size: 16px;
  line-height: 24px;
  color:#0B1866;
  margin-top: 10px;
  margin-bottom: 10px;
}

footer .fkiri .infofotkiri{
  width: 100%;
  
} 
footer .fkiri .infofotkiri h5{
  font-family: "Plus Jakarta Sans", serif;
  font-weight: 400;
  font-size: 16px;
  line-height: 24px;
  color:#6B7280;
  text-align: justify;
}
footer .fkiri .infofotkiri span{
  font-family: "Plus Jakarta Sans", serif;
  font-weight: 400;
  font-size: 16px;
  line-height: 24px;
  color:#0B1765;
}
.buton {
  display: flex;
    align-items: center;
    margin-top: 10px;
    justify-content: flex-start;
}
.buton p{
  font-family: "Plus Jakarta Sans", serif;
  font-weight: 400;
  font-size: 16px;
  line-height: 24px;
  color:#0A1765;
  align-items: center;
  display: flex;
  margin-left: 15px;
}
footer .fkiri .buton button{
  width: 44px;
  height: 44px;
  border-radius: 50px;
  border: 1px solid #B4FB28;
  display: flex;
 justify-content: center;
 align-items: center;
  background-color: #B4FB28;
}
footer .fkiri .buton button a i{
  width: 40px;
  height: 40px;
  display: flex;
 justify-content: center;
 align-items: center;
}
footer .fkanan{
  width: 476px;
  height: 154px;
  margin-top: 88px;
  margin-right: 88px;
  display: flex;
  margin-left: 88px;
  align-items: flex-end;
}
footer .fkanan .headof h1{
  font-family: "Plus Jakarta Sans", serif;
  font-weight: 700;
  font-size: 16px;
  line-height: 20.16px;
  color:#0B1866;
  margin-bottom: 10px;
}
footer .fkanan .headof .jln{
  display: flex;
    margin-bottom: 10px;
}
footer .fkanan .headof .jln i{
  width: 20px;
  height: 20px;
  color: #0B1866;
  margin-right: 10px;
}
footer .fkanan .headof .jln p{
  font-family: "Inter", sans-serif;
  font-weight: 400;
  font-size: 14px;
  line-height: 20px;
  color: #111827;
  text-align: justify;
}


@media (max-width: 1024px) {
  footer {
    flex-direction: column;
    align-items: flex-start;
  }

  footer .fkiri {
    width: calc(100% - 40px); /* Mengurangi margin kiri dan kanan */
    margin-left: 20px;
    margin-right: 20px;
    margin-bottom: 0;
    padding: 0;
  }
  footer .fkanan {
    width: calc(100% - 40px);
    margin-left: 20px;
    margin-right: 20px;
    margin-top: 0; /* Menghapus jarak di atas */
    padding: 0;
  }
}


@media (max-width: 992px) {
  footer {
    flex-direction: column;
    align-items: flex-start;
  }

  footer .fkiri {
    width: calc(100% - 30px);
    margin-left: 15px;
    margin-right: 15px;
    margin-bottom: 0;
    padding: 0;
  }
  footer .fkanan {
    width: calc(100% - 30px);
    margin-left: 15px;
    margin-right: 15px;
    margin-top: 0; /* Menghapus jarak di atas */
    padding: 0;
  }
}


/* Responsivitas untuk layar 768px */
@media (max-width: 768px) {
  footer {
    flex-direction: column;
    align-items: flex-start;
  }

  footer .fkiri {
    width: calc(100% - 30px);
    margin-left: 15px;
    margin-right: 15px;
    margin-bottom: 0;
    padding: 0;
  }
  footer .fkanan {
    width: calc(100% - 30px);
    margin-left: 15px;
    margin-right: 15px;
    margin-top: 0; /* Menghapus jarak di atas */
    padding: 0;
  }
}

/* Responsivitas untuk layar 576px */
@media (max-width: 576px) {
  footer {
    flex-direction: column;
    align-items: flex-start;
  }

  footer .fkiri {
    width: calc(100% - 20px);
    margin-left: 10px;
    margin-right: 10px;
    margin-bottom: 0;
    padding: 0;
  }
  footer .fkanan {
    width: calc(100% - 20px);
    margin-left: 10px;
    margin-right: 10px;
    margin-top: 0; /* Menghapus jarak di atas */
    padding: 0;
  }
}

/* Responsivitas untuk layar 375px */
@media (max-width: 375px) {
  footer {
    flex-direction: column;
    align-items: flex-start;
  }

  footer .fkiri {
    width: calc(100% - 20px);
    margin-left: 10px;
    margin-right: 10px;
    margin-bottom: 0;
    padding: 0;
  }
  
  footer .fkanan {
    width: calc(100% - 20px);
    margin-left: 10px;
    margin-right: 10px;
    margin-top: 0; /* Menghapus jarak di atas */
    padding: 0;
  }
}

    </style>
</head>
<body>
<footer>
        <div class="fkiri">
            <img src="img/logo.png" alt="logo">
            <h1>SUPPORT & INFORMATION</h1>
            <div class="infofotkiri">
                <h5>If you have any questions, please contact us at <span>buatmerchandise.id@gmail.com</span> or you can call us at <span>+62852-1365-3330</span> for immediate assistance</h5>
            </div>
            <div class="buton">
            <button>
                <a href="https://www.instagram.com/buatmerchandise.id?igsh=NzR5dGlqb2Voamk="><i class="fa-brands fa-instagram"></i></a>
            </button>
           <p>@buatmerchandise.id</p>
            </div>
        </div>
        <div class="fkanan">
            <div class="headof">
                <h1>Head Office</h1>
                <div class="jln">
                    <i class="fa-solid fa-location-dot"></i>
                    <p>Gd. Epicentrum Walk 529A, Gd. HR Rasuna Said, Karet Kuningan, Jakarta Selatan 12940, DKI Jakarta, Indonesia</p>
                </div>
                <div class="jln">
                    <i class="fa-solid fa-location-dot"></i>
                    <p>Jl. Cakra Wijaya V No.4 Blok S, RT.5/RW.12, Cipinang Muara, Kecamatan Jatinegara, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13420</p>
                </div>

            </div>
        </div>
    </footer>
</body>
</html>