<?php
include "conn.php";

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (isset($_POST['user'])) {
        // check if the user exists in the users table
        $userSql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
        $userResult = $conn->query($userSql);

        if ($userResult->num_rows > 0) {
            // if user exists, redirect to the user page
            $_SESSION["isAdmin"] = FALSE;
            header("Location: ../index.html");
            exit();
        }
    } elseif (isset($_POST['admin'])) {
        // check if the user exists in the admins table
        $adminSql = "SELECT * FROM admins WHERE email='$email' AND password='$password'";
        $adminResult = $conn->query($adminSql);

        if ($adminResult->num_rows > 0) {
            // if admin exists, redirect to the admin page
            $_SESSION["isAdmin"] = TRUE;
            header("Location: ../admin-dashboard.php");
            exit();
        }
    }

    // if credentials doesn't match
    echo "<script>alert('Log in error. Please check your email or password.');
            document.location.href = '../index.html'; 
        </script>";
    session_destroy();
    $conn->close();
}
?>
