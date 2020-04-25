<?php
session_start();
include_once 'Header.php';
 ?>


<?php
  $identify = $_SESSION["username2"];
  //echo "username2";
  //echo $identify;

  ?>



  <?php

  echo "My courses<br>";
  $servername = "localhost";
  $name = "root";
  $password = "";
  $dbname = "online_portal";

  // Create connection
  $conn = new mysqli($servername, $name, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

  $sql = "SELECT username,course FROM courses where username = '".$identify."'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {

        $course = $row["course"];


        echo "<br>";
        echo $course;
        echo "<br>";

      }
  }
  else {
	echo "not possible";
  }
  $conn->close();
  ?>
