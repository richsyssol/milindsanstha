<?php 
session_start(); // Start the session

// Check if user is logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true ) {
    // Redirect to login page if not logged in
    header("Location: login.php"); // Adjust path if needed
    exit(); // Ensure no further code is executed
}
else{
    include 'attach/header.php'; 
    include 'attach/navbar.php';  
 
?>






<div class='dashboard-app'>
    <div class='dashboard-content'>
        <div id="root">
  <div class="container pt-5">
    <div class="row align-items-stretch">
        
      <div class="c-dashboardInfo col-lg-3 col-md-6">
        <div class="wrap">
          <h4 class="heading heading5 hind-font medium-font-weight c-dashboardInfo__title">Total Services</h4>
          <span class="hind-font caption-12 c-dashboardInfo__count">15</span>
        </div>
      </div>
      
      <div class="c-dashboardInfo col-lg-3 col-md-6">
        <div class="wrap">
          <h4 class="heading heading5 hind-font medium-font-weight c-dashboardInfo__title">Total Products</h4>
          <span class="hind-font caption-12 c-dashboardInfo__count">30</span>
        </div>
      </div>
      
      <div class="c-dashboardInfo col-lg-3 col-md-6">
        <div class="wrap">
          <h4 class="heading heading5 hind-font medium-font-weight c-dashboardInfo__title">Total Sub-Services</h4>
          <span class="hind-font caption-12 c-dashboardInfo__count">30</span>
        </div>
      </div>
      
      <div class="c-dashboardInfo col-lg-3 col-md-6">
        <div class="wrap">
          <h4 class="heading heading5 hind-font medium-font-weight c-dashboardInfo__title">Total Blog</h4>
          <span class="hind-font caption-12 c-dashboardInfo__count">50</span>
        </div>
      </div>
    </div>
  </div>
</div>

    </div>
</div>



<?php include 'attach/footer.php'; ?>
 
    
<?php 
    
}
?>
