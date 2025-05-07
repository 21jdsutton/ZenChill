<?php
    session_start();
    include('mysqli_connect.php');

    $email = $_POST['email'];
    $pass = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM USERS WHERE email = ? AND password = ?");
    $stmt->bind_param("ss", $email, $pass);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        $_SESSION['user_id'] = $user['user_id'];
        header("Location: home.php");
        exit();
    } else {

        $_SESSION['login_error'] = "Login incorrect";
        header("Location: login.php");
        exit();
    }
?>
