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
    

    <div class="container-kanan-address">
        <div class="judul-address">
            <p class="judul-name-add">Alamat Saya</p>
            <a href="#continer-popup-add">
            <button class="tambah-add">
                <i class="fa-solid fa-plus"></i>
                <p>Tambah Alamat Baru</p>
            </button></a>
        </div>
        <div class="daftar-alamat">
            <div class="alamat-tersimpan">
                <div class="title-detail-telpon">
                    <div class="title">Home</div>
                    <div class="detail">Jl. Lebak Bulus I No.2, 
                        Cilandak Bar., Kec. Cilandak, Kota Jakarta 
                        Selatan, Daerah Khusus Ibukota Jakarta 12430  </div>
                    <div class="telpon">+62 895 7763 8263</div>
                </div>
                <div class="gambar-maps">
                    <img src="img/add1.1.png" alt="add">
                </div>
            </div>
            <div class="edit-hapus">
                    <a href="#">Edit</a>
                    <a href="#">Hapus</a>
            </div>
        </div>
        <div class="daftar-alamat">
            <div class="alamat-tersimpan">
                <div class="title-detail-telpon">
                    <div class="title">Office</div>
                    <div class="detail">EPICENTRUM WALK, 529 A, 
                        Karet Kuningan, Kecamatan Setiabudi, JAKARTA, 
                        Daerah Khusus Ibukota Jakarta 12940 </div>
                    <div class="telpon">+62 895 7763 8263</div>
                </div>
                <div class="gambar-maps">
                    <img src="img/add2.2.png" alt="add">
                </div>
            </div>
            <div class="edit-hapus">
                    <a href="#">Edit</a>
                    <a href="#">Hapus</a>
            </div>
        </div>
        <div class="daftar-alamat">
            <div class="alamat-tersimpan">
                <div class="title-detail-telpon">
                    <div class="title">Grandma’s Home</div>
                    <div class="detail">Jl. BSD Raya Utama, Lengkong 
                        Kulon, Kec. Pagedangan, Kabupaten Tangerang, 
                        Banten 15331 </div>
                    <div class="telpon">+62 895 7763 8263</div>
                </div>
                <div class="gambar-maps">
                    <img src="img/add1.1.png" alt="add">
                </div>
            </div>
            <div class="edit-hapus">
                    <a href="#">Edit</a>
                    <a href="#">Hapus</a>
            </div>
        </div>
        <a href="myaccount.php">
        <div class="buton-save">
            <button class="save">Save Change</button>
        </div>
        </a>
    </div>
  </div>



  <div class="continer-popup-add" id="continer-popup-add">
        <div class="continer-popup-address">
            <div class="container-atas">
                <div class="container-kiri">
                    <div class="isi-kiri">
                        <h1 class="title">Title</h1>
                        <div class="continer-input">
                            <input type="text" id="isi-title" name="isi-title" placeholder="contoh : rumah">
                        </div>
                    </div>
                    <div class="isi-kiri">
                        <h1 class="Provinsi">Provinsi</h1>
                        <div class="continer-input">
                            <input type="text" id="isi-Provinsi" name="isi-Provinsi" placeholder="ex : Jawa Barat">
                        </div>
                    </div>
                    <div class="isi-kiri">
                        <h1 class="Kecamatan">Kecamatan</h1>
                        <div class="continer-input">
                            <input type="text" id="isi-Kecamatan" name="isi-Kecamatan" placeholder="ex : Cikarang Barat">
                        </div>
                    </div>
                </div>
                <div class="container-kanan">
                    <div class="isi-kanan">
                        <h1 class="Telp">No.Telp</h1>
                        <div class="continer-input">
                            <input type="tel" id="isi-Telp" name="isi-Telp" placeholder="ex : +62 8957283493">
                        </div>
                    </div>
                    <div class="isi-kanan">
                        <h1 class="Kota">Kota</h1>
                        <div class="continer-input">
                            <input type="text" id="isi-Kota" name="isi-Kota" placeholder="ex : Bekasi">
                        </div>
                    </div>
                    <div class="isi-kanan">
                        <h1 class="Kode-Pos">Kode Pos</h1>
                        <div class="continer-input">
                            <input type="text" id="isi-Kode-Pos" name="isi-Kode-Pos" placeholder="ex: 17530">
                        </div>
                    </div>
                </div>
            </div>
            <div class="isi-tengah">
                <h1 class="Address">Address</h1>
                <div class="continer-Address">
                    <textarea placeholder="Nama Jalan, Gedung, No Rumah"></textarea>
                </div>
            </div>
            <div class="checkbox-container">
                <input type="checkbox" id="default-checkbox">
                <label for="default-checkbox">Atur sebagai default</label>
            </div>
            <div class="buton">
                <a href="#"><div class="buton-batal">
                    Batalkan
                </div></a>
                <a href="#"><div class="buton-savec">
                    Save Change
                </div></a>
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