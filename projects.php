<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/projects.css">
    <title>Patson</title>
     <style>
      section,form{
        padding: 10px;
      }
      #searchform{
        display: flex;
        align-items: center;
      }
      #searchInput{
        padding: 5px;
        width: 200px;
      }
      #searchForm button{
        padding: 5px 10px;
        background-color: #4CAF50;
        color: white;
        border: none;
        cursor: pointer;
      }
     </style>
</head>
<body>
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
  <!-- end of navigation bar -->
  
  <!-- Search bar-->
  <form id="searchForm">
    <input type="text" id="searchInput" placeholder="Search...."/>
    <button type="submit">search</button>
  </form>
  <!--End Search bar-->
  
  <section>
    <h4>Recent Projects</h4>
    
      
      <p>These are some of my projects am working on
         as a begginer in this programming field .
        </p>
      <a href="Calculator.html">Calculator</a><br>
      <img class="calc" src=".images/calculator.jpg"><br>
      <a href="Time Conveter.html">Time Conveter</a><br>
      <img class="time" src=".images/time coveter.jpg">
    </div>
  </section>
  <script src="java.js"></script>
  </body>
</html>
