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




<div class='dashboard-app'>
    <div class='dashboard-content'>
        <!-- page title -->
        <div class='container-fluid'>
            <h1>Gallary</h1>
        </div>
        <!-- breadcrumb -->
        <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
            <li class="breadcrumb-item"><a>Gallary</a></li>
        </ol>
        </nav>
        
        <?php 
            if(isset($_GET['msg'])){
                $msg = $_GET['msg'];
                
                echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                      '.$msg.'
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
            }
        ?>
        
        <div class="pt-5">
        <!-- Add Button -->
        <a href="gallary-add" class="btn btn-primary">Add Gallary</a>
        </div>
        <!-- table -->
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Sr.No</th>
                        <th scope="col">Image</th>
                        <th scope="col">Category Name</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    include 'include/db_conn.php';
                        $sql = "SELECT photo.*, image_type.type_name 
                                FROM photo 
                                JOIN image_type ON photo.image_type_id = image_type.id;
                                ";
                        $result = mysqli_query($conn , $sql);
                         if(mysqli_num_rows($result) > 0) {
                              $serial_number = 1; // Initialize serial number
                        while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                            <tr>
                                <th scope="row"><?php echo $serial_number++; ?></th>
                                <td><img src="<?php echo $row['image']; ?>" alt="Banner Image" style="width: 50px; height: 50px;"></td>
                                <td><?php echo $row['type_name']; ?></td>
                                <td><?php echo $row['status']; ?></td>
                                <td>
                                    <a href="#" data-id="<?php echo $row['id']; ?>" class="deleteBtn"><i class="fa-solid fa-trash"></i></a> &nbsp; / &nbsp;
                                    <a href="gallary-edit?id=<?php echo $row['id']; ?>"><i class="fa-solid fa-pen-to-square"></i></a>
                                </td>
                            </tr>
                        <?php 
                        }
                        } else {
                            echo "<tr><td colspan='5'>No records found</td></tr>";
                        }
                    ?>
                    
                </tbody>
            </table>
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
        window.location.href = 'gallary-delete.php?id=' + deleteId;
    });
});
</script>

<?php include 'attach/footer.php'; ?>

<?php 
    
}
?>