<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/checkout.css">
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
    <title>checkout</title>
</head>
<body>
     <!--  header  -->
  <?php include 'headerafterlogin.php'; ?> 


<div class="checkout">
    <div class="checkout-step">
            <div class="step-checkout">
                <div class="proses-proses">1</div>
                <div class="teks-step">
                    Order Details
                </div>
            </div>
            <div class="step-checkout">
                <div class="proses">2</div>
                <div class="teks-step">
                    Payment
                </div>
            </div>
            <div class="step-checkout">
                <div class="proses">3</div>
                <div class="teks-step">
                    Approval
                </div>
            </div>
            <div class="step-checkout">
                <div class="proses">4</div>
                <div class="teks-step">
                    Complete
                </div>
            </div>
    </div>
</div>






<div class="checkout-informasi">
    <div class="checkout-informasi-info">
        <div class="personal-detail">
            <div class="personal-detail-judul">
                <h1>PERSONAL DETAILS</h1>
                <p>Lorem ipsum dolor sit amet consecteur elit</p>
            </div>
            <hr>
            <div class="personal-detail-name">
                <div class="full-name">
                    Full Name
                </div>
                <div class="nama-pembeli">
                    Rita Kusmana
                </div>
            </div>
            <div class="email-phone">
                <div class="email">
                    <div class="judul-email">
                        Email Address
                    </div>
                    <div class="email-pembeli">
                        ritakusmana@gmail.com
                    </div>
                </div>
                <div class="phone">
                    <div class="judul-phone">
                        Phone Number
                    </div>
                    <div class="phone-pembeli">
                        088878986888
                    </div>
                </div>
            </div>
            <div class="notes">
                <div class="judul-note">
                    Notes
                </div>
                <div class="textarea-notes">
                         <textarea id="largeTextBox" ></textarea>
                </div>
            </div>
            
        </div>












        <div class="order-list">
    <div class="order-list-judul" onclick="toggleOrderList(this)">
        <div class="judul-order-list">ORDER LIST</div>
        <div class="judul-view-detail">
            <p>View Details</p>
            <i class="fa-solid fa-angle-down arrow"></i>
        </div>
    </div>

    <div class="order-list-order">
        <hr>
        <div class="order-list-order-order">
            <div class="order-img">
                <img src="img/detailproduk.png" alt="order">
            </div>
            <div class="order-ket">
                <div class="ket-judul">Planner Wood 02</div>
                <div class="ket-harga">
                    <div class="ket-harga-name">Harga</div>
                    <div class="ket-harga-angka">Rp 77.400</div>
                </div>
                <div class="ket-total">
                    <div class="ket-total-name">Total (70 Produk)</div>
                    <div class="ket-total-angka">Rp 5.418.000</div>
                </div>
            </div>
        </div>
    </div>
    <div class="order-list-order">
        <hr>
        <div class="order-list-order-order">
            <div class="order-img">
                <img src="img/cart3.png" alt="order">
            </div>
            <div class="order-ket">
                <div class="ket-judul">Notebook Leather with Pen</div>
                <div class="ket-harga">
                    <div class="ket-harga-name">Harga</div>
                    <div class="ket-harga-angka">Rp 41.400</div>
                </div>
                <div class="ket-total">
                    <div class="ket-total-name">Total (70 Produk)</div>
                    <div class="ket-total-angka">Rp 2.898.000</div>
                </div>
            </div>
        </div>
    </div>
    <div class="order-list-order">
        <hr>
        <div class="order-list-order-order">
            <div class="order-img">
                <img src="img/cart1.png" alt="order">
            </div>
            <div class="order-ket">
                <div class="ket-judul">Agenda Leather Purse LT02</div>
                <div class="ket-harga">
                    <div class="ket-harga-name">Harga</div>
                    <div class="ket-harga-angka">Rp 70.000</div>
                </div>
                <div class="ket-total">
                    <div class="ket-total-name">Total (70 Produk)</div>
                    <div class="ket-total-angka">Rp 4.900.000</div>
                </div>
            </div>
        </div>
    </div>
</div>



















    </div>
    <div class="checkout-informasi-summary">
            <div class="summary-judul">
                <h1>SUMMARY</h1>
                <div class="jumlah-barang">
                    3 items in total
                </div>
                <hr>
            </div>
            <div class="summary-diskon">
                <div class="judul-diskon">
                    Discount Code
                </div>
                <div class="isi-diskon">
                    <div class="name-diskon">
                        <input type="text" class="input-code" placeholder="Masukkan Code Diskon">
                    </div>
                    <a href="#" target="_blank">
                    <button>
                        Apply
                    </button>
                    </a>
                </div>
            </div>
            <div class="harga">
                    <div class="total">
                        <div class="total-name">
                            Total Price
                        </div>
                        <div class="total-angka">
                            Rp 13.216.000
                        </div>
                    </div>
                    <div class="total">
                        <div class="tax-name">
                            Tax (11%)
                        </div>
                        <div class="tax-angka">
                            Rp 1.453.760
                        </div>
                    </div>
                    <div class="total">
                        <div class="diskon-name">
                            Discount
                        </div>
                        <div class="diskon-angka">
                            - Rp 300.000
                        </div>
                    </div>
                    <hr>
                    <div class="subtotal">
                        <div class="subtotal-name">
                            Subtotal
                        </div>
                        <div class="subtotal-angka">
                            Rp 14.369.760
                        </div>
                    </div>
            </div>
            <div class="total-pay">
                        <div class="total-pay-name">
                            Total Payment
                        </div>
                        <div class="total-pay-angka">
                            Rp 14.369.760
                        </div>
            </div>
            <a href="checkout-payment.php" >
                <button>Checkout</button>
            </a>
            
    </div>

</div>


 <!--  footer  -->
 <?php include 'footer.php'; ?> 






<script>
    function toggleOrderList(element) {
        const parent = element.parentElement;
        parent.classList.toggle('open');
    }
</script>
</body>
</html>