<?php

$conn = new mysqli("localhost", "root", "root", "dog_db", 8889);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$result = $conn->query("SELECT * FROM dogs");

?>

<!DOCTYPE html>
<html>
<head>
    <title>Dog Records</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>

<div class="container">

<h1>Dog Records</h1>

<table>

<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Breed</th>
    <th>Age</th>
    <th>Address</th>
    <th>Color</th>
    <th>Height (cm)</th>
    <th>Weight (kg)</th>
</tr>

<?php

if($result->num_rows > 0){

    while($row = $result->fetch_assoc()){

        echo "<tr>";
        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['Name']."</td>";
        echo "<td>".$row['Breed']."</td>";
        echo "<td>".$row['Age']."</td>";
        echo "<td>".$row['Address']."</td>";
        echo "<td>".$row['Color']."</td>";
        echo "<td>".$row['Height']."</td>";
        echo "<td>".$row['Weight']."</td>";
        echo "</tr>";

    }

}else{

    echo "<tr><td colspan='8'>No records found.</td></tr>";

}

$conn->close();

?>

</table>

<br>

<a href="pets.php">← Add Another Dog</a>

</div>

</body>
</html>