<?php
session_start();
include_once 'header1.php';
 ?>


<?php
  $identify = $_SESSION["username2"];

  ?>

  <html>
  <head>

    <style>


    .box{
      height: 200px;
      width: 1300px;
      border: 15px;
      border-style: solid;
      border-color: lightgrey;
      border-width: 2px;

      margin: 10px;
      margin-left: 20px;
      margin-top: 10px;
      margin-right: 50px;
      padding: 15px 0px 10px 15px;
      background-image: url('background.png');



    }
    .special{
      text-align: center;

	padding-left: 5px;
	font-weight: bold;
	font-size: 2.85em;
	font-family: "Times New Roman", Times, serif;
	font-style: oblique;
	color: rgba(0,0,0,0.75);
}

    </style>
  </head>
  <body>




  <?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "online_portal";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

  $sql = "SELECT username,email,contactno FROM facultyregistration where username = '".$identify."'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        $name = $row["username"];
        $email = $row["email"];
        $contactno = $row["contactno"];

      }
  }
  else {

      $message = "Please Login again Due to session out";
      echo "<script type='text/javascript'>alert('$message');</script>";
     
  }
  $conn->close();
  ?>

  <p class = "special">Profile</p>

  <div class = "box">

    <form action="#" method="post">



      <label for="username"><b>Username(faculty):</b></label>
      <input type="text" id="username" name="username" value="<?php echo $name; ?>" >
      <br><br>
      <br>
      <label for="email"><b>Email:</b></label>
      <input type="text" id="email" name="email" value="<?php echo $email; ?>" >
      <br><br>
      <br>
      <label for="contactno"><b>Contact Number:</b></label>
      <input type="text" id="contactno" name="contactno" value="<?php echo $contactno; ?>" >
      <br><br>
      <br>

    </form>


</div>

</body>
</html>
