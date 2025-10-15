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
    <title>Detailproduk</title>
</head>
<body>
    <!--  header  -->
    <?php include 'headerafterlogin.php'; ?>  
    


    
    <section class="herocategory">
        <div class="teks-hero-category">
            <h1>CHECKOUT<br>MERCHANDISE MU</h1>
        </div>
        <div class="search-container-category">
            <input type="text" class="search-input-category" placeholder="Search">
            <button class="search-button-category">
                <i class="fa-solid fa-magnifying-glass"></i>
            </button>
        </div>
    </section>


    <div class="detailproduk">
        <div class="detailkiri">
            <div class="gambardetailproduk">
                <img id="mainImage" src="img/detailproduk.png" alt="gambar">
            </div>
            <div class="gambardetail-detail">
                <div class="imgdetail-detail-produk">
                    <img src="img/detailproduk.png" alt="0">
                </div>
                <div class="imgdetail-detail-produk">
                    <img src="img/detail-detail1.png" alt="1">
                </div>
                <div class="imgdetail-detail-produk">
                    <img src="img/detail-detail2.png" alt="2">
                </div>
                <div class="imgdetail-detail-produk">
                    <img src="img/detail-detail3.png" alt="3">
                </div>
                <div class="imgdetail-detail-produk">
                    <img src="img/detail-detail4.png" alt="4">
                </div>
            </div>

            <div class="judul-harga">
                <div class="namaproduk">
                    <h2>PLANNER WOOD 02</h2>
                </div>
                <div class="harga">
                    <div class="hargaproduk">
                        <p>Rp 77.400</p>
                    </div>
                    <div class="diskonproduk">
                        <p>RP 90.000</p>
                    </div>
                    <div class="potongan-harga">
                        <p>14%</p>
                    </div>
                </div>
            </div>
            <div class="desc-detail-harga">
                <div class="judul-desc">
                    <i class="fa-solid fa-circle-exclamation"></i>
                    <p>Deskripsi Produk</p>
                </div>
                <div class="teks-desc">
                    <p>Planner Wood 02 dirancang untuk memberikan kesan profesional dan elegan. Dengan desain semi k
                        ayu yang modern dan sentuhan klasik, planner ini menjadi pelengkap sempurna untuk gaya hidup 
                        yang dinamis dan terorganisir.</p>
                   <ul>
                    fitur :
                    <li>- Ukuran 150 x 221 x 21 mm</li>
                    <li>- Cover berbahan semi kayu, tersedia dalam warna cokelat muda dan cokelat tua</li>
                    <li>- Mekanisme rotasi 180° untuk kenyamanan maksimal</li>
                    <li>- Dilengkapi dengan kantong dalam untuk penyimpanan tambahan</li>
                    <li>- Proses logo: sablon, digital print, dan laser</li>
                   </ul>
                    <p>Planner ini ideal untuk para profesional yang menginginkan perpaduan antara fungsi dan estetika dalam satu paket.</p>
                </div>
            </div>
        </div>
        <div class="info-detail-produk">
            <h1>Order Now!</h1>
                <div class="pilih-category">
                    <p>Category</p>
                    <div class="dropdown-produk">
                        <button class="dropdown-button-produk">
                            <span class="button-text">Category</span>
                            <i class="fa-solid fa-chevron-down arrow-icon"></i>
                        </button>
                        <div class="dropdown-menu-produk">
                            <div class="dropdown-item-produk" onclick="selectCategory('Stationary', this)">Stationary</div>
                            <div class="dropdown-item-produk" onclick="selectCategory('Apparel', this)">Apparel</div>
                            <div class="dropdown-item-produk" onclick="selectCategory('Electronic', this)">Electronic</div>
                        </div>
                    </div>

                    <p>Color</p>
                    <div class="dropdown-produk">
                        <button class="dropdown-button-produk">
                            <span class="button-text">Color</span>
                            <i class="fa-solid fa-chevron-down arrow-icon"></i>
                        </button>
                        <div class="dropdown-menu-produk">
                            <div class="dropdown-item-produk" onclick="selectCategory('Blue', this)">Blue</div>
                            <div class="dropdown-item-produk" onclick="selectCategory('Green', this)">Green</div>
                            <div class="dropdown-item-produk" onclick="selectCategory('Brown', this)">Brown</div>
                        </div>
                    </div>
                    <p>Customize Method</p>
                    <div class="buton-category">
                         <button class="button" id="button1">UV</button>
                        <button class="button" id="button2">GRAFIR</button>
                    </div>
                    <p>Quantity</p>
                    <div class="inputquantity">
                        <i class="fa-solid fa-database"></i>
                        <input type="text" class="input-nilai-quantity" placeholder="Quantity">
                        <p>pcs</p>
                    </div>
                    <div class="infokecil">
                        <h5 id="minimum-notice">* Minimum Purchase 20 pcs</h5>
                    </div>
                    <p>Deadline Date</p>
                    <div class="date-container">
                        <input type="date" id="datePicker">
                    </div>
                    <p>Note</p>
                    <div class="textarea-container">
                         <textarea id="largeTextBox" placeholder="Type here..."></textarea>
                     </div>
                     <div class="file-input-container">
                        <label for="fileInput" class="custom-file-label">Choose File</label>
                        <input type="file" id="fileInput">
                        <div class="file-name" id="fileName">No file chosen</div>
                    </div>
                    <div class="harga-submit">
                        <h6>Total Price</h6>
                        <h1>Rp 5.418.000</h1>
                        <p>Price for 100 pcs</p>
                        <a href="checkout.php">
                            <button class="buton-order" id="order-button">
                                <i class="fa-solid fa-cart-plus"></i>
                                <p>Add to Cart</p>
                            </button>
                        </a>
                    </div>
                        
                </div> 
        </div>
    </div>
    <div class="produk-lain">
        <h1>Produk Lainnya</h1>
        <div class="produk-produklain">
        <div class="box-produk">
            <img src="img/produklain1.png" alt="1">
            <div class="nama-produklain">
                <p>AGENDA LEATHER PURSE NAVY</p>
            </div>
            <div class="harga-produklain">
                <p>RP 70.000</p>
            </div>
            <div class="diskon-produklain">
                <h6>RP 100.000</h6>
                <p>30%</p>
            </div>
        </div>
        <div class="box-produk">
            <img src="img/produklain2.png" alt="2">
            <div class="nama-produklain">
                <p>STICKY NOTES PAD LEATHER NAVY</p>
            </div>
            <div class="harga-produklain">
                <p>RP 45.000</p>
            </div>
            <div class="diskon-produklain">
                <h6>RP 60.000</h6>
                <p>25%</p>
            </div>
        </div>
        <div class="box-produk">
            <img src="img/produklain3.png" alt="3">
            <div class="nama-produklain">
                <p>NOTEBOOK PU LEATHER</p>
            </div>
            <div class="harga-produklain">
                <p>RP 30.250</p>
            </div>
            <div class="diskon-produklain">
                <h6>RP 55.000</h6>
                <p>45%</p>
            </div>
        </div>
        <div class="box-produk">
            <img src="img/produklain4.png" alt="4">
            <div class="nama-produklain">
                <p>STICKY NOTES PAD LEATHER BROWN</p>
            </div>
            <div class="harga-produklain">
                <p>RP 40.200</p>
            </div>
            <div class="diskon-produklain">
                <h6>RP 60.000</h6>
                <p>33%</p>
            </div>
        </div>
        <div class="box-produk">
            <img src="img/produklain5.png" alt="5">
            <div class="nama-produklain">
                <p>AGENDA PLANNER WOOD</p>
            </div>
            <div class="harga-produklain">
                <p>RP 77.400</p>
            </div>
            <div class="diskon-produklain">
                <h6>RP 90.000</h6>
                <p>14%</p>
            </div>
        </div>
        <div class="box-produk">
            <img src="img/produklain1.png" alt="">
            <div class="nama-produklain">
                <p>AGENDA LEATHER PURSE NAVY</p>
            </div>
            <div class="harga-produklain">
                <p>RP 70.000</p>
            </div>
            <div class="diskon-produklain">
                <h6>RP 100.000</h6>
                <p>30%</p>
            </div>
        </div>
        </div>
    </div>
   

<!--  footer  -->
<?php include 'footer.php'; ?>  



    <script>
        const fileInput = document.getElementById("fileInput");
        const fileName = document.getElementById("fileName");

        fileInput.addEventListener("change", () => {
            if (fileInput.files.length > 0) {
                fileName.textContent = fileInput.files[0].name;
            } else {
                fileName.textContent = "No file chosen";
            }
        });
    </script>








    <script>
        const button1 = document.getElementById('button1');
const button2 = document.getElementById('button2');

button1.addEventListener('click', () => {
  button1.classList.add('active');
  button2.classList.remove('active');
});

button2.addEventListener('click', () => {
  button2.classList.add('active');
  button1.classList.remove('active');
});
    </script>

















    <script>
   document.querySelectorAll('.dropdown-button-produk').forEach((button) => {
    button.addEventListener('click', () => {
        const menu = button.nextElementSibling; // Dropdown menu
        const icon = button.querySelector('.arrow-icon'); // Pastikan memilih elemen dengan kelas 'arrow-icon'

        // Tutup semua dropdown lain sebelum membuka yang diklik
        document.querySelectorAll('.dropdown-menu-produk').forEach((otherMenu) => {
            if (otherMenu !== menu) {
                otherMenu.style.display = 'none';
                otherMenu.previousElementSibling.querySelector('.arrow-icon').classList.remove('rotate');
            }
        });

        // Tampilkan/hidden dropdown menu yang diklik
        const isMenuVisible = menu.style.display === 'block';
        menu.style.display = isMenuVisible ? 'none' : 'block';
        icon.classList.toggle('rotate', !isMenuVisible);
    });
});








// Ambil elemen gambar utama
const mainImage = document.getElementById('mainImage');

// Ambil semua gambar kecil
const thumbnails = document.querySelectorAll('.imgdetail-detail-produk img');

// Tambahkan event listener ke setiap gambar kecil
thumbnails.forEach(thumbnail => {
    thumbnail.addEventListener('click', function() {
        // Ubah src gambar utama dengan src gambar yang diklik
        mainImage.src = this.src;
    });
});










// Event listener untuk tombol order
document.getElementById("order-button").addEventListener("click", function (event) {
    const quantityInput = document.querySelector(".input-nilai-quantity");
    const minimumNotice = document.getElementById("minimum-notice");
    const inputQuantityContainer = document.querySelector(".inputquantity");
    const quantityValue = parseInt(quantityInput.value, 10); // Konversi nilai input ke angka

    // Validasi input
    if (isNaN(quantityValue) || quantityValue < 20) {
        event.preventDefault(); // Mencegah aksi default tombol
        minimumNotice.style.color = "red"; // Ubah warna teks menjadi merah
        inputQuantityContainer.style.border = "2px solid red"; // Tambahkan garis tepi merah
        inputQuantityContainer.style.backgroundColor = "#ffe6e6"; // Tambahkan warna latar belakang merah muda
        
        // Tambahkan animasi shake
        inputQuantityContainer.classList.add("shake");
        setTimeout(() => inputQuantityContainer.classList.remove("shake"), 500); // Hapus animasi setelah 500ms
    } else {
        minimumNotice.style.color = "#9CA3AF"; // Reset warna teks ke default
        inputQuantityContainer.style.border = ""; // Hapus border merah
        inputQuantityContainer.style.backgroundColor = ""; // Hapus warna latar belakang
        
    }
});

// Event listener untuk menghapus alert merah saat pengguna mulai mengetik ulang
document.querySelector(".input-nilai-quantity").addEventListener("input", function () {
    const minimumNotice = document.getElementById("minimum-notice");
    const inputQuantityContainer = document.querySelector(".inputquantity");

    // Reset efek visual
    minimumNotice.style.color = "#9CA3AF"; // Kembali ke warna default
    inputQuantityContainer.style.border = ""; // Reset border
    inputQuantityContainer.style.backgroundColor = ""; // Reset warna latar belakang
});



    </script>
</body>
</html>