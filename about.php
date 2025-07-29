<?php 
    include 'header.php';
    include 'navbar.php';
?>

<?php include 'include/db_conn.php'; ?>

<!--about us-->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <?php
                    $sql = "SELECT * FROM `milind_sanstha` WHERE `status` = 'active' ORDER BY `id` DESC";
                    $result = mysqli_query($conn, $sql);
                    $isFirst = true; // Add a flag for the first item
                    
                    while ($row = mysqli_fetch_assoc($result)){
                        ?>
                        
                       <img src="<?php echo  'admin/'.$row['image']; ?>" alt="about-us" class="img-fluid rounded-3">
                        
                
                        <?php
                    }
                ?>
                
            </div>
            <div class="col-md-6 pt-5">
                <?php
                    $sql = "SELECT * FROM `milind_sanstha` WHERE `status` = 'active' ORDER BY `id` DESC";
                    $result = mysqli_query($conn, $sql);
                    $isFirst = true; // Add a flag for the first item
                    
                    while ($row = mysqli_fetch_assoc($result)){
                        ?>
                        
                       <h3 class="head1">ABOUT US</h3>
                        <h1 class="pt-3">
                            <?php echo $row['head']; ?>
                        </h1>
                        <p class="pt-5"> 
                             <?php echo $row['about']; ?>
                        </p>
                        
                
                        <?php
                    }
                ?>
                
            </div>
        </div>
    </div>
</section>

<!--What we do -->
<section class="py-5 do">
    <div class="container">
        <div class="row">
            <div class="col-md-6 pt-5">
                <h3 class="head1">WHAT WE DO</h3>
                <h1 class="fw-bold py-5">Providing solutions For future Donations, Management & Change.</h1>
                <p>
                    At Milind Sanstha, we are dedicated to making a difference in the lives of those in need. Our organization focuses on providing essential support and resources to underprivileged communities through various initiatives. We facilitate educational programs, healthcare services, and food distribution to ensure that everyone has access to basic necessities. By fostering community engagement and encouraging volunteerism, we aim to create a sustainable impact. Together, we strive to uplift lives and promote a brighter future for all.
                </p>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <!-- Education Card -->
                    <div class="col-md-6">
                        <div class="card do-card text-center mb-4">
                            <div class="card-body">
                                <i class="fa-solid fa-graduation-cap fa-3x mb-3"></i>
                                <h4 class="card-title">Education</h4>
                                <p class="card-text">We believe in the transformative power of education. Our initiatives provide access to quality education and skill development for underprivileged children and young adults. </p>
                            </div>
                        </div>
                    </div>
                    <!-- Healthy Food Card -->
                    <div class="col-md-6">
                        <div class="card do-card text-center mb-4">
                            <div class="card-body">
                                <i class="fa-solid fa-bowl-food fa-3x mb-3"></i>
                                <h4 class="card-title">Healthy Food</h4>
                                <p class="card-text"> We promote healthy eating as a vital component of well-being. Our initiatives focus on providing nutritious food options and educating communities about the benefits of a balanced diet.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Medical Help Card -->
                    <div class="col-md-6">
                        <div class="card do-card text-center mb-4">
                            <div class="card-body">
                                <i class="fa-solid fa-pills fa-3x mb-3"></i>
                                <h4 class="card-title">Medical Help</h4>
                                <p class="card-text">Provides essential medical help through free health check-ups and medical camps. We are dedicated to ensuring access to quality healthcare for underserved communities, promoting better health for all.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Safe Water Card -->
                    <div class="col-md-6">
                        <div class="card do-card text-center mb-4">
                            <div class="card-body">
                                <i class="fa-solid fa-house"></i>
                                <h4 class="card-title">Shelter</h4>
                                <p class="card-text">Sanstha offers safe and secure shelter for those in need. Our initiatives provide temporary housing and support services to vulnerable individuals and families, helping them regain stability and rebuild their lives.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- MEET OUR VOLUNTEER TEAM -->
<section class="py-5">
    <div class="container">
        <div class="row text-center mb-5">
            <div class="col">
                <h1 class="fw-bold">MEET OUR <span class="head">VOLUNTEER TEAM</span></h1>
            </div>
        </div>
        <div class="owl-carousel team-carousel owl-theme">
            <?php
                $sql = "SELECT * FROM `volunteer` WHERE `status` = 'active' ORDER BY `id` DESC";
                $result = mysqli_query($conn, $sql);
                $isFirst = true; // Add a flag for the first item
                
                while ($row = mysqli_fetch_assoc($result)){
                    ?>
                    
                   <div class="item">
                        <div class="team-member text-center">
                            <img src="<?php echo  'admin/'.$row['image']; ?>" alt="Team Member 1" class="img-fluid rounded-circle mb-3">
                            <h4><?php echo $row['name']; ?></h4>
                            <p><?php echo $row['designation']; ?></p>
                        </div>
                    </div>
            
                    <?php
                }
            ?>
            
        </div>
    </div>
</section>


















<?php include 'footer.php'; ?>