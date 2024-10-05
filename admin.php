
<?php
session_start();
if (!isset($_SESSION['username'])) {
    
    header("Location: http://localhost/capture/login.php");
    exit();
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
<head>

<!-- Other head elements -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   <style>
    /* General Body Styling */
body {
    background: linear-gradient(120deg, #2c3e50 0%, #4ca1af 100%) no-repeat center center fixed;
    background-size: cover;
    color: #ffffff;
    padding-top: 50px;
    font-family: 'Poppins', sans-serif;
    position: relative;
}

body::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: rgba(0, 0, 0, 0.7); /* A dark overlay to make the text pop */
    z-index: -1; /* Ensure this stays behind the content */
}

/* Container Styling */
.container {
    max-width: 900px;
    margin: auto;
    background: rgba(255, 255, 255, 0.1);
    padding: 30px;
    border-radius: 15px;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
    transition: transform 0.3s ease;
}

.container:hover {
    transform: scale(1.01); /* Slight hover effect to add interaction */
}



/* Buttons */
.btn-primary {
    background-color: #e74c3c;
    border-color: #c0392b;
    color: #ffffff;
    border-radius: 50px;
    padding: 10px 30px;
    transition: background-color 0.3s ease, transform 0.3s ease;
}

.btn-primary:hover {
    background-color: #c0392b;
    transform: translateY(-3px);
}

.btn-primary:active {
    background-color: #d35400;
    transform: translateY(1px);
    box-shadow: 0 0 10px #ffffff, 0 0 20px #ffffff, 0 0 30px #ffffff, 0 0 40px #ffffff;
    color: #ffffff; 
    transition: box-shadow 0.3s ease, transform 0.3s ease;
}
.btn-primary.active {
    background-color: #d35400; 
    box-shadow: 0 0 10px #ffffff, 0 0 20px #ffffff, 0 0 30px #ffffff, 0 0 40px #ffffff;
    color: #ffffff; 
}


/* Form Controls */
.form-control, .form-select {
    background-color: rgba(255, 255, 255, 0.15);
    color: #ffffff;
    border: 1px solid #ffffff;
    border-radius: 10px;
    padding: 12px;
    transition: box-shadow 0.3s ease;
}

.form-control:focus, .form-select:focus {
    box-shadow: 0 0 10px rgba(255, 255, 255, 0.7);
}

/* Placeholders */
.form-control::placeholder {
    color: #ecf0f1;
}

/* Cards */
.card {
    background-color: rgba(44, 62, 80, 0.8);
    border-radius: 15px;
    padding: 20px;
    color: #ffffff;
    margin-bottom: 20px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.card:hover {
    transform: scale(1.02);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
}

/* List Group Items */
.list-group-item {
    background-color: rgba(44, 62, 80, 0.7);
    color: #ffffff;
    border: 1px solid #ffffff;
    transition: background-color 0.3s ease;
}

.list-group-item:hover {
    background-color: rgba(236, 240, 241, 0.2);
}

/* Navigation Buttons */
.nav-buttons {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    margin-top: 20px;
}

.nav-buttons .btn {
    flex: 1;
    margin: 5px;
    border-radius: 50px;
    background-color: #16a085;
    color: #fff;
    transition: background-color 0.3s ease, transform 0.3s ease;
}

.nav-buttons .btn:hover {
    background-color: #1abc9c;
    transform: translateY(-3px);
}

.nav-buttons .btn:active {
    background-color: #148f77;
    transform: translateY(1px);
}

/* Break Sections */
#break, #break2 {
    flex-basis: 48%;
    height: 55px;
    background-color: rgba(255, 255, 255, 0.15);
    color: #ffffff;
    border: 1px solid #ffffff;
    text-align: center;
    line-height: 32px;
    border-radius: 25px;
    transition: background-color 0.3s ease, transform 0.3s ease;
}

#break:hover, #break2:hover {
    background-color: rgba(255, 255, 255, 0.2);
    transform: translateY(-3px);
}
.margin-action{
    margin: 8px 0px;
}

/* Animations */
@keyframes fadeIn {
    0% { opacity: 0; }
    100% { opacity: 1; }
}

.container {
    animation: fadeIn 1s ease-in-out;
}

/* Media Queries for Responsiveness */
@media (max-width: 768px) {
    .container {
        padding: 20px;
    }

    .nav-buttons .btn {
        margin-bottom: 10px;
        flex: 100%;
    }
}

@media (max-width: 480px) {
    .container {
        padding: 15px;
    }

    #break, #break2 {
        flex-basis: 100%;
        margin-bottom: 15px;
    }
}


    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center mb-4">Admin Panel</h1>
        
        <!-- Admin panel ko nav buttons -->
        <div class="nav-buttons mb-4">
            <button class="btn btn-primary active" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSlides" aria-expanded="true" aria-controls="collapseHome">
                Manage Home slide 
            </button>
            <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseGallery" aria-expanded="false" aria-controls="collapseGallery">
                Manage Gallery
            </button>
            <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSkills" aria-expanded="false" aria-controls="collapseSkills">
                Manage Skills/Experience
            </button>
            <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCategories" aria-expanded="false" aria-controls="collapseCategories">
                Manage Image Categories
            </button>
            
            <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseInquiries" aria-expanded="false" aria-controls="collapseInquiries" id="break">
                View Inquiries
            </button>
            
            <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseAdmins" aria-expanded="false" aria-controls="collapseAdmins" id="break2">
                Manage Admins
            </button>
        </div>

        

        <!-- Home Page Section ko starting -->
        <div class="admin-section">
    <div class="collapse show" id="collapseSlides">
        <div class="card card-body mt-3">
            <h3>Add Slide</h3>
            <form method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="slideTitle" class="form-label">Slide Title</label>
                    <input type="text" class="form-control" id="slideTitle" name="slide_title" placeholder="Enter slide title">
                </div>
                
                <div class="mb-3">
                    <label for="slideDescription" class="form-label">Slide Description</label>
                    <textarea class="form-control" id="slideDescription" rows="5" name="slide_description" placeholder="Enter slide description"></textarea>
                </div>

                <div class="mb-3">
                    <label for="slideImage" class="form-label">Slide Image</label>
                    <input type="file" class="form-control" id="slideImage" name="slide_image">
                </div>

                <input type="submit" class="btn btn-primary" name="add_slide" value="Add Slide">
            </form>
        </div>
    </div>
</div>




        <!-- Gallery Section ko starting-->
        <div class="admin-section">
    <div class="collapse" id="collapseGallery">
        <div class="card card-body mt-3">
            <form enctype="multipart/form-data" method="post">
                <div class="mb-3">
                    <label for="galleryCategory" class="form-label">Image Category</label>
                    <select class="form-control" id="galleryCategory" name="image_category">
                        <?php
                        include 'connect.php';
                        $sql = "SELECT * FROM category";
                        $result = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo '<option value="' . $row['image_category'] . '">' . $row['image_category'] . '</option>';
                            }
                        }
                        ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="galleryImage" class="form-label">Upload Image</label>
                    <input type="file" class="form-control" id="galleryImage" name="image">
                </div>
                <input type="submit" class="btn btn-primary" name="image_upload" value="Upload">
            </form>
            <h2 class="text-center mt-4">Manage previous uploads</h2>
            <br>

            <?php
            $sql = "SELECT * FROM image_information";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                echo '<table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th>Category</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>';

                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<tr>
                            <td><img src="uploads/' . $row['img_name'] . '" width="100"></td>
                            <td>' . $row['img_category'] . '</td>
                            <td>
                                <form method="post">
                                    <input type="hidden" name="image_id" value="' . $row['id'] . '">
                                    <button type="submit" class="btn btn-danger" name="delete_image">Delete</button>
                                    <button type="button" class="btn btn-warning" onclick="editImage(' . $row['id'] . ')">Edit</button>
                                </form>
                            </td>
                        </tr>';
                }

                echo '</tbody>
                    </table>';
            } else {
                echo 'No images found.';
            }
            ?>

            <!-- Edit Image Form -->
            <div id="editForm" style="display: none;">
                <h3>Edit Image</h3>
                <form enctype="multipart/form-data" method="post">
                    <input type="hidden" name="edit_image_id" id="edit_image_id">
                    <div class="mb-3">
                        <label for="editCategory" class="form-label">Image Category</label>
                        <select class="form-control" id="editCategory" name="new_image_category">
                            <?php
                            $sql = "SELECT * FROM category";
                            $result = mysqli_query($conn, $sql);
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo '<option value="' . $row['image_category'] . '">' . $row['image_category'] . '</option>';
                                }
                            }
                            ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="editImage" class="form-label">Upload New Image (optional)</label>
                        <input type="file" class="form-control" id="editImage" name="new_image">
                    </div>
                    <input type="submit" class="btn btn-success" name="edit_image_submit" value="Save Changes">
                </form>
            </div>

            <?php
            // Edit Image Functionality
            if (isset($_POST['edit_image_submit'])) {
                $edit_image_id = $_POST['edit_image_id'];
                $new_category = $_POST['new_image_category'];

                // Handle image upload (optional)
                if (!empty($_FILES['new_image']['name'])) {
                    $new_image_name = $_FILES['new_image']['name'];
                    $new_image_tmp = $_FILES['new_image']['tmp_name'];
                    move_uploaded_file($new_image_tmp, "uploads/$new_image_name");

                    // Update both category and image
                    $updateSql = "UPDATE image_information SET img_category = ?, img_name = ? WHERE id = ?";
                    $stmt = mysqli_prepare($conn, $updateSql);
                    mysqli_stmt_bind_param($stmt, 'ssi', $new_category, $new_image_name, $edit_image_id);
                } else {
                    // Update only category
                    $updateSql = "UPDATE image_information SET img_category = ? WHERE id = ?";
                    $stmt = mysqli_prepare($conn, $updateSql);
                    mysqli_stmt_bind_param($stmt, 'si', $new_category, $edit_image_id);
                }

                if (mysqli_stmt_execute($stmt)) {
                    echo "<script>alert('Image updated successfully');</script>";
                    echo "<script>window.location.href = window.location.href;</script>"; // Refresh page
                } else {
                    echo "<script>alert('Failed to update image');</script>";
                }

                mysqli_stmt_close($stmt);
            }

            // Delete Image Functionality
            if (isset($_POST['delete_image'])) {
                $imageId = $_POST['image_id'];
                $deleteSql = "DELETE FROM image_information WHERE id = ?";
                $stmt = mysqli_prepare($conn, $deleteSql);

                if ($stmt) {
                    mysqli_stmt_bind_param($stmt, 'i', $imageId);
                    if (mysqli_stmt_execute($stmt)) {
                        echo "<script>alert('Image deleted successfully');</script>";
                        echo "<script>window.location.href = window.location.href;</script>"; // Refresh page
                    } else {
                        echo "<script>alert('Failed to delete image');</script>";
                    }
                    mysqli_stmt_close($stmt);
                }
            }
            ?>

        </div>
    </div>
</div>

<script>
    function editImage(id) {
        document.getElementById('edit_image_id').value = id;
        document.getElementById('editForm').style.display = 'block';

        // Scroll to the edit form section
        document.getElementById('editForm').scrollIntoView({
            behavior: 'smooth'
        });
    }
</script>


        <!-- Skills/Experience ko Section -->

        
        <div class="admin-section">
            <div class="collapse" id="collapseSkills">
                <div class="card card-body mt-3">
                    <form enctype="multipart/form-data" method="post">
                        <div class="mb-3">
                            <label for="skillsTitle" class="form-label">Skills/Experience Title</label>
                            <input type="text" class="form-control" id="skillsTitle" placeholder="Enter title" name="skill_title">
                        </div>
                        <div class="mb-3">
                            <label for="skillsDescription" class="form-label">Skills/Experience Description</label>
                            <textarea class="form-control" id="skillsDescription" rows="5" placeholder="Enter description" name="skill_description"></textarea>
                        </div>
                        
                        <div class="mb-3">
                            <label for="skillsImage" class="form-label">Upload Image</label>
                            <input type="file" class="form-control" id="skillsImage" name="image">
                        </div>
                        <button type="submit" name="skill_submit" class="btn btn-primary">Save Changes</button>
                    </form>
                    

                </div>
            </div>
        </div>

        <!-- Image Categories ko Section -->
        <!-- Image Categories Section -->
        <div class="admin-section">
    <!-- Form to add a new category -->
    <div class="collapse" id="collapseCategories">
        <div class="card card-body mt-3">
            <form id="categoryForm" method="post">
                <div class="mb-3">
                    <label for="newCategory" class="form-label">Add New Category</label>
                    <input type="text" class="form-control" id="newCategory" placeholder="Enter new category" name="newcategory">
                </div>
                <button type="submit" class="btn btn-primary" name="addCategory">Add Category</button>
            </form>
            <hr>
            <h4>Categories List</h4>
            <ul class="list-group" id="categoryList">
                <?php
                include 'connect.php';
                $sql = "SELECT * FROM category";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<li class="list-group-item d-flex justify-content-between align-items-center">';
                        echo $row['image_category'];
                        echo '<form method="post" style="margin: 0;">
                                <input type="hidden" name="delete_category" value="'.$row['id'].'">
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                              </form>';
                        echo '</li>';
                    }
                }
                ?>
            </ul>
        </div>
    </div>
</div>

<?php
include 'connect.php';

// Handle adding a new category (same as before)
if (isset($_POST['addCategory'])) {
    $newCategory = trim($_POST['newcategory']);  // Trim extra spaces
    if (!empty($newCategory)) {
        $checkSql = "SELECT * FROM category WHERE image_category = ?";
        $checkStmt = mysqli_prepare($conn, $checkSql);
        mysqli_stmt_bind_param($checkStmt, 's', $newCategory);
        mysqli_stmt_execute($checkStmt);
        $result = mysqli_stmt_get_result($checkStmt);

        if (mysqli_num_rows($result) > 0) {
            echo "<script>alert('Category already exists');</script>";
        } else {
            $sql = "INSERT INTO category (image_category) VALUES (?)";
            $stmt = mysqli_prepare($conn, $sql);
            mysqli_stmt_bind_param($stmt, 's', $newCategory);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
            echo "<script>alert('Category added successfully');</script>";
            echo "<script>window.location.href = window.location.href;</script>";
        }
        mysqli_stmt_close($checkStmt);
    } else {
        echo "<script>alert('Please enter a category name');</script>";
    }
}

// Handle deleting a category and its associated images
if (isset($_POST['delete_category'])) {
    $categoryId = $_POST['delete_category'];

    // Fetch the category name to delete images in that category
    $categoryQuery = "SELECT image_category FROM category WHERE id = ?";
    $stmt = mysqli_prepare($conn, $categoryQuery);
    mysqli_stmt_bind_param($stmt, 'i', $categoryId);
    mysqli_stmt_execute($stmt);
    $categoryResult = mysqli_stmt_get_result($stmt);
    $categoryRow = mysqli_fetch_assoc($categoryResult);
    $categoryName = $categoryRow['image_category'];
    mysqli_stmt_close($stmt);

    // Fetch and delete images associated with the category
    $imageQuery = "SELECT img_name FROM image_information WHERE img_category = ?";
    $stmt = mysqli_prepare($conn, $imageQuery);
    mysqli_stmt_bind_param($stmt, 's', $categoryName);
    mysqli_stmt_execute($stmt);
    $imageResult = mysqli_stmt_get_result($stmt);

    while ($imageRow = mysqli_fetch_assoc($imageResult)) {
        $imageName = $imageRow['img_name'];
        $imagePath = 'uploads/' . $imageName;

        // Delete the image file from the server
        if (file_exists($imagePath)) {
            unlink($imagePath);  // Delete the file from the uploads folder
        }
    }
    mysqli_stmt_close($stmt);

    // Delete all images from the database that belong to the deleted category
    $deleteImagesQuery = "DELETE FROM image_information WHERE img_category = ?";
    $stmt = mysqli_prepare($conn, $deleteImagesQuery);
    mysqli_stmt_bind_param($stmt, 's', $categoryName);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    // Delete the category from the database
    $deleteCategoryQuery = "DELETE FROM category WHERE id = ?";
    $stmt = mysqli_prepare($conn, $deleteCategoryQuery);
    mysqli_stmt_bind_param($stmt, 'i', $categoryId);
    $deleteResult = mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    // Notify the user and refresh the page to update the list
    if ($deleteResult) {
        echo "<script>alert('Category and associated images deleted successfully');</script>";
        echo "<script>window.location.href = window.location.href;</script>";
    } else {
        echo "<script>alert('Failed to delete category');</script>";
    }
}

?>
<!-- <script>
    document.getElementById('categoryForm').addEventListener('submit', function(event) {
        var addButton = document.getElementById('addCategory');
        addButton.disabled = true;  // Disable the button after first click to prevent multiple submissions

        // Optionally, you can add this line to prevent the form from being submitted twice via JavaScript
        // setTimeout(function() { addButton.disabled = false; }, 5000);  // Re-enable the button after 5 seconds if needed
    });
</script> -->




        <!-- View Inquiries Section -->
        <div class="admin-section">
            <div class="collapse" id="collapseInquiries">
                <div class="card card-body mt-3">
                    
                    <div id="viewInquiries" class="admin-section">
                <div class="card card-body">
                    <h2 class="text-center mb-4">View Customer Inquiries</h2>
                    <?php
                        include 'connect.php';
                        $sql = "SELECT * FROM customer_inquiry";
                        $result = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($result) > 0) {
                            echo '<table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Message</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>';

                            while ($row = mysqli_fetch_assoc($result)) {
                                echo '<tr>
                                        
                                        <td>' . $row['name'] . '</td>
                                       <td><a href="mailto:' . $row['email'] . '">' . $row['email'] . '</a></td>

                                        <td>' . $row['message'] . '</td>
                                        <td>
                                            <form method="post">
                                                <input type="hidden" name="id" value="' . $row['id'] . '">
                                                <button type="submit" class="btn btn-danger" name="delete_inquiry">Delete</button>
                                            </form>
                                        </td>
                                    </tr>';
                            }

                            echo '</tbody>
                                </table>';
                        } else {
                            echo 'No inquiries found.';
                        }

                        if (isset($_POST['delete_inquiry'])) {
                            $inquiryId = $_POST['id'];

                            $deleteSql = "DELETE FROM customer_inquiry WHERE id = '$inquiryId'";
                            $deleteResult = mysqli_query($conn, $deleteSql);

                            if ($deleteResult) {
                                echo "<script>alert('Inquiry deleted successfully');</script>";
                            } else {
                                echo "<script>alert('Failed to delete inquiry');</script>";
                            }
                        }
                    ?>
                </div>
            </div>

                </div>
            </div>
        </div>
        <!-- Manage slide section  -->
        <div id="collapseSlides" class="collapse show"> <!-- The 'show' class makes it visible by default -->
    <div class="card card-body mt-5">
        <h3>Manage Home Slide</h3>
        <table class="table table-bordered">
        <thead>
            <tr>
                <!-- <th>ID</th> -->
                <th>Image</th>
                <th>Title</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query = "SELECT * FROM slides";
            $result = mysqli_query($conn, $query);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    // Construct the image URL
                    $imagePath = htmlspecialchars($row['image']);
                    
                    // Check if the image exists
                    $imageExists = file_exists($imagePath);
                    
                    // Display image or a placeholder if not found
                    $imageHtml = $imageExists ? '<img src="' . $imagePath . '" alt="' . htmlspecialchars($row['title']) . '" width="100" height="100">' : 'Image not found';

                    echo '<tr>
                            
                            <td>' . $imageHtml . '</td>
                            <td>' . htmlspecialchars($row['title']) . '</td>
                            <td>' . htmlspecialchars($row['description']) . '</td>
                            <td>
                                <a href="edit_slide.php?id=' . htmlspecialchars($row['id']) . '" class="btn btn-warning btn-sm margin-action">Edit</a>
                                <a href="delete_slide.php?id=' . htmlspecialchars($row['id']) . '" class="btn btn-danger btn-sm" onclick="return confirm(\'Are you sure you want to delete this slide?\');">Delete</a>
                            </td>
                        </tr>';
                }
            } else {
                echo '<tr><td colspan="5">No slides found.</td></tr>';
            }
            ?>
        </tbody>
    </table>
    </div>
</div>

        



        <!-- Manage Admins Section -->
        <div class="admin-section">
    <div class="collapse" id="collapseAdmins">
        <div class="card card-body mt-3">
            <div id="manageAdmin" class="admin-section">
                <div class="card card-body">
                    <h2 class="text-center mb-4">Manage Admin Account</h2>

                    <!-- Add New Admin Form -->
                    <form method="post">
                        <div class="mb-3">
                            <label for="adminUsername" class="form-label">New Admin Username</label>
                            <input type="text" class="form-control" id="adminUsername" name="adminUsername" placeholder="Enter username" required>
                        </div>
                        <div class="mb-3">
                            <label for="adminPassword" class="form-label">New Admin Password</label>
                            <input type="password" class="form-control" id="adminPassword" name="adminPassword" placeholder="Enter password" required>
                        </div>
                        <button type="submit" class="btn btn-primary" name="addAdmin">Add Admin</button>
                    </form>

                    <hr>

                    <!-- Existing Admins List -->
                    <h4>Our Admins</h4>
                    <ul class="list-group">
                         <?php
                        $sql = "SELECT * FROM admin";
                        $result = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo '<li class="list-group-item d-flex justify-content-between align-items-center">' . $row['username'];

                                // If this is not the main admin, show the Delete button
                                if ($row['is_main_admin'] == 0) {
                                    echo '
                                    <form method="post">
                                        <input type="hidden" name="admin_id" value="' . $row['id'] . '">
                                        <button type="submit" class="btn btn-danger" name="delete_admin">Delete</button>
                                    </form>';
                                } else {
                                    echo ' 
                                        <span class="badge bg-primary">Main Admin</span>
                                        <button class="btn btn-link btn-sm btn-primary" onclick="toggleUpdateForm()" style="text-decoration: none;padding: 9px 27px; font-size: 15px;border-radius: 10px; color:white;">Update</button>';
                                }

                                echo '</li>';
                            }
                        }
                        ?>
                    </ul>

                    <hr>
                    <?php
                    // Add New Admin
                    if (isset($_POST['addAdmin'])) {
                        $username = $_POST['adminUsername'];
                        $password = $_POST['adminPassword']; // Use plain text password directly
                        
                        // Ensure to sanitize inputs to prevent SQL injection
                        $username = mysqli_real_escape_string($conn, $username);
                        $password = mysqli_real_escape_string($conn, $password);
                        
                        $sql = "INSERT INTO admin (username, password, is_main_admin) VALUES ('$username', '$password', 0)";
                        $result = mysqli_query($conn, $sql);

                        if ($result) {
                            echo "<script>alert('Admin added successfully');</script>";
                        } else {
                            echo "<script>alert('Failed to add admin');</script>";
                        }
                    }

                    // Delete Admin
                    if (isset($_POST['delete_admin'])) {
                        $adminId = mysqli_real_escape_string($conn, $_POST['admin_id']);
                        
                        // Check if the admin being deleted is the main admin
                        $sql = "SELECT is_main_admin FROM admin WHERE id = '$adminId'";
                        $result = mysqli_query($conn, $sql);
                        $row = mysqli_fetch_assoc($result);

                        if ($row) {
                            if ($row['is_main_admin'] == 0) {
                                // Allow deletion if it's not the main admin
                                $deleteSql = "DELETE FROM admin WHERE id = '$adminId'";
                                $deleteResult = mysqli_query($conn, $deleteSql);

                                if ($deleteResult) {
                                    echo "<script>alert('Admin deleted successfully');</script>";
                                } else {
                                    echo "<script>alert('Failed to delete admin');</script>";
                                }
                            } else {
                                echo "<script>alert('Main admin cannot be deleted');</script>";
                            }
                        } else {
                            echo "<script>alert('Admin not found');</script>";
                        }
                    }
                    ?>
                    <!-- Main Admin Account Update Form, initially hidden -->
                    <div id="updateMainAdminForm" style="display: none;">
                        <h4>Update Main Admin Account</h4>
                        <form method="post">
                            <div class="mb-3">
                                <label for="oldPassword" class="form-label">Old Password</label>
                                <input type="password" class="form-control" id="oldPassword" name="oldPassword" placeholder="Enter old password" required>
                            </div>
                            <div class="mb-3">
                                <label for="newAdminUsername" class="form-label">New Username</label>
                                <input type="text" class="form-control" id="newAdminUsername" name="newAdminUsername" placeholder="Enter new username" required>
                            </div>
                            <div class="mb-3">
                                <label for="newAdminPassword" class="form-label">New Password</label>
                                <input type="password" class="form-control" id="newAdminPassword" name="newAdminPassword" placeholder="Enter new password" required>
                            </div>
                            <button type="submit" class="btn btn-primary" name="updateMainAdmin">Update Account</button>
                        </form>
                    </div>
                    <?php
                    // Handle main admin account update
                    if (isset($_POST['updateMainAdmin'])) {
                        $oldPassword = $_POST['oldPassword'];
                        $newAdminUsername = $_POST['newAdminUsername'];
                        $newAdminPassword = $_POST['newAdminPassword']; // Use plain text password directly

                        // Verify old password
                        $sql = "SELECT * FROM admin WHERE is_main_admin = 1";
                        $result = mysqli_query($conn, $sql);
                        $row = mysqli_fetch_assoc($result);

                        // Check if the old password matches the current password
                        if ($oldPassword === $row['password']) {
                            // Update main admin username and password (can choose to hash new password here if desired)
                            $updateSql = "UPDATE admin SET username = '$newAdminUsername', password = '$newAdminPassword' WHERE is_main_admin = 1";
                            $updateResult = mysqli_query($conn, $updateSql);

                            if ($updateResult) {
                                echo "<script>alert('Main admin updated successfully');</script>";
                                echo "<script>window.location.href = window.location.href;</script>";  // Refresh the page
                            } else {
                                echo "<script>alert('Failed to update main admin');</script>";
                            }
                        } else {
                            echo "<script>alert('Old password is incorrect');</script>";
                        }
                    }
                    ?>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript to toggle the Update Main Admin form -->
<script>
function toggleUpdateForm() {
    var form = document.getElementById('updateMainAdminForm');
    if (form.style.display === 'none') {
        form.style.display = 'block';
    } else {
        form.style.display = 'none';
    }
}
</script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const buttons = document.querySelectorAll('.nav-buttons .btn');
            const sections = document.querySelectorAll('.collapse');

            buttons.forEach(button => {
                button.addEventListener('click', function () {
                    // Collapse all sections and remove active class from all buttons
                    sections.forEach(section => {
                        section.classList.remove('show');
                    });
                    buttons.forEach(btn => {
                        btn.classList.remove('active');
                    });

                    // Expand the selected section and add active class to the clicked button
                    const target = button.getAttribute('data-bs-target');
                    document.querySelector(target).classList.add('show');
                    button.classList.add('active');
                });
            });
        });
    </script>
    <br>
  <center>  <a href="logout.php" class="btn btn-danger">Logout</a> </center>
  <br>
  <br>
</body>
</html>
<?php
include 'connect.php';
if(isset($_POST['category']))
{    
    $category=$_POST['newcategory'];
    $sql="INSERT INTO category (image_category) VALUES ('$category')";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
        echo "<script>alert('Category added successfully');</script>";
    }
    else
    {
        echo "<script>alert('Failed to add category');</script>";
    }
}
?>
<?php
include 'connect.php';
if (isset($_POST['image_upload'])) {
  if (isset($_FILES['image'])) {
    $image = $_FILES['image'];
    $fileName = $image['name'];
    $size = $image['size'];
    $fileTemp = $image['tmp_name'];
    $type = $image['type'];
    echo "<br>";
    $size_converted = $size / 1048576;
    $date = date("Y-m-d-H-i-s");

    $extension = pathinfo($image["name"], PATHINFO_EXTENSION);
    $newfilename = $date . "." . $extension;
    $category = $_POST['image_category'];
    if ($type == "image/jpeg" || $type == "image/png" || $type == "image/jpg") {
      if ($size_converted < 5) {
        move_uploaded_file($fileTemp, 'uploads/' . $newfilename);
        $query = "INSERT INTO image_information(img_category,img_name) VALUES('$category','$newfilename')";
        $res = mysqli_query($conn, $query);
        echo "<script>alert('File uploaded successfully');</script>";
      } else {
        die("<script>alert('Error: File is too large');</script>");
      }
    } else {
      die("<script>alert('Error: File is not supported');</script>");
    }
  } else {
    echo "<script>alert('No files');</script>";
  }
}
?>
<?php
include 'connect.php';

if (isset($_POST['add_slide'])) {
    $slideTitle = $_POST['slide_title'];
    $slideDescription = $_POST['slide_description'];
    $slideImage = $_FILES['slide_image']['name'];
    $targetDir = "uploads/";
    $targetFilePath = $targetDir . basename($slideImage);

    // Move the uploaded file to the server
    if (move_uploaded_file($_FILES['slide_image']['tmp_name'], $targetFilePath)) {
        // Insert into the database
        $query = "INSERT INTO slides (image, title, description) VALUES ('$targetFilePath', '$slideTitle', '$slideDescription')";
        $result = mysqli_query($conn, $query);

        if ($result) {
            echo "Slide added successfully!";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    } else {
        echo "Failed to upload image.";
    }
}
?>


<?php
include 'connect.php';

if (isset($_POST['skill_submit'])) {
    $title = $_POST['skill_title'];
    $description = $_POST['skill_description'];

    // Handle file upload
    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $fileTmpPath = $_FILES['image']['tmp_name'];
        $fileName = $_FILES['image']['name'];
        $fileNameCmps = explode('.', $fileName);
        $fileExtension = strtolower(end($fileNameCmps));
        $newFileName = md5(time() . $fileName) . '.' . $fileExtension;
        $uploadFileDir = './uploads/';
        $dest_path = $uploadFileDir . $newFileName;

        if (move_uploaded_file($fileTmpPath, $dest_path)) {
            // Insert data into database
            $sql = "INSERT INTO skills (title, description, skill_image) VALUES (?, ?, ?)";
            $stmt = mysqli_prepare($conn, $sql);
            
            if ($stmt) {
                mysqli_stmt_bind_param($stmt, 'sss', $title, $description, $newFileName);
                mysqli_stmt_execute($stmt);

                if (mysqli_stmt_affected_rows($stmt) > 0) {
                    // Redirect after successful insertion
                    echo "<script>alert('successfully added team');</script>";
                    // header("Location: admin.php");
                    // exit();
                } else {
                    echo "Error: Could not insert data.";
                }
                mysqli_stmt_close($stmt);
            } else {
                echo "Error: Could not prepare SQL statement.";
            }
        } else {
            echo "Error: Failed to upload file.";
        }
    } else {
        echo "Error: No file uploaded or upload error.";
    }
}

// Handle the deletion of skills
if (isset($_POST['delete_skill'])) {
    $skillId = $_POST['skill_id'];

    $deleteSql = "DELETE FROM skills WHERE id = ?";
    $stmt = mysqli_prepare($conn, $deleteSql);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, 'i', $skillId);
        $deleteResult = mysqli_stmt_execute($stmt);

        if ($deleteResult) {
            echo "<script>alert('sucessfully deleted skill');</script>";
            // header("Location: admin.php?delete=1");
            // exit();
        } else {
            echo "<script>alert('Failed to delete skill');</script>";
        }
        mysqli_stmt_close($stmt);
    } else {
        echo "Error: Could not prepare SQL statement.";
    }
}

// Fetch skills from the database
$sql = "SELECT * FROM skills";
$result = mysqli_query($conn, $sql);
?>

<div class="admin-section">
    <div class="collapse" id="collapseSkills">
        <div class="card card-body mt-3">

            
            <h2 class="text-center mt-4">Manage Skills/Experience</h2>
            <br>
            <?php
            if (mysqli_num_rows($result) > 0) {
                echo '<table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>';

                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<tr>
                            <td><img src="uploads/' . htmlspecialchars($row['skill_image']) . '" width="100"></td>
                            <td>' . htmlspecialchars($row['title']) . '</td>
                            <td>' . htmlspecialchars($row['description']) . '</td>
                            <td>
                                <form method="post" style="display:inline;">
                                    <input type="hidden" name="skill_id" value="' . $row['id'] . '">
                                    <button type="submit" class="btn btn-danger margin-action" name="delete_skill">Delete</button>
                                </form>
                                <form method="get" style="display:inline;">
                                    <input type="hidden" name="edit_skill_id" value="' . $row['id'] . '">
                                    <button type="submit" class="btn btn-warning" name="edit_skill">Edit</button>
                                </form>
                            </td>
                        </tr>';
                }

                echo '</tbody>
                    </table>';
            } else {
                echo 'No skills found.';
            }
            ?>

            <!-- Edit Skill Form -->
            <?php
            if (isset($_GET['edit_skill_id'])) {
                $editSkillId = $_GET['edit_skill_id'];

                $editSql = "SELECT * FROM skills WHERE id = ?";
                $stmt = mysqli_prepare($conn, $editSql);
                mysqli_stmt_bind_param($stmt, 'i', $editSkillId);
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);
                $editRow = mysqli_fetch_assoc($result);
                mysqli_stmt_close($stmt);
            ?>
                <div class="mt-4">
                    <h3>Edit Skill</h3>
                    <form enctype="multipart/form-data" method="post">
                        <input type="hidden" name="edit_skill_id" value="<?php echo htmlspecialchars($editRow['id']); ?>">
                        <div class="mb-3">
                            <label for="editSkillsTitle" class="form-label">Skills/Experience Title</label>
                            <input type="text" class="form-control" id="editSkillsTitle" name="edit_skill_title" value="<?php echo htmlspecialchars($editRow['title']); ?>">
                        </div>
                        <div class="mb-3">
                            <label for="editSkillsDescription" class="form-label">Skills/Experience Description</label>
                            <textarea class="form-control" id="editSkillsDescription" rows="5" name="edit_skill_description"><?php echo htmlspecialchars($editRow['description']); ?></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="editSkillsImage" class="form-label">Upload New Image (optional)</label>
                            <input type="file" class="form-control" id="editSkillsImage" name="edit_image">
                        </div>
                        <button type="submit" name="update_skill" class="btn btn-primary">Update Skill</button>
                    </form>
                </div>
            <?php
            }

            // Handle the update of skills
            if (isset($_POST['update_skill'])) {
                $editSkillId = $_POST['edit_skill_id'];
                $editTitle = $_POST['edit_skill_title'];
                $editDescription = $_POST['edit_skill_description'];

                if (isset($_FILES['edit_image']) && $_FILES['edit_image']['error'] == 0) {
                    $fileTmpPath = $_FILES['edit_image']['tmp_name'];
                    $fileName = $_FILES['edit_image']['name'];
                    $fileNameCmps = explode('.', $fileName);
                    $fileExtension = strtolower(end($fileNameCmps));
                    $newFileName = md5(time() . $fileName) . '.' . $fileExtension;
                    $uploadFileDir = './uploads/';
                    $dest_path = $uploadFileDir . $newFileName;

                    if (move_uploaded_file($fileTmpPath, $dest_path)) {
                        $updateSql = "UPDATE skills SET title = ?, description = ?, skill_image = ? WHERE id = ?";
                        $stmt = mysqli_prepare($conn, $updateSql);

                        if ($stmt) {
                            mysqli_stmt_bind_param($stmt, 'sssi', $editTitle, $editDescription, $newFileName, $editSkillId);
                            mysqli_stmt_execute($stmt);

                            if (mysqli_stmt_affected_rows($stmt) > 0) {
                                header("Location: admin.php?update=1");
                                exit();
                            } else {
                                echo "Error: Could not update data.";
                            }
                            mysqli_stmt_close($stmt);
                        } else {
                            echo "Error: Could not prepare SQL statement.";
                        }
                    } else {
                        echo "Error: Failed to upload file.";
                    }
                } else {
                    $updateSql = "UPDATE skills SET title = ?, description = ? WHERE id = ?";
                    $stmt = mysqli_prepare($conn, $updateSql);

                    if ($stmt) {
                        mysqli_stmt_bind_param($stmt, 'ssi', $editTitle, $editDescription, $editSkillId);
                        mysqli_stmt_execute($stmt);

                        if (mysqli_stmt_affected_rows($stmt) > 0) {
                            header("Location: admin.php?update=1");
                            exit();
                        } else {
                            echo "Error: Could not update data.";
                        }
                        mysqli_stmt_close($stmt);
                    } else {
                        echo "Error: Could not prepare SQL statement.";
                    }
                }
            }
            ?>
        </div>
    </div>
</div>
