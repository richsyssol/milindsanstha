<?php 
    include 'header.php';
    include 'navbar.php';
?>

<?php include 'include/db_conn.php'; ?>

<section class="py-5">
    <div class="container">
        <div class="text-center">
            <h1 class="fw-bold">OUR <span class="head">CAUSES</span></h1>
        </div>
        <div class="row pt-5">
            <?php
                $sql = "SELECT * FROM `causes` WHERE `status` = 'active' ORDER BY `id` DESC";
                $result = mysqli_query($conn, $sql);
                $isFirst = true; // Add a flag for the first item
                
                while ($row = mysqli_fetch_assoc($result)){
                    ?>
                    
                    <div class="col-md-4 pt-3">
                        <div class="card">
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














<?php include 'footer.php'; ?>