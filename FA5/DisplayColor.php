<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Display Colors</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="container">
    <h1>My Favorite Colors</h1>

    <div class="display-data">
        <h3>Your Favorite Colors:</h3>
        <hr>
        <?php
        if (isset($_SESSION['fav_colors'])) {
            $count = 1;
            foreach ($_SESSION['fav_colors'] as $color) {
                echo "<strong>Color $count:</strong> " . htmlspecialchars($color) . "<br>";
                $count++;
            }
        } else {
            echo "<p style='color:red;'>No colors found in session.</p>";
        }
        ?>
    </div>

    <div style="margin-top: 20px;">
        <a href="FavoriteColor.php">
            <button type="button" style="background-color: #6c757d;">Go Back</button>
        </a>
    </div>
</div>

</body>
</html>