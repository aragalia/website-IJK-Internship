<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="css/cart.css">
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>cart</title>
</head>
<body>
    <!--  header  -->
  <?php include 'headerafterlogin.php'; ?>  


  <section class="herocategory">
        <div class="teks-hero-category">
            <h1>PILIH CATEGORY<br>YANG KAMU INGINKAN</h1>
        </div>
        <div class="search-container-category">
            <input type="text" class="search-input-category" placeholder="Search">
            <button class="search-button-category">
                <i class="fa-solid fa-magnifying-glass"></i>
            </button>
        </div>
    </section>

    <div class="produk-cart">
        <div class="checkbox">
            <input type="checkbox" id="cart1">
            <label for="cart1"><i class="fa-solid fa-check"></i></label>
        </div>
        <div class="produk-cart-cart">
            <div class="produk-cart-cart-img">
                <img src="img/cart1.png" alt="cart">
            </div>
            <div class="produk-cart-cart-isi">
                <div class="produk-cart-cart-spek">
                    <div class="produk-cart-cart-spek-name">
                        Agenda
                    </div>
                    <div class="produk-cart-cart-spek-judul">
                        Agenda Leather Purse LT02
                        </div>
                    <div class="produk-cart-cart-spek-custom">
                        <div class="custpm-produk">UV</div>
                        <div class="custpm-produk">Sablon</div>
                    </div>
                </div>  
                <div class="produk-cart-cart-harga">
                    <div class="produk-cart-cart-harga-satuan">
                        Rp 89.000
                    </div>
                    <div class="produk-cart-cart-harga-jumlahbarang">
                    <i class="fa-solid fa-minus" onclick="updateQuantity(this, -1)"></i>
                    <input type="number" class="quantityInput" value="70" min="20" />
                    <i class="fa-solid fa-plus" onclick="updateQuantity(this, 1)"></i>
                </div>
            </div>
            </div>
        </div>
    </div>

    <div class="produk-cart">
        <div class="checkbox">
            <input type="checkbox" id="cart2">
            <label for="cart2"><i class="fa-solid fa-check"></i></label>
        </div>
        <div class="produk-cart-cart">
            <div class="produk-cart-cart-img">
                <img src="img/cart2.png" alt="cart">
            </div>
            <div class="produk-cart-cart-isi">
                <div class="produk-cart-cart-spek">
                    <div class="produk-cart-cart-spek-name">
                        Agenda
                    </div>
                    <div class="produk-cart-cart-spek-judul">
                        PLANNER WOOD 02
                        </div>
                    <div class="produk-cart-cart-spek-custom">
                        <div class="custpm-produk">UV</div>
                        <div class="custpm-produk">Laser</div>
                        <div class="custpm-produk">Sablon</div>
                    </div>
                </div>  
                <div class="produk-cart-cart-harga">
                    <div class="produk-cart-cart-harga-satuan">
                         Rp 77.400
                    </div>
                    <div class="produk-cart-cart-harga-jumlahbarang">
                    <i class="fa-solid fa-minus" onclick="updateQuantity(this, -1)"></i>
<input type="number" class="quantityInput" value="20" min="20" />
<i class="fa-solid fa-plus" onclick="updateQuantity(this, 1)"></i>

                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>

    <div class="produk-cart">
         <div class="checkbox">
            <input type="checkbox" id="cart3">
            <label for="cart3"><i class="fa-solid fa-check"></i></label>
        </div>
        <div class="produk-cart-cart">
            <div class="produk-cart-cart-img">
                <img src="img/cart3.png" alt="cart">
            </div>
            <div class="produk-cart-cart-isi">
                <div class="produk-cart-cart-spek">
                    <div class="produk-cart-cart-spek-name">
                        Agenda
                    </div>
                    <div class="produk-cart-cart-spek-judul">
                        NOTEBOOK WOOD WD DARK BROWN
                        </div>
                    <div class="produk-cart-cart-spek-custom">
                        <div class="custpm-produk">UV</div>
                        <div class="custpm-produk">Grafir</div>
                        <div class="custpm-produk">Sablon</div>
                    </div>
                </div>  
                <div class="produk-cart-cart-harga">
                    <div class="produk-cart-cart-harga-satuan">
                         Rp 35.000
                    </div>
                    <div class="produk-cart-cart-harga-jumlahbarang">
                    <i class="fa-solid fa-minus" onclick="updateQuantity(this, -1)"></i>
<input type="number" class="quantityInput" value="30" min="20" />
<i class="fa-solid fa-plus" onclick="updateQuantity(this, 1)"></i>

                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>


    <div class="produk-cart">
         <div class="checkbox">
            <input type="checkbox" id="cart4">
            <label for="cart4"><i class="fa-solid fa-check"></i></label>
        </div>
        <div class="produk-cart-cart">
            <div class="produk-cart-cart-img">
                <img src="img/cart4.png" alt="cart">
            </div>
            <div class="produk-cart-cart-isi">
                <div class="produk-cart-cart-spek">
                    <div class="produk-cart-cart-spek-name">
                        Stationary
                    </div>
                    <div class="produk-cart-cart-spek-judul">
                        PEN METAL
                        </div>
                    <div class="produk-cart-cart-spek-custom">
                        <div class="custpm-produk">Grafir</div>
                    </div>
                </div>  
                <div class="produk-cart-cart-harga">
                    <div class="produk-cart-cart-harga-satuan">
                         Rp 7.200
                    </div>
                    <div class="produk-cart-cart-harga-jumlahbarang">
                    <i class="fa-solid fa-minus" onclick="updateQuantity(this, -1)"></i>
<input type="number" class="quantityInput" value="70" min="20" />
<i class="fa-solid fa-plus" onclick="updateQuantity(this, 1)"></i>

                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>


    <div class="produk-cart">
        <div class="checkbox">
            <input type="checkbox" id="cart5">
            <label for="cart5"><i class="fa-solid fa-check"></i></label>
        </div>
        <div class="produk-cart-cart">
            <div class="produk-cart-cart-img">
                <img src="img/cart5.png" alt="cart">
            </div>
            <div class="produk-cart-cart-isi">
                <div class="produk-cart-cart-spek">
                    <div class="produk-cart-cart-spek-name">
                          Tumbler
                    </div>
                    <div class="produk-cart-cart-spek-judul">
                        TUMBLER BARISTA
                        </div>
                    <div class="produk-cart-cart-spek-custom">
                        <div class="custpm-produk">UV</div>
                        <div class="custpm-produk">Grafir</div>
                        <div class="custpm-produk">Full Print</div>
                    </div>
                </div>  
                <div class="produk-cart-cart-harga">
                    <div class="produk-cart-cart-harga-satuan">
                         Rp 7.200
                    </div>
                    <div class="produk-cart-cart-harga-jumlahbarang">
                    <i class="fa-solid fa-minus" onclick="updateQuantity(this, -1)"></i>
<input type="number" class="quantityInput" value="70" min="20" />
<i class="fa-solid fa-plus" onclick="updateQuantity(this, 1)"></i>

                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>







    <div class="cart-total">
        <div class="cart-total-total">
            <div class="chekbox-total">
                <input type="checkbox" id="cart">
                <div class="ket">
                    Pilih Semua (8)
                </div>
                <div class="hapus-total">
                    Hapus
                </div>
            </div>
            <div class="cart-total-harga">
                <div class="ket-total-produk">
                    Total (3 Produk):
                </div>
                <div class="harga-total-produk">
                    Rp 13.216.000
                </div>
                <a href="checkout.php">
                <div class="checkout-total-harga">
                    Checkout
                </div></a>
            </div>


        </div>
    </div>





    <!--  footer  -->
<?php include 'footer.php'; ?>  









<script>
    function updateQuantity(button, change) {
        // Cari parent container (produk-cart)
        const parent = button.closest('.produk-cart');
        
        // Cari input quantity dalam parent tersebut
        const quantityInput = parent.querySelector('.quantityInput');
        
        // Ambil nilai saat ini dan update
        const currentValue = parseInt(quantityInput.value, 10);
        const newValue = currentValue + change;

        if (newValue >= 20) {
            quantityInput.value = newValue;
        } else {
            alert("Quantity cannot be less than 20.");
        }
    }
</script>

</body>
</html>