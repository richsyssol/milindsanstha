<?php
session_start();

// Destroy session to prevent back navigation
session_destroy();
?>


<?php include 'header.php'; ?> 
 
 
 <div class="container-fluid failed-container">
    <div class="failed-box">
      <i class="bi bi-x-circle-fill" style="font-size: 4rem; color: #dc3545;"></i>
      <h1>Payment Failed</h1>
      <p>We’re sorry, but your transaction could not be completed. Please try again.</p>
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