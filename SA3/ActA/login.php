<?php

session_start();


if (isset($_SESSION["username"])) {
    header("Location: home.php");
    exit();
}


function getValidCredentials() {
    static $validUsername = "admin";
    static $validPassword = "admin123";
    return [$validUsername, $validPassword];
}

$username = "";
$error = "";

if (isset($_COOKIE["username"])) {
    $username = $_COOKIE["username"];
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST["username"] ?? "";
    $password = $_POST["password"] ?? "";

    list($validUsername, $validPassword) = getValidCredentials();

    if ($username === $validUsername && $password === $validPassword) {

        // Credentials match, start the session
        $_SESSION["username"] = $username;

        if (isset($_POST["remember"])) {
            setcookie("username", $username, time() + 86400);
        } else {
            setcookie("username", "", time() - 3600);
        }

        header("Location: home.php");
        exit();

    } else {
        $error = "Invalid username or password.";
    }
}
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