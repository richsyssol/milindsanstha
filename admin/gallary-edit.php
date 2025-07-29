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

   // Initialize variables
$image = '';
$image_type_id = '';
$status = '';
$id = '';

// Check if an id is passed for editing an existing record
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM `photo` WHERE id = $id";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $image = $row['image'];
        $image_type_id = $row['image_type_id'];
        $status = $row['status'];
    } else {
        echo "Record not found.";
        exit();
    }
}

if (isset($_POST['submit'])) {
    $status = $_POST['status'];
    $image_type_id = $_POST['image_type_id']; // Get image type ID from the form

    if (!empty($_FILES['image']['name'])) {
        $image = $_FILES['image']['name'];
        $image_tmp = $_FILES['image']['tmp_name'];
        $upload_dir = 'uploads/gallary/'; // Ensure this directory exists and has write permissions
        $upload_file = $upload_dir . basename($image);

        if (!move_uploaded_file($image_tmp, $upload_file)) {
            echo "Failed to upload file.";
            exit();
        }
    } else {
        $upload_file = $image; // Keep existing image if no new file is uploaded
    }

    if ($id) {
        // Update existing record
        $sql = "UPDATE `photo` SET `image`='$upload_file', `image_type_id`='$image_type_id', `status`='$status' WHERE `id`=$id";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            // Redirect to gallery page
            echo '<script>window.location.href = "gallary.php";</script>';
            exit();
        } else {
            echo "Update failed: " . mysqli_error($conn);
        }
    } else {
        // Insert new record (not applicable in this context)
        $sql = "INSERT INTO `photo` (`image`, `image_type_id`, `status`) VALUES ('$upload_file', '$image_type_id', '$status')";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            echo '<script>window.location.href = "gallary.php";</script>';
            exit();
        } else {
            echo "Insert failed: " . mysqli_error($conn);
        }
    }
}
?>

<div class='dashboard-app'>
    <div class='dashboard-content'>
        <div class='container-fluid'>
            <div class='container-fluid'>
                <h1><?php echo $id ? "Edit" : "Add"; ?> Gallery</h1>
            </div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="gallary.php">Gallery</a></li>
                    <li class="breadcrumb-item" aria-current="page"><?php echo $id ? "Edit" : "Add"; ?> Gallery</li>
                </ol>
            </nav>
            <div class="container pt-5 w-50">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Select Image</label>
                        <input class="form-control" type="file" name="image" id="formFile" <?php echo $id ? '' : 'required'; ?>>
                        <?php if ($id && $image): ?>
                            <img src="<?php echo $image; ?>" alt="Current Image" style="width:100px; margin-top:10px;">
                        <?php endif; ?>
                    </div>
                    <div class="mb-3">
                        <label for="image_type" class="form-label">Image Type</label>
                        <select class="form-select" name="image_type_id" aria-label="Default select example" required>
                            <?php
                                $result = mysqli_query($conn, "SELECT * FROM image_type");
                                while ($row = mysqli_fetch_array($result)) {
                                    // Set selected attribute for current image type
                                    $selected = ($row['id'] == $image_type_id) ? 'selected' : '';
                                    echo "<option value='{$row['id']}' $selected>{$row['type_name']}</option>";
                                }
                            ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select class="form-select" name="status" aria-label="Default select example" required>
                            <option value="Active" <?php echo $status == 'Active' ? 'selected' : ''; ?>>Active</option>
                            <option value="Inactive" <?php echo $status == 'Inactive' ? 'selected' : ''; ?>>Inactive</option>
                        </select>
                    </div>
                    <div>
                        <input type="submit" name="submit" value="Update" class="btn btn-success">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>

<?php include 'attach/footer.php'; ?>
<?php 
    
}
?>