<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/pesanan-saya.css">
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
    <title>Pesanan Saya</title>
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

<div class="container-kanan-pesanansaya">
  <div class="container-pesanansaya">
    <a href="pesanan-saya-belumbayar.php" class="belum-bayar">Belum Bayar</a>
    <a href="pesanan-saya-dikemas.php" class="dikemas">Dikemas</a>
    <a href="pesanansaya-dikirim.php" class="dikirim">Dikirim</a>
    <a href="pesanan-saya-selesai.php" class="selesai">Selesai</a>
  </div>
  
  <div class="produk-pesanansaya">
    <div class="isi-kosong">
        <img src="img/kosong1.png" alt="kosong">
        <h1>Pesanan masih kosong, <br>
        yuk belanja sekarang!</h1>
    </div>
  </div>

</div>






  </div>
  















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