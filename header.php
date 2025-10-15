<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/home.css">
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
    <title>home marchendise</title>
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



header {
    width: 100%;
    height: 68px;
    background-color: #F9FAFB;
    display: flex;
    align-items: center; /* Agar item di tengah secara vertikal */
    position: fixed; /* Bisa diubah ke absolute atau sticky tergantung kebutuhan */
    top: 0; /* Jika menggunakan sticky */
    z-index: 1000;
  }
  
  header .headnav {
    width: 100%;
    margin: 0 56px; /* Agar elemen berada di tengah */
    display: flex;
    justify-content: space-between; /* Menyebar elemen dengan jarak antar elemen */
    align-items: center; /* Posisi elemen vertikal di tengah */
  }
  
  header .headnav .logo img {
    max-height: 100%; /* Agar logo menyesuaikan ukuran header */
    cursor: pointer;
  }
  
  header .navbar ul {
    display: flex;
    padding: 0;
    margin: 0;
    height: 21px;
    gap: 41px; /* Jarak antar item navbar */
  }
  
  header .navbar ul li a {
    color: #111827;
    font-family: "Plus Jakarta Sans", serif;
    font-weight: 400;
    font-size: 14px;
    line-height: 21px;
  }
  header .navbar ul li a:hover {
    color: #0B1765; /* Warna font saat dihover */
  }

  header .headnav .log {
    display: flex;
    gap: 6px; 
    
    
  }
  header .headnav .log .login{
    width: 95px;
    height: 41px;
    border-radius: 60px;
    padding: 10px;
    gap: 10;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #0B1765;
  }
  header .headnav .log .login a{
    font-family: "Plus Jakarta Sans", serif;
    font-weight: 700;
    font-size: 14px;
    line-height: 21px;
    color: #FFFFFF;
    
  }
  
  header .headnav .log .regis {
    width: 95px;
    height: 41px;
    border-radius: 60px;
    padding: 10px; /* Pastikan ada satuan */
    gap: 10px; /* Tambahkan satuan */
    border: 1px solid #0B1765;
    display: flex;
    justify-content: center;
    align-items: center;
    font-family: "Plus Jakarta Sans", serif;
    font-weight: 700;
    font-size: 14px;
    line-height: 21px;
    background-color: transparent;
    transition: all 0.3s ease;
}

header .headnav .log .regis a {
    text-decoration: none; /* Menghilangkan underline */
    color: #0B1765;
  
    text-align: center;
    line-height: 41px; /* Agar teks berada di tengah */
    border-radius: 60px; /* Sama dengan parent untuk efek hover */
}

header .headnav .log .regis:hover {
    background-color: #0B1765;
}

header .headnav .log .regis:hover a {
    color: #FFFFFF; /* Ubah warna teks saat hover */
}

  
.sidebar{
  position: fixed;
  top: 0;
  right:0;
  height:100vh;
  width:250px;
  z-index: 1001;
  background-color: white;
  box-shadow: -10px 0 10px rgba(0,0,0, 0.1);
  display:none;
  flex-direction:column;
  align-items:flex-start;
  justify-content:flex-start;
  
  
}
.sidebar li a{
  color: #111827;
    font-family: "Plus Jakarta Sans", serif;
    font-weight: 400;
    font-size: 14px;
    line-height: 21px;
    
}
.sidebar li{
  width: 100%;
  height:50px;
  align-items: center;
    display: flex;
    padding: 0 20px;
}
.sidebar li:hover{
  background-color:#D9D9D9;
}
/* Menargetkan elemen <li> tertentu yang memiliki atribut onclick="hidesidebar()" */
.sidebar li[onclick="hidesidebar()"]:hover {
  background-color: transparent; /* Tidak ada warna latar belakang */
}
.sidebar li a i{
  font-size: 25px;
}
.menu-bar{
  display: none;
}
.menu-bar i{
  font-size: 20px;
  cursor: pointer;
}
@media (max-width: 800px){
  .hidemobile{
    display: none;
  }
  .menu-bar{
    display: block;
    margin : auto ;
    margin-left: 20px;
  }
}
@media (max-width: 400px){
  .sidebar{
    width: 100%;
  }
}
    </style>
</head>
<body>
    <header>
    <div class="headnav">
        <div class="logo">
          <a href="index.php">
            <img src="img/logo.png" alt="logo"></a>
        </div>
        <div class="navbar">
            <ul>
                <li class="hidemobile"><a href="index.php#kategori">Category</a></li>
                <li class="hidemobile"><a href="index.php#catalog">Catalog</a></li>
                <li class="hidemobile"><a href="index.php#aboutus">About Us</a></li>
                <li class="hidemobile"><a href="index.php#porto">Portfolio</a></li>
            </ul>
        </div>
        <ul class="sidebar">
                <li onclick="hidesidebar()"><a href="#"><i class="fa-solid fa-xmark"></i></a></li>
                <li><a href="index.php#kategori">Category</a></li>
                <li><a href="index.php#catalog">Catalog</a></li>
                <li><a href="index.php#aboutus">About Us</a></li>
                <li><a href="index.php#porto">Portfolio</a></li>
            </ul>
        <div class="log">
            <div class="login"><a href="login.php">Login</a></div>
            <div class="regis"><a href="registrasi.php">Register</a></div>
            <div class="menu-bar" onclick="showsidebar()"><i class="fa-solid fa-bars"></i></div>
        </div>
        
    </div>
    </header>
    <script>
      function showsidebar(){
        const sidebar = document.querySelector('.sidebar')
        sidebar.style.display = 'flex'
      }
      function hidesidebar(){
        const sidebar = document.querySelector('.sidebar')
        sidebar.style.display = 'none'
      }
    </script>
</body>