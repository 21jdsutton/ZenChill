<?php
    session_start();
    include('footer.html');
    include('account_navigation.html');
    include('mysqli_connect.php');

    $user_id = $_SESSION['user_id'] ?? 1;

    $sql = "
        SELECT 
            u.name AS username,
            u.email,
            u.password,
            s.subscription_tier,
            s.price,
            p.card_number,
            p.card_name,
            p.billing_address,
            p.zip_code
        FROM USERS u
        LEFT JOIN SUBSCRIPTIONS s ON u.user_id = s.user_id
        LEFT JOIN PAYMENT_METHOD p ON u.user_id = p.user_id
        WHERE u.user_id = ?
    ";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $data = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ZenChill | My Account</title>
    <link href="https://fonts.googleapis.com/css2?family=Comic+Relief:wght@400;700&display=swap" rel="stylesheet">
    <style>
        html, body {
            margin: 0;
            padding: 0;
            height: 100%;
            overflow-y: show;
            overflow-x: show;
            font-family: "Comic Relief", sans-serif;
        }

        body {
            background: rgb(109, 109, 109);
            position: relative;
            z-index: 0;
        }

        .container {
            display: flex;
            gap: 40px;
            padding: 40px;
            justify-content: center;
            align-items: flex-start;
            flex-wrap: wrap;
            margin-top: 30px;
            position: relative;
            z-index: 1;
        }

        .left-column,
        .right-column {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .box {
            background: rgba(255, 231, 231, 0.88);
            border-radius: 10px;
            box-shadow: 0 0 30px rgba(177, 1, 1, 0.66);
            padding: 30px;
            width: 400px;
        }

        .box h2 {
            margin-top: 0;
        }

        .label {
            font-weight: bold;
            display: inline-block;
            width: 160px;
        }

        .welcome {
            text-align: center;
            margin-top: 100px;
            position: relative;
            z-index: 1;
        }

        .welcome h1 {
            color: rgb(255, 255, 255);
        }

        .welcome p {
            color: rgb(184, 184, 184);
            font-size: 20px;
        }

        .header {
            position: absolute;
            top: 10px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 10;
        }

        .header img {
            display: block;
        }

        .background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            background-color: rgb(0, 0, 0);
            overflow: hidden;
        }

        .background img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

    </style>
</head>
<body>
    <header class="header">
        <a href="account.php">
            <img src="images/ZenChill.jpg" alt="ZenChill Logo" height="80" width="300">
        </a>
    </header>

    <div class="background">
        <img src="images/my_account_background.jpg" alt="account page background image">
    </div>

    <div class="welcome">
            <h1>Welcome <?= htmlspecialchars($data['username']) ?>!</h1>
            <p>Below you can find your account information:</p>
    </div>
    <div class="container">
        <!-- My Subscription -->
        <div class="left-column">
            <div class="box">
                <h2>My Subscription:</h2>
                <p><span class="label">Tier:</span> <?= htmlspecialchars($data['subscription_tier']) ?></p>
                <p><span class="label">Price:</span> $<?= htmlspecialchars($data['price']) ?></p>
                &nbsp;
                <h2>Payment Info:</h2>
                <p><span class="label">Card Name:</span> <?= htmlspecialchars($data['card_name']) ?></p>
                <p><span class="label">Card Number:</span> **** **** **** <?= substr($data['card_number'], -4) ?></p>
                <p><span class="label">Address:</span> <?= htmlspecialchars($data['billing_address']) ?></p>
                <p><span class="label">ZIP Code:</span> <?= htmlspecialchars($data['zip_code']) ?></p>
            </div>
        </div>

        <!-- My Account & Deals -->
        <div class="right-column">
            <div class="box">
                <h2>My Account:</h2>
                <p><span class="label">Name:</span> <?= htmlspecialchars($data['username']) ?></p>
                <p><span class="label">Email:</span> <?= htmlspecialchars($data['email']) ?></p>
                <p><span class="label">Password:</span> ••••••••</p>
            </div>
            <div class="box">
                <h2>Current Deals:</h2>
                <p><span class="label">Deals:</span> COME BACK LATER!</p>
            </div>
        </div>
    </div>
</body>
</html>
