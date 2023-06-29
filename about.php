<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet"type="text/css" href="./css/style.css"/>
    <title>Patson</title>
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
<!-- end of navigation bas -->
<h2>Contac Form</h2>

<button onclick="document.getElementById('form').style.display='block'" style="width:auto;">Click Me!</button>

<div id="form" class="modal">
  
  <form class="modal-content animate">
    <div class="container">
      <label for="fname"><b>First Name</b></label>
      <input type="text" placeholder="Enter First name" name="fname" required>

      <label for="lname"><b>Last Name</b></label>
      <input type="text" placeholder="Enter Last name" name="lname" required><br>
      
      <label for="phonenumber"><b>Phone number</b></label>
      <input type="text" placeholder="+265 99..." name="phonenumber" required><br>

      <label for="district">District</label>
    <select id="district" name="district">
      <option value="lilongwe">Lilongwe</option>
      <option value="mzuzu">Mzuzu</option>
      <option value="blantyre">Blantyre</option>
    </select>

<label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
         
         <input type="submit" value="Submit">

     </form>
    </div>
</div>
    
    <footer>
      <div class="contact">
        <div class="phone-area">
          <span>Phone</span><br>
          <a href="tel:+265888416094">+265888416094</a><br>
          <a href="tel:+265996110803">+265996110803</a>
        </div>
        <div class="email-area">
          <span>Email Address</span><br>
          <a href="mailto:nyirendapatson13@gmail.com">nyirendapatson13@gmail.com</a>
        </div>
        <div class="sm-area">
          <span>Social Media</span><br>
          <a href="#">facebook</a>
        </div>
      </div>
    </footer>
    <script src="java.js"></script>
</body>
</html>
