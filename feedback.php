<?php
include_once 'Header.php';
?>

<html>
  <head>
  <style>
    .box1{
      height: 1000px;
      width: 700px;
      margin: 30px 100px 100px 300px;
      border-color: black;
      border-width: 2px;
      border-style: solid;
      background-image: url("background2.png");
    }
    .title{
      height:40px;
      width: 100%;

      color: white;
      font-size: 20px;
      background-color: darkgrey;
      padding-top: 5px;

    }
    .feedback{
      height:950px;
      width: 80%;
      margin: 20px 40px 10px 30px;


    }
    textarea {
    width: 100%;
    height: 150px;
    padding: 12px 20px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    background-color: #f8f8f8;
    font-size: 16px;
    resize: none;
  }
  .special{
  text-align: center;
	padding-left: 5px;
	font-weight: bold;
	font-size: 2.85em;
  margin-top: 20px;
	font-family: "Times New Roman", Times, serif;
	font-style: oblique;
	color: rgba(0,0,0,0.75);
}
  </style>
</head>
<body>

  <div class="special">
    <center> Feedback Form</center>
  </div>

  <div class = "box1">


    <div class= "feedback">
    <form action="Registration.html" method = "post">

		</br>
		Name : <input type = "text" name = "owner" size = "30" pattern ="[a-zA-Z]{1,}$" required>
		</br>
		</br>

		Date : <input type = "date" name = "date" required>
		</br>
		</br>


		State:
		<select name = "state" >
		<optgroup label="Eastern States">
			<option value="assam">Assam</option>
			<option value="Tripura">Tripura</option>
		</optgroup>
		<optgroup label="Northern State ">
			<option value="hp">Himachal Pradesh</option>
			<option value="jammu">Jammu</option>
		</optgroup>
		<optgroup label="Western State ">
			<option value="gujarat">Gujarat</option>
			<option value="maharashtra">Maharashtra</option>
		</optgroup>
		<optgroup label="Southern State ">
			<option value="kerala">kerala</option>
			<option value="karnataka">karnataka</option>
		</optgroup>
		</select>
		</br>
		</br>


		Mobile No: <input type = "text" name="mobile_no" maxlength="10" pattern = "^[0-9]{10}$" required>
		</br>
		</br>

	   City : <input type = "text" name = "city" maxlength="15" required>
    </br>
    </br>

    Which is your favourite Course: <input type = "text" name = "course" maxlength="15" required>
   </br>
   </br>




		Email Id(optional):
		<input type ="email" name ="email" pattern = "[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
		</br>
		</br>

    Profession:<br>
    <input type="radio" name="Profession" value="student"> Student<br>
    <input type="radio" name="Profession" value="faculty"> Faculty<br>
    <input type="radio" name="Profession" value="employee"> employee<br>
    <input type="radio" name="Profession" value="other"> Other<br>

    <br>
    <br>
		Comments:
		<pre>
<textarea></textarea>
		</pre>
    <br>

		<input type="submit" value="RESET" type="reset"></input><br></br>
    <br>
    <input type="submit" value="SUBMIT" name="submit"></input><br>
	</form>
</div>
  </div>
</body>
