<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="./css/style.css">
    <title>Patson</title>
    
</head>
<body >
  
 <!-- navigation bar with student name     -->
<nav>
  <label class="logo">Patson</label>
  <ul>
  <li><a class="active" href="index.php">Home</a></li>
    
    <li><a href="myskills.php">My skills</a></li>
    <li><a href="projects.php">Projects</a></li>
    <li><a href="aboutme.php">About</a></li>
  </ul>
</nav>
<h1 id="greeting"></h1>
<div id="greeting"></div>

<!-- student bio -->
  <?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Champo";

// create connection
$conn = mysqli_connect($servername,$username,$password) or 
die("there is an error". mysqli_connect_error());

//check connection
if($conn){
    echo "";
}

// database section
$db_conn = mysqli_select_db($conn, "Champo")or die("selection error".mysqli_error());
if($db_conn){
echo "";
}

//SQL query to retrieve data from database
$query = "SELECT * FROM patson";
$result = mysqli_query($conn,$query);

if (mysqli_num_rows($result) > 0){
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "" . $row["Bio"]. "<br>";
    }
} else{
    echo " 0 results";
}
  ?>
  <!-- end of the about me section -->

<script src="java.js"></script>
</body>
</html>
