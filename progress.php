<?php
session_start();
include_once 'Header.php';
?>
<html>
<head>
   
    <link rel="stylesheet" href="style11.css">
   
    <style>
        .box{
           
            margin-left: 0px;
            float: left;
        }
        #container{
           
            position: absolute;
            float: left;
            height: 320px;
top: 100px;
            bottom: 35.9%;
            right: 1%;  
        }
    </style>

</head>

<body>

    <h1>Array</h1>

    <div class = "box" align="left">
        <video height = "320px" width = "auto" controls>
            <source class = "box" src="array.mp4" type="video/mp4">
        </video>
    </div>
   
   <div id="container">
        <div id="start">Start Quiz!</div>
        <div id="quiz" style="display: none">
            <div id="question"></div>
            <div id="qImg"></div>
            <div id="choices">
                <div class="choice" id="A" onclick="checkAnswer('A')"></div>
                <div class="choice" id="B" onclick="checkAnswer('B')"></div>
                <div class="choice" id="C" onclick="checkAnswer('C')"></div>
            </div>
            <div id="timer">
                <div id="counter"></div>
                <div id="btimeGauge"></div>
                <div id="timeGauge"></div>
            </div>
            <div id="progress"></div>
        </div>
        <div id="scoreContainer" style="display: none"></div>
    </div>
   
    <div style="margin-top: 350px; float: right">
        <form class="" action="#" method="post">
<button type="submit" onclick="func()" style="font-size: 50px; margin-right: 20px; background-color: darkgrey; color:blue;" name="submit1" id = "submit1" value = ""> Submit Result </button>
       
<input type="hidden" name="hidden1" id="hidden1" />
</form>
    </div>
    <script src="quiz.js"></script>
    <script>
    function func()
        {
            document.getElementById("hidden1").value = scorePerCent;
        }
    </script>
</body>

</html>

<?php
$identify = $_SESSION["username2"];

?>

<?php

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


 if(isset($_POST['submit1']))
 {
     # Prepare the SELECT Query
  $selectSQL = 'SELECT * FROM score';
  $result= mysqli_query($conn, $selectSQL);
 # Execute the SELECT Query
  if( !( $result ) ){
    echo 'Retrieval of data from Database Failed - #'.mysql_errno().': '.mysql_error();
  }else{
      $flag=0;
    while( $row = mysqli_fetch_assoc( $result ) )
    {
        if($row['TestTopic'] == 'Array')
        {
            $testtopic = 'Array';
            $marks = $row['Score'];
            $flag = 1;
            break;
        }
    }
    $score = $_POST['hidden1'];
    if($flag==1)
    {
        if($score > $marks)
        {
            $sql = "UPDATE score set Score = '$score' where TestTopic = 'Array'";
        }
        else
        {
            $sql = "UPDATE score set Score = '$marks' where TestTopic = 'Array'";
        }          
    }
    else
    {       
        $sql = "INSERT INTO score(username,Author,course,TestTopic,Score) VALUES ('$identify', 'Payal Prajapati','Data Structure','Array', '$score')";
    }
    //Insert Query of SQL   
  }
  if ($conn->query($sql) === TRUE) {
    $message = "Score Updated Successfully";
    echo "<script type='text/javascript'>alert('$message');</script>";

    }
    else
    {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
 
}
else
{
   
}

$conn->close();
?>