<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="css/detailproduk.css">
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
    <title>notif</title>


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
    background-color:rgb(30, 30, 31);
}
.notifikasi{
    width: 331px;
    height: auto;
    margin: 0 auto; /* This centers the element horizontally */
    box-sizing: border-box;
    padding: 20px;
    position: absolute;
    left: 50%;
    background-color:#F9FAFB;
    display: flex;
    flex-direction: column;
    gap:10px;
}
.notifikasi h1{
    font-family: "Plus Jakarta Sans", serif;
    font-weight: 700;
    font-size: 8px;
    line-height: 12px;
    color: #000000;
}
.continer-notif{
    display: flex;
    gap:10px;
    padding:3px;
    cursor: pointer;
}
.continer-notif:hover{
    background-color: #F3F4F6;
}
.notif-img img{
    width: 40px;
    height: 40px;
}
.judul-notif {
    font-family: "Plus Jakarta Sans", serif;
    font-weight: 700;
    font-size: 10px;
    line-height: 15px;
    color: #000000;

}
.isi-notif {
    font-family: "Plus Jakarta Sans", serif;
    font-weight: 400;
    font-size: 8px;
    line-height: 12px;
    color: #000000;
    text-align: justify;
}
.tampil-notif{
    width: 100%;
    margin: auto;
    font-family: "Plus Jakarta Sans", serif;
    font-weight: 700;
    font-size: 8px;
    line-height: 12px;
    color: #000000;
    text-align: center;
}
.tampil-notif:hover{
    color:#0B1765;
}
    </style>
</head>
<body>
    <div class="notifikasi">
        <h1>Notifikasi Baru Diterima</h1>
        <div class="continer-notif">
            <div class="notif-img">
                <img src="img/detailproduk.png" alt="1">
            </div>
            <div class="notif-conten">
                <h2 class="judul-notif">Pesanan selesai</h2>
                <p class="isi-notif">Terima kasih telah berbelanja di buatmerchandise.id! Kami harap Anda puas dengan layanan kami. Sampai jumpa di pesanan berikutnya!</p>
            </div>
        </div>
        <div class="continer-notif">
            <div class="notif-img">
                <img src="img/detailproduk.png" alt="1">
            </div>
            <div class="notif-conten">
                <h2 class="judul-notif">Pesanan akan dikirim</h2>
                <p class="isi-notif">Pesanan Anda siap dikirim! Kami akan segera menyerahkannya ke jasa pengiriman. Mohon pantau status pengiriman Anda melalui nomor resi yang akan kami informasikan.</p>
            </div>
        </div>
        <div class="continer-notif">
            <div class="notif-img">
                <img src="img/detailproduk.png" alt="1">
            </div>
            <div class="notif-conten">
                <h2 class="judul-notif">Pesanan sedang di kemas</h2>
                <p class="isi-notif">Pesanan Anda sedang dalam proses pengemasan oleh tim kami. Harap tunggu, pesanan akan segera dikirim ke alamat Anda.</p>
            </div>
        </div>
        <div class="continer-notif">
            <div class="notif-img">
                <img src="img/detailproduk.png" alt="1">
            </div>
            <div class="notif-conten">
                <h2 class="judul-notif">Selesaikan Full Payment</h2>
                <p class="isi-notif">Pembayaran pelunasan DP sebesar Rp 7.184.880 untuk pesanan Anda telah berhasil. Selanjutnya, segera lunasi pembayaran untuk memproses pengiriman pesanan Anda.</p>
            </div>
        </div>
        <div class="continer-notif">
            <div class="notif-img">
                <img src="img/detailproduk.png" alt="1">
            </div>
            <div class="notif-conten">
                <h2 class="judul-notif">Pesanan sedang di proses</h2>
                <p class="isi-notif">Pesanan Anda sedang dalam proses pembuatan mockup dan sampel. Kami akan segera menginformasikan Anda setelah proses selesai.</p>
            </div>
        </div>
        <div class="continer-notif">
            <div class="notif-img">
                <img src="img/detailproduk.png" alt="1">
            </div>
            <div class="notif-conten">
                <h2 class="judul-notif">Selesaikan DP Payment</h2>
                <p class="isi-notif">Pembayaran DP sebesar Rp 7.184.880 untuk pesanan Anda telah berhasil. Selanjutnya, segera lunasi pembayaran untuk memproses pengiriman pesanan Anda.</p>
            </div>
        </div>
        <a href="#">
            <div class="tampil-notif">Tampilkan Semua</div>
        </a>
    </div>
    
</body>
</html>