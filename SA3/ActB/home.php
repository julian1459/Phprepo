<?php

session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
}

require "db.php";

$message = "";
$messageType = "";

$stmt = $conn->prepare("SELECT fname, mname, lname, password, birthday, email, contact FROM registrations WHERE username = ?");
$stmt->bind_param("s", $_SESSION["username"]);
$stmt->execute();
$stmt->bind_result($fname, $mname, $lname, $storedPasswordHash, $birthday, $email, $contact);
$stmt->fetch();
$stmt->close();

$fullname = trim($fname . " " . $mname . " " . $lname);

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $currentPassword = $_POST["current_password"];
    $newPassword = $_POST["new_password"];
    $reenterPassword = $_POST["reenter_password"];

    if (!password_verify($currentPassword, $storedPasswordHash)) {

        $message = "Current password is incorrect.";
        $messageType = "error";

    } elseif ($newPassword != $reenterPassword) {

        $message = "New Password and Re-Enter Password do not match.";
        $messageType = "error";

    } else {

        $newHash = password_hash($newPassword, PASSWORD_DEFAULT);

        $updateStmt = $conn->prepare("UPDATE registrations SET password=? WHERE username=?");
        $updateStmt->bind_param("ss", $newHash, $_SESSION["username"]);
        $updateStmt->execute();
        $updateStmt->close();

        $message = "Password successfully updated.";
        $messageType = "success";
    }
}

$conn->close();

?>

<!DOCTYPE html>
<html>

<head>

    <title>User Information Form</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="info-container">

    <div class="info-header">

        <h2>User Information Form</h2>

        <a href="logout.php" class="logout-link">Logout</a>

    </div>

    <h3>Welcome <?php echo htmlspecialchars($fullname); ?></h3>

    <table class="result-table">

        <tr>
            <td>Birthday</td>
            <td><?php echo htmlspecialchars($birthday); ?></td>
        </tr>

        <tr>
            <td>Email</td>
            <td><?php echo htmlspecialchars($email); ?></td>
        </tr>

        <tr>
            <td>Contact</td>
            <td><?php echo htmlspecialchars($contact); ?></td>
        </tr>

    </table>

    <hr>

    <h3>Reset Password</h3>

    <form method="POST">

        <table class="reset-table">

            <tr>
                <td>Current Password</td>
                <td>
                    <input type="password" name="current_password" required>
                </td>
            </tr>

            <tr>
                <td>New Password</td>
                <td>
                    <input type="password" name="new_password" required>
                </td>
            </tr>

            <tr>
                <td>Re-Enter Password</td>
                <td>
                    <input type="password" name="reenter_password" required>
                </td>
            </tr>

        </table>

        <?php if($message!=""){ ?>

            <p class="<?php echo $messageType=="success" ? "success-message" : "error"; ?>">
                <?php echo $message; ?>
            </p>

        <?php } ?>

        <input type="submit" value="Reset Password" class="reset-btn">

    </form>

</div>

</body>

</html>