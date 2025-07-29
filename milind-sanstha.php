<?php
    include 'header.php';
    include 'navbar.php';
?>

<?php include 'include/db_conn.php'; ?>

<!--about vilas katare-->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <?php
                $sql = "SELECT * FROM `vilas_katare` WHERE `status` = 'active' ORDER BY `id` DESC";
                $result = mysqli_query($conn, $sql);
                $isFirst = true; // Add a flag for the first item
                
                while ($row = mysqli_fetch_assoc($result)){
                    ?>
                    
                    <h1 class="text-center fw-bold name"><?php echo $row['name']; ?></h1>
                    <p>
                        <?php echo $row['about']; ?>
                    </p>
                    </div>
                    <div class="col-md-6">
                        <img src="<?php echo  'admin/'.$row['image']; ?>" alt="Vilas Katare" class="img-fluid shadow">
                    </div>
            
                    <?php
                }
            ?>
                
        </div>
        
    </div>
</section>


<!--achivement-->
<section class="py-5 certificate">
    <div class="container">
        <div class="text-center">
            <h1 class="fw-bold head">ACHIVEMENT</h1>
        </div>
        <div class="owl-carousel team-carousel owl-theme pt-5">
            <?php
                $sql = "SELECT * FROM `certificate` WHERE `status` = 'active' ORDER BY `id` DESC";
                $result = mysqli_query($conn, $sql);
                $isFirst = true; // Add a flag for the first item
                
                while ($row = mysqli_fetch_assoc($result)){
                    ?>
                    
                   <div class="item">
                        <div class="achivement">
                            <img src="<?php echo  'admin/'.$row['image']; ?>" alt="Purskar" class="img-fluid open-modal">
                        </div>
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


<!--Letters-->
<section class="py-5">
    <div class="container">
        <div class="text-center">
            <h1 class="fw-bold head">LETTERS</h1>
        </div>
        <div class="owl-carousel team-carousel owl-theme pt-5">
            <?php
                $sql = "SELECT * FROM `letters` WHERE `status` = 'active' ORDER BY `id` DESC";
                $result = mysqli_query($conn, $sql);
                $isFirst = true; // Add a flag for the first item
                
                while ($row = mysqli_fetch_assoc($result)){
                    ?>
                    
                   <div class="item">
                        <div class="achivement">
                            <img src="<?php echo  'admin/'.$row['image']; ?>" alt="Purskar" class="img-fluid open-modal">
                        </div>
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







<?php include 'footer.php'; ?>