<?php 
    include 'header.php';
    include 'navbar.php';
?>

<?php include 'include/db_conn.php'; ?>

<section class="py-5">
    <div class="container">
        <div class="text-center">
            <h1 class="fw-bold head">VIDEO'S</h1>
        </div>
        <div class="row pt-5">
            <?php
                $sql = "SELECT * FROM `video` WHERE `status` = 'active' ORDER BY `id` DESC";
                $result = mysqli_query($conn, $sql);
                $isFirst = true; // Add a flag for the first item
                
                while ($row = mysqli_fetch_assoc($result)){
                    ?>
                    
                    <div class="col-md-3 mt-3 position-relative">
                        <img src="<?php echo  'admin/'.$row['image']; ?>" alt="YouTube video thumbnail" width="286px">
                        <button type="button" class="play-btn position-absolute top-50 start-50 translate-middle" data-bs-toggle="modal" data-bs-target="#videoModal" data-bs-video="<?php echo $row['url']; ?>">
                            <i class="fa-solid fa-play"></i>
                        </button>
                    </div>
            
                    <?php
                }
            ?>
            
        </div>
    </div>
</section>


<!-- Modal -->
<div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="videoModalLabel">Video</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <iframe id="modalVideo" width="100%" height="500" src="" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>












<?php include 'footer.php'; ?>