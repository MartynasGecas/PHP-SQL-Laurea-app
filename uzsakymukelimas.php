<?php
$type = filter_input(INPUT_POST, 'tipas');
$tt = filter_input(INPUT_POST, 'tt');
$rt = filter_input(INPUT_POST, 'rt');
$kik = filter_input(INPUT_POST, 'kik');
$name = filter_input(INPUT_POST, 'name');

if (!empty(type)){
if (!empty(kik)){
        
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
$sql = "INSERT INTO uzsakymai (tipas, valsk, valgr, kiek, nuom)
values ('$type','$tt','$rt','$kik','$name')";
if ($conn->query($sql)){
echo "Jūsų užsakymas priimtas galite uždaryti šį langą";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo "Reikia pažymeti priemonės tipą";
die();
}
}
else{
echo "Parašykite savo vardą";
die();
}
?>