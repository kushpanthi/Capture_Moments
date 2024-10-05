<!DOCTYPE html>
<html lang="en">
<head>
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="copyright" content="Capture Moments photography, 2024">
    <meta name="description" content="Capture Moments - Professional photography services for weddings, portraits, events, and lifestyle. Turn your precious moments into timeless memories with our expert photographers.">
    <meta name="keywords" content="photography, professional photography, Capture Moments, wedding photography, portrait photography, event photography, lifestyle photography, photographer near me, photography services, best photographers, photography portfolio">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image" href="logo.jpg">
    <title>Capture Moments - Professional Photography Services for Weddings, Events, and Portraits</title>
    <style>
        body {
            padding:0;
            margin:0;
            background-color: #363535 !important;
        }
        
        .navbar {
            width: 100%;
            background-color: #343a40; 
            padding: 0 15px;
            box-sizing: border-box; /* Ensure padding is included in the total width */
        }

        /* For navbar items */
        .navbar-nav {
            margin: 0;
            padding: 0;
        }

        .nav-link {
            padding: 10px 15px; 
            color: #fff;
        }

        .navbar-toggler {
            border: none; /* Remove default border */
        }

        /* Ensure navbar brand is not oversized */
        .navbar-brand {
            display: flex;
            align-items: center;
        }
        .navbar-brand img{
            height: 42px;
            width: 48px;
        }
        .nav-side{
            position: absolute;
            right: 144px;
        }
        
        div#photo_background {           
            margin-top: 0px !important;
            height: 100% !important;
            background-color: #eadfdf !important;
            padding: 29px !important;
            border-bottom: solid 3px !important;
            border-color: rgba(255, 255, 255, 0.15) !important;
        }
        div#contact, div#portfolio {           
            margin-top: 0px !important;
            height: 100% !important;
            padding: px !important;
            border-bottom: solid 3px !important;
            border-color: rgba(255, 255, 255, 0.15) !important;
        }
        .display-1 {
            color: white !important;
            padding: 50px !important;
        } 
        .nav {
            padding: 0 5px !important;
            line-height: 35px !important;
            font-weight: 600 !important;
            text-transform: uppercase !important;
            font-size: 14px !important;
            letter-spacing: 3px !important;
        }
        .white_text {
            color: white !important;
        }
        h2 {
            margin-top: 42px !important;
        }
        .col-md-4 {
            padding: 6px !important;
            margin-bottom: 22px;
        }
        .card#portfolio {
            background-color: #1f1f1f !important;
            border: solid white 0.5px !important;
            color: white !important;   
        }
        .gallery-row {
            display: flex;
            flex-wrap: wrap;
            gap: 5px;
            background-color:#eadfdf !important;
            margin-top: -32px;
            justify-content: center;

            
        }
        .gallery-img {
            flex: 1 1 calc(25% - 5px);
            max-width: calc(25% - 5px);
            transition: transform 0.3s;
            padding: 20px;
        }
        .gallery-img:hover {
            transform: scale(1.05);
        }
        .category-menu {
            text-align: center;
            margin-bottom: 20px;
        }
        .category-menu button {
            margin: 8px;
            padding: 10px 20px;            
            background-color: white;
            color:black;
            border-radius: 20px;
            
        }
        .category-menu button:hover {
            background-color: black;
            scale: 1.05;    
            /* color: grey; */
            cursor: pointer;
            background-color: rgba(255, 255, 255, 0.15);
            transition-duration: 0.3s;
        }
            /* skills and experience */
        

        #skillcard:hover{
            transform: scale(1.02);            
            
        }
        .skill-btn {
            background-color: #003366; /* Dark Blue */
            color: #fff8dc; /* Cornsilk */
            border: 2px solid #003366; 
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 1rem;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            transition: background-color 0.3s ease, color 0.3s ease, transform 0.3s ease;
        }

        .skill-btn:hover {
            background-color: #00509e; /* Slightly lighter blue */
            color: #f0e8d0; /* Slightly darker cornsilk */
            border-color: #00509e; 
            transform: scale(1.05); /* Slightly enlarge on hover for a dynamic effect */
        }
        .card-img-top {
            width: 100%;
            height: 599px;
        }
          /* contact */
        #contact{
            background-color: #eadfdf;
        }
        .form-group{
            margin-bottom:1rem;
        }
        /* fontdesign */
        .mina-regular {
        font-family: "Mina", sans-serif;
        font-weight: 400;
         font-style: normal;
        }

        .mina-bold {
        font-family: "Mina", sans-serif;
        font-weight: 700;
        font-style: normal;
        }
        .carter-one-regular {
        font-family: "Carter One", system-ui;
        font-weight: 400;
        font-style: normal;
        
        }
        /* Home page slide section  */
         .carousel {
            position: relative;
            width: 100%;
            overflow: hidden;
        }

        .slide {
            width: 100%;
            display: none;
        }
        .slide:first-child {
            display: block;
        }

        .slide img {
            width: 100%;
            height: 550px;
        }

        .slide-content {
            position: absolute;
            bottom: 10%;
            left: 50%;
            transform: translateX(-50%);
            color: #fff;
            text-align: center;
        }

        /* Style the title */
        .slide-content h3 {
            font-size: 2em;
            margin: 0;
            padding: 0;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
        }

        /* Style the description */
        .slide-content p {
            font-size: 1.2em;
            margin: 0;
            padding: 0;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.6);
        }

        

        .prev, .next {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background-color: rgba(0, 0, 0, 0.5);
            color: #fff;
            border: none;
            cursor: pointer;
            padding: 10px;
            z-index: 1000; /* Ensure buttons are on top */
        }

        .prev {
            left: 10px;
        }

        .next {
            right: 10px;
        }
        .kush{
            text-decoration: none;
            color: wheat;

        }
        .kush:hover{
            color: lightyellow;

        }
        

/* Wrapper for the contact section */
.contact-wrapper {
    text-align: center;
    margin-bottom: 40px;
}

/* Centered Contact Us Heading */
.contact-heading h1 {
    font-size: 2.5rem;
    margin-top:65px;
    margin-bottom: 40px;
    color: white;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
}

/* Flexbox for the contact info and form in a row */
.contact-container {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    max-width: 1200px;
    margin: 0 auto;
    padding: 40px 20px;
    background-color: #eadfdf;
    border-radius: 10px;
    box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
}

/* Let's Get in Touch Section */
.contact-info, .contact-form {
    background-color: #eadfdf;
    border: 2px solid white;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0,0,0,0.2);
    padding: 20px;
    margin: 10px;
}

.contact-info {
    animation: fadeIn 1s ease-in-out;
}


.section-title {
    text-align: center;
    color: #333;
    font-size: 2rem;
    margin-bottom: 20px;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
}


.contact-details {
    margin-bottom: 20px;
}

.contact-item {
    display: flex;
    align-items: center;
    margin-bottom: 15px;
}

.contact-item i {
    font-size: 1.5rem;
    color: #3498db;
    margin-right: 15px;
    margin-top: -13px;
}

.contact-item p {
    font-size: 1.1rem;
    color: #34495e;
}

.map-container iframe {
    border: none;
    border-radius: 8px;
}

.form-group {
    margin-bottom: 20px;
}

/* Contact Us Form Section */
.contact-form {
    width: 45%;
    height:622px;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    animation: fadeIn 1s ease-in-out 0.5s;
}

.contact-form h2 {
    color: #333;
    font-size: 2rem;
    margin-bottom: 20px;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
}

.form-group {
    margin-bottom: 15px;
}

.form-control {
    width: 100%;
    border-radius: 5px;
    border: 1px solid #ddd;
    padding: 10px;
    font-size: 1rem;
}
label {
    display: inline-block;
    margin: 3px 3px;
    float: left;
}

.submit-btn {
    background-color: #00509e;
    color: #fff;
    padding: 12px 20px;
    border: none;
    border-radius: 5px;
    font-size: 1rem;
    cursor: pointer;
    margin-top: 38px;
    transition: background-color 0.3s ease, transform 0.3s ease;
}

.submit-btn:hover {
    background-color: #003366;
    transform: scale(1.05);
}
/* Location map  */

.map-container iframe{
    width:540px;
    height:300px;
}
/* Media quieries for slide */

@media (max-width: 768px) {
    .slide-content h3 {
        font-size: 1.8em;
    }

    .slide-content p {
        font-size: 1.1em;
    }
}

/* Mobile Devices (480px and below) */
@media (max-width: 480px) {
    .slide-content h3 {
        font-size: 1.5em;
    }

    .slide-content p {
        font-size: 1em;
    }
}

/* media QUeires for gallery section  */
@media (min-width: 1200px) {
    .gallery-img {
        flex: 1 1 calc(25% - 30px); /* 4 images per row */
        max-width: calc(25% - 30px);
        padding: 15px;
    }
}

/* Responsive for tablets */
@media (min-width: 768px) and (max-width: 1199px) {
    .gallery-img {
        flex: 1 1 calc(33.33% - 20px); /* 3 images per row */
        max-width: calc(33.33% - 20px);
        padding: 15px;
    }
}

/* Responsive for mobile */
@media (max-width: 767px) {
    .gallery-img {
        flex: 1 1 calc(50% - 20px); /* 2 images per row */
        max-width: calc(50% - 20px);
        padding: 10px;
    }
}

/* Responsive for smaller mobile screens */
@media (max-width: 480px) {
    .gallery-img {
        flex: 1 1 100%; /* 1 image per row */
        max-width: 100%;
        padding: 10px;
    }
}

/* Media Queries for Responsiveness */
@media (max-width: 1000px) {
    .navbar {
    padding: 15px;
    background-color: #333; /* Dark background color */
}

.navbar-brand img {
    width: 50px;
    height: auto;
}

.navbar-brand {
    font-size: 24px;
    font-weight: bold;
    color: #f8f9fa;
}

.nav-link {
    font-size: 18px;
    padding: 10px 15px;
    color: #f8f9fa;
    transition: color 0.3s ease;
}

.nav-link:hover {
    color: #00509e; /* Hover color */
}

.navbar-toggler {
    border: none;
}

.navbar-toggler-icon {
    color: #fff;
}

.map-container iframe{
        width:300px;
        height:300px;
    }


}
@media (max-width: 768px) {
    .contact-container {
        flex-direction: column;
        align-items: center;
    }

    .contact-info, .contact-form {
        width: 100%;
        margin-bottom: 20px;
    }
    /* media queries for navbar */

    
    .navbar-brand {
        font-size: 20px;
    }

    .nav-link {
        font-size: 16px;
        padding: 8px 12px;
    }

    /* Make the navbar take full width on mobile */
    .collapse.show {
        background-color: rgba(0, 0, 0, 0.9);
        padding: 10px;
    }

    .navbar-nav .nav-item {
        margin-bottom: 10px;
    }

    .nav-link {
        font-size: 18px;
        text-align: center;
        width: 100%;
    }
}
@media (max-width: 618px){
    .map-container iframe{
        width:300px;
        height:300px;
    }
}
@media (max-width: 400px) {
    .map-container iframe {
        height: 300px;
        width: 250px;
    }
}
@media (max-width: 576px) {
    .navbar-brand {
        font-size: 18px;
    }

    .nav-link {
        font-size: 14px;
        padding: 6px 10px;
    }
}

/* Contact page and footeer media quires */

/* Extra Small Devices (up to 575px) */
@media (max-width: 575px) {
    .contact-container {
        flex-direction: column;
    }
    .contact-form{
        height:400px;
    }

    .contact-info, .contact-form {
        flex-basis: 100%;
    }

    .submit-btn {
        border-radius:10px;
    }

    footer .row .col {
        text-align: center;
    }

    .map-container iframe {
        height: 250px;
    }

    .contact-item i {
        font-size: 16px;
        margin-right: 8px;
    }
}

/* Small Devices (up to 767px) */
@media (max-width: 767px) {
    .contact-info, .contact-form {
        flex-basis: 100%;
    }

    .contact-container {
        padding: 15px;
    }

    .contact-heading h1 {
        font-size: 28px;
        text-align: center;
    }

    .contact-item i {
        font-size: 20px;
        margin-right: 10px;
    }

    .map-container iframe {
        height: 250px;
    }
}

/* Medium Devices (up to 991px) */
@media (max-width: 991px) {
    .contact-info, .contact-form {
        flex-basis: 100%;
    }

    .contact-container {
        padding: 20px;
    }

    .contact-heading h1 {
        font-size: 30px;
        text-align: center;
    }

    .map-container iframe {
        height: 280px;
    }

    footer .col {
        text-align: center;
    }
}

/* Large Devices (up to 1200px) */
@media (max-width: 1200px) {
    .contact-info, .contact-form {
        flex-basis: 100%;
    }

    .contact-container {
        padding: 30px;
    }

    .map-container iframe {
        height: 300px;
    }

    footer .col {
        text-align: center;
    }

    .contact-heading h1 {
        font-size: 36px;
        text-align: center;
    }

    .contact-item i {
        font-size: 22px;
    }
}
    </style>
    <!-- for responsive navbar -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- for contact page -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Icons ko library -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    
    <link href="https://fonts.googleapis.com/css2?family=Carter+One&family=Mina:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mina:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" />
<body>
<nav class="navbar navbar-expand-md bg-dark sticky-top border-bottom">
    <div class="container-fluid">
        <a class="navbar-brand white_text" href="#">
            <img src="logo.jpg" alt="Logo" class="d-inline-block align-text-top">
            CAPTURE MOMENTS
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
                <i class="fas fa-bars"></i> <!-- Font Awesome Icon for burger -->
            </span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active white_text mina-bold mina-regular" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link white_text mina-bold mina-regular" href="#photo_background">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link white_text mina-bold mina-regular" href="#portfolio">Skills/Experience</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link white_text mina-bold mina-regular" href="#contact">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link white_text mina-bold mina-regular" href="login.php">Admin</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


    <!-- slide section  -->
<div class="carousel">
    <div class="slides-container">
        <?php
        include 'connect.php';
        $query = "SELECT * FROM slides";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo '
                <div class="slide">
                    <img src="' . htmlspecialchars($row['image']) . '" alt="' . htmlspecialchars($row['title']) . '">
                    <div class="slide-content">
                        <h3>' . htmlspecialchars($row['title']) . '</h3>
                        <p>' . htmlspecialchars($row['description']) . '</p>
                    </div>
                </div>';
            }
        }
        ?>
    </div>
    <button class="prev" onclick="prevSlide()">&#10094;</button>
    <button class="next" onclick="nextSlide()">&#10095;</button>
</div>


<div class="container-fluid" id="photo_gallery"></div>
    <div class="container-fluid" id="photo_background">
        <center><h1 class="carter-one-regular" style="margin-top: 28px;">Gallery</h1></center>

        <div class="category-menu">
            <form method="POST" id="categoryForm" action="#photo_background">
                
                <button type="submit" name="all">Show All</button>
                <?php
                include 'connect.php'; 
                $categoryQuery = "SELECT DISTINCT img_category FROM image_information";
                $categoryResult = mysqli_query($conn, $categoryQuery);

                if (mysqli_num_rows($categoryResult) > 0) {
                    while ($categoryRow = mysqli_fetch_assoc($categoryResult)) {
                        $category = $categoryRow['img_category'];
                        
                        echo '<button type="submit" name="category" value="' . $category . '">' . ucwords(str_replace('_', ' ', $category)) . '</button>';
                    }
                }
                ?>
            </form>
        </div>
        </div>

        <div class="gallery-row" id="gallery">
            <?php
           
            if (isset($_POST['all'])) {
                $query = "SELECT img_name FROM image_information";
            }
           
            elseif (isset($_POST['category'])) {
                $selectedCategory = $_POST['category'];
                $query = "SELECT img_name FROM image_information WHERE img_category = '$selectedCategory'";
            }
            
            else {
                $query = "SELECT img_name FROM image_information";
            }

            $result = mysqli_query($conn, $query);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<img src="uploads/' . $row['img_name'] . '" class="gallery-img">';
                    
                }
            } else {
                echo '<p>No images found in the database.</p>';
            }
            ?>
        </div>
    </div>




<div class="container-fluid" id="portfolio"></div>
    <center><h1 class=" carter-one-regular white_text "style="margin-top: 63px;""">Our Skills and Experience</h1></center>

    <div class="container-fluid" id="skills">
        <br>
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <?php
                include 'connect.php';

                $query = "SELECT id, title, skill_image FROM skills";
                $result = mysqli_query($conn, $query);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $imagePath = 'uploads/' . htmlspecialchars($row['skill_image']);
                        $title = htmlspecialchars($row['title']);
                        $id = htmlspecialchars($row['id']);
                        
                        echo '<div class="col-md-4" id="skillcard">';
                        echo '<div class="card" id="portfolio">';
                        echo '<img src="' . $imagePath . '" class="card-img-top" alt="Skill Image">';
                        echo '<div class="card-body">';
                        echo '<h5 class="card-title">' . $title . '</h5>';
                        echo '<a href="view_portfolio.php?id=' . $id . '" class="btn btn-primary skill-btn">View Portfolio</a>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                    }
                } else {
                    echo '<p>No data found in the database.</p>';
                }
            ?>

        </div>
    </div>


 

<div class="container-fluid" id="contact"></div>
<div class="contact-wrapper">
    <div class="contact-heading">
        <h1 class="carter-one-regular">Contact Us</h1>
    </div>

    <div class="contact-container">
        <!-- Let's Get in Touch Section -->
        <div class="col-md-6 contact-info">
                <h2 class="section-title">Let's Get in Touch</h2>
                <div class="contact-details">
                    <div class="contact-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <p>Capture Moments Station, near to ISMT Butwal</p>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-phone-alt"></i>
                        <p>071-692109</p>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-envelope"></i>
                        <p>contact@capturemoments.com</p>
                    </div>
                </div>
                <div class="map-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14134.91418077076!2d83.4656312!3d27.6638691!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399685b9d3b900d9%3A0xdb0d4a8fa971b25d!2sISMT%20College%20Butwal%2C%20Butwal!5e0!3m2!1sen!2snp!4v1726771556321!5m2!1sen!2snp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        <!-- Contact Us Form Section -->
        <div class="contact-form">
            <h2>Send Message</h2>
            <form method="POST" onsubmit="return validateForm()">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter your name" name="name" required>
                    <div id="nameError" style="color: red; display: none;">Please enter a valid name (letters only).</div>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter your email" name="email" required>
                    <div id="emailError" style="color: red; display: none;">Please enter a valid email address.</div>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea class="form-control" id="message" rows="5" placeholder="Enter your message" name="message" required></textarea>
                    <div id="messageError" style="color: red; display: none;">Message must be at least 10 characters long.</div>
                </div>
                <button type="submit" name="contact" class="submit-btn">Submit</button>
            </form>
        </div>
    </div>
</div>


<footer class="bg-dark text-white text-center py-4">
  <div class="container">
    <div class="row">
      <div class="col">
        <p>&copy; 2024 Capture Moments. All rights reserved.</p>
        
      </div>
      <p><a href="https://kushpanthi.com.np/" class="kush">Developed by: Kush Panthi</a></p>
      <div class="col">
        <ul class="list-inline">
          <li class="list-inline-item">
            <a href="https://www.facebook.com/" class="text-white">
              <i class="fab fa-facebook-f"></i>
            </a>
          </li>
          <li class="list-inline-item">
            <a href="https://www.x.com/ class="text-white">
              <i class="fab fa-twitter"></i>
            </a>
          </li>
          <li class="list-inline-item">
            <a href="https://www.instagram.com/kushpanthi/" class="text-white">
              <i class="fab fa-instagram"></i>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</footer>
<script>
    function validateForm() {
        var name = document.getElementById('name').value;
        var email = document.getElementById('email').value;
        var message = document.getElementById('message').value;

        var nameError = document.getElementById('nameError');
        var emailError = document.getElementById('emailError');
        var messageError = document.getElementById('messageError');

        // Regular expression to check if the name contains only letters and spaces
        var namePattern = /^[A-Za-z\s]+$/;

        // Clear previous error messages
        nameError.style.display = 'none';
        emailError.style.display = 'none';
        messageError.style.display = 'none';

        // Validate name
        if (!namePattern.test(name)) {
            nameError.style.display = 'block'; // Show name error message
            return false; // Prevent form submission
        }

        // Validate email
        if (!validateEmail(email)) {
            emailError.style.display = 'block'; // Show email error message
            return false; // Prevent form submission
        }

        // Validate message length (minimum of 10 characters)
        if (message.length < 10) {
            messageError.style.display = 'block'; 
            return false; // Prevent form submission
        }

        return true; // Allow form submission
    }

    function validateEmail(email) {
        // Simple regex to validate email format
        var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailPattern.test(email);
    }
</script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- for navbar responsive -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <script>
    document.addEventListener("DOMContentLoaded", function() {
        let currentSlide = 0;
        const slides = document.querySelectorAll('.slide');
        const totalSlides = slides.length;

        if (totalSlides === 0) {
            console.error("No slides found!");
            return;  // Exit if no slides are available
        }

        // Function to show the correct slide
        function showSlide(index) {
            currentSlide = (index + totalSlides) % totalSlides;  // Loop around slides
            console.log("Showing slide", currentSlide);  // Debug log for current slide
            
            slides.forEach((slide, i) => {
                slide.style.display = i === currentSlide ? 'block' : 'none';
            });
        }

        // Show the next slide
        window.nextSlide = function() {
            console.log("Next Slide");
            showSlide(currentSlide + 1);
        }

        // Show the previous slide
        window.prevSlide = function() {
            console.log("Previous Slide");
            showSlide(currentSlide - 1);
        }

        // Initialize the first slide
        showSlide(currentSlide);

        // Automatic slide change every 30 seconds
        const autoSlideInterval = setInterval(window.nextSlide, 30000);

        // Attach event listeners to buttons
        const nextButton = document.querySelector('.next');
        const prevButton = document.querySelector('.prev');

        if (nextButton && prevButton) {
            nextButton.addEventListener('click', window.nextSlide);
            prevButton.addEventListener('click', window.prevSlide);
        } else {
            console.error("Next or previous button not found!");
        }

        // Debugging logs to check button events
        console.log("Event listeners attached for next and prev buttons");
    });

</script>
<script>
    // Optional: Auto-close the navbar when clicking outside
    document.addEventListener('click', function (event) {
        var isClickInside = document.querySelector('.navbar').contains(event.target);

        if (!isClickInside) {
            var navbarCollapse = document.querySelector('.navbar-collapse');
            var bsCollapse = new bootstrap.Collapse(navbarCollapse, { toggle: false });
            bsCollapse.hide();
        }
    });

    // Close the navbar when clicking on a menu item (for small screens)
    document.querySelectorAll('.nav-link').forEach(link => {
        link.addEventListener('click', function () {
            var navbarCollapse = document.querySelector('.navbar-collapse');
            var bsCollapse = new bootstrap.Collapse(navbarCollapse, { toggle: false });
            bsCollapse.hide();
        });
    });
</script>
</body>
</html>

<?php
include 'connect.php';
if (isset($_POST['contact'])) {
    $inquiry_name = ($_POST['name']);
    $inquiry_email = ($_POST['email']);
    $inquiry_message = ($_POST['message']);
    $query2 = "insert into customer_inquiry (name,email,message) values('$inquiry_name','$inquiry_email','$inquiry_message');";
    $inquiry_check = mysqli_query($conn, $query2);
    if($inquiry_check)
    {
        echo "<script>alert('Your inquiry has been submitted successfully');</script>";
    }
    else
    {
        echo "<script>alert('Failed to submit inquiry');</script>";
    }
    
  }
?>