
<!DOCTYPE html>
<html>
<body>
<h2>Announcements</h2>
<?php

include"Untitled-4.php";


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT ann FROM announcement";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> Announcement: ". $row["ann"]. "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>

</body>
</html>