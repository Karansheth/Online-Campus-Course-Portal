<?php
    error_reporting(E_ALL & ~E_NOTICE);
    require_once('dbcon.php');
    if(isset($_POST["submit"]))
    {
        $error = 0;
        if (isset($_POST['username']) && !empty($_POST['username'])) {
            $username=mysqli_real_escape_string($conn,trim($_POST['username']));
        }else{
            $error = 1;
            $empty_username="Username Cannot be empty.";
            echo $empty_username.'<br>';
        }
        if (isset($_POST['email']) && !empty($_POST['email'])) {
            $email=mysqli_real_escape_string($conn,trim($_POST['email']));
        }else{
            $error =1;
            $empty_email="Email cannot be empty.";
            echo $empty_email.'<br>';
        }

        if (isset($_POST['contactno']) && !empty($_POST['contactno'])) {
            $contactno=mysqli_real_escape_string($conn,trim($_POST['contactno']));
        }else{
            $error = 1;
            $empty_contactno="contactno cannot be empty.";
            echo $empty_contactno.'<br>';
        }

        if (isset($_POST['password']) && !empty($_POST['password'])) {
            $password=mysqli_real_escape_string($conn,trim($_POST['password']));
        }else{
            $error = 1;
            $empty_password="Password cannot be empty";
            echo $empty_password.'<br>';
        }

        if (isset($_POST['confirmpassword']) && !empty($_POST['confirmpassword'])) {
            $confirmpassword=mysqli_real_escape_string($conn,trim($_POST['confirmpassword']));
        }else{
            $error = 1;
            $empty_confirmpassword="Retype password cannot be empty";
            echo $empty_confirmpassword.'<br>';
        }

        $password=password_hash('$password',PASSWORD_BCRYPT);
        $date=mysqli_real_escape_string($conn, trim('now()'));
        if($password!=$confirmpassword)
        {
            echo "password not Matched";
        }

        if(!$error) {
          $sql="select * from registration where (username='$username' or email='$email');";

    $res=mysqli_query($conn,$sql);

    if (mysqli_num_rows($res) > 0) {
      // output data of each row
      $row = mysqli_fetch_assoc($res);
      if ($username==$row['username'])
      {
          echo "Username already exists";
      }
      else($email==$row['email'])
      {
          echo "Email already exists";
      }
        }else { //here you need to add else condition;
            $stmt->close();
            $INSERT = "INSERT Into registration (username, email, contactno, password)
                        values(?, ?, ?, ?)";
            $stmt->close();
            $stmt = $conn->prepare($INSERT);
            $stmt->bind_param("ssis", $username, $email, $contactno, $password);
            $stmt->execute();

            echo "New record is been inserted successfully";

        }
        }
        else {
          echo " required all fields";
        }
    }
    ?>
