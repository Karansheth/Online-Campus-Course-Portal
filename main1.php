
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
      <div class="main" style="grid-gap:0px;">
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
                    <pre class="counter">) <a href="Data Structure.php">Data Structure</a>

<a href="Data Structure.php"><img src="ds.jpg" id="image1"></a>  By: Payal Prajapati

<button type="button" name="button5" id="ButtonDS" onclick="descDS()">Description</button>                                                        <button type="submit" name="button51" id="button51" value = "Data Structure">Enroll</button></pre>

                    <pre class="counter">) Object Oriented Programming: Java

<img src="OOP.jpeg" id="image1">  By: Daiwat Vyas

<button type="button" name="button6" id="ButtonOOP" onclick="descOOP()">Description</button>                                                        <button type="submit" name="button61" id="button61" value = "Object Oriented Programming: Java">Enroll</button></pre>

                    <pre class="counter">) Database Management System

<img src="dbms.png" id="image1">  By: Vishal Parikh

<button type="button" name="button7" id="ButtonDBMS" onclick="descDBMS()">Description</button>                                                        <button type="submit" name="button71" id="button71" value = "Database Management System">Enroll</button></pre>

                    <pre class="counter">) Design & Analysis of Algorithms

<img src="DA.png" id="image1">  By: Ankit Thakker

<button type="button" name="button8" id="ButtonDA" onclick="descDA()">Description</button>                                                        <button type="submit" name="button81" id="button81" value = "Design & Analysis of Algorithms">Enroll</button></pre>

                    <pre class="counter">) Internet Of Things

<img src="IoT.png" id="image1">  By: Vijay Ukani

<button type="button" name="button9" id="ButtonIoT" onclick="descIoT()">Description</button>                                                        <button type="submit" name="button91" id="button91" value = "Internet Of Things">Enroll</button></pre>

<div class="center">
    <div class="pagination">
        <a href="#">&laquo;</a>
        <a href="main1.php" class="active">1</a>
        <a href="main2.php">2</a>
        <a href="main3.php">3</a>
        <a href="main4.php">4</a>
        <a href="main2.php">&raquo;</a>
        <br><br>
    </div>
</div>
      </strong>
<br>
</form>
            </div>
            <div class="mcol3" style="background-color: #f1f1f1">
                    <p id="sidebarR" style="margin:10px;padding:15px;"><b>What will you learn?</b>
                      <br><br>
                      They're popular with those who prefer to study from home due to family or professional obligations.
                      <br>They are many advantageous reasons to choose online learning, including more subject offerings,
                      <br>fewer in-person requirements, flexible scheduling and independent learning opportunities.This
                      <br>provides oppournity to the students as well as teacher to learn and explore new technology and
                      <br>also to enhance further their knowledge in their domain.It provides equal oppournity to learn
                      <br>for all from the best in their domain.
                    </p>

                    <p id="sidebarR1" style="display:none;">What will you learn?<br><br>
                      A data structure is a particular way of organizing data in a computer so that it can be used effectively. The idea is to reduce the space and time complexities of different tasks.
                        <br><br>Author: Payal Prajapati
                        <br>Department: CSE
                        <br>Upload Date:  25<sup>th</sup> May, 2019
                        <br><br>Skills to be learned-
                        <ul id="sidebarR11" style="display:none;margin-top:-510px;margin-left:50px;">
                              <li>Arrays</li>
                              <li>Linked List</li>
                              <li>Stack</li>
                              <li>Queue</li>
                              <li>Sorting & Searching</li>
                              <li>Trees</li>
                              <li>Graph</li>
                              <li>Hash Table</li>
                        </ul>
                    </p>

                    <p id="sidebarR2" style="display:none;margin-top:-420px;">What will you learn?<br><br>
                      Object-oriented programming aims to implement real-world entities like inheritance, hiding, polymorphism, etc in programming. The main aim of OOP is to bind together the data and the functions that operate on them so that no other part of the code can access this data except that function.
                        <br><br>Author: Daiwat Vyas
                        <br>Department: CSE
                        <br>Upload Date- 30<sup>th</sup> May, 2019
                        <br><br>Skills to be learned-
                        <ul id="sidebarR21" style="display:none;margin-top:-450px;">
                              <li>Java Programming</li>
                              <li>polymorphism</li>
                              <li>Abstraction</li>
                              <li>Encapsulation</li>
                              <li>Inheritance</li>
                              <li>Class</li>
                              <li>Object</li>
                        </ul>
                    </p>
                    <p id="sidebarR3" style="display:none;margin-top:-420px;">What will you learn?<br><br>
                      A database management system (DBMS) is a software package designed to define, manipulate, retrieve and manage data in a database. A DBMS generally manipulates the data itself, the data format, field names, record structure and file structure. It also defines rules to validate and manipulate this data.
                        <br><br>Author: Vishal Parikh
                        <br>Department: CSE
                        <br>Upload Date- 8<sup>th</sup> June, 2019
                        <br><br>Skills to be learned-
                        <ul id="sidebarR31" style="display:none;margin-top:-450px;">
                              <li>Introduction to DBMS</li>
                              <li>SQL Query</li>
                              <li>Relational Algebra</li>
                              <li>Relational Calculus</li>
                              <li>ER & Relational Model</li>
                              <li>Transaction</li>
                              <li>Concurrency</li>
                        </ul>
                    </p>
                    <p id="sidebarR4" style="display:none;margin-top:-420px;">What will you learn?<br><br>
                       An Algorithm is a sequence of steps to solve a problem. Design and Analysis of Algorithm is very important for designing algorithm to solve different types of problems in the branch of computer science and information technology.
                        <br><br>Author: Ankit Thakker
                        <br>Department: CSE
                        <br>Upload Date- 17<sup>th</sup> September, 2018
                        <br><br>Skills to be learned-
                        <ul id="sidebarR41" style="display:none;margin-top:-500px;">
                              <li>Divide & Conquer Algorithms</li>
                              <li>Dynamic Algorithm</li>
                              <li>Greedy Algorithms</li>
                              <li>Minimum Spanning Tree</li>
                              <li>Shortest path</li>
                              <li>NP-Completeness</li>
                              <li>Trie</li>
                        </ul>
                    </p>
                    <p id="sidebarR5" style="display:none;margin-top:-420px;">What will you learn?<br><br>
                      The Internet of Things (IoT) is a system of interrelated computing devices, mechanical and digital machines, objects, animals or people that are provided with unique identifiers (UIDs) and the ability to transfer data over a network without requiring human-to-human or human-to-computer interaction.
                        <br><br>Author: Vijay Ukani
                        <br>Department: CSE
                        <br>Upload Date- 16<sup>th</sup> October, 2019
                        <br><br>Skills to be learned-
                        <ul id="sidebarR51" style="display:none;margin-top:-450px;">
                              <li>Introduction to Internet Of Things</li>
                              <li>IoT Sensors and Devices</li>
                              <li>IoT Networks and Protocols</li>
                              <li>IoT Programming and Big Data</li>
                              <li>CyberSecurity and privacy in IoT</li>
                        </ul>
                    </p>

            </div>

            <div class="footer" style="background-color: lightblue">
                <pre><p>Contact No. - 9638846446     Email- karan.sheth148@gmail.com</p>
<p>Contact No. - 7575043103     Email- saiyamjain88@gmail.com</p></pre>
            </div>
    </div>

    <script src="sidebarl.js"></script>
    <script src="sidebarr.js"></script>

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



 if(isset($_POST['button51']))
 {
    $course = $_POST['button51'];
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
else if(isset($_POST['button61']))
{
    $course = $_POST['button61'];
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
else if(isset($_POST['button71']))
{
    $course = $_POST['button71'];
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
else if(isset($_POST['button81']))
{
    $course = $_POST['button81'];
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
else if(isset($_POST['button91']))
{
    $course = $_POST['button91'];
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
