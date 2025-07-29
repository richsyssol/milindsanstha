<?php
session_start();

// Destroy session to prevent back navigation
session_destroy();
?>

<?php include 'header.php'; ?>



  <div class="container-fluid success-container">
    <div class="success-box">
      <i class="bi bi-check-circle-fill" style="font-size: 4rem; color: #28a745;"></i>
      <h1>Payment Successful!</h1>
      <p>Thank you for your payment. Your transaction has been completed.</p>
      <a href="index.php" class="btn btn-home">Go to Home</a>
    </div>
  </div>

  
<script>
    (function () {
      window.history.pushState(null, "", window.location.href);
      window.onpopstate = function () {
        window.history.pushState(null, "", window.location.href);
      };
    })();
  </script>