<?php

session_start();

// If a session is already active, don't allow access to the registration page
if (isset($_SESSION["username"])) {
    header("Location: home.php");
    exit();
}

require "db.php";

$error = "";
$result = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $fname = $_POST["fname"];
    $mname = $_POST["mname"];
    $lname = $_POST["lname"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $confirm = $_POST["confirm"];
    $birthday = $_POST["birthday"];
    $email = $_POST["email"];
    $contact = $_POST["contact"];

    if ($password != $confirm) {

        $error = "Password and Confirm Password are not the same.";

    } else {

        // Check if the username is already taken
        $checkStmt = $conn->prepare("SELECT id FROM registrations WHERE username = ?");
        $checkStmt->bind_param("s", $username);
        $checkStmt->execute();
        $checkStmt->store_result();

        if ($checkStmt->num_rows > 0) {

            $error = "Username is already taken. Please choose another.";

        } else {

            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            $insertStmt = $conn->prepare(
                "INSERT INTO registrations (fname, mname, lname, username, password, birthday, email, contact)
                 VALUES (?, ?, ?, ?, ?, ?, ?, ?)"
            );
            $insertStmt->bind_param(
                "ssssssss",
                $fname, $mname, $lname, $username, $hashedPassword, $birthday, $email, $contact
            );

            if ($insertStmt->execute()) {

                $fullname = $fname . " " . $mname . " " . $lname;

                $result = "
                <div class='result'>

                    <h2>Registration Details</h2>

                    <table>

                        <tr>
                            <td><strong>Full Name</strong></td>
                            <td>" . htmlspecialchars($fullname) . "</td>
                        </tr>

                        <tr>
                            <td><strong>Username</strong></td>
                            <td>" . htmlspecialchars($username) . "</td>
                        </tr>

                        <tr>
                            <td><strong>Birthday</strong></td>
                            <td>" . htmlspecialchars($birthday) . "</td>
                        </tr>

                        <tr>
                            <td><strong>Email</strong></td>
                            <td>" . htmlspecialchars($email) . "</td>
                        </tr>

                        <tr>
                            <td><strong>Contact Number</strong></td>
                            <td>" . htmlspecialchars($contact) . "</td>
                        </tr>

                    </table>

                </div>";

            } else {

                $error = "Something went wrong while saving your registration. Please try again.";

            }

            $insertStmt->close();
        }

        $checkStmt->close();
    }
}

$conn->close();

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Registration Form</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="registration-container">

    <h2>My Personal Information</h2>

    <form method="POST" action="">

        <label>First Name</label>
        <input type="text" name="fname" required>

        <label>Middle Name</label>
        <input type="text" name="mname" required>

        <label>Last Name</label>
        <input type="text" name="lname" required>

        <label>Username</label>
        <input type="text" name="username" required>

        <label>Password</label>
        <input type="password" name="password" required>

        <label>Confirm Password</label>
        <input type="password" name="confirm" required>

        <label>Birthday</label>
        <input type="text" name="birthday" placeholder="January 30 1993" required>

        <label>Email</label>
        <input type="email" name="email" required>

        <label>Contact Number</label>
        <input type="text" name="contact" required>

        <input type="submit" value="Submit">

    </form>


    <?php

    if ($error != "") {
        echo "<p class='error'>" . htmlspecialchars($error) . "</p>";
    }

    echo $result;

    ?>

</div>

</body>
</html>