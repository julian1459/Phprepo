<?php

session_start();

// If a session is already active, don't allow access to the login page
if (isset($_SESSION["username"])) {
    header("Location: home.php");
    exit();
}

require "db.php";

$username = "";
$error = "";

if (isset($_COOKIE["username"])) {
    $username = $_COOKIE["username"];
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST["username"] ?? "";
    $password = $_POST["password"] ?? "";

    $stmt = $conn->prepare("SELECT username, password FROM registrations WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows === 1) {

        $stmt->bind_result($dbUsername, $dbPasswordHash);
        $stmt->fetch();

        if (password_verify($password, $dbPasswordHash)) {

            // Credentials match, start the session
            $_SESSION["username"] = $dbUsername;

            if (isset($_POST["remember"])) {
                setcookie("username", $dbUsername, time() + 86400);
            } else {
                setcookie("username", "", time() - 3600);
            }

            $stmt->close();
            $conn->close();

            header("Location: home.php");
            exit();

        } else {
            $error = "Invalid username or password.";
        }

    } else {
        $error = "Invalid username or password.";
    }

    $stmt->close();
}

$conn->close();

?>

<!DOCTYPE html>

<html>

<head>

    <title>Login Form</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="login-container">

    <h2>Login</h2>

    <form method="POST" action="">

        <label>Username</label>

        <input
            type="text"
            name="username"
            value="<?php echo htmlspecialchars($username); ?>"
            required>

        <label>Password</label>

        <input
            type="password"
            name="password"
            required>

        <div class="remember">

            <input
                type="checkbox"
                name="remember"

                <?php
                if (isset($_COOKIE["username"])) {
                    echo "checked";
                }
                ?>

            >

            <label>Remember Me</label>

        </div>

        <input
            type="submit"
            value="Submit">

        <?php if ($error != "") { ?>
            <p class="error"><?php echo htmlspecialchars($error); ?></p>
        <?php } ?>

    </form>

</div>

</body>

</html>