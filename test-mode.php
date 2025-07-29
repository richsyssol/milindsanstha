<?php

if($_SERVER['REQUEST_METHOD']!=='POST'){
 
      http_response_code(404);
        header("Location: /404.php");
        exit();
}



session_start();

// Destroy session to prevent back navigation
session_destroy();
?>

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require('razorpay-php/Razorpay.php'); // Include Razorpay's PHP library
require('include/db_conn.php');

use Razorpay\Api\Api;

$config = require 'include/config.php';

$api_key = $config['RAZORPAY_API_KEY'];
$api_secret = $config['RAZORPAY_API_SECRET'];


$api = new Api($api_key, $api_secret);

if (isset($_POST['submit']) ) {
    

    
    
    function filterString($input){
        return htmlspecialchars(stripslashes(trim($input)));
    }   
    
    


    
    
    $amount = filterString($_POST['amount']);
    $name = filterString($_POST['name']);
    $email = filterString($_POST['email']);
    $contact = filterString($_POST['contact']);
    $message = filterString($_POST['message']);
    
    
    // Set timezone to Asia/Kolkata
    date_default_timezone_set('Asia/Kolkata');
    $created_at = date('Y-m-d H:i:s'); // Get current date and time in Asia/Kolkata timezone


    // Form validation
    $errors = array();
    if (empty($amount) || !is_numeric($amount)) {
        $errors[] = "Amount is required and must be a number";
    }
    if (empty($name) || !preg_match('/^[A-Za-z ]+$/', $name)) {
        $errors[] = "Name is required and must only contain alphabetical characters and spaces.";
    }

    
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Email is required and must be a valid email address";
    } elseif (!preg_match('/^[a-zA-Z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$/', $email)) {
        $errors[] = "Email is not in the correct format";
    }
    
    if (empty($contact) || !preg_match('/^[789]\d{9}$/', $contact)) {
        $errors[] = "Contact number is required and must be a 10-digit number";
    }
    
    if (empty($message) || !preg_match('/^[A-Za-z]+$/', $message)) {
        $errors[] = "Message is required and must only contain alphabetical characters";
    }

    if (count($errors) > 0) {
        // Display errors
        echo "<ul>";
        foreach ($errors as $error) {
            echo "<li>$error</li>";
        }
        echo "</ul>";
    } else {
        
        // Create an order in Razorpay
        $orderData = [
            'receipt'         => 'rcptid_11',
            'amount'          => $amount * 100, // Convert amount to paisa
            'currency'        => 'INR',
            'payment_capture' => 1 // auto capture
        ];

        $razorpayOrder = $api->order->create($orderData);

        $order_id = $razorpayOrder['id'];
        $_SESSION['razorpay_order_id'] = $order_id;

        // Store user data in the database
        $stmt = $conn->prepare("INSERT INTO test_mode (name, email, contact, amount, message, razorpay_order_id, created_at) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssss", $name, $email, $contact, $amount, $message, $order_id, $created_at);
        $stmt->execute();

        $stmt->close();
        $conn->close();

        // Redirect to payment page
        ?>
        <form action="test-verify.php" method="POST">
            <script
                src="https://checkout.razorpay.com/v1/checkout.js"
                data-key="<?php echo $api_key; ?>"
                data-amount="<?php echo $amount * 100; ?>"
                data-currency="INR"
                data-order_id="<?php echo $order_id; ?>"
                data-buttontext="Procced to pay"
                data-name="Milind Samajik Sanstha"
                data-description="Test transaction"
                data-image="asset/image/Milind_Samajik.png"
                data-prefill.name="<?php echo $name; ?>"
                data-prefill.email="<?php echo $email; ?>"
                data-prefill.contact="<?php echo $contact; ?>"
                data-theme.color="#F37254">
            </script>
            <input type="hidden" name="order_id" value="<?php echo $order_id; ?>">
            <input type="hidden" name="amount" value="<?php echo $amount * 100; ?>">
            <input type="hidden" name="name" value="<?php echo $name; ?>">
            <input type="hidden" name="email" value="<?php echo $email; ?>">
            <input type="hidden" name="contact" value="<?php echo $contact; ?>">
            <input type="hidden" name="message" value="<?php echo $message; ?>">
        </form>
        <?php
    }
}

// include 'index.php';
?>

<script>
    (function () {
      window.history.pushState(null, "", window.location.href);
      window.onpopstate = function () {
        window.history.pushState(null, "", window.location.href);
      };
    })();
  </script>