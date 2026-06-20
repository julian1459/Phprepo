<!DOCTYPE html>
<html>
<head>
    <title>Info Webpage - POST</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="container">
    <h1>Info Webpage - POST </h1>
    <form action="POST.php" method="POST">
        <table>
            
        
            <tr>
                <td class="label-cell">Full Name</td>
                <td>
                    <div style="display: flex; gap: 10px;">
                        <div style="flex: 1;">
                            <input type="text" name="fname" required>
                            <span class="sub-text">First Name</span>
                        </div>
                        <div style="flex: 1;">
                            <input type="text" name="mname">
                            <span class="sub-text">Middle Name</span>
                        </div>
                    </div>
                    <div style="margin-top: 10px;">
                        <input type="text" name="lname" required>
                        <span class="sub-text">Last Name</span>
                    </div>
                </td>
            </tr>


            <tr>
                <td class="label-cell">Birth Date</td>
                <td>
                    <div style="display: flex; gap: 10px;">
                        <select name="month" required>
                            <option value="">Month</option>
                            <?php 
                            $months = ["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"];
                            foreach($months as $m) echo "<option value='$m'>$m</option>";
                            ?>
                        </select>
                        <select name="day" required>
                            <option value="">Day</option>
                            <?php for($i=1;$i<=31;$i++) echo "<option value='$i'>$i</option>"; ?>
                        </select>
                        <select name="year" required>
                            <option value="">Year</option>
                            <?php for($i=2024;$i>=1950;$i--) echo "<option value='$i'>$i</option>"; ?>
                        </select>
                    </div>
                </td>
            </tr>



            <tr>
                <td class="label-cell">Address</td>
                <td>
                    <textarea name="address" rows="2" required></textarea>
                </td>
            </tr>



            <tr>
                <td></td>
                <td><button type="submit" name="submit">Submit</button></td>
            </tr>
        </table>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        echo "<div class='display-data'>";
        echo "<strong>First Name:</strong> " . htmlspecialchars($_POST['fname']) . "<br>";
        echo "<strong>Middle Name:</strong> " . htmlspecialchars($_POST['mname']) . "<br>";
        echo "<strong>Last Name:</strong> " . htmlspecialchars($_POST['lname']) . "<br>";
        echo "<strong>Date of Birth:</strong> " . $_POST['month'] . " " . $_POST['day'] . ", " . $_POST['year'] . "<br>";
        echo "<strong>Address:</strong> " . htmlspecialchars($_POST['address']);
        echo "</div>";
    }
    ?>
</div>

</body>
</html>