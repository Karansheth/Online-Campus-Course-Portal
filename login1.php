<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Online Campus Course Portal</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

  <form class="" action="insert2.php" method="post">

    <h1> Online Campus Course Portal </h1>


    


    <label for="username">Username </label><br>
    <input type="text" id="username" name="username" placeholder="Enter UserName..." autocomplete="on" pattern="^[a-zA-Z0-9]{5,12}$" title="It must be alphanumeric of length 5-15" autofocus required>
    <br><br>

    <label for="email">Email </label><br>
    <input type="text" id="email" name="email" placeholder="Email Address..." autocomplete="on" pattern="[a-z0-9A-Z_.-]+@[a-z0-9]+\.[a-z]{2,8}(\.[a-z]{2,5})?$" title="Must be of format(karan@gmail.com, karan@edu.co.in)" required>
    <br><br>

    <label for="contactno">Contact Number </label><br>
    <input type="text" id="contactno" name="contactno" placeholder="Enter Contact No...." autocomplete="on" pattern="^\d{10}$" title="Must have exactly 10 digits" required>
    <br>
    <br>

    <label for="password">Password </label><br>
    <input type="password" id="password" name="password" placeholder="********" autocomplete="off" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="It must contain 8 characters containing atleast one lowercase, one uppercase and one number" required>
    <br><br>

    <a href="signin.html"><input type="submit" value="Sign Up"></a>
    <a href="signin.html"><input type="button" value="Sign In"></a>
  </form>

  </body>
</html>
