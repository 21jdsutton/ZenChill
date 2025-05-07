<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ZenChill | Singup</title>
    <link href="https://fonts.googleapis.com/css2?family=Comic+Relief:wght@400;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Comic Relief", sans-serif;
        }

        body, html {
            height: 100%;
            overflow: hidden;
        }

        .signup-box {
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

        .signup-box h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .signup-box input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            background: #111;
            border: none;
            border-radius: 6px;
            color: white;
        }

        .signup-box button {
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
    
        .signup-box select {
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            background: #111;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 6px;
            margin: 10px 0;
            width: 100%;
            font-size: 15px;
            cursor: pointer;
            background-repeat: no-repeat;
            background-position: right 10px center;
            background-size: 12px;
        }

        .signup-box button:hover {
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
    include('footer.html');

?>
<body>

    <!-- Page Header -->
    <header class="header">
        <a href="landingpage.php">
            <img src="images/ZenChill.jpg" alt="ZenChill Logo" height="90" width="350">
          </a>
    </header>

    <!-- Page Background -->
    <div class="background">
        <img src="images/signup_background.jpg" alt="Signup Page Background">
    </div>

    <!-- Signup Box -->
    <div class="signup-box">
        <h2>Signup Today!</h2>
        <form method="POST" action="newaccount.php">
            <input type="text" name="name" placeholder="Full Name" required>
            <input type="text" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>

            &nbsp;

            <select name="subscription" required>
                <option value="" disabled selected>Subscription Tier</option>
                <option value="Free">Free - $0</option>
                <option value="Crimson">Crimson - $5.99</option>
                <option value="Obsidian">Obsidian - $9.99</option>
                <option value="Inferno">Inferno - $19.99</option>
            </select>

            <input type="text" name="card_name" placeholder="Name on Card" required>
            <input type="text" name="card_number" placeholder="Card Number" required>
            <input type="text" name="billing_address" placeholder="Billing Address" required>
            <input type="text" name="zip_code" placeholder="ZIP Code" required>

            &nbsp;

            <button type="submit">Create Account</button>
            <p class="sub-links">
                Already a member? <a href="login.php"> Login Here! </a>
            </p>
        </form>
    </div>
</body>
</html>
