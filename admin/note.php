<?php
$servername = "127.0.0.1:53090";
$username = "azure";
$password = "6#vWHD_$";
$dbname = "birstonodviraciai";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$note = filter_input(INPUT_POST, 'note');
$id = filter_input(INPUT_POST, 'id');
//update function
$sql = "UPDATE uzsakymai SET note='$note' WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>