<?php
$servername = "localhost";
$username = "producc5";
$password = "Amigo2016";
$dbname = "producc5_invitaciones";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM `Invitados` WHERE `nombre` != ''";

$result = mysqli_query($conn,$sql) or die(mysqli_error());

echo "<table>";
echo "<tr><th>Personas Inscriptas</th></tr>";

while($row = mysqli_fetch_array($result)) {
    $nombre = $row['nombre'];
    echo "<tr><td style='width: 200px;'>".$nombre."</td></tr>";
} 

echo "</table>";
mysqli_close($conn);
?>