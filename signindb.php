<?php
  session_start();
 ?>



<?php
        $user = 'root';
        $password = '';
        $db = 'online_portal';
        $host = 'localhost';
        $port = 3306;


        $success = mysqli_connect(

           $host,
           $user,
           $password,
           $db,
           $port
        );

    if(isset($_REQUEST["submit"]))
    {
      $username = $_REQUEST["username"];
      $password = $_REQUEST["password"];
      $sql = mysqli_query($success, "SELECT * FROM registration WHERE username = '".$_POST['username']."' and password = '".$_POST['password']."'");
      $row = mysqli_num_rows($sql);

      if($row==true)
      {
      echo " you are logged in successfully";
      $_SESSION["username"] = $username;

      }
      else {
        $message = "Username and/or Password incorrect.\\nTry again.";
        echo "<script type='text/javascript'>alert('$message');</script>";

      }

    }
    ?>
