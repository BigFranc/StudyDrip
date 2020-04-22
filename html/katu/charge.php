<?php 
	require_once('../libs/vendor/autoload.php');
    \Stripe\Stripe::setApiKey('sk_test_ATT5v1BiEk8SLgJsLp3ssjyP');
	
	//Sanitize POST Array
	//attention 2 token à changer pour le LIVE celui du haut plus celui
	//plus celui de charge .js


	$POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);
	
	$first_name = $POST['first_name'];
	$last_name = $POST['last_name'];
	$email = $POST['email'];
	$token = $POST['stripeToken'];
	
	
	//Create Customer In Stripe
	$customer = \Stripe\Customer::create(array(
	"email" => $email, //
	"source" => $token
	));
	
	//Updates 19 04 2020
	$amount = 0; //$POST['moni'];
	$description = 0; //$POST['desc'];
	
	//Charge Customer
	$charge = \Stripe\Charge::create(array(
	"amount" => 10000,
	"currency" => "eur",
	"description" => "Intro To react Course",
	"customer" => $customer->id
	));
	
	// redirect to seccess
	
	header('Location: success.php?tid='.$charge->id.'&product='.$charge->description);
	
	
	
?>


