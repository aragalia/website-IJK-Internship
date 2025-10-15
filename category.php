<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/category.css">
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
    <title>category marchendise</title>
</head>
<body>
    <!--  header  -->
  <?php include 'headerafterlogin.php'; ?>  






    
    <section class="herocategory">
        <div class="hero-cat">
        <div class="teks-hero-category">
        CHECKOUT<br>MERCHANDISE MU
        </div>
        <div class="search-container-category">
            <input type="text" class="search-input-category" placeholder="Search">
            <button class="search-button-category">
                <i class="fa-solid fa-magnifying-glass"></i>
            </button>
        </div>
        </div>
    </section>






    <section class="produk-category">
        <div class="pilih-category">
            <h3>Category</h3>
            <ul class="checklist">
                <li>
                    <input type="checkbox" id="apparel">
                    <label for="apparel">Apparel</label>
                </li>
                <li>
                    <input type="checkbox" id="electronic">
                    <label for="electronic">Electronic</label>
                </li>
                <li>
                    <input type="checkbox" id="flashdisk">
                    <label for="flashdisk">Flashdisk</label>
                </li>
                <li>
                    <input type="checkbox" id="stationary">
                    <label for="stationary">Stationary</label>
                </li>
                <li>
                    <input type="checkbox" id="tumbler">
                    <label for="tumbler">Tumbler</label>
                </li>
                <li>
                    <input type="checkbox" id="agenda">
                    <label for="agenda">Agenda</label>
                </li>
            </ul>
            <div class="judul-harga">Harga</div>
            <div class="slider-container">
                 <input type="range" id="price-slider" min="0" max="300000" value="150000">
                 <div class="price-label">Rp <span id="price-value">150000</span></div>
            </div>
        </div>














        <div class="pilih-produk">
            <div class="header-produk">
                <div class="search-container-category-produk">
                    <input type="text" class="search-input-category" placeholder="Search">
                    <button class="search-button-category-produk">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </div>
                <a href="#"><p class="populer">Populer</p></a>
                <a href="#"><p class="terbaru">Terbaru</p></a>
                <a href="#"><p class="terlaris">Terlaris</p></a>
            </div>
            <div class="produk-produk">
                <a href="detailproduk.php">
                <div class="produks" >
                    <img src="img/produk1.png" alt="tote">
                    <div class="nama-produk-category">
                        <h2>AGODA PLANNER WOOD</h2>
                    </div>
                    <div class="harga-produk-category">
                        <p class="price">RP 77.400</p>
                    </div>
                    <div class="diskon-produk-category">
                        <p class="original-price">RP 90.000 </p>
                        <p class="harga-persen">25%</p>
                    </div>
                </div>
                </a>
                <a href="detailproduk.php">
                <div class="produks" >
                    <img src="img/produk2.png" alt="tote">
                    <div class="nama-produk-category">
                        <h2>NOTEBOOK WOOD DARK BROWN</h2>
                    </div>
                    <div class="harga-produk-category">
                        <p class="price">RP 35.000</p>
                    </div>
                    <div class="diskon-produk-category">
                        <p class="original-price">RP 50.000 </p>
                        <p class="harga-persen">30%</p>
                    </div>
                </div>
                </a>
                <a href="detailproduk.php">
                <div class="produks" >
                    <img src="img/produk3.png" alt="tote">
                    <div class="nama-produk-category">
                        <h2>PLANNER WOOD COKLAT MUDA</h2>
                    </div>
                    <div class="harga-produk-category">
                        <p class="price">RP 77.400</p>
                    </div>
                    <div class="diskon-produk-category">
                        <p class="original-price">RP 90.000 </p>
                        <p class="harga-persen">14%</p>
                    </div>
                </div>
                </a>
                <a href="detailproduk.php">
                <div class="produks" >
                    <img src="img/produk4.png" alt="tote">
                    <div class="nama-produk-category">
                        <h2>NOTEBOOK LEATHER WITH PEN</h2>
                    </div>
                    <div class="harga-produk-category">
                        <p class="price">RP 41.400</p>
                    </div>
                    <div class="diskon-produk-category">
                        <p class="original-price">RP 60.000 </p>
                        <p class="harga-persen">31%</p>
                    </div>
                </div>
                </a>
                <a href="detailproduk.php">
                <div class="produks" >
                    <img src="img/produk5.png" alt="tote">
                    <div class="nama-produk-category">
                        <h2>AGENDA LEATHER PURSE NAVY</h2>
                    </div>
                    <div class="harga-produk-category">
                        <p class="price">RP 70.000</p>
                    </div>
                    <div class="diskon-produk-category">
                        <p class="original-price">RP 100.000 </p>
                        <p class="harga-persen">30%</p>
                    </div>
                </div>
                </a>
                <a href="detailproduk.php">
                <div class="produks" >
                    <img src="img/produk6.png" alt="tote">
                    <div class="nama-produk-category">
                        <h2>STICKY NOTES PAD LEATHER NAVY</h2>
                    </div>
                    <div class="harga-produk-category">
                        <p class="price">RP 45.000</p>
                    </div>
                    <div class="diskon-produk-category">
                        <p class="original-price">RP 60.000 </p>
                        <p class="harga-persen">25%</p>
                    </div>
                </div>
                </a>
                <a href="detailproduk.php">
                <div class="produks" >
                    <img src="img/produk7.png" alt="tote">
                    <div class="nama-produk-category">
                        <h2>NOTEBOOK PU LEATHER</h2>
                    </div>
                    <div class="harga-produk-category">
                        <p class="price">RP 30.250</p>
                    </div>
                    <div class="diskon-produk-category">
                        <p class="original-price">RP 55.000 </p>
                        <p class="harga-persen">45%</p>
                    </div>
                </div>
                </a>
                <a href="detailproduk.php">
                <div class="produks" >
                    <img src="img/produk8.png" alt="tote">
                    <div class="nama-produk-category">
                        <h2>STICKY NOTES PAD LEATHER BROWN</h2>
                    </div>
                    <div class="harga-produk-category">
                        <p class="price">RP 40.200</p>
                    </div>
                    <div class="diskon-produk-category">
                        <p class="original-price">RP 60.000 </p>
                        <p class="harga-persen">33%</p>
                    </div>
                </div>
                </a>
                <a href="detailproduk.php">
                <div class="produks" >
                    <img src="img/produk9.png" alt="tote">
                    <div class="nama-produk-category">
                        <h2>AGENDA LEATHER DELUXE</h2>
                    </div>
                    <div class="harga-produk-category">
                        <p class="price">RP 75.000</p>
                    </div>
                    <div class="diskon-produk-category">
                        <p class="original-price">RP 100.000 </p>
                        <p class="harga-persen">25%</p>
                    </div>
                </div>
                </a>
                <a href="detailproduk.php">
                <div class="produks" >
                    <img src="img/produk10.png" alt="tote">
                    <div class="nama-produk-category">
                        <h2>AGENDA LEATHER STRAP</h2>
                    </div>
                    <div class="harga-produk-category">
                        <p class="price">RP 32.400</p>
                    </div>
                    <div class="diskon-produk-category">
                        <p class="original-price">RP 45.000 </p>
                        <p class="harga-persen">28%</p>
                    </div>
                </div>
                </a>
                <a href="detailproduk.php">
                <div class="produks" >
                    <img src="img/produk11.png" alt="tote">
                    <div class="nama-produk-category">
                        <h2>STICKY NOTES PAD</h2>
                    </div>
                    <div class="harga-produk-category">
                        <p class="price">RP 20.300</p>
                    </div>
                    <div class="diskon-produk-category">
                        <p class="original-price">RP 35.000 </p>
                        <p class="harga-persen">42%</p>
                    </div>
                </div>
                </a>
                <a href="detailproduk.php">
                <div class="produks" >
                    <img src="img/produk12.png" alt="tote">
                    <div class="nama-produk-category">
                        <h2>PEN METAL</h2>
                    </div>
                    <div class="harga-produk-category">
                        <p class="price">RP 7.200</p>
                    </div>
                    <div class="diskon-produk-category">
                        <p class="original-price">RP 12.000 </p>
                        <p class="harga-persen">40%</p>
                    </div>
                </div>
                </a>
                
            </div>
        </div>
    </section>










<!--  footer  -->
<?php include 'footer.php'; ?> 










    <script>
        const slider = document.getElementById('price-slider');
        const priceValue = document.getElementById('price-value');

        slider.addEventListener('input', function() {
            priceValue.textContent = slider.value;
        });
    </script>
</body>   