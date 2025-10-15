<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/checkout-payment.css">
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
    <title>payment</title>
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
                <div class="proses-proses">2</div>
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

    







<div class="payment-informasi">
    <div class="payment-informasi-info">
        <div class="payment-book-informasi">
           <div class="judul-book-info">
                <h1>
                    BOOK INFORMATION
                </h1>
                <p>
                    Please fill out the form below and  enter your payment details
                </p>
            </div>
            <hr>
            <div class="info-pribadi">
                <div class="nama-pribadi">
                    <h1>Full Name</h1>
                    <div class="nama-nama">
                        Rita Kusmana 
                    </div>
                </div>
                <div class="email-pribadi">
                    <h1>Email</h1>
                    <div class="email-email">
                        ritakusmana@gmail.com
                    </div>
                </div>
                <div class="nomor-pribadi">
                    <h1>Phone Number</h1>
                    <div class="nomor-nomor">
                        088878986888
                    </div>
                </div>
            </div>
        </div>









        <div class="payment-info-detail">
            <div class="detail-judul">
                <h1>
                PAYMENT DETAILS
                </h1>
                <p>Please fill out the form below and  enter your payment details</p>
            </div>
            <hr>
            <div class="pay-option">
            <h1>Payment Option</h1>
            <div class="down-full">
                <div class="pay-down" onclick="selectOption('pay-down')">
                    <div class="pay-down-teks">
                        <p>Down Payment</p>
                        <div class="down-harga">Rp 7.184.880</div>
                    </div>
                    <div class="pay-icon"><i class="fa-solid fa-check"></i></div>
                </div>
                <div class="pay-full" onclick="selectOption('pay-full')">
                    <div class="pay-full-teks">
                        <p>Full Payment</p>
                        <div class="full-harga">Rp 14.369.760</div>
                    </div>
                    <div class="pay-icon"><i class="fa-solid fa-check"></i></div>
                </div>
            </div>
            </div>
             <a href="#">
                 <button class="ketentuan">Klik disini untuk ketentuannya</button>
            </a>




            <div class="file-input-container">
                <label for="fileInput" class="custom-file-label">Choose File</label>
                <input type="file" id="fileInput">
                <div class="file-name" id="fileName">No file chosen</div>
            </div>
            <div class="pay-method">
                <div class="met-judul"><h1>Payment Method</h1></div>
                <div class="pay-met">
                        <div class="pay-met-teks">
                            <p>Credit/Debit Card</p>
                            <div class="method">
                                VISA, Mastercard
                            </div>
                        </div>
                        <div class="met-icon">
                        <i class="fa-solid fa-check"></i>
                        </div>
                </div>
                <div class="pay-met">
                        <div class="pay-met-teks">
                            <p>Bank Transfer</p>
                            <div class="method">
                            Virtual Account
                            </div>
                        </div>
                        <div class="met-icon">
                        <i class="fa-solid fa-check"></i>
                        </div>
                </div>
                <div class="pay-met">
                        <div class="pay-met-teks">
                            <p>Paylater</p>
                            <div class="method">
                            Kredivo, Indodana, Akulaku
                            </div>
                        </div>
                        <div class="met-icon">
                        <i class="fa-solid fa-check"></i>
                        </div>
                </div>
                <div class="pay-met">
                        <div class="pay-met-teks">
                            <p>Counter</p>
                            <div class="method">
                            Alfamart, Indomart,DanDan
                            </div>
                        </div>
                        <div class="met-icon">
                        <i class="fa-solid fa-check"></i>
                        </div>
                </div>
            </div>
            <div class="card">
                <div class="card-holder-name">
                    <div class="name-judul">Card Holder Name</div>
                    <input type="text" class="input-code" >
                </div>
                <div class="number-date-cvv">
                    <div class="number">
                        <p>Card Number</p>
                        <input type="text" class="isi-number">
                    </div>
                    <div class="date">
                        <p>Expired Date</p>
                        <input type="text" class="isi-date">
                    </div>
                    <div class="cvv">
                        <p>CVV</p>
                        <input type="text" class="isi-cvv">
                    </div>
                </div>
            </div>
            

        </div>










    </div>
    <div class="payment-informasi-summary">
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
            <a href="checkout-aproval.php" >
                <button>Checkout</button>
            </a>
            
    </div>

        <div class="policy">
            <h1>Cancellation Policy</h1>
            <p>We understand that plans may change, and we aim to be 
                as flexible as possible to accommodate your needs. 
                Cancellations made 30 days or more before the scheduled 
                event date will receive a full refund, excluding a small
                 processing fee to cover administrative costs. For 
                 cancellations made between 15 and 29 days before the event,
                  a 50% refund of the total amount paid will be issued. 
                  Unfortunately, cancellations made within 14 days of the 
                  event are non-refundable, as preparations and commitments
                   have already been made to secure services on your behalf.
                   In the event of a cancellation, please contact our support 
                   team to initiate the process and address any additional 
                   questions. Note that refunds may take up to 10 business 
                   days to process.</p>
            <a href="#">See more details</a>
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





        function selectOption(selected) {
    // Reset all options
    document.querySelectorAll(".pay-down, .pay-full").forEach((element) => {
        element.classList.remove("active");
    });

    // Set the clicked option as active
    const selectedElement = document.querySelector(`.${selected}`);
    if (selectedElement) {
        selectedElement.classList.add("active");
    }
}



// Add event listener to all pay-met elements
document.querySelectorAll(".pay-met").forEach((element) => {
    element.addEventListener("click", function () {
        // Remove active class from all pay-met elements
        document.querySelectorAll(".pay-met").forEach((el) => el.classList.remove("active"));

        // Add active class to the clicked element
        this.classList.add("active");
    });
});





        // Fungsi untuk mengatur state active
function selectOption(option) {
  // Hapus class active dari semua opsi
  document.querySelectorAll('.pay-full, .pay-down').forEach(el => el.classList.remove('active'));

  // Tambahkan class active ke opsi yang diklik
  const selectedOption = document.querySelector(`.${option}`);
  selectedOption.classList.add('active');

  // Aktifkan tombol "ketentuan" hanya jika pay-down diklik
  const ketentuanButton = document.querySelector('.ketentuan');
  if (option === 'pay-down') {
    ketentuanButton.classList.add('active');
  } else {
    ketentuanButton.classList.remove('active');
  }
}

    </script>

</body>
</html>