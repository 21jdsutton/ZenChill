<?php
    include('mysqli_connect.php');

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password_input = $_POST['password'];
    $subscription = $_POST['subscription'];
    $card_name = $_POST['card_name'];
    $card_number = $_POST['card_number'];
    $billing_address = $_POST['billing_address'];
    $zip_code = $_POST['zip_code'];

    $check_stmt = $conn->prepare("SELECT user_id FROM USERS WHERE email = ?");
    $check_stmt->bind_param("s", $email);
    $check_stmt->execute();
    $check_stmt->store_result();

    if ($check_stmt->num_rows > 0) {
        echo "<script>alert('EMAIL ALREADY EXISTS'); window.location.href = 'signup.php';</script>";
        $check_stmt->close();
        $conn->close();
        exit();
    }
    $check_stmt->close();

    $user_stmt = $conn->prepare("INSERT INTO USERS (name, email, password) VALUES (?, ?, ?)");
    $user_stmt->bind_param("sss", $name, $email, $password_input);
    $user_stmt->execute();
    $user_id = $user_stmt->insert_id;
    $user_stmt->close();

    $tier_prices = [
        "Free" => 0.00,
        "Crimson" => 5.99,
        "Obsidian" => 9.99,
        "Inferno" => 19.99
    ];
    $price = $tier_prices[$subscription];

    $sub_stmt = $conn->prepare("INSERT INTO SUBSCRIPTIONS (user_id, subscription_tier, price) VALUES (?, ?, ?)");
    $sub_stmt->bind_param("isd", $user_id, $subscription, $price);
    $sub_stmt->execute();
    $sub_stmt->close();

    $pay_stmt = $conn->prepare("INSERT INTO PAYMENT_METHOD (user_id, card_number, card_name, billing_address, zip_code) VALUES (?, ?, ?, ?, ?)");
    $pay_stmt->bind_param("issss", $user_id, $card_number, $card_name, $billing_address, $zip_code);
    $pay_stmt->execute();
    $pay_stmt->close();

    $conn->close();

    header("Location: login.php");
    exit();
?>
