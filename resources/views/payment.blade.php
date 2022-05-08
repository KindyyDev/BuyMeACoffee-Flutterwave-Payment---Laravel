<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Buy me a Coffee</title>
  </head>
  <body>
    <h1 class="text-center bg-secondary py-3 text-white">Buy Kindness a Coffee</h1>
    <div class="container">
        <div class="header px-5">
            <h2>Enter your details</h2>
        </div>
    


<form id="makePaymentForm">
    <br>
  <div class="form-row">
  <div class="form-group col-md-6">
      <label for="inputEmail4">Name</label>
      <input required type="name" class="form-control" id="name" placeholder="Enter your Name">
    </div>
    <br>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input required type="email" class="form-control" id="email" placeholder="Enter your Email">
    </div>
    <br>
    <div class="form-group col-md-6">
      <label for="phoneNumber4">Phone Number</label>
      <input required type="number" class="form-control" id="number" placeholder="Enter your Phone Number">
    </div>
    <br>
    <div class="form-group col-md-6">
      <label for="number">Amount</label>
      <input required type="number" class="form-control" id="amount" placeholder="Enter the Amount">
    </div>
    <br>
  <button class="btn-btn-primary text-center" onclick="makePayment()" type="submit">Pay Now</button>
  </div>
  </div>
  <br>
  

</form>

    <script>"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://checkout.flutterwave.com/v3.js"></script>

    

<script>
    // $(function () {
    //     $("#makePaymentForm").submit(function (e) {
    //         e.preventDefault();
    //         var name = $("#name").val();
    //         var email = $("#email").val();
    //         var phone = $("#number").val();
    //         var amount = $("#amount").val();
    //         makePayment(amount, email, phone, name);
    //     });
    // });

  function makePayment(amount, email, phone_number, name) {
    FlutterwaveCheckout({
      public_key: "FLWPUBK_TEST-SANDBOXDEMOKEY-X",
      tx_ref: "RX1_{{substr(rand(0,time()),0,7)}}",
      amount,
      currency: "NGN",
      payment_options: " ",
      customer: {
        email,
        phone_number,
        name,
      },
      customizations: {
        title: "The Titanic Store",
        description: "Payment for an awesome cruise",
        logo: "https://www.logolynx.com/images/logolynx/22/2239ca38f5505fbfce7e55bbc0604386.jpeg",
      },
    });
  }
</script>
  </body>
</html>