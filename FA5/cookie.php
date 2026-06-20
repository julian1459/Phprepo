<?php
    if (isset($_POST['set_cookies'])) {
        $fn = $_POST['firstname'];
        $mn = $_POST['middlename'];
        $ln = $_POST['lastname'];

        setcookie("cookie_fname", $fn, time() + 10, "/"); 
        setcookie("cookie_mname", $mn, time() + 20, "/"); 
        setcookie("cookie_lname", $ln, time() + 30, "/"); 

        header("Location: cookie.php");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cookie Activity</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="container">
    <h1>Cookie Setup</h1>
    
    <form action="cookie.php" method="POST">
        <table>
            <tr>
                <td class="label-cell">First Name</td>
                <td>
                    <input type="text" name="firstname" required>
                    <span class="sub-text">Expires in 10 seconds</span>
                </td>
            </tr>
            <tr>
                <td class="label-cell">Middle Name</td>
                <td>
                    <input type="text" name="middlename" required>
                    <span class="sub-text">Expires in 20 seconds</span>
                </td>
            </tr>
            <tr>
                <td class="label-cell">Last Name</td>
                <td>
                    <input type="text" name="lastname" required>
                    <span class="sub-text">Expires in 30 seconds</span>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><button type="submit" name="set_cookies">Set Cookies</button></td>
            </tr>
        </table>
    </form>

    <div class="display-data">
        <h3>Cookie Status:</h3>
        <p class="sub-text">Refresh the page manually to check if cookies expired.</p>
        <hr>
        
        <strong>First Name:</strong> 
        <?php echo isset($_COOKIE['cookie_fname']) ? $_COOKIE['cookie_fname'] : "<span style='color:red;'>Expired</span>"; ?>
        <br>

        <strong>Middle Name:</strong> 
        <?php echo isset($_COOKIE['cookie_mname']) ? $_COOKIE['cookie_mname'] : "<span style='color:red;'>Expired</span>"; ?>
        <br>

        <strong>Last Name:</strong> 
        <?php echo isset($_COOKIE['cookie_lname']) ? $_COOKIE['cookie_lname'] : "<span style='color:red;'>Expired</span>"; ?>
    </div>
</div>

</body>
</html>