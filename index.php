<?php
session_start();
?>


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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
    <title>home marchendise</title>
</head>
<body>
<?php
    // Tampilkan header yang sesuai dengan status login
    if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
        include 'headerafterlogin.php';
    } else {
        include 'header.php';
    }
    ?>






    <section class="hero-home">
        <div class="hero">
        <div class="teks-hero">
        BUAT RELASI <br>
        MAKIN TERKESAN
        </div>
        <div class="search-container">
            <input type="text" class="search-input" placeholder="Search">
            <button class="search-button">
                <i class="fa-solid fa-magnifying-glass"></i>
            </button>
        </div>
        </div>
    </section>






    <div class="kategori fade-in-up" id="kategori">
        <div class="tekscat">
            <h1>Category</h1>
        </div>
        <div class="categ">
            <a href="category.php" >
                <div class="part">
                        <img src="img/cat1.png" alt="satu">
                        <h1>Tumbler</h1>
                </div>
            </a>
            <a href="category.php" >
                <div class="part">
                        <img src="img/cat2.png" alt="satu">
                        <h1>Apparel</h1>
                </div>
            </a>
            <a href="category.php" >
                <div class="part">
                        <img src="img/cat3.png" alt="satu">
                        <h1>Electronic</h1>
                </div>
            </a>
            <a href="category.php" >
                <div class="part">
                        <img src="img/cat4.png" alt="satu">
                        <h1>Flashdisk</h1>
                </div>
            </a>
            <a href="category.php" >
                <div class="part">
                        <img src="img/cat5.png" alt="satu">
                        <h1>Stationary</h1>
                </div>
            </a>
            <a href="category.php" >
                <div class="part">
                        <img src="img/cat6.png" alt="satu">
                        <h1>nametag &
                        card holder</h1>
                </div>
            </a>
            <a href="category.php" >
                <div class="part">
                        <img src="img/cat7.png" alt="satu">
                        <h1>Umbrella</h1>
                </div>
            </a>
            <a href="category.php" >
                <div class="part">
                        <img src="img/cat8.png" alt="satu">
                        <h1>Calendar</h1>
                </div>
            </a>
            <a href="category.php" >
                <div class="part">
                        <img src="img/cat9.png" alt="satu">
                        <h1>Gift box</h1>
                </div>
            </a>
           
               
        </div>
    </div>




    <section class="bs fade-in-up" id="bs">
        <div class="judulbs">
            <p>Best Seller</p>
        </div>
        <div class="produkbs">
            <a href="detailproduk.php">
                <div class="produks" >
                    <img src="img/totebag.png" alt="tote">
                    <div class="nama-produk-category">
                        <h2>TOTEBAG CUSTOM FULL PRINT</h2>
                    </div>
                    <div class="harga-produk-category">
                        <p class="price">RP 45.360</p>
                    </div>
                    <div class="diskon-produk-category">
                        <p class="original-price">RP 54.000 </p>
                        <p class="harga-persen">16%</p>
                    </div>
                </div>
            </a>
            <a href="detailproduk.php">
                <div class="produks" >
                    <img src="img/tumbler.png" alt="tote">
                    <div class="nama-produk-category">
                        <h2>TUMBLER BARISTA</h2>
                    </div>
                    <div class="harga-produk-category">
                        <p class="price">RP 76.500</p>
                    </div>
                    <div class="diskon-produk-category">
                        <p class="original-price">RP 85.000 </p>
                        <p class="harga-persen">10%</p>
                    </div>
                </div>
            </a>
            <a href="detailproduk.php">
                <div class="produks" >
                    <img src="img/pin.png" alt="tote">
                    <div class="nama-produk-category">
                        <h2>TUMBLER LED</h2>
                    </div>
                    <div class="harga-produk-category">
                        <p class="price">RP 65.600</p>
                    </div>
                    <div class="diskon-produk-category">
                        <p class="original-price">RP 80.000 </p>
                        <p class="harga-persen">18%</p>
                    </div>
                </div>
            </a>
            <a href="detailproduk.php">
                <div class="produks" >
                    <img src="img/pen.png" alt="tote">
                    <div class="nama-produk-category">
                        <h2>PIN CUSTOM</h2>
                    </div>
                    <div class="harga-produk-category">
                        <p class="price">RP 4.500</p>
                    </div>
                    <div class="diskon-produk-category">
                        <p class="original-price">RP 15.000 </p>
                        <p class="harga-persen">70%</p>
                    </div>
                </div>
            </a>
            <a href="detailproduk.php">
                <div class="produks" >
                    <img src="img/tambler led.png" alt="tote">
                    <div class="nama-produk-category">
                        <h2>PEN CUSTOM GRAFIR</h2>
                    </div>
                    <div class="harga-produk-category">
                        <p class="price">RP 15.000</p>
                    </div>
                    <div class="diskon-produk-category">
                        <p class="original-price">RP 30.000 </p>
                        <p class="harga-persen">50%</p>
                    </div>
                </div>
            </a>
        </div>
    </section>




    <div class="customer fade-in-up" id="customer">
        <div class="judulcus">
            <p>Our Customer</p>
        </div>
        <div class="carouselcutom">
            <img src="img/daihatsu.png" alt="dai">
            <img src="img/mandiri.png" alt="mandiri">
            <img src="img/pln.png" alt="pln">
            <img src="img/bumn.png" alt="bumn">
            <img src="img/lazada.png" alt="lazada">
            <img src="img/dikti.png" alt="kemen">
        </div>
    </div>




    
    <div class="catalog fade-in-left" id="catalog">
    <div class="judulcatalog fade-in-right">
            <h1>Catalog</h1>
        </div>
        <div class="contencatalog">
            <div class="imgcatalog">
                <img src="img/katalog.jpeg" alt="katalog">
            </div>
            <div class="tekscatalog">
                <p>Jelajahi berbagai produk eksklusif kami yang dirancang khusus untuk 
                    memenuhi kebutuhan Anda. Mulai dari merchandise unik, custom design, 
                    hingga produk spesial lainnya-semua ada di sini!</p>
                <p>Apakah Anda mencari souvenir unik untuk acara kantor, hadiah istimewa, 
                    atau produk custom lainnya? Jelajahi pilihan lengkap kami dan temukan 
                    yang paling cocok untuk kebutuhan Anda!</p>
                
                    <a href="category.php" target="_blank">
                        <div class="buton-buton">
                            <p>Lihat Katalog Disini</p>
                        </div>
                    </a>
            </div>
            
        </div>
    </div>









    <div class="aboutus fade-in-left" id="aboutus">
        <div class="judulaboutus">
            <h1>About Us</h1>
        </div>
        <div class="contenabout">
        <div class="teksabout fade-in-right">
                <p><span>BuatMerchandise.id</span> adalah platform terpercaya yang menyediakan 
                    merchandise dengan berbagai pilihan produk untuk memenuhi kebutuhan merchandise 
                    Anda. Mulai dari <span>gathering kantor, merchandise untuk promosi, juga pemesanan merchandise 
                    dalam jumlah ratusan hingga ribuan.</span> </p>
                    <br>
                <p><span>BuatMerchandise.id</span> memiliki layanan <span>custom desain</span> pada produk-produk 
                    yang ditawarkan. Dengan berbagai pilihan merchandise dan dukungan tim profesional, 
                    kami berkomitmen membantu Anda menciptakan kesan mendalam dan kenangan tak terlupakan 
                    melalui <span>BuatMerchandise.id</span></p>
            </div>
            <div class="imgabout">
                <img src="img/about-us.jpeg" alt="">
            </div>
        </div>
    </div>







    <div class="porto fade-in-up" id="porto">
        <div class="judulporto">
            <h1>Portofolio</h1>
        </div>
        <i id="left" class="fa-solid fa-chevron-left"></i>
        <div class="porto-porto">
            <img src="img/porto1-1.jpeg" alt="1">
            <img src="img/porto2-2.jpeg" alt="1">
            <img src="img/porto3-3.jpeg" alt="1">
            <img src="img/porto4-4.jpeg" alt="1">
            <img src="img/porto5-5.jpeg" alt="1">
            <img src="img/porto6-6.jpeg" alt="1">
        </div>
        <i id="right" class="fa-solid fa-chevron-right"></i>
    </div>  








    <div class="faq fade-in-up" id="faq">
        <div class="judulfaq">
            <h1>FAQ</h1>
        </div>
        <div class="faq-container">
            <div class="faq-item">
                <div class="faq-question">
                    <h3>Apa saja jenis merchandise yang tersedia di BuatMerchandise.id?</h3>
                    <i class="fa-solid fa-angle-down arrow"></i>
                </div>
                <div class="faq-answer">
                    Kami menyediakan berbagai pilihan merchandise seperti kaos, tote bag, tumbler, mug, topi, notebook, dan masih banyak lagi. Semua produk dapat disesuaikan dengan desain yang Anda inginkan.
                </div>
            </div>
        </div>
        <div class="faq-container">
            <div class="faq-item">
                <div class="faq-question">
                    <h3>Berapa lama waktu produksi merchandise custom?</h3>
                    <i class="fa-solid fa-angle-down arrow"></i>
                </div>
                <div class="faq-answer">
                Waktu produksi bergantung dengan kebutuhan jumlah pesanan, metode customize yang diminta, juga antrian saat pemesanan. Hubungi kami untuk mendapatkan estimasi waktu produksi.
                </div>
            </div>
        </div>
        <div class="faq-container">
            <div class="faq-item">
                <div class="faq-question">
                    <h3>Apakah terdapat ketentuan terkait format file design yang harus disiapkan?</h3>
                    <i class="fa-solid fa-angle-down arrow"></i>
                </div>
                <div class="faq-answer">
                    Design dengan high resolution sangat direkomendasikan. Format yang perlu disiapkan berupa PNG/JPG/PDF.
                </div>
            </div>
        </div>
        <div class="faq-container">
            <div class="faq-item">
                <div class="faq-question">
                    <h3>Apakah ada jumlah minimum pemesanan?</h3>
                    <i class="fa-solid fa-angle-down arrow"></i>
                </div>
                <div class="faq-answer">
                    Jumlah minimum pemesanan ditentukan berdasarkan produk yang dibutuhkan. Informasi detail tentang minimum order dapat ditemukan di halaman produk masing-masing.
                </div>
            </div>
        </div>
        <div class="faq-container">
            <div class="faq-item">
                <div class="faq-question">
                    <h3>Bagaimana dengan waktu layanan operational?</h3>
                    <i class="fa-solid fa-angle-down arrow"></i>
                </div>
                <div class="faq-answer">
                Operasional waktu layanan kami adalah sebagai berikut: <br>
                Senin - Jumat: 08:00 - 18:00 WIB <br>
                Sabtu - Minggu: 09:00 - 15:00 WIB
                </div>
            </div>
        </div>
        <div class="faq-container">
            <div class="faq-item">
                <div class="faq-question">
                    <h3>Bagaimana dengan ketentuan pembayaran yang berlaku?</h3>
                    <i class="fa-solid fa-angle-down arrow"></i>
                </div>
                <div class="faq-answer">
                Customer dapat melakunan DP 25% untuk approval sample, pembayaran 50% sebelum produksi keseluruhan, pelunasan H-1 pengiriman.
                </div>
            </div>
        </div>
    </div>








    <!--  footer  -->
<?php include 'footer.php'; ?> 






<script>
     const carousel = document.querySelector(".porto-porto"),
        firstImg = carousel.querySelectorAll("img")[0];
        arrowIcons = document.querySelectorAll(".porto i");

        let isDragStart = false, prevPageX, prevScrollLeft;
        let firstImgWidth = firstImg.clientWidth + 14;

        const showHideIcons = () =>{
            arrowIcons[0].style.display = carousel.scrollLeft == 0 ? "none" : "block";
        }

        arrowIcons.forEach(icon =>{
            icon.addEventListener("click", () =>{
                carousel.scrollLeft += icon.id == "left" ? -firstImgWidth : firstImgWidth;
                setTimeout(() => showHideIcons(), 60);
            });
        });

        const dragStart = (e) =>{
            isDragStart = true;
            prevPageX = e.pageX;
            prevScrollLeft = carousel.scrollLeft;

        }
        const dragging = (e) =>{
            if(!isDragStart) return;
            e.preventDefault();
            carousel.classList.add("dragging");
            let positionDiff = e.pageX - prevPageX;
            carousel.scrollLeft = prevScrollLeft - positionDiff;
        }
        const dragStop =() =>{
            isDragStart = false;
            carousel.classList.remove("dragging");
        }
        carousel.addEventListener("mousemove", dragging)
        carousel.addEventListener("mousedown", dragStart)
        carousel.addEventListener("mouseup", dragStop)
</script>


        

    <script>
        const faqItems = document.querySelectorAll('.faq-item');

        faqItems.forEach(item => {
            const question = item.querySelector('.faq-question');
            const answer = item.querySelector('.faq-answer');
            const arrow = item.querySelector('.arrow');

            question.addEventListener('click', () => {
                const isOpen = answer.style.display === 'block';

                // Close all open answers
                faqItems.forEach(i => {
                    i.querySelector('.faq-answer').style.display = 'none';
                    i.querySelector('.arrow').classList.remove('open');
                });
                 // Toggle current answer
                 if (!isOpen) {
                    answer.style.display = 'block';
                    arrow.classList.add('open');
                }
            });
        });
    </script>
    <script>
        // Intersection Observer Setup
const options = {
    root: null, // Observe the viewport
    rootMargin: '0px',
    threshold: 0.5, // Trigger when 50% of the element is in the viewport
};

const fadeInElements = document.querySelectorAll('.fade-in-up, .fade-in-left, .fade-in-right');

const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            // Add the "visible" class when the element enters the viewport
            entry.target.classList.add('visible');
        } else {
            // Remove the "visible" class when the element exits the viewport
            entry.target.classList.remove('visible');
        }
    });
}, options);

fadeInElements.forEach(element => {
    observer.observe(element);
});



    </script>
</body>
</html>