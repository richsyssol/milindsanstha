<?php



include 'header.php';
include 'navbar.php';

?>

<?php include 'include/db_conn.php'; ?>

<!--hero section-->
<section>
  <div id="carouselExampleCaptions" class="carousel slide">
    <!--<div class="carousel-indicators">-->
    <!--  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>-->
    <!--  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>-->
    <!--  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>-->
    <!--</div>-->
    <div class="carousel-inner">
        <?php
                $sql = "SELECT * FROM `banner` WHERE `status` = 'active' ORDER BY `id` DESC";
                $result = mysqli_query($conn, $sql);
                $isFirst = true; // Add a flag for the first item
                
                while ($row = mysqli_fetch_assoc($result)){
                    ?>
                    <div class="carousel-item <?php if ($isFirst) { echo 'active'; $isFirst = false; } ?>">
                        <img src="<?php echo  'admin/'.$row['image']; ?>" class="d-block w-100" alt="banner">
                        <div class="carousel-caption d-flex flex-column h-100 align-items-center justify-content-center bottom-0">
                          <div class="carousel-text">
                              <h2 class=" bg-opacity-50 py-2 px-4 animate-h2"><?php echo $row['head']; ?></h2>
                              <p class=" bg-opacity-50 md-py-2 px-4 animate-p"><?php echo $row['para']; ?></p>
                              <div>
                                <a href="causes" class="btn btn-outline-light px-4 py-2 rounded-0 animate-btn">Our Causes</a>
                                <a href="about" class="btn btn-outline-light px-4 py-2 rounded-0 animate-btn">About Us</a>
                              </div>
                          </div>
                        </div>
                    </div>
                    <?php
                }
            ?>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</section>
<!--hero section end-->

<!--Donation form-->
<section class="py-5" id="donation">
    <div class="container shadow p-4 bg-light position-relative donation">
        <div class="donation-form">
            <div class="row">
                <div class="col-md-6">
                    <img src="asset/image/boy.png" alt="Donation" class="img-fluid">
                </div>
                <div class="col-md-6">
                    <h1 class="pb-3 head1">Make a Donation Now!</h1>
                    
                    <form action="test-mode.php" method="post">
                        <div class="mb-3">
                            <input type="number" class="form-control" name="amount" value="<?php echo htmlspecialchars($_POST['amount'] ?? '', ENT_QUOTES); ?>" id="amount" placeholder="Enter Amount">
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" name="name" value="<?php echo htmlspecialchars($_POST['name'] ?? '', ENT_QUOTES); ?>" id="name" placeholder="Enter Name">
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <input type="email" class="form-control" name="email" value="<?php echo htmlspecialchars($_POST['email'] ?? '', ENT_QUOTES); ?>" id="email" placeholder="Enter Email">
                            </div>
                            <div class="mb-3 col-md-6">
                                <input type="tel" class="form-control" name="contact" 
                                       value="<?php echo htmlspecialchars($_POST['contact'] ?? '', ENT_QUOTES); ?>" 
                                       id="contact" placeholder="Enter Number" maxlength="10" minlength="10">
                            </div>

                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                            <textarea class="form-control" name="message" value="<?php echo htmlspecialchars($_POST['message'] ?? '', ENT_QUOTES); ?>" id="message" rows="3"></textarea>
                        </div>
                        <div>
                            <input type="submit" name="submit" class="btn bg-warning" value="Donate" id="submit_btn">
                        </div>
                    </form>

                </div>
            </div>
            
        </div>
    </div>
</section>
<!--Donation form end-->

<!--Causes-->
<section class="pb-5">
    <div class="container">
        <div class="text-center">
            <h1 class="fw-bold">OUR <span class="head">CAUSES</span></h1>
        </div>
        <div class="row pt-5 justify-content-center">
            <?php
                $sql = "SELECT * FROM `causes` WHERE `status` = 'active' ORDER BY `id` DESC";
                $result = mysqli_query($conn, $sql);
                $isFirst = true; // Add a flag for the first item
                
                while ($row = mysqli_fetch_assoc($result)){
                    ?>
                    
                    <div class="col-md-4">
                        <div class="card mt-3">
                          <img src="<?php echo  'admin/'.$row['image']; ?>" class="card-img-top" alt="causes-img">
                          <div class="card-body">
                            <h5 class="card-title"><?php echo $row['head']; ?></h5>
                            <p class="card-text">
                                <?php 
                                        $description_words = explode(" ", $row['para']);
                                        $description_preview = implode(" ", array_slice($description_words, 0, 12));
                                        echo $description_preview . (count($description_words) > 12 ? '...' : '');
                                    ?>
                                </p>
                            <a href="causes-detail?id=<?php echo $row['id']; ?>" class="btn btn-outline-success">READ MORE</a>
                            <!--<span class="float-end">&#8377; 25,000 / &#8377; 50,000</span>-->
                          </div>
                        </div>
                    </div>
            
                    <?php
                }
            ?>
            
        </div>
        
    </div>
</section>
<!--Causes end-->

<!--How can you help us-->
<section class="py-5 bg-dark text-light">
    <div class="container ">
        <div class="text-center pb-5">
            <h1>HOW CAN YOU HELP US?</h1>
            <p>
                You can help us by providing support, spreading awareness, and volunteering to make a difference in the lives of those in need.
            </p>
        </div>
        <div class="row">
            <div class="col-md-4 d-flex">
                <div class="help">
                    <i class="fa-solid fa-building-columns"></i>
                </div>
                <div class="ps-4">
                    <h5>DONOR</h5>
                    <p>As a donor, your generous contributions enable us to provide essential services and support to vulnerable individuals in our community. Your kindness helps us fund shelter, healthcare, and education for those in need, ensuring they receive the care and compassion they deserve. Join us in making a meaningful impact and transforming lives today!</p>
                </div>
            </div>
            <div class="col-md-4 d-flex">
                <div class="help">
                    <i class="fa-regular fa-money-bill-1"></i>
                </div>
                <div class="ps-4">
                    <h5>RESIDENCY FUND</h5>
                    <p>Support our Residency Fund as a donor to help provide shelter and care for vulnerable individuals in need. Your generous contributions will ensure that those without homes receive a safe place to stay, essential resources, and the opportunity for a better future. Together, we can make a meaningful impact in our community!</p>
                </div>
            </div>
            <div class="col-md-4 d-flex">
                <div class="help">
                    <i class="fa-solid fa-users"></i>
                </div>
                <div class="ps-4">
                    <h5>VOLUNTEER</h5>
                    <p>Become a volunteer and help us as a donor by contributing your time, resources, or funds to support our initiatives. Your generosity can make a significant impact on the lives of those we serve, providing essential care and support to vulnerable individuals in our community. Together, we can create lasting change and uplift those in need.</p>
                </div>
            </div>
            
        </div>
        
    </div>
</section>

 <!--filtered gallary -->
<section class="py-5" id="gallery">
    <div class="container galleryfilter">
        <div class="text-center mb-4">
            <h1 class="fw-bold">OUR <span class="head">GALLERY</span></h1>
        </div>
        <div class="text-center mb-4 filter-menu">
            <a class="btn btn-outline-primary mx-2" href="#" data-target="all" role="button">All</a>
            <?php
                $sql = "SELECT * from `image_type`";
                $result = mysqli_query($conn, $sql);
                $isFirst = true; // Add a flag for the first item
                
                while ($row = mysqli_fetch_assoc($result)){
                    ?>
                    
                    <a class="btn btn-outline-primary mx-2" href="#" data-target="<?php echo $row['type_name']; ?>" role="button"><?php echo $row['type_name']; ?></a>
            
                    <?php
                }
            ?>
            
        </div>
        <div class="row filter-item justify-content-center">
             <?php
                $sql = "SELECT photo.*, image_type.type_name 
                                FROM photo 
                                JOIN image_type ON photo.image_type_id = image_type.id";
                $result = mysqli_query($conn, $sql);
                $isFirst = true; // Add a flag for the first item
                
                while ($row = mysqli_fetch_assoc($result)){
                    ?>
                    
                    <div class="col-6 col-md-3 mb-4" data-item="<?php echo $row['type_name']; ?>">
                        <img src="<?php echo  'admin/'.$row['image']; ?>" class="img-fluid open-modal photo" alt="Gallery Image">
                    </div>
            
                    <?php
                }
            ?>
           
        </div>
    </div>
    <!-- Modal for image display -->
    <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="imageModalLabel">Image Preview</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <img src="" class="img-fluid" id="modalImage" alt="Full Size Image">
                </div>
            </div>
        </div>
    </div>
</section>

<!--Running projects-->
<!--<section class="experience py-5" id="experience">-->
<!--		<div class="container">-->
<!--			<div class="row">-->
<!--				<div class="col-xl-8 mx-auto text-center">-->
<!--					<div class="section-title">-->
<!--						<h1 class="fw-bold">RUNNING <span class="head">PROJECTS</span></h1>-->
<!--					</div>-->
<!--				</div>-->
<!--			</div>-->
<!--			<div class="row timeline">-->
<!--               <div class="col-xl-12">-->
<!--                  <ul class="timeline-list">-->
                     <!-- Single Experience -->
<!--                     <li>-->
<!--                        <div class="timeline_content">-->
<!--                           <span>2008</span>-->
<!--                           <h4>Intern Developer span</h4>-->
<!--                           <p>We gather your business and products information. We then determine the direction of the project and understand your goals and we combine your ideas with ours for an amazing website.</p>-->
<!--                        </div>-->
<!--                     </li>-->
                     <!-- Single Experience -->
<!--                     <li>-->
<!--                        <div class="timeline_content">-->
<!--                        <span>2007-2012</span>-->
<!--                           <h4>Junior Developer</h4>-->
<!--                           <p>We gather your business and products information. We then determine the direction of the project and understand your goals and we combine your ideas with ours for an amazing website.</p>-->
<!--                        </div>-->
<!--                     </li>-->
                     <!-- Single Experience -->
<!--                     <li>-->
<!--                        <div class="timeline_content">-->
<!--                        <span>2012-2015</span>-->
<!--                           <h4>Senior Developer</h4>-->
<!--                           <p>We gather your business and products information. We then determine the direction of the project and understand your goals and we combine your ideas with ours for an amazing website.</p>-->
<!--                        </div>-->
<!--                     </li>-->
                     <!-- Single Experience -->
<!--                     <li>-->
<!--                        <div class="timeline_content">-->
<!--                        <span>2015-2018</span>-->
<!--                           <h4>Project Manager</h4>-->
<!--                           <p>We gather your business and products information. We then determine the direction of the project and understand your goals and we combine your ideas with ours for an amazing website.</p>-->
<!--                        </div>-->
<!--                     </li>-->
<!--                  </ul>-->
<!--               </div>-->
<!--            </div>-->
<!--		</div>-->
<!--	  </section>-->

<!--newsletter-->
<!--<section class="subscribe-section text-center">-->
<!--  <div class="container">-->
<!--    <h1 class="fw-bold">Subscribe to <span class="head">Our Newsletter</span></h1>-->
<!--    <p>Get the latest updates and offers.</p>-->
<!--    <form class="row g-3 justify-content-center">-->
<!--      <div class="col-md-6 col-lg-4">-->
<!--        <input type="email" class="form-control" id="email" placeholder="Enter your email" required>-->
<!--      </div>-->
<!--      <div class="col-auto">-->
<!--        <button type="submit" class="btn btn-success">Subscribe</button>-->
<!--      </div>-->
<!--    </form>-->
<!--  </div>-->
<!--</section>-->







<?php include 'footer.php'; ?>