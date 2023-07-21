<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Champo";

// create connection
$conn = mysqli_connect($servername,$username,$password) or die("there is an error". mysqli_connect_error());

//check connection
if($conn){
    echo "connection successful";
}

// database section
$db_conn = mysqli_select_db($conn, "Champo")or die("selection error".mysqli_error());
if($dbyanga){
echo "db selection successful";
}
?>
