<?php include 'header.php'; ?>

<!-- navbar.php -->
<nav class="dashboard-toolbar">
    <a href="#" class="menu-toggle"><i class="fas fa-bars"></i></a>
</nav>

<div class="dashboard-nav">
    <header>
        <a href="" class="menu-toggle"><i class="fas fa-bars"></i></a><a href="" class="brand-logo">
            <!--<i class="fas fa-anchor"></i>-->
            <span>MILIND SANSTHA</span></a>
    </header>

    <nav class="dashboard-nav-list">
        <a href="index" class="dashboard-nav-item">
            
            <i class="fa-solid fa-gauge"></i>
                Dashboard 
            </a>
            <!-- <a href="#" class="dashboard-nav-item">
                <i class="fas fa-file-upload"></i> 
                Upload 
            </a> -->
            <div class='dashboard-nav-dropdown'>
                <a href="#" class="dashboard-nav-item dashboard-nav-dropdown-toggle">
                    <i class="fas fa-home"></i>
                     Home
                </a>
            <div class='dashboard-nav-dropdown-menu'>
                <a href="banner" class="dashboard-nav-dropdown-item">Banner</a>
                <a href="causes" class="dashboard-nav-dropdown-item">Our Causes</a>
                <!--<a href="gallary" class="dashboard-nav-dropdown-item">Gallary</a>-->
                <!-- <a href="#" class="dashboard-nav-dropdown-item">Video</a> -->
            </div>
        </div>
        <div class='dashboard-nav-dropdown'>
            <a href="#" class="dashboard-nav-item dashboard-nav-dropdown-toggle">
                <i class="fa-solid fa-address-card"></i> 
                About Us
            </a>
            <div class='dashboard-nav-dropdown-menu'>
                <a href="about" class="dashboard-nav-dropdown-item">About Us</a>
                <a href="volunteers" class="dashboard-nav-dropdown-item">Volunteers</a>
                <a href="review" class="dashboard-nav-dropdown-item">What People Says</a>
                <!--<a href="service-feature" class="dashboard-nav-dropdown-item">Service Feature</a>-->
                <!--<a href="sector-we-serve" class="dashboard-nav-dropdown-item">Sector We Serve</a>-->
                <!--<a href="quality-policy" class="dashboard-nav-dropdown-item">Quality Policy</a>-->
                <!--<a href="location" class="dashboard-nav-dropdown-item">Location</a>-->
            </div>
        </div>
        <a href="certificates" class="dashboard-nav-item">
                <i class="fa-solid fa-s"></i>
                Accolades
            </a>
            <a href="letters" class="dashboard-nav-item">
                <i class="fa-solid fa-s"></i>
                Letters
            </a>
            <a href="gallary" class="dashboard-nav-item">
                <i class="fa-solid fa-s"></i>
                Gallary 
            </a>
            <a href="video" class="dashboard-nav-item">
                <i class="fa-brands fa-product-hunt"></i> 
                Video's 
            </a>
            
        
        
            <a href="news" class="dashboard-nav-item">
                <i class="fa-solid fa-calendar"></i>
                News 
            </a>
            
            <a href="work" class="dashboard-nav-item">
                <i class="fa-solid fa-calendar"></i>
                Our Work 
            </a>
            
            <div class='dashboard-nav-dropdown'>
                <a href="#" class="dashboard-nav-item dashboard-nav-dropdown-toggle">
                    <i class="fa-solid fa-certificate"></i>
                     Vilas Katare
                </a>
                <div class='dashboard-nav-dropdown-menu'>
                    <a href="vilas_katere" class="dashboard-nav-dropdown-item">About Vilas Katare</a>
                    
                </div>
            </div>
            
            <a href="donation" class="dashboard-nav-item">
                <i class="fa-solid fa-hand-holding-dollar"></i>
                 Donation 
            </a>
            <!--<a href="career" class="dashboard-nav-item">-->
            <!--    <i class="fa-brands fa-cuttlefish"></i>-->
            <!--    Career -->
            <!--</a>-->
            
        <div class="nav-item-divider"></div>
        <a href="logout" class="dashboard-nav-item">
            <i class="fas fa-sign-out-alt"></i>
             Logout 
        </a>
        <a href="user" class="dashboard-nav-item">
            <i class="fas fa-sign-out-alt"></i>
             user 
        </a>
    </nav>
</div>

<?php include 'footer.php'; ?>