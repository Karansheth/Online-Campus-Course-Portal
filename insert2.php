<?php
$username = $_POST['username'];
$email = $_POST['email'];

$contactno = $_POST['contactno'];

  
$password = $_POST['password'];
$confirmpassword = $_POST['confirmpassword'];


if(!empty($username) || !empty($contactno) || !empty($email) || !empty($password) || !empty($confirmpassword))
{
  $host = "localhost";
  $dbUsername = "root";
  $dbPassword = "";
  $dbname = "online_portal";


  $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

  if(mysqli_connect_error())
  {
    die('Connect Error('. mysqli_connect_error().')'.mysqli_connect_error());

  }
  else {
    $SELECT = "SELECT email From registration where email = ? Limit 1";
    $INSERT = "INSERT Into registration (username, email, contactno, password)
                values(?, ?, ?, ?)";

    $stmt = $conn->prepare($SELECT);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->bind_result($email);
    $stmt->store_result();
    $rnum = $stmt->num_rows;

    if($rnum>0)
    {
      echo "Someone already registered from this email";

    }
    else if($password != $confirmpassword)
      {
        echo "password doesn't match!!";
     }
    else
    {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("ssis", $username, $email, $contactno, $password);
      $stmt->execute();

      echo "New record is been inserted successfully";

    }
    $stmt->close();
    $conn->close();

  }
}
else {

echo "All fields are required";
die();

}

?>
