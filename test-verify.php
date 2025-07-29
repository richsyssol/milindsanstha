<?php

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(404);
    header("Location: /404.php");
    exit();
}

require('razorpay-php/Razorpay.php');
require('include/db_conn.php');
use Razorpay\Api\Api;

$config = require 'include/config.php';

$api_key = $config['RAZORPAY_API_KEY'];
$api_secret = $config['RAZORPAY_API_SECRET'];

$api = new Api($api_key, $api_secret);

function filterString($input) {
    return htmlspecialchars(stripslashes(trim($input)));
}   

$amount = filterString($_POST['amount'] ?? '');
$name = filterString($_POST['name'] ?? '');
$email = filterString($_POST['email'] ?? '');
$contact = filterString($_POST['contact'] ?? '');
$message = filterString($_POST['message'] ?? '');
$order_id = filterString($_POST['order_id'] ?? '');
$razorpay_payment_id = filterString($_POST['razorpay_payment_id'] ?? '');
$razorpay_signature = filterString($_POST['razorpay_signature'] ?? '');

$success = false;
$error = "Payment Failed";

try {
    $attributes = [
        'razorpay_order_id' => $order_id,
        'razorpay_payment_id' => $razorpay_payment_id,
        'razorpay_signature' => $razorpay_signature
    ];

    $api->utility->verifyPaymentSignature($attributes);
    $success = true;

    // Update payment status in the database
    $stmt = $conn->prepare("UPDATE test_mode SET razorpay_payment_id = ? WHERE razorpay_order_id = ?");
    $stmt->bind_param("ss", $razorpay_payment_id, $order_id);
    $stmt->execute();
    $stmt->close();
    $conn->close();
} catch (Exception $e) {
    error_log('Razorpay Error: ' . $e->getMessage());
}

if ($success) {
    echo "Redirecting to success page...";
    header('Location: success.php');
    exit();
} else {
    echo "Redirecting to failed page...";
    header('Location: failed.php');
    exit();
}
?>
