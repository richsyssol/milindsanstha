<?php 
    include 'include/db_conn.php';
    
    $id = $_GET['id'];
    $sql = "DELETE FROM `work_images` WHERE id = $id";
    $result = mysqli_query($conn,$sql);
    
    if($result){
        header("Location: work-img.php");
        exit();
    }
    else{
        echo "Failed: " . mysqli_error($conn);
    }
?>