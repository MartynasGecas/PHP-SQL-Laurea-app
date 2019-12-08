<?php
//variable declaration
$type = filter_input(INPUT_POST, 'tipas');
$tt = filter_input(INPUT_POST, 'tt');
$rt = filter_input(INPUT_POST, 'rt');
$kik = filter_input(INPUT_POST, 'kik');
$name = filter_input(INPUT_POST, 'name');
$note = filter_input(INPUT_POST, 'note');

//input vadilation
if (!empty(type)){
if (!empty(kik)){
        
	//connection to the database	
   define('DB_SERVER', '127.0.0.1:53090');
   define('DB_USERNAME', 'azure');
   define('DB_PASSWORD', '6#vWHD_$');
   define('DB_DATABASE', 'birstonodviraciai');
   $conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE); 
    
//connection error handling
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
//data insertion to table uzsakymai
$sql = "INSERT INTO uzsakymai (tipas, valsk, valgr, kiek, nuom, note)
values ('$type','$tt','$rt','$kik','$name', '')";
if ($conn->query($sql)){
$message = "Order sent";
//alert and redirection back to page
echo "<script type='text/javascript'>alert('$message');</script>";
echo "<meta http-equiv='refresh' content='0;url=index.php'>";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{//error messages
echo "Select a vehicle type";
die();
}
}
else{
echo "Write your name";
die();
}
?>