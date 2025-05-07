<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ZenChill | Login</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body, html {
            height: 100%;
            overflow: hidden;
        }

        .slideshow {
            position: fixed;
            width: 100%;
            height: 100%;
            z-index: -1;
            background-color:rgb(0, 0, 0);
        }

        .slideshow img {
            position: absolute;
            width: 100%;
            height: 100%;
            object-fit: cover;
            opacity: 0;
            animation: fade 49s infinite;
        }

        .slideshow img:nth-child(1) { animation-delay: 0s; }
        .slideshow img:nth-child(2) { animation-delay: 7s; }
        .slideshow img:nth-child(3) { animation-delay: 14s; }
        .slideshow img:nth-child(4) { animation-delay: 21s; }
        .slideshow img:nth-child(5) { animation-delay: 28s; }
        .slideshow img:nth-child(6) { animation-delay: 35s; }
        .slideshow img:nth-child(7) { animation-delay: 42s; }

        @keyframes fade {
            0%   { opacity: 0; }
            8%   { opacity: 1; }  
            20%  { opacity: 1; }
            28%  { opacity: 0; }
            100% { opacity: 0; }
        }

        .login-box {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: rgba(20, 20, 20, 0.85);
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 0 30px rgba(255, 0, 0, 0.53);
            width: 300px;
            color: white;
        }

        .login-box h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .login-box input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            background: #111;
            border: none;
            border-radius: 6px;
            color: white;
        }

        .login-box button {
            width: 100%;
            padding: 10px;
            background: red;
            border: none;
            border-radius: 6px;
            color: white;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .login-box button:hover {
            background: darkred;
        }
        .sub-links {
            text-align: center;
            margin-bottom: 10px;
            font-size: 0.9em;
            cursor: pointer;
            padding-top: 15px;
        }

        .sub-links a {
            color: white;
            text-decoration: none;
        }

        .sub-links:hover {
            color: white;
        }

        .sub-links a:hover {
            text-decoration: underline;
        }

        .header {
            position: absolute;
            top: 30px;
            left: 40px;
            z-index: 10;
        }

        .header img {
            display: block;
        }

        .header img a:hover {
            text-decoration: none;
        }
    </style>
</head>

<?php
        session_start();
        if (isset($_SESSION['login_error'])) {
            echo "<p style='color: red; text-align: center; margin-bottom: 10px;'>" . $_SESSION['login_error'] . "</p>";
            unset($_SESSION['login_error']);
        }
?>
<body>

    <!-- Page Header -->
    <header class="header">
        <a href="landingpage.php">
            <img src="images/ZenChill.jpg" alt="ZenChill Logo" height="90" width="350">
          </a>
    </header>

    <!-- Movie Banner Images -->
    <div class="slideshow">
        <img src="images/banners/MinecraftMovie.jpg" alt="Minecraft Movie">
        <img src="images/banners/iRobot.jpg" alt="iRobot">
        <img src="images/banners/TheSubstance.jpg" alt="The Substance">
        <img src="images/banners/JurassicWorld_Dominion.jpg" alt="Jurassic World Dominion">
        <img src="images/banners/AttackOnTitan.jpg" alt="Attack on Titan">
        <img src="images/banners/GameOfThrones.jpg" alt="Game of Thrones">
        <img src="images/banners/MrRobot.jpg" alt="Mr Robot">
    </div>

    <!-- Login Box -->
    <div class="login-box">
        <h2>Welcome!</h2>
        <form method="POST" action="signin.php">
            <input type="text" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Sign In</button>
            <p class="sub-links">
                <a href="signup.php">SIGN UP</a> | <a href="forgotpassword.php">FORGOT PASSWORD</a>
            </p>
        </form>
    </div>

</body>
</html>
