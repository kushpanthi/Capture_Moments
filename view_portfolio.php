<?php
include 'connect.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    
    $query = "SELECT title, description, skill_image FROM skills WHERE id = ?";
    $stmt = mysqli_prepare($conn, $query);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, 'i', $id);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if ($row = mysqli_fetch_assoc($result)) {
            $imagePath = 'uploads/' . htmlspecialchars($row['skill_image']);
            $title = htmlspecialchars($row['title']);
            $description = htmlspecialchars($row['description']);
        } else {
            $error_message = 'No details found for this skill.';
        }
        mysqli_stmt_close($stmt);
    } else {
        $error_message = 'Error preparing SQL statement.';
    }
} else {
    $error_message = 'No skill ID provided.';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skill Details</title>
    <style>
        /* General styles for the container */
.container.resume-container {
    max-width: 900px;
    margin: 2rem auto;
    padding: 2rem;
    border-radius: 12px;
    background: linear-gradient(135deg, #f5f7fa, #c3cfe2); /* Subtle gradient */
    box-shadow: 0 12px 24px rgba(0,0,0,0.15);
    animation: fadeIn 1s ease-out;
}

/* Header styles */
.resume-header {
    text-align: center;
    border-bottom: 2px solid #ddd;
    padding-bottom: 20px;
    margin-bottom: 30px;
}

.resume-header h1 {
    font-size: 2.8rem;
    color: #222;
    margin: 0;
    background: linear-gradient(45deg, #ff6b6b, #f06595); /* Gradient text */
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    animation: slideIn 0.8s ease-out;
}

/* Body styles */
.resume-body {
    text-align: center;
}

.resume-img {
    max-width: 100%;
    height: auto;
    border-radius: 12px;
    box-shadow: 0 12px 24px rgba(0,0,0,0.2);
    margin-bottom: 20px;
    transition: transform 0.3s ease-in-out;
}

.resume-img:hover {
    transform: scale(1.05); /* Zoom effect on hover */
}

.resume-body p {
    font-size: 1.3rem;
    color: #444;
    line-height: 1.8;
    padding: 0 1rem;
    animation: fadeInUp 1s ease-out;
}

/* Button styles */
.btn-secondary {
    display: inline-block;
    padding: 12px 24px;
    font-size: 1.1rem;
    color: #fff;
    background-color: #3498db; /* Bright blue */
    border: none;
    border-radius: 8px;
    text-decoration: none;
    text-align: center;
    transition: background-color 0.3s, transform 0.3s;
    box-shadow: 0 8px 16px rgba(0,0,0,0.15);
}

.btn-secondary:hover {
    background-color: #2980b9; /* Darker blue */
    transform: translateY(-2px);
}

/* Error message styles */
.error-message {
    color: #e74c3c; /* Red */
    text-align: center;
    font-size: 1.3rem;
}

/* Animations */
@keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
}

@keyframes slideIn {
    from { transform: translateY(-20px); opacity: 0; }
    to { transform: translateY(0); opacity: 1; }
}

@keyframes fadeInUp {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
}

    </style>
</head>
<body>
    <div class="container resume-container">
        <?php if (isset($error_message)) { ?>
            <p class="error-message"><?php echo htmlspecialchars($error_message); ?></p>
        <?php } else { ?>
            <div class="resume-header">
                <h1><?php echo htmlspecialchars($title); ?></h1>
            </div>
            <div class="resume-body">
                <img src="<?php echo htmlspecialchars($imagePath); ?>" class="resume-img" alt="Skill Image">
                <p><?php echo htmlspecialchars($description); ?></p>
                <a href="index.php" class="btn-secondary">Back to Home</a>
            </div>
        <?php } ?>
    </div>
</body>
</html>
