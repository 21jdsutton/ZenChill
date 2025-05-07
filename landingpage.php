<!DOCTYPE html> 
<html lang="en">
<head>
    <title>ZenChill | Welcome</title>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css2?family=Comic+Relief:wght@400;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Comic Relief", sans-serif;
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

        .background {
            position: fixed;
            width: 100%;
            height: 100%;
            z-index: -1;
            background-color: rgb(0, 0, 0);
        }

        .background img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            opacity: 0.5;
        }
    
        .content-wrapper {
            position: relative;
            top: 100px;
            display: flex;
            flex-direction: column;
            align-items: center;
            z-index: 1;
}

        .main-box {
            position: absolute;
            top: 35%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 40px;
            width: 500px;
            color: white;
        }

        .main-box button {
            width: 50%;
            padding: 10px;
            background: red;
            border: none;
            border-radius: 20px;
            color: white;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.3s ease;
            position: relative;
            top: 25%;
            left: 25%;
        }

        .main-box button:hover {
            background: darkred;
        }

        .main-box:hover {
            color: white;
        }

        .main-box a:hover {
            text-decoration: underline;
            color: rgba(145, 1, 1, 0.53);
        }

        .main-box .header-text h1{
            color: rgb(255, 255, 255);
        }

        .main-box .header-text h3{
            color: rgb(136, 136, 136);
        }

        .main-box h4{
            text-decoration: none;
            color: rgba(255, 47, 47, 0.73);
            text-align: center;
            padding-top: 10px;
        }

        .main-box h4 a {
            text-decoration: none;
            color: rgba(165, 165, 165, 0.73);
        }

        .main-box h4:hover{
            text-decoration: none;
            color: none;
        }

        .main-box .buttons {
            padding-top: 50px;

        }

        .main-box .small-description p{
            font-size: 15px;
            color: rgb(255, 0, 0);
            padding-left: 52px;
            font-weight: bold;
            padding-bottom: 10px;
        }

        .main-box .main-box-lower p{
            font-size: 15px;
            color: rgb(136, 136, 136);
            text-align: center;
            padding-top:15px;
            font-weight: bold;
        }

        .showcase {
            position: absolute;
            top: calc(50% + 15px); /* Adjust as needed to fit below .main-box */
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            justify-content: center;
            gap: 20px;
            padding: 20px;
            z-index: 1;
        }

        .showcase figure {
            display: flex;
            gap: 20px;
        }

        .showcase img {
            width: 200px;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(253, 0, 0, 0.51);
            transition: transform 0.3s ease;
        }

        .showcase img:hover {
            transform: scale(1.05);
        }

    </style>
</head>
<body>

<!-- ZenChill Image -->
<header class="header">
    <a href="landingpage.php">
        <img src="images/ZenChill.jpg" alt="ZenChill Logo" height="90" width="350">
    </a>
</header>

<div class="background">
    <img src="images/landing_background.jpg" alt="Background Picture">
</div>

<div class="main-box">
    <div class="header-text">
        <h1>Movie night made easy</h1>
        <!-- <div class="small-description">
            <p>Movies, TV Shows, Anime & More!</p>
        </div> -->
        <h3>&nbsp;&nbsp;Plans starting at $5.99/month</h3>
    </div>

    <div class="buttons">
        <a href="signup.php"><button>Join Today</button></a>
    </div>

    <div class="main-box-lower">
        <p>OR</p>
        <h4>Already a member? <a href="login.php">Login!</a></h4>
    </div>
</div>

<div class="showcase">
    <figure>
        <img src="images/thumbnails/Hurricane_Bianca.jpg" alt="Hurricane Bianca">
        <img src="images/thumbnails/The_Rookie.jpg" alt="The Rookie">
        <img src="images/thumbnails/Revenge.jpg" alt="Revenge">
        <img src="images/thumbnails/SawX.jpg" alt="Saw X">
    </figure>
</div>

<?php 
    include('footer.html');
        
?>

</body>
</html>
