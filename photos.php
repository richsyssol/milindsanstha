<?php 
    include 'header.php';
    include 'navbar.php';
?>

<?php include 'include/db_conn.php'; ?>

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
            <!--<div class="col-6 col-md-3 mb-4" data-item="nature">-->
            <!--    <img src="https://htmldemo.net/grant-foundation/grant-foundation/img/gallery/gallery-one.jpg" class="img-fluid open-modal" alt="Gallery Image">-->
            <!--</div>-->
            <!--<div class="col-6 col-md-3 mb-4" data-item="charity">-->
            <!--    <img src="https://htmldemo.net/grant-foundation/grant-foundation/img/gallery/gallery-two.jpg" class="img-fluid open-modal" alt="Gallery Image">-->
            <!--</div>-->
            <!--<div class="col-6 col-md-3 mb-4" data-item="child">-->
            <!--    <img src="https://htmldemo.net/grant-foundation/grant-foundation/img/gallery/gallery-three.jpg" class="img-fluid open-modal" alt="Gallery Image">-->
            <!--</div>-->
            <!--<div class="col-6 col-md-3 mb-4" data-item="nature">-->
            <!--    <img src="https://htmldemo.net/grant-foundation/grant-foundation/img/gallery/gallery-four.jpg" class="img-fluid open-modal" alt="Gallery Image">-->
            <!--</div>-->
            <!--<div class="col-6 col-md-3 mb-4" data-item="charity">-->
            <!--    <img src="https://htmldemo.net/grant-foundation/grant-foundation/img/gallery/gallery-five.jpg" class="img-fluid open-modal" alt="Gallery Image">-->
            <!--</div>-->
            <!--<div class="col-6 col-md-3 mb-4" data-item="child">-->
            <!--    <img src="https://htmldemo.net/grant-foundation/grant-foundation/img/gallery/gallery-six.jpg" class="img-fluid open-modal" alt="Gallery Image">-->
            <!--</div>-->
            <!--<div class="col-6 col-md-3 mb-4" data-item="charity">-->
            <!--    <img src="https://htmldemo.net/grant-foundation/grant-foundation/img/gallery/gallery-seven.jpg" class="img-fluid open-modal" alt="Gallery Image">-->
            <!--</div>-->
            <!--<div class="col-6 col-md-3 mb-4" data-item="nature">-->
            <!--    <img src="https://htmldemo.net/grant-foundation/grant-foundation/img/gallery/gallery-eight.jpg" class="img-fluid open-modal" alt="Gallery Image">-->
            <!--</div>-->
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