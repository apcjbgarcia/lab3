<!DOCTYPE html>
<html>
<body>

<?php
 $servername = "192.168.150.213";
 $username = "webprogss211";
 $password = "fancyR!ce36";
 $dbname = "webprogss211";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, name, email, comment FROM jbgarcia_guest";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	echo "<h1>Guests Log</h1>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo 
		"id: ". $row["id"]. 
		" - Name: ". $row["name"]. 
		" - Email: ". $row["email"].
        " - Comment: ". $row["comment"].
		"<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>

</body>
</html>
