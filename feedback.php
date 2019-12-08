<?php
//variables filtering
$name = filter_input(INPUT_POST, 'name');
$last = filter_input(INPUT_POST, 'last');
$email = filter_input(INPUT_POST, 'email');
$sub = filter_input(INPUT_POST, 'sub');

//input vadilation
if (!empty(name)){
if (!empty(sub)){
        
   define('DB_SERVER', '127.0.0.1:53090');
   define('DB_USERNAME', 'azure');
   define('DB_PASSWORD', '6#vWHD_$');
   define('DB_DATABASE', 'birstonodviraciai');
   $conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE); 
    
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
	//insertion of data to feedback table
$sql = "INSERT INTO feedback (name, last, email, sub)
values ('$name','$last','$email','$sub')";
if ($conn->query($sql)){
$message = "Feedback sent";
echo "<script type='text/javascript'>alert('$message');</script>";
echo "<meta http-equiv='refresh' content='0;url=kontaktai.php'>";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo "Write your name";
die();
}
}
else{
echo "Add feedback";
die();
}
?>