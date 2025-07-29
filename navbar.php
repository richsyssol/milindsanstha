

<!--top navbar-->
<section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex flex-column flex-md-row justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center mb-2 mb-md-0">
            <i class="fa-solid fa-envelope d-flex align-items-center me-2"></i>
            <span><a href="mailto:example@example.com">example@example.com</a></span>
            <i class="fa-solid fa-phone d-flex align-items-center ms-4 me-2"></i>
            <span><a href="tel:+91 7020578880">+91 7020578880</a></span>
        </div>
        <div class="social-links d-flex align-items-center">
            <a href="https://www.youtube.com/@milindsamajiksanstha2004" target="_blank" class="twitter me-3"><i class="fa-brands fa-youtube"></i></a>
            <a href="https://www.facebook.com/milindsamajiksanstha2004" target="_blank" class="facebook me-3"><i class="fa-brands fa-facebook"></i></a>
            <a href="https://www.instagram.com/milindsamajiksanstha2004/" target="_blank" class="instagram me-3"><i class="fab fa-instagram"></i></a>
            <a href="#" class="linkedin"><i class="fa-brands fa-google"></i></a>
        </div>
    </div>
</section>

<!--top navbar end-->

<!--navbar-->
<section>
    <nav class="navbar navbar-expand-lg navbar-light bg-light px-0 ">
      <div class="container-xl">
        <!-- Logo -->
        <a class="navbar-brand" href="index">
          <img src="asset/image/Milind_Samajik.png" class="h-8" alt="MilindSanstha" height="132px" width="111px">
        </a>
        <!-- Navbar toggle -->
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Collapse -->
        <div class="collapse navbar-collapse nav-menu" id="navbarCollapse">
          <!-- Nav -->
          <div class="navbar-nav mx-lg-auto">
            <a class="nav-item nav-link text-dark" href="index" aria-current="page">Home</a>
            <a class="nav-item nav-link text-dark" href="about" aria-current="page">About Us</a>
            <a class="nav-item nav-link text-dark" href="causes">Causes</a>
            <a class="nav-item nav-link text-dark" href="our-work">Our Work</a>
            <!--<a class="nav-item nav-link text-dark" href="running-projects">Running Projects</a>-->
            <div class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-dark" href="#" id="mediaDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Media
              </a>
              <ul class="dropdown-menu" aria-labelledby="mediaDropdown">
                <li><a class="dropdown-item" href="achivements">Accolades</a></li>
                <li><a class="dropdown-item" href="letters">Letters</a></li>
                <li><a class="dropdown-item" href="photos">Photos</a></li>
                <li><a class="dropdown-item" href="videos">Videos</a></li>
                <li><a class="dropdown-item" href="news">News</a></li>
              </ul>
            </div>
            <!--<a class="nav-item nav-link text-dark" href="milind-sanstha">Milind Sanstha</a>-->
            
          </div>
          <!-- Right navigation -->
          <!--<div class="navbar-nav ms-lg-4">-->
          <!--  <a class="nav-item nav-link text-dark" href="#">Sign in</a>-->
          <!--</div>-->
          <!-- Action -->
          <div class="d-flex align-items-lg-center mt-3 mt-lg-0">
            <a href="#donationModal" class="btn w-full w-lg-auto navbtn" data-bs-toggle="modal">
              Donation
            </a>
            
            <div id="custom_translate_element" class="ps-3"></div>     

          </div>
          
        </div>
      </div>
    </nav>
</section>
<!--navbar end-->

<!-- Modal -->
<div class="modal fade" id="donationModal" tabindex="-1" aria-labelledby="donationModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="donationModalLabel">Donation Form</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="donationForm" action="test-mode.php" method="post">
            <div class="form-floating mb-3">
              <input type="number" class="form-control" name="amount" id="floatingInput" value="<?php echo htmlspecialchars($_POST['amount'] ?? '', ENT_QUOTES); ?>" placeholder="name@example.com">
              <label for="floatingInput">Donation Amount</label>
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control" name="name" value="<?php echo htmlspecialchars($_POST['name'] ?? '', ENT_QUOTES); ?>" id="floatingInput" placeholder="name@example.com">
              <label for="floatingInput">Name</label>
            </div>
            <div class="form-floating mb-3">
              <input type="email" class="form-control" name="email" value="<?php echo htmlspecialchars($_POST['email'] ?? '', ENT_QUOTES); ?>" id="floatingInput" placeholder="name@example.com">
              <label for="floatingInput">Email</label>
            </div>
            <div class="form-floating mb-3">
                <input type="tel" class="form-control" name="contact" 
                       value="<?php echo htmlspecialchars($_POST['contact'] ?? '', ENT_QUOTES); ?>" 
                       id="floatingInput" placeholder="Enter your contact number" maxlength="10" minlength="10" pattern="[0-9]{10}" required>
                <label for="floatingInput">Contact No</label>
            </div>
            <div class="form-floating mb-3">
              <textarea class="form-control" name="message" value="<?php echo htmlspecialchars($_POST['message'] ?? '', ENT_QUOTES); ?>" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
              <label for="floatingTextarea">Message</label>
            </div>
          
            
            
          <input type="submit" name="submit" id="submit_btn" class="btn btn-primary w-100" value="Donate Now" id="submit-btn1">
        </form>
      </div>
    </div>
  </div>
</div>


<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({
    pageLanguage: 'en',
    includedLanguages: 'en,hi,mr', // English, Hindi, Marathi language codes
    layout: google.translate.TranslateElement.InlineLayout.SIMPLE
  }, 'custom_translate_element');
}
</script>

<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

