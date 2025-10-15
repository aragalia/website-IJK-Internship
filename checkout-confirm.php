<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/checkout-confirm.css">
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
    <title>checkout-confirm</title>
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
                <div class="proses-proses">3</div>
                <div class="teks-step">
                    Approval
                </div>
            </div>
            <div class="step-checkout">
                <div class="proses-proses">4</div>
                <div class="teks-step">
                    Complete
                </div>
            </div>
    </div>
</div>







<div class="benner-confirm">
    <div class="isi-benner">
        <h1>THANK YOU!
        <br>Your Order Finally Complete 🎉</h1>
        <p>Your event request has been successfully submitted! Our team is preparing <br> everything to make your event a success. You’ll receive a confirmation email shortly</p>
    </div>
</div>












<div class="body-isi-confirm">
    <div class="info-pesanan">
        <div class="invoice">
            <h5>A member of our team will reach out within 1–2 business 
                days to confirm the details and finalize your event arrangements. 
                In the meantime, feel free to download your invoice and check your 
                order history on your dashboard.</h5>
            <a href="#">
            <button>DOWNLOAD INVOICE</button></a>
        </div>


        <div class="order-sumarry">
            <div class="judul-info">
                <h2>ORDER SUMMARY </h2>
                <h6>Lorem ipsum dolor sit amet consecteur elit</h6>
            </div>
            <hr>
            <div class="isi-summary">
                <div class="ID-summary">
                    <h3>Order ID</h3>
                    <p>ID1232435985434</p>
                </div>
                <div class="date-summary">
                    <h3>Order Date</h3>
                    <p>20 Noc 2024, 09:58</p>
                </div>
                <div class="name-summary">
                    <h3>Full Name</h3>
                    <p>Rita Kusmana</p>
                </div>
                <div class="email-summary">
                    <h3>Email</h3>
                    <p>ritakusmana@gmail.com</p>
                </div>
                <div class="phone-summary">
                    <h3>Email</h3>
                    <p>088878986888</p>
                </div>
            </div>
        </div>




            <div class="payment-details">
                <div class="judul-info" id="togglePaymentDetails">
                    <div class="teks">
                        <h2>PAYMENT DETAILS</h2>
                        <h6>Lorem ipsum dolor sit amet consecteur elit</h6>
                    </div>
                    <i class="fa-solid fa-chevron-down arrow"></i>
                </div>
                <hr>
                <div class="isi-payment" id="paymentContent">
                    <div class="payment-option">
                        <h3>Payment Option</h3>
                        <p>Down Payment</p>
                    </div>
                    <div class="payment-method">
                        <h3>Payment Method</h3>
                        <p>Credit Card (*097)</p>
                    </div>
                    <div class="total-amount">
                        <h3>Total Amount</h3>
                        <p>Rp 7.184.880</p>
                    </div>
                </div>
            </div>






    <div class="order-list">
        <div class="judul-info" id="toggleOrderList">
            <h2>ORDER LIST</h2>
            <div class="view-detail">
                <h1>View Details</h1>
                <i class="fa-solid fa-chevron-down arrow"></i>
            </div>
        </div>
        <div class="order-list-order" id="orderContent">
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






    <div class="confirm-policy">
        <h1>Cancellation Policy</h1>
        <h2>We understand that plans may change, and we aim to be as flexible 
            as possible to accommodate your needs. Cancellations made 30 days 
            or more before the scheduled event date will receive a full refund, 
            excluding a small processing fee to cover administrative costs. For 
            cancellations made between 15 and 29 days before the event, a 50% 
            refund of the total amount paid will be issued. Unfortunately, 
            cancellations made within 14 days of the event are non-refundable,
             as preparations and commitments have already been made to secure
              services on your behalf. In the event of a cancellation, please 
              contact our support team to initiate the process and address any 
              additional questions. Note that refunds may take up to 10 business 
              days to process.</h2>
        <a href="#">See more details</a>
    </div>


</div>











   
    <div class="next-steps">
        <div class="isi-next">
            <div class="teks-nextsteps">
                <h4>NEXT STEPS</h4>
                <p>A member of our team will reach out within 1–2 business days to confirm 
                    the details and finalize your event arrangements. In the meantime,
                    feel free to download your RFQ and check your order history on your 
                    dashboard.</p>
                <a href="pesanan-saya.php">
                <button>Go to Order</button></a>
            </div>
            <div class="support-info">
                <h4>SUPPORT & INFORMATION</h5>
                <p>If you have any questions, please contact us at <span>buatmerchandise.id@gmail.com</span>
                    or call us at <span>+62852-1365-3330</span> for immediate assistance</p>
            </div>
        </div>
    </div>
</div>




<!--  footer  -->
<?php include 'footer.php'; ?> 











<script>
    // Toggle dropdown pada PAYMENT DETAILS
    const paymentToggle = document.getElementById('togglePaymentDetails');
    const paymentContent = document.getElementById('paymentContent');
    const paymentArrow = paymentToggle.querySelector('.arrow');

    paymentToggle.addEventListener('click', () => {
        paymentContent.classList.toggle('show');
        paymentArrow.classList.toggle('rotate');
    });

    // Toggle dropdown pada ORDER LIST
    const orderToggle = document.getElementById('toggleOrderList');
    const orderContent = document.getElementById('orderContent');
    const orderArrow = orderToggle.querySelector('.arrow');

    orderToggle.addEventListener('click', () => {
        orderContent.classList.toggle('show');
        orderArrow.classList.toggle('rotate');
    });
</script>






</body>
</html>