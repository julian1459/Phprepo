<?php
session_start();
if (isset($_POST['send_colors'])) {
    $_SESSION['fav_colors'] = [
        $_POST['color1'],
        $_POST['color2'],
        $_POST['color3'],
        $_POST['color4'],
        $_POST['color5']
    ];
    header("Location: DisplayColor.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Favorite Colors</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="container">
    <h1>My Favorite Colors</h1>
    
    <form action="FavoriteColor.php" method="POST">
        <table border="1" style="border-collapse: collapse; width: 100%;">
            <tr>
                <td colspan="2" style="text-align: center; padding: 10px; font-weight: bold;">
                    Enter your favorite colors
                </td>
            </tr>
            <tr>
                <td class="label-cell">Favorite color 1:</td>
                <td><input type="text" name="color1" required></td>
            </tr>
            <tr>
                <td class="label-cell">Favorite color 2:</td>
                <td><input type="text" name="color2" required></td>
            </tr>
            <tr>
                <td class="label-cell">Favorite color 3:</td>
                <td><input type="text" name="color3" required></td>
            </tr>
            <tr>
                <td class="label-cell">Favorite color 4:</td>
                <td><input type="text" name="color4" required></td>
            </tr>
            <tr>
                <td class="label-cell">Favorite color 5:</td>
                <td><input type="text" name="color5" required></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center; padding: 15px;">
                    <button type="submit" name="send_colors" style="width: auto; padding: 10px 30px;">send colors</button>
                </td>
            </tr>
        </table>
    </form>
</div>

</body>
</html>