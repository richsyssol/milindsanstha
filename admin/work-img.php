<?php 
session_start(); // Start the session

// Check if user is logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true ) {
    // Redirect to login page if not logged in
    header("Location: login.php"); // Adjust path if needed
    exit(); // Ensure no further code is executed
}
else{
    include 'attach/header.php'; 
    include 'attach/navbar.php';  
 
?>

<?php 
    include 'include/db_conn.php';

    if(isset($_POST['submit'])) {
        
        
        $id = intval($_GET['id']);
        $image = $_FILES['image']['name'];
        $image_tmp = $_FILES['image']['tmp_name'];
        $head_id = $_POST['head_id'];

        // Set the upload directory and move the uploaded file
        $upload_dir = 'uploads/our_work/'; // Ensure this directory exists and has write permissions
        $upload_file = $upload_dir . basename($image);

        if (move_uploaded_file($image_tmp, $upload_file)) {
            // Insert the file path into the database
            $sql = "INSERT INTO `work_images`(`id`, `head_id`, `image`) VALUES (NULL, '$head_id' , '$upload_file')";
            $result = mysqli_query($conn, $sql);
            
            if($result){
                // Use JavaScript to redirect
                echo '<script>window.location.href = "work";</script>';
                exit();
              
            } else {
                echo "Failed: " . mysqli_error($conn);
            }
        } else {
            echo "Failed to upload file.";
        }
    }
?>


<div class='dashboard-app'>
    <div class='dashboard-content'>
        <div class='container-fluid'>
        <!-- page title -->
            <div class='container-fluid'>
                <h1>Add Our Work Images</h1>
            </div>
            <!-- breadcrumb -->
            <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="work">Our Work</a></li>
                <li class="breadcrumb-item"><a>Add Our Work Images</a></li>
            </ol>
            </nav>
            <!-- form -->
            <div class="row">
                <div class="col-lg-7">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Sr.No</th>
                            <th scope="col">Work Image</th>
                            <th scope="col">Our Work</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        include 'include/db_conn.php';
                        $id = intval($_GET['id']); // Sanitize the input to ensure it's an integer

                        // Modified SQL query to include head and filter by id
                        $sql = "SELECT 
                                    work_images.id, 
                                    our_work.head AS head, 
                                    work_images.image, 
                                    work_images.creation_on 
                                FROM 
                                    work_images
                                JOIN 
                                    our_work 
                                ON 
                                    work_images.head_id = our_work.id
                                WHERE 
                                    our_work.id = $id"; // Filter the result by the specific work_images.id

                                
                               
                                
                        $result = mysqli_query($conn, $sql);
                        
                        if (mysqli_num_rows($result) > 0) {
                            $serial_number = 1; // Initialize serial number
                            while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                <tr>
                                    <th scope="row"><?php echo $serial_number++; ?></th>
                                    <td><img src="<?php echo $row['image']; ?>" alt="Event Image" style="width: 50px; height: 50px;"></td>
                                    <td><?php echo $row['head']; ?></td> <!-- Display event name instead of ID -->
                                    <td>
                                        <a href="#" data-id="<?php echo $row['id']; ?>" class="deleteBtn"><i class="fa-solid fa-trash"></i></a> 
                                    </td>
                                </tr>
                                <?php 
                            }
                        } else {
                            echo "<tr><td colspan='4'>No records found</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>

                </div>
                <div class="col-lg-5">
                    <div class="container w-100">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Select Image</label>
                                <input class="form-control" type="file" name="image" id="formFile" required>
                            </div>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Select Event</label>
                                <select class="form-select" name="head_id" aria-label="Default select example">
                                    <?php
                                        include 'include/db_conn.php';
                                        $result = mysqli_query($conn, "SELECT * FROM our_work"); 
                                        while ($row = mysqli_fetch_array($result)) {
                                            ?>
                                            <option value="<?php echo $row['id']; ?>"><?php echo $row['head']; ?></option>
                                            <?php
                                        }
                                    ?>
                                </select>
                            </div>

                            
                            <div>
                                <input type="submit" name="submit" value="Submit" class="btn btn-success">
                            </div>
                        </form>
                    </div>

                </div>
                
            </div>
        </div>
    </div>
</div>

<!-- Delete Confirmation Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Confirm Deletion</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               You want to delete this record?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-danger" id="confirmDelete">Delete</button>
            </div>
        </div>
    </div>
</div>

<!--script for delete-->
<script>
$(document).ready(function(){
    var deleteId;

    // When delete button is clicked
    $('.deleteBtn').on('click', function(){
        deleteId = $(this).data('id');
        $('#deleteModal').modal('show');
    });

    // When confirm delete button in the modal is clicked
    $('#confirmDelete').on('click', function(){
        window.location.href = 'work-img-delete.php?id=' + deleteId;
    });
});
</script>







<?php include 'attach/footer.php'; ?>

<?php 
    
}
?>