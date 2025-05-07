<!DOCTYPE html>
<html lang="en">
<head>
    <title>ZenChill | Subscriptions</title>
    <meta charset="utf-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comic+Relief:wght@400;700&display=swap" rel="stylesheet">

    <style>
        html, body {
            margin: 0;
            padding: 0;
            background: rgb(24, 0, 0);
            font-family: "Comic Relief", sans-serif;
            overflow-x: show;
            overflow-y: show;
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
        
        .free p {
            color: rgb(255, 110, 110);
        }

        .crimson p {
            color: rgb(160, 0, 0);
        }

        .obsidian p {
            color: rgb(183, 0, 255);
        }

        .inferno p {
            color: rgb(252, 164, 0);
        }
        
        .free p,
        .crimson p,
        .obsidian p,
        .inferno p {
            text-decoration: underline;
            font-weight: bold;
            font-size: 30px;
        }

        .free,
        .crimson,
        .obsidian,
        .inferno {
            float: left;
            width: 500px;
            text-align: center;
        }

        .free {
            position: absolute;
            top: 140px;
            left: 300px;
            background: rgba(20, 20, 20, 0.85);
            padding: 40px;
            color: white;
            border-radius: 50px;
            box-shadow: 0 0 30px rgba(255, 144, 144, 0.53);
            padding-top: 5px;
        }

        .crimson {
            position: absolute;
            top: 140px;
            left: 1100px;
            background: rgba(20, 20, 20, 0.85);
            padding: 40px;
            color: white;
            border-radius: 50px;
            box-shadow: 0 0 30px rgba(150, 0, 0, 0.53);
            padding-top: 5px;
        }

        .obsidian {
            position: absolute;
            top: 530px;
            left: 300px;
            background: rgba(20, 20, 20, 0.85);
            padding: 40px;
            color: white;
            border-radius: 50px;
            box-shadow: 0 0 30px rgba(225, 0, 255, 0.53);
            padding-top: 5px;
        }

        .inferno {
            position: absolute;
            top: 530px;
            left: 1100px;
            background: rgba(20, 20, 20, 0.85);
            padding: 40px;
            color: white;
            border-radius: 50px;
            box-shadow: 0 0 30px rgba(255, 187, 0, 0.53);
            padding-top: 5px;
        }

        .free .sub-info h4,
        .crimson .sub-info h4,
        .obsidian .sub-info h4,
        .inferno .sub-info h4 {
            color: rgb(165, 165, 165);   
            text-decoration: none;
            font-weight: normal;
            font-size: 17px;
            text-align: left;
            padding-left: 40px;
        }

        .free .sub-labels h4,
        .crimson .sub-labels h4,
        .obsidian .sub-labels h4,
        .inferno .sub-labels h4 {
            color: white;   
            text-decoration: none;
            font-weight: normal;
            font-size: 17px;
            text-align: left;
            padding-left: 50px;
            
        }

        .sub-row {
            display: flex;
            align-items: center;
            margin-top: 10px;
        }

        .sub-labels {
            width: 50%;
            text-align: right;
            padding-right: 10px;
        }

        .sub-info {
            width: 120px;
            text-align: left;
        }
        
    </style>
</head>
<body>
    <header class="header">
        <a href="landingpage.php">
            <img src="images/ZenChill.jpg" alt="ZenChill Logo" height="90" width="350">
        </a>
    </header>

    <div class="background">
        <img src="images/subscriptions_background.jpg" alt="Background Picture">
    </div>

    <div class="free">
        <p>Free Plan</p>
        <div class="sub-row">
            <div class="sub-labels">
                <h4>Streaming Quality:</h4>
                <h4>Includes Ads:</h4>
                <h4>New Release Access:</h4>
                <h4>Streaming Device Limit:</h4>
            </div>
            <div class="sub-info">
                <h4>750p</h4>
                <h4> YES</h4>
                <h4> NO</h4>
                <h4> 1 Device </h4>
            </div>
        </div>
    </div>

    <div class="crimson">
        <p> Crimson ($5.99) </p>
        <div class="sub-row">
            <div class="sub-labels">
                <h4>Streaming Quality:</h4>
                <h4>Includes Ads:</h4>
                <h4>New Release Access:</h4>
                <h4>Streaming Device Limit:</h4>
            </div>
            <div class="sub-info">
                <h4>1080p</h4>
                <h4> YES</h4>
                <h4> NO</h4>
                <h4> 3 Devices </h4>
            </div>
        </div>
    </div>

    <div class="obsidian">
        <p> Obsidian ($9.99) </p>
        <div class="sub-row">
            <div class="sub-labels">
                <h4>Streaming Quality:</h4>
                <h4>Includes Ads:</h4>
                <h4>New Release Access:</h4>
                <h4>Streaming Device Limit:</h4>
            </div>
            <div class="sub-info">
                <h4>4k HD</h4>
                <h4> NO</h4>
                <h4> YES</h4>
                <h4> 5 Devices </h4>
            </div>
        </div>
    </div>

    <div class="inferno">
        <p> Inferno ($19.99) </p>
        <div class="sub-row">
            <div class="sub-labels">
                <h4>Streaming Quality:</h4>
                <h4>Includes Ads:</h4>
                <h4>New Release Access:</h4>
                <h4>Streaming Device Limit:</h4>
            </div>
            <div class="sub-info">
                <h4>8k UHD</h4>
                <h4> NO</h4>
                <h4> YES</h4>
                <h4> Unlimited</h4>
            </div>
        </div>
    </div>

    <?php 
         include ('footer.html');

    ?>
</body>
</html>