<?php
session_start();

if (isset($_SESSION['email'])) {
	require_once('lib/init.php');
\Payplug\Payplug::setSecretKey(""); //define payplug live key

$payment = \Payplug\Payment::create(array(
    'amount'            => $_POST['amount'],
    'currency'          => $_POST['currency'],
    'customer'          => array(
        'email'             => $_SESSION['email'],
    ),
    'hosted_payment'    => array(
        'return_url'        => $_POST['return_url'],
        'cancel_url'        => $_POST['cancel_url']
    ),
    'notification_url'  => $_POST['notification_url'],
));

$payment_url = $payment->hosted_payment->payment_url;

header('Location:' . $payment_url);

} else { //user not logged in, return to index

	header('Location: index.php');
	
}

