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
    <li><a href="aboutme.php">About</a></li>
    <li><a href="myskills.php">My skills</a></li>
    <li><a href="projects.php">Projects</a></li>
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
$dbname = "champo";

// Create Connection 
$conn = mysqli_connect($servername, $username, $password, $dbname);

// check connection
if ($conn->connect_error){
    die("connection failed:". $conn->coneect_erro);
}

//SQL query to retrieve data from database
$sql = "SELECT * FROM patson";
$result = $conn->query($sql);

if ($result ->num_rows > 0){
    // output data of each row
    while($row = $result ->fetch_assoc()) {
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
