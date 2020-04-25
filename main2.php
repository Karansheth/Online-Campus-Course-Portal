<?php
session_start();
include_once 'Header.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Online Course Portal</title>
    <link rel="stylesheet" type="text/css" href="main.css">
    <link rel="stylesheet" type="text/css" href="sidebarr.css">
    <link rel="stylesheet" type="text/css" href="sidebarl.css">

  </head>
  <body>
      <div class="main"  style="grid-gap:0px;">
        <div class="header" style="background-color: lightblue"></div>

            <div class="mcol1" style="background-color: #f1f1f1">
              <div class="sidebar1">
                    <button type="button" name="button1" onclick="CSE()" id="CSE">+</button>
                    <a href="main1.php">Computer Science & Engineering</a><br>
                    <div id="CSE1" style="display:none">
                    <p>-Data Structure</p><br>
                    <p>-Object Oriented Programming: Java</p><br>
                    <p>-DataBase Management System</p><br>
                    <p>-Design & Analysis of Algorithms</p><br>
                    <p>-Internet Of Things</p><br>
                    </div>
              </div>

              <div class="sidebar2">
                    <button type="button" name="button2" onclick="IT()" id="IT">+</button>
                    <a href="main2.php">Information Technology</a><br>
                    <div id="IT1" style="display:none">
                    <p>-Computer Networks</p><br>
                    <p>-Theory Of Computation</p><br>
                    <p>-Operating System</p><br>
                    <p>-Cloud Computing</p><br>
                    </div>
              </div>

              <div class="sidebar3">
                    <button type="button" name="button3" onclick="ME()" id="ME">+</button>
                    <a href="main3.php">Mechanical Engineering</a><br>
                    <div id="ME1" style="display:none">
                    <p>-csdsfdf</p><br>
                    <p>-csdcsddcd</p><br>
                    <p>-nnknklnkn</p><br>
                    <p>-knknknknkjn</p><br>
                    </div>
              </div>

              <div class="sidebar4">
                    <button type="button" name="button4" onclick="EC()" id="EC">+</button>
                    <a href="main4.php">Electronics & Communication Engineering</a><br>
                    <div id="EC1" style="display:none">
                    <p>-Digital Communication</p><br>
                    <p>-Digital Signal Processing</p><br>
                    <p>-Operating System</p><br>
                    <p>-Cloud Computing</p><br>
                    <p>-sdcdssdcd</p><br>
                    </div>
              </div>
            </div>
<form action = "#" method="post">
            <div class="mcol2" style="background-color: lightblue"><strong>

                    <pre class="counter">) Computer Networks

<img src="cn.png" id="image1">  By: Pronoya Bhattacharya


<button type="button" name="button10" id="ButtonCN" onclick="descCN()">Description</button>                                                        <button type="submit" name="button101"  value ="Computer Networks">Enroll</button></pre>

                    <pre class="counter">) Theory Of Computation

<img src="thoc.jpg" id="image1">  By: Jitali Patel

<button type="button" name="button11" id="ButtonTHOC" onclick="descTHOC()">Description</button>                                                        <button type="submit" name="button111" id="button111" value ="Theory Of Computation">Enroll</button></pre>

                    <pre class="counter">) Operating System

<img src="OS.jpg" id="image1">  By: Preksha Pareek

<button type="button" name="button12" id="ButtonOS" onclick="descOS()">Description</button>                                                        <button type="submit" name="button121" id="button121" value = "Operating System">Enroll</button></pre>

                  <pre class="counter">) Cloud Computing

<img src="cloud.png" id="image1">  By: Madhuri Bhavsar

<button type="button" name="button13" id="ButtonTHOC" onclick="descCC()">Description</button>                                                        <button type="submit" name="button131" id="button131" value = "Cloud Computing">Enroll</button></pre>

<div class="center">

    <div class="pagination">
        <a href="main1.php">&laquo;</a>
        <a href="main1.php">1</a>
        <a href="main2.php" class="active">2</a>
        <a href="main3.php">3</a>
        <a href="main4.php">4</a>
        <a href="main3.php">&raquo;</a>
    </div>

</div>
    </strong>
<br>
</form>
            </div>

            <div class="mcol3" style="background-color: #f1f1f1">
                    <p id="sidebarR" style="margin:10px;"><b>What will you learn?</b>
                      <br><br>
                      They're popular with those who prefer to study from home due to family or professional obligations.
                      <br>They are many advantageous reasons to choose online learning, including more subject offerings,
                      <br>fewer in-person requirements, flexible scheduling and independent learning opportunities.This
                      <br>provides oppournity to the students as well as teacher to learn and explore new technology and
                      <br>also to enhance further their knowledge in their domain.It provides equal oppournity to learn
                      <br>for all from the best in their domain.
                    </p>

                    <p id="sidebarR6" style="display:none; margin-top:47px;">What will you learn?<br><br>
                      A computer network is a set of computers connected together for the purpose of sharing resources. The most common resource shared today is connection to the Internet. Other shared resources can include a printer or a file server. The Internet itself can be considered a computer network.
                        <br><br>Author: Pronoya Bhattacharya
                        <br>Department: IT
                        <br>Upload Date- 17<sup>th</sup> March, 2019
                        <br><br>Skills to be learned-
                        <ul id="sidebarR61" style="display:none;margin-top:-220px;">
                              <li>Performance analysis and measurement </li>
                              <li>Examining protocol mechanisms</li>
                              <li>Network control, sequencing and simulation</li>
                              <li>Advanced network architecture</li>
                              <li>Network security</li>
                        </ul>
                    </p>

                    <p id="sidebarR7" style="display:none;margin-top:-270px;">What will you learn?<br><br>
                      In theoretical computer science and mathematics, the theory of computation is the branch that deals with how efficiently problems can be solved on a model of computation, using an algorithm.In order to perform a rigorous study of computation, computer scientists work with a mathematical abstraction of computers called a model of computation.
                        <br><br>Author: Jitali Patel
                        <br>Department: IT
                        <br>Upload Date- 25<sup>th</sup> December, 2018
                        <br><br>Skills to be learned-
                        <ul id="sidebarR71" style="display:none;margin-top:-320px;">
                              <li>Introduction to Theory Of Computation </li>
                              <li>Deterministic Finite Automata</li>
                              <li>regular Expression</li>
                              <li>Context Free grammer</li>
                              <li>Push Down Automata</li>
                        </ul>
                    </p>

                    <p id="sidebarR8" style="display:none;margin-top:-270px;">What will you learn?<br><br>
                      An operating system (OS) is the program that, after being initially loaded into the computer by a boot program, manages all of the other application programs in a computer. The application programs make use of the operating system by making requests for services through a defined application program interface (API).
                        <br><br>Author: Preksha Pareek
                        <br>Department: IT
                        <br>Upload Date- 30<sup>th</sup> November, 2018
                        <br><br>Skills to be learned-
                        <ul id="sidebarR81" style="display:none;margin-top:-320px;">
                              <li>Introduction to Operating System</li>
                              <li>Process Scheduling</li>
                              <li>Interprocess Communication</li>
                              <li>Memory Management System</li>
                              <li>Paging</li>
                        </ul>
                    </p>

                    <p id="sidebarR9" style="display:none;margin-top:-280px;">What will you learn?<br><br>
                      Cloud computing is the on-demand availability of computer system resources, especially data storage and computing power, without direct active management by the user. The term is generally used to describe data centers available to many users over the Internet.
                        <br><br>Author: Madhuri Bhavsar
                        <br>Department: IT
                        <br>Upload Date- 7<sup>th</sup> January, 2018
                        <br><br>Skills to be learned-
                        <ul id="sidebarR91" style="display:none;margin-top:-330px;">
                              <li>Introduction to Theory Of Computation </li>
                              <li>Deterministic Finite Automata</li>
                              <li>regular Expression</li>
                              <li>Context Free grammer</li>
                              <li>Push Down Automata</li>
                        </ul>
                    </p>
    </div>
    <div class="footer" style="background-color: lightblue">
        <pre><p>Contact No. - 9638846446     Email- karan.sheth148@gmail.com</p>
<p>Contact No. - 7575043103     Email- saiyamjain88@gmail.com</p></pre>
    </div>
  </div>
    <script src="sidebarl.js"></script>
    <script src="sidebarr2.js"></script>

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



 if(isset($_POST['button101']))
 {
    $course = $_POST['button101'];
    //Insert Query of SQL
  $sql = "INSERT INTO courses(username, course) VALUES ('$identify', '$course')";

  if ($conn->query($sql) === TRUE) {
    $message = "Enrollment complete successfully.";
    echo "<script type='text/javascript'>alert('$message');</script>";


    }
    else
    {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
else if(isset($_POST['button111']))
{
    $course = $_POST['button111'];
//Insert Query of SQL
  $sql = "INSERT INTO courses(username, course) VALUES ('$identify', '$course')";

  if ($conn->query($sql) === TRUE) {
    $message = "Enrollment complete successfully.";
    echo "<script type='text/javascript'>alert('$message');</script>";

  }
  else
  {
  echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
else if(isset($_POST['button121']))
{
    $course = $_POST['button121'];
    //Insert Query of SQL
    $sql = "INSERT INTO courses(username, course) VALUES ('$identify', '$course')";

    if ($conn->query($sql) === TRUE){
      $message = "Enrollment complete successfully.";
      echo "<script type='text/javascript'>alert('$message');</script>";

    }
    else
    {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
else if(isset($_POST['button131']))
{
    $course = $_POST['button131'];
    //Insert Query of SQL
    $sql = "INSERT INTO courses(username, course) VALUES ('$identify', '$course')";

    if ($conn->query($sql) === TRUE){
      $message = "Enrollment complete successfully.";
      echo "<script type='text/javascript'>alert('$message');</script>";

    }
    else
    {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
else;


$conn->close();
?>
