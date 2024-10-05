<?php
include 'connect.php'; // Ensure this file connects correctly to the database

if (isset($_GET['id'])) {
    $slideId = intval($_GET['id']); // Ensure the ID is an integer to avoid SQL injection

    // Fetch the slide to get the image path
    $query = "SELECT image FROM slides WHERE id = $slideId";
    $result = mysqli_query($conn, $query);
    $slide = mysqli_fetch_assoc($result);

    if ($slide) {
        // Delete the slide record from the database
        $deleteQuery = "DELETE FROM slides WHERE id = $slideId";
        if (mysqli_query($conn, $deleteQuery)) {
            // Delete the image file from the server
            if (file_exists('uploads/' . $slide['image'])) {
                unlink('uploads/' . $slide['image']);
            }
            header('Location: admin.php'); 
            exit();
        } else {
            echo "Error deleting slide: " . mysqli_error($conn);
        }
    } else {
        echo "Slide not found.";
    }
} else {
    echo "No slide ID provided.";
}
?>
