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
$id = filter_input(INPUT_POST, 'id');
//deleting data from uzsakymai table
$sql= "DELETE FROM uzsakymai WHERE id='$id'";
echo "<meta http-equiv='refresh' content='0;url=admin/home.php'>";
if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}
      
$conn->close();     
?>
