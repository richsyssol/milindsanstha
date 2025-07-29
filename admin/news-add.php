<?php 
session_start(); // Start the session

// Check if user is logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true ) {
    // Redirect to login page if not logged in
    header("Location: login.php"); // Adjust path if needed
    exit(); // Ensure no further code is executed
} else {
    include 'attach/header.php'; 
    include 'attach/navbar.php';  

    include 'include/db_conn.php';

    if(isset($_POST['submit'])) {
        $status = $_POST['status'];
        $upload_dir = 'uploads/news/'; // Ensure this directory exists and has write permissions

        foreach ($_FILES['images']['name'] as $key => $image) {
            $image_tmp = $_FILES['images']['tmp_name'][$key];
            $upload_file = $upload_dir . basename($image);

            if (move_uploaded_file($image_tmp, $upload_file)) {
                // Insert the file path into the database
                $sql = "INSERT INTO `news`(`id`, `image`, `status`) VALUES (NULL, '$upload_file', '$status')";
                $result = mysqli_query($conn, $sql);

                if(!$result) {
                    echo "Failed: " . mysqli_error($conn);
                    break;
                }
            } else {
                echo "Failed to upload file: " . $image;
                break;
            }
        }

        // Redirect to certificates page after successful upload
        echo '<script>window.location.href = "news.php";</script>';
        exit();
    }
?>
    <div class='dashboard-app'>
        <div class='dashboard-content'>
            <div class='container-fluid'>
                <div class='container-fluid'>
                    <h1>Add News</h1>
                </div>
                <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="news">News</a></li>
                    <li class="breadcrumb-item"><a>Add News</a></li>
                </ol>
                </nav>
                <div class="container pt-5 w-50">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Select Images</label>
                            <input class="form-control" type="file" name="images[]" id="formFile" multiple required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Status</label>
                            <select class="form-select" name="status" aria-label="Default select example">
                                <option value="Active">Active</option>
                                <option value="Inactive">Inactive</option>
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
<?php 
    include 'attach/footer.php'; 
}
?>
