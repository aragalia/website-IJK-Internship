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
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            text-decoration: none;
            list-style: none;
            font-family: "Plus Jakarta Sans", serif;
        }

        body {
            background-color: #F9FAFB;
        }

        header {
            width: 100%;
            height: 68px;
            background-color: #F9FAFB;
            display: flex;
            align-items: center;
            position: fixed;
            top: 0;
            z-index: 1000;
        }

        header .headnav {
            width: 100%;
            margin: 0 56px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header .navbar ul {
            display: flex;
            gap: 41px;
        }

        header .navbar ul li a {
            color: #111827;
            font-size: 14px;
            font-weight: 500;
        }
        header .navbar ul li a:hover {
            color: #0B1765; /* Warna font saat dihover */
         }
        .log {
            display: flex;
            gap: 12px;
            align-items: center;
        }

        .log .profil {
            display: flex;
            gap: 10px;
            align-items: center;
            position: relative;
        }

         .potoprofil img ,
         .sidebar-potoprofil img{
            width: 37px;
            height: 37px;
            border-radius: 50%;
        }

         .namaprofil {
            display: flex;
            flex-direction: column;
            cursor: pointer;
        }

         .nama-nama-profil {
            display: flex;
            gap: 6px;
            align-items: center;
        }
         .nama-nama-profil h1{
            font-family: "Plus Jakarta Sans", serif;
            font-weight: 500;
            font-size: 15px;
            line-height: 18px;
            color:#111827;
        }
        .dropdown-menu {
            display: none; /* Awalnya dropdown disembunyikan */
            position: absolute;
            top: 60px; /* Atur posisi dropdown */
            right: 0;
            width: 150px;
            background-color: #ffffff;
            border: 1px solid #e5e7eb;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 10px 20px;
            z-index: 1000;
        }

        .dropdown-menu::before {
            content: '';
            position: absolute;
            top: -10px; /* Posisi segitiga di atas dropdown */
            right: 20px; /* Sesuaikan jarak segitiga dari kanan */
            width: 16px; /* Lebar segitiga */
            height: 16px; /* Tinggi segitiga */
            background-color: #ffffff; /* Warna segitiga */
            border-left: 1px solid #e5e7eb; /* Border kiri segitiga */
            border-top: 1px solid #e5e7eb; /* Border atas segitiga */
            transform: rotate(45deg); /* Membuat bentuk segitiga */
            z-index: 1001; /* Supaya segitiga berada di atas */
        
        }

        .dropdown-menu a {
            display: block;
            color: #111827;
            font-size: 14px;
            margin-bottom: 8px;
            text-decoration: none;
        }

        .dropdown-menu a:hover {
            color: #2563eb;
        }

        .dropdown-menu:last-child {
            margin-bottom: 0;
        }

        .dropdown-active .dropdown-menu {
            display: block; /* Tampilkan dropdown jika active */
        }

        .notif img{
            width: 20px;
            height: 20px;
            display: flex;
            align-items: center;
         }
         .cart i{
            color: #0B1866;
         }
         
    .sidebar-profil {
    position: relative; /* Untuk membuat dropdown menu muncul relatif terhadap elemen ini */
    display: flex;
   
    }

    .sidebar-potoprofil{
        display: none;
    }
    .menu-bar{
  display: none;
}
.menu-bar i{
  font-size: 20px;
  cursor: pointer;
}

.sidebar-profil .dropdown-menu {
    display: none; /* Awalnya dropdown disembunyikan */
    position: absolute;
    top: 60px; /* Jarak dari elemen potoprofil */
    right: 10px; /* Sesuaikan posisi ke kanan */
    width: 150px;
    background-color: #ffffff;
    border: 1px solid #e5e7eb;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    padding: 10px 20px;
    z-index: 1000;
}

.sidebar-profil .dropdown-menu::before {
    content: '';
    position: absolute;
    top: -10px; /* Posisi segitiga di atas dropdown */
    right: 20px; /* Sesuaikan jarak segitiga dari kanan */
    width: 16px;
    height: 16px;
    background-color: #ffffff;
    border-left: 1px solid #e5e7eb;
    border-top: 1px solid #e5e7eb;
    transform: rotate(45deg);
    z-index: 1001;
}

.sidebar-profil .dropdown-menu a {
    display: block;
    color: #111827;
    font-size: 14px;
    margin-bottom: 8px;
    text-decoration: none;
}

.sidebar-profil .dropdown-menu a:hover {
    color: #2563eb;
}

.sidebar-profil.dropdown-active .dropdown-menu {
    display: block; /* Tampilkan dropdown jika elemen memiliki class dropdown-active */
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



@media (max-width: 800px){
.sidebar-potoprofil{
    display: block;
}
    .hidemobile{
    display: none;
  }
  .potoprofil{
    display: none;
  }
  .namaprofil{
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
                    <img src="img/logo.png" alt="logo">
                </a>
            </div>
            <div class="navbar">
                <ul>
                <li class="hidemobile"><a href="index.php#kategori">Category</a></li>
                <li class="hidemobile"><a href="index.php#catalog">Catalog</a></li>
                <li class="hidemobile"><a href="index.php#aboutus">About Us</a></li>
                <li class="hidemobile"><a href="index.php#porto">Portfolio</a></li>
                </ul>
            </div>
            <div class="log">
                <div class="notif">
                    <img src="img/notif.png" alt="notif">
                </div>
                <div class="cart">
                    <a href="cart.php">
                        <i class="fa-solid fa-cart-shopping"></i>
                    </a>
                </div>
                <div class="profil">
                    <div class="potoprofil">
                        <img src="img/potopofil.png" alt="profile picture">
                    </div>
                    <div class="namaprofil" id="dropdown-trigger">
                        <p>Hello</p>
                        <div class="nama-nama-profil">
                            <h1>Mawar</h1>
                            <i class="fa-solid fa-caret-down"></i>
                        </div>
                    </div>
                    <div class="dropdown-menu">
                        <a href="myaccount.php">Profil</a>
                        <a href="pesanan-saya.php">Pesanan Saya</a>
                        <a href="logout.php">Logout</a>
                    </div>
                </div>
                <div class="sidebar-profil">
                    <div class="sidebar-potoprofil" id="sidebar-dropdown-trigger">
                        <img src="img/potopofil.png" alt="profile picture">
                    </div>
                    <div class="dropdown-menu">
                        <a href="myaccount.php">Profil</a>
                        <a href="pesanan-saya.php">Pesanan Saya</a>
                        <a href="logout.php">Logout</a>
                    </div>
                    <div class="menu-bar" onclick="showsidebar()"><i class="fa-solid fa-bars"></i></div>
                </div>
                <ul class="sidebar">
                <li onclick="hidesidebar()"><a href="#"><i class="fa-solid fa-xmark"></i></a></li>
                <li><a href="index.php#kategori">Category</a></li>
                <li><a href="index.php#catalog">Catalog</a></li>
                <li><a href="index.php#aboutus">About Us</a></li>
                <li><a href="index.php#porto">Portfolio</a></li>
            </ul>
            </div>
        </div>
    </header>

    <script>
     // Toggle dropdown untuk elemen .profil
document.getElementById('dropdown-trigger').addEventListener('click', function () {
    const profilContainer = this.parentElement;
    profilContainer.classList.toggle('dropdown-active');
});

// Toggle dropdown untuk elemen .sidebar-profil
document.getElementById('sidebar-dropdown-trigger').addEventListener('click', function () {
    const sidebarProfilContainer = this.parentElement;
    sidebarProfilContainer.classList.toggle('dropdown-active');
});

// Menutup dropdown saat klik di luar elemen
window.addEventListener('click', function (event) {
    const profilDropdown = document.querySelector('.profil');
    const sidebarDropdown = document.querySelector('.sidebar-profil');

    if (!profilDropdown.contains(event.target)) {
        profilDropdown.classList.remove('dropdown-active');
    }

    if (!sidebarDropdown.contains(event.target)) {
        sidebarDropdown.classList.remove('dropdown-active');
    }
});

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
</html>
