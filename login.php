<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Online Campus Course Portal</title>
    <link rel="stylesheet" type="text/css" href="style1.css">
  </head>
  <body>



    <div class="main">
      <img src="image3.png" class="logo">
  <form action="insert2.php" method="post">



    <label for="username">Username </label><br>
    <input type="text" id="username" name="username" placeholder="Enter UserName..." autocomplete="on" pattern="^[a-zA-Z0-9]{5,12}$" title="It must be alphanumeric of length 5-15" autofocus required>
    <br><br>

    <label for="email">Email </label><br>
    <input type="text" id="email" name="email" placeholder="Email Address..." autocomplete="on" pattern="[a-z0-9A-Z_.-]+@[a-z0-9]+\.[a-z]{2,8}(\.[a-z]{2,5})?$" title="Must be of format(karan@gmail.com, karan@edu.co.in)" required>
    <br><br>

    <label for="contactno">Contact Number </label><br>
    <input type="text" id="contactno" name="contactno" placeholder="Enter Contact No...." autocomplete="on" pattern="^\d{10}$" title="Must have exactly 10 digits" required>
    <br><br>

    <label for="password">Password </label><br>
    <input type="password" id="password" name="password" placeholder="********" autocomplete="off" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="It must contain 8 characters containing atleast one lowercase, one uppercase and one number" required>
    <br><br>

    <label for="password2">Verify Password </label><br>
    <input type="password" id="confirmpassword" name="confirmpassword" placeholder="********" autocomplete="off" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="It should be same as above password" required>
    <br><br>

    <input type="submit" value="Sign Up">
    <a href="signin.php"><input type="button" value="Sign In"></a>
  </form>
</div>
<h1 style="color:red"><font size="+3"><big><i><u>Online Campus Course Portal</u></i>  </big></font></h1>
  -----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
  <br>
  <b>
  <font color="red"><b>Link : </b></font><a href="http://nirmauni.ac.in/" target="_blank">nirmauni.ac.in</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  <font color="red"><b>Contact No : </b></font>02717 241 900
  <br>

  -----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

  <p>
    <h1 style="text-align:left; color:red"><b>  WHY ONLINE COURSE PORTAL ? </b></h1>
  </p>
  <font color="black">
  <p>
    They're popular with those who prefer to study from home due to family or professional obligations.
    <br>They are many advantageous reasons to choose online learning, including more subject offerings,
    <br>fewer in-person requirements, flexible scheduling and independent learning opportunities.This
    <br>provides oppournity to the students as well as teacher to learn and explore new technology and
    <br>also to enhance further their knowledge in their domain.It provides equal oppournity to learn
    <br>for all from the best in their domain.
  </p>
  <p>
    <h1 style="text-align:left; color:red"><b> Nirma University at a Glance !! </b></h1>
  </p>
  <p>
    Established in the year 2003, the Nirma University, Ahmedabad is a research-oriented, student-centric,
    <br>multidisciplinary, not-for-profit state private university. Within a short period of its existence,
    <br> it has emerged as a nationally renowned higher education institution. The University and its
    <br>constituent institutes are highly ranked by different ranking agencies.
  </p>
</font>
</b>
  </body>
</html>
