<?php

/**
 * Plugin Name: CCAvenue & Paypal payment plugin
 * Plugin URI: 
 * Description:  
 * File Description: 
 * Author: Ladybird Web Solution Pvt Ltd
 * Author URI: http://www.ladybirdweb.com
 * Version: 1.0
 * Copyright 2016 Ladybird Web Solution
 * @package  CCAvenue & Paypal payment plugin
 * License: Regular License
 * License URI: 
 */

/** CCAvenue Merchant ID */
$merchant_id = ""; //This id(also User Id)  available at "Generate Working Key" of "Settings & Options" 

/** CCAvenue Working Key or Encryption Key */
$working_key = ""; //Shared by CCAVENUES

/** CCAvenue Access Code */
$access_code = ""; //Shared by CCAVENUES

/** paypal email */
$paypal_email = "accounts@ladybirdweb.com"; //Shared by Paypal


/** Redirection URL */
$redirect_url = "http://www.faveohelpdesk.com/pay/response/";

/** Cancel URL */
$cancel_url = "http://www.faveohelpdesk.com/pay/response/";

/** Action URL from Chekout page */
$action_url = "http://www.faveohelpdesk.com/pay/submit";


/** CCAvenue Gateway Post URL */
$base_url_ccavenue = "https://secure.ccavenue.com/transaction/transaction.do?command=initiateTransaction";
// 	Test: https://test.ccavenue.com

/** Paypal Gateway Post URL */
$base_url_paypal = "https://www.paypal.com/cgi-bin/webscr";
// 	Test: "https://www.sandbox.paypal.com/cgi-bin/webscr

/** Paypal return URL */
$paypal_return_url = "http://www.faveohelpdesk.com/pay/paypal-response/";

/** Paypal Cancel URL */
$paypal_cancel_url = "http://www.faveohelpdesk.com/pay/paypal-response/";

/** Paypal Notify URL */
$paypal_notify_url = "http://www.faveohelpdesk.com/pay/paypal-response";

/** Payu Money Salt */
$payu_money_salt = "vAUsVb2Q";  

/** Payu Money Key */
$payu_money_key = "emnQbA"; //Shared by Payu Money

/** Payu Money Gateway Post URL */
$base_url_payu_money = "https://secure.payu.in/_payment";
// 	Test: https://test.payu.in/_payment

/** Payu Money sucess URL */
$surl1 = "http://www.faveohelpdesk.com/pay/paypal-response";

/** Payu Money Failure URL */
$furl1 = "http://www.faveohelpdesk.com/pay/paypal-response";

/** Payu Money Cancel URL */
$curl1 = "http://www.faveohelpdesk.com/pay/paypal-response";

/** Language */
$language = "en";

/* Razorpay Payment gateway API Key */

$keyId = 'rzp_test_lGyalsFEBV6tW4';

$keySecret = '4UrcpAM6Ir2Vvp7X0kWx8a70';

//Display Currency
$displayCurrency = 'INR';
if ($displayCurrency !== 'INR')
{
    $data['display_currency']  = 'USD';
    $data['display_amount']    = $_POST['amount'];
    
}


//These should be commented out in production
// This is for error reporting
// Add it to config.php to report any errors
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>




