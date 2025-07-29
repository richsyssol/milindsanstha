<?php 
    include 'header.php';
    include 'navbar.php';
?>

<?php include 'include/db_conn.php'; ?>




<div class="container">
    <header class="mt-4 mb-5">
        <h1 class="text-center fw-bold head">OUR CAUSES</h1>
    </header>

    <div class="row">
        <!-- Blog Post -->
        <div class="col-md-8">
            <?php
                $id = intval($_GET['id']);
                $sql = "SELECT * FROM `causes` WHERE id=$id";
                $result = mysqli_query($conn, $sql);
                $isFirst = true; // Add a flag for the first item
                
                while ($row = mysqli_fetch_assoc($result)){
                    ?>
                    
                    <div class="cause-post">
                        <h1 class="blog-title"><?php echo $row['head']; ?></h1>
                        <img src="<?php echo  'admin/'.$row['image']; ?>" alt="Cause Image" class="img-fluid">
                        <p class="mt-4"><?php echo $row['para']; ?></p>
                    </div>
            
                    <?php
                }
            ?>
            

        </div>

        <!-- Sidebar -->
        <div class="col-md-4">
            <h4 class="head1 fw-bold">OTHER CAUSES</h4>
            <ul class="list-group">
                <?php
            
                $sql = "SELECT * FROM `causes`";
                $result = mysqli_query($conn, $sql);
                $isFirst = true; // Add a flag for the first item
                
                while ($row = mysqli_fetch_assoc($result)){
                    ?>
                    
                    <li class="list-group-item"><a href="causes-detail?id=<?php echo $row['id']; ?>" class="text-decoration-none text-dark"><?php echo $row['head']; ?></a></li>
            
                    <?php
                }
            ?>
                
               
            </ul>
        </div>
    </div>
</div>



<!--Donation form-->
<section class="py-5">
    <div class="container shadow p-4 bg-light position-relative">
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








<?php include 'footer.php'; ?>