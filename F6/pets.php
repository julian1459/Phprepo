<?php

$conn = new mysqli("localhost", "root", "root", "dog_db", 8889);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['save'])){

    $name = $_POST['name'];
    $breed = $_POST['breed'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $color = $_POST['color'];
    $height = $_POST['height'];
    $weight = $_POST['weight'];

    $sql = "INSERT INTO dogs (Name, Breed, Age, Address, Color, Height, Weight)
            VALUES ('$name','$breed','$age','$address','$color','$height','$weight')";

    if($conn->query($sql)){
        header("Location: Dogview.php");
        exit();
    }else{
        echo "Error: ".$conn->error;
    }

}

$conn->close();

?>

<!DOCTYPE html>
<html>
<head>
    <title>Dog Information Form</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="container">

<h1>Dog Information Form</h1>

<form method="POST">

<label>Dog Name</label>
<input type="text" name="name" required>

<label>Breed</label>
<input type="text" name="breed" required>

<label>Age</label>
<input type="number" name="age" required>

<label>Address</label>
<input type="text" name="address" required>

<label>Color</label>
<input type="text" name="color" required>

<label>Height (cm)</label>
<input type="number" step="0.01" name="height" required>

<label>Weight (kg)</label>
<input type="number" step="0.01" name="weight" required>

<input type="submit" name="save" value="Save Dog">

</form>

<br>

<a href="Dogview.php">View Dog Records</a>

</div>

</body>
</html>