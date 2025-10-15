<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/myaccount.css">
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
    <title>myprofile</title>
</head>
<body>
         <!--  header  -->
  <?php include 'headerafterlogin.php'; ?> 




  <div class="container">


    <div class="container-kiri">
      
      <div class="profile">
        <a href="myaccount.php"><img src="img/potopofil.png" alt=""></a>
        <div class="nama-email-profile">
          <h1 class="name">Your name</h1>
          <h1 class="email">yourname@gmail.com</h1>
        </div>
      </div>
      <hr>
      <div class="container-myprofil">
        <div class="myaccount" id="toggleMyAccount">
            <div class="myaccount-kiri">
                <i class="fa-regular fa-user"></i>
                <p>My Account</p>
            </div>
            <i class="fa-solid fa-chevron-down arrow"></i>
        </div>
        <div class="isi-myaccount" id="myAccountContent">
            <a href="myaccount-myprofile.php">
                <div class="isi-myaccount-profil">
                    <p>My Profile</p>
                </div>
            </a>
            <a href="myaccount-address.php">
                <div class="isi-myaccount-add">
                    <p>Address</p>
                </div>
            </a>
            <a href="myaccount-pw.php">
                <div class="isi-myaccount-pw">
                    <p>Change Password</p>
                </div>
            </a>
            <a href="pesanan-saya.php">
                <div class="isi-myaccount-pesanan">
                    <p>Pesanan Saya</p>
                </div>
            </a>
        </div>
        <div class="notif">
        <i class="fa-regular fa-bell"></i>
        <p>Notification</p>
      </div>
      </div>
    </div>
    

    <div class="container-kanan">
        <div class="isi-profile">
            <img src="img/potopofil.png" alt="">
            <div class="isi-nama-email">
                <p class="nama-nama">Rita Kusmana</p>
                <p class="email-email">ritakusmana@gmail.com</p>
            </div>
        </div>
        <hr>
        <div class="isi-nama">
            <p class="judul-judul">Name</p>
            <p class="isi-isi">Ratna Kusmana</p>
        </div>
        <hr>
        <div class="isi-email">
            <p class="judul-judul">Email account</p>
            <p class="isi-isi">ritakusmana@gmail.com</p>
        </div>
        <hr>
        <div class="isi-nomor">
            <p class="judul-judul">Mobile number </p>
            <p class="isi-isi">088878986888</p>
        </div>
        <hr>
        <div class="isi-location">
            <p class="judul-judul">Location</p>
            <p class="isi-isi">Indonesia</p>
        </div> 
    </div>
  </div>














<!--  footer  -->
<?php include 'footer.php'; ?> 




  <script>
    const toggleMyAccount = document.getElementById('toggleMyAccount');
    const myAccountContent = document.getElementById('myAccountContent');
    const arrowIcon = toggleMyAccount.querySelector('.arrow');

    toggleMyAccount.addEventListener('click', () => {
        myAccountContent.classList.toggle('show');
        arrowIcon.classList.toggle('rotate');

        // Toggle visibility of the dropdown
        if (myAccountContent.style.display === 'block') {
            myAccountContent.style.display = 'none';
        } else {
            myAccountContent.style.display = 'block';
        }
    });
</script>
</body>
</html>