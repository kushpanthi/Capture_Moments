
<?php
ob_start();
include 'connect.php'; 

if (isset($_GET['id'])) {
    $slideId = intval($_GET['id']);

    // Fetch the current slide details
    $query = "SELECT * FROM slides WHERE id = $slideId";
    $result = mysqli_query($conn, $query);
    $slide = mysqli_fetch_assoc($result);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $slideTitle = $_POST['slide_title'];
        $slideDescription = $_POST['slide_description'];

        if (!empty($_FILES['slide_image']['name'])) {
            $slideImage = $_FILES['slide_image']['name'];
            $targetDir = "uploads/";
            $targetFilePath = $targetDir . basename($slideImage);

            if (move_uploaded_file($_FILES['slide_image']['tmp_name'], $targetFilePath)) {
                if (file_exists('uploads/' . $slide['image'])) {
                    unlink('uploads/' . $slide['image']);
                }
                $updateQuery = "UPDATE slides SET title = '$slideTitle', description = '$slideDescription', image = '$targetFilePath' WHERE id = $slideId";
            } else {
                die("Failed to upload new image.");
            }
        } else {
            // No new image uploaded, update title and description only
            $updateQuery = "UPDATE slides SET title = '$slideTitle', description = '$slideDescription' WHERE id = $slideId";
        }

        if (mysqli_query($conn, $updateQuery)) {
            header('Location: admin.php');
            exit();
        } else {
            die("Error updating slide: " . mysqli_error($conn));
        }
    }
} else {
    header('Location: admin.php'); 
    exit();
}

ob_end_flush();
?>
<style>
 /* General Styling */
body {
    background-size: cover;
    color: #ffffff;
    padding-top: 50px;
    font-family: 'Arial', sans-serif;
}

body::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: rgba(0, 0, 0, 0.5); /* Dark overlay */
    z-index: -1;
}

/* Container Styling */
.container {
    max-width: 800px;
    margin: auto;
    background: rgba(255, 255, 255, 0.1); /* Transparent container */
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    color: #ffffff;
}

/* Form Headings */
h3 {
    font-size: 28px;
    font-weight: bold;
    text-align: center;
    text-transform: uppercase;
    letter-spacing: 2px;
    margin-bottom: 30px;
    color: #f39c12;
}

/* Form Styling */
label {
    font-size: 16px;
    font-weight: 600;
    margin-bottom: 8px;
    display: block;
}

input[type="text"],
textarea,
input[type="file"] {
    background-color: rgba(255, 255, 255, 0.2);
    color: #ffffff;
    border: 1px solid #ffffff;
    border-radius: 8px;
    padding: 12px;
    width: 100%;
    font-size: 16px;
    margin-bottom: 15px;
    box-shadow: inset 0 2px 5px rgba(0, 0, 0, 0.1);
}

input:focus,
textarea:focus {
    border: 2px solid #f39c12;
    outline: none;
    box-shadow: 0 0 8px rgba(255, 107, 107, 0.5);
}

textarea {
    resize: vertical;
    min-height: 120px;
}

input[type="file"] {
    background-color: transparent;
    color: #f39c12;
    border: 2px dashed #f39c12;
    padding: 10px;
    cursor: pointer;
}

input[type="file"]:hover {
    background-color: rgba(255, 126, 95, 0.1);
    border-color: #ff6b6b;
}

/* Image Preview */
img {
    display: block;
    margin-top: 15px;
    max-width: 120px;
    border-radius: 8px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
}

/* Submit Button */
input[type="submit"] {
    background-color: #f39c12;
    color: white;
    padding: 12px 20px;
    font-size: 16px;
    font-weight: 600;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    width: 100%;
    transition: background 0.4s ease, transform 0.2s ease;
    text-transform: uppercase;
}

input[type="submit"]:hover {
    background-color: #e67e22;
    transform: translateY(-3px);
    box-shadow: 0 4px 12px rgba(255, 107, 107, 0.4);
}

/* Responsive Adjustments */
@media (max-width: 576px) {
    .container {
        padding: 20px;
    }

    h3 {
        font-size: 22px;
    }

    input[type="submit"] {
        font-size: 14px;
        padding: 10px;
    }
}


</style>
<div class="container mt-5">
    <h3>Edit Slide</h3>
    <form method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="slideTitle" class="form-label">Slide Title</label>
            <input type="text" class="form-control" id="slideTitle" name="slide_title" value="<?php echo htmlspecialchars($slide['title']); ?>" required>
        </div>
        
        <div class="mb-3">
            <label for="slideDescription" class="form-label">Slide Description</label>
            <textarea class="form-control" id="slideDescription" rows="5" name="slide_description" required><?php echo htmlspecialchars($slide['description']); ?></textarea>
        </div>

        <div class="mb-3">
            <label for="slideImage" class="form-label">Slide Image</label>
            <input type="file" class="form-control" id="slideImage" name="slide_image">
            <img src="uploads/<?php echo htmlspecialchars($slide['image']); ?>" alt="Current Image" width="100">
        </div>

        <input type="submit" class="btn btn-primary" value="Update Slide">
    </form>
</div>
