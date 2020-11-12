<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: #F8F9F9;
}
* {
  box-sizing: border-box;
}
/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}
/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}
input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}
/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
/* Set a style for the submit button */
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}
.registerbtn:hover {
  opacity: 1;
}
/* Add a blue text color to links */
a {
  color: dodgerblue;
}
/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
.top {
              background-color: white;
              margin-bottom: 10px;
              
              
              
           }
           .top a {
               padding-left: 20px;
               font-size: larger;
               
           }
           .search {
               float:right;
               margin-top: 20px;
               
           }
           .container {
               margin-top: 20px;
           }
        </style>
    </head>

    <body>
        <div class="top container-fluid">
            <img src="gambar\logo.png" style="width: 75px; height: 75px;">
            <a href="index.php">Home</a>
            <a href="profile.php">Profile</a>
            <a href="list_teknisi.php">List Teknisi</a>
            <a href="aboutUs.php">About Us</a>
            <a href="contact.php">Contact</a>
            <form class="search form-inline">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
              </form>
        </div>
<form action="kon_regist.php" method="post">
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
    <label for="username"><b>Username</b></label>
    <input type="text" name="username" placeholder="Enter Username" id="username" required>

    <label for="nama"><b>Full Name</b></label>
    <input type="text" name="nama" placeholder="Enter Name " id="nama" required>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>

    <label for="no_hp"><b>Phone Number</b></label>
    <input type="text" placeholder="Enter Phone Number" name="no_hp" id="no_hp" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" id="password" required>
    
    <label for="psw_repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw_repeat" id="psw_repeat" required>
    <hr>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
    <button type="submit" class="registerbtn">Register</button>
  </div>
  
  <div class="container signin">
    <p>Already have an account? <a href="#">Sign in</a>.</p>
  </div>
</form>
</body>
</html>