<?php 
    include 'header.php';
    include 'navbar.php';
?>

<?php include 'include/db_conn.php'; ?>

<section class="py-5">
    <div class="container">
        <div class="text-center mb-4">
            <h1 class="fw-bold">LATEST <span class="head">NEWS</span></h1>
        </div>
        <div class="row justify-content-center">
            <?php
                $sql = "SELECT * FROM `news` WHERE `status` = 'active' ORDER BY `id` DESC";
                $result = mysqli_query($conn, $sql);
                $isFirst = true; // Add a flag for the first item
                
                while ($row = mysqli_fetch_assoc($result)){
                    ?>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-4 news-img">
                        <img src="<?php echo  'admin/'.$row['image']; ?>" alt="News" class="open-modal shadow">
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