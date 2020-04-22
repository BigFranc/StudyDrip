<?php ?>
<!doctype html>
<html lang="en">
<!-- Update 17/04/2020 Add of Amt in frm-->
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">b
    <title>Paypay · StudyDrip</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/stripe.css" rel="stylesheet" >
<link href="../libs/bootstrap/css/boutstrap.min.css" rel="stylesheet" >


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    
  </head>
  <body>
 
 <div class="container">
 <!-- Stripe payment -->
   <h2 class="my'4 text-center">Intro To React Course [$50] </h2>
 <form action="../katu/charge.php" method="post" id="payment-form">
  <div class="form-row">
    <!--<label for="card-element">
      Credit or debit card
    </label>-->
    <!-- <label for="card-element">Amount: $50</label> -->
    <input type="text" readonly name="amount" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="Amount: $50">
    
    <input type="text" name="first_name" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="First Name">
    <input type="text" name="last_name" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="Last Name">
    <input type="Email" name="email" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="Email Address">
    <div id="card-element" class="form-control">
      <!-- A Stripe Element will be inserted here. -->
    </div>

    <!-- Used to display Element errors. -->
    <div id="card-errors" role="alert"></div>
  </div>

  <button>Submit Payment</button>
</form>
 <!-- end of stripe-->
 </div>
    <!-- jquery API from google -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://js.stripe.com/v3/"></script>
    <script src="../js/charge.js"></script>
    
</body>
</html>
