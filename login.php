<html>

<head>
    <title>Login</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(120deg, #2c3e50 0%, #4ca1af 100%) no-repeat center center fixed;
            background-size: cover;
            position: relative;
            height: 100vh;
        }

        body::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.7);
            z-index: -1;
        }

        .login-box {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 350px;
            padding: 40px;
            background: rgba(255, 255, 255, 0.1);
            transform: translate(-50%, -50%);
            z-index: 1;
            border-radius: 15px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
        }

        .login-box h1 {
            text-align: center;
            color: #ffffff;
            margin-bottom: 30px;
            font-size: 24px;
        }

        .login-box input[type="text"],
        .login-box input[type="password"] {
            width: 100%;
            padding: 12px;
            background: rgba(255, 255, 255, 0.15);
            border: none;
            outline: none;
            color: #ffffff;
            font-size: 16px;
            margin-bottom: 20px;
            border-radius: 10px;
            box-sizing: border-box;
        }

        .login-box input[type="submit"] {
            width: 100%;
            padding: 12px;
            background-color: #e74c3c;
            border: none;
            border-radius: 50px;
            font-size: 18px;
            color: #ffffff;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .login-box input[type="submit"]:hover {
            background-color: #c0392b;
        }

        .login-box a {
            color: #fff;
            text-decoration: none;
            font-size: 14px;
            display: block;
            text-align: center;
            margin-top: 20px;
        }

        .login-box a:hover {
            color: #39dc79;
        }

        .avatar {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            position: absolute;
            top: -50px;
            left: calc(50% - 50px);
        }

        p {
            font-size: 18px;
            color: #fff;
        }
        /* Form Controls */
        

        .form-select:focus {
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.7);
        }



        #link {
            font-size: 15px;
            font-style: italic;
            color: #fff;
        }
    </style>
</head>

<body>
    <div class="login-box">
        <img class="avatar" src="login4.jpg" alt="">
        <h1>Admin Login</h1>
        <form name="login" method="POST" autocomplete="off">
            <p>User Name</p>
            <input class="form-select" type="text" name="name" placeholder="Enter Admin's username" required>
            <p>Password</p>
            <input class="form-select" type="password" name="password" placeholder="Enter Password" required>
            <input type="submit" name="submit" value="Login">
        </form>
    </div>
</body>

</html>

<?php
session_start();
include 'connect.php'; // Ensure this is correct and points to your DB connection file

if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $pass = mysqli_real_escape_string($conn, $_POST['password']);

    $query = "SELECT * FROM admin WHERE username='$name' AND password='$pass'";
    $result = mysqli_query($conn, $query);
    $count = mysqli_num_rows($result);

    if ($count > 0) {
        $_SESSION['username'] = $name;
        header("Location: http://localhost/capture/admin.php");
        exit(); // Make sure to exit after the header redirect
    } else {
        echo '<script>alert("Invalid username or password! Please try again")</script>';
    }
}
?>

