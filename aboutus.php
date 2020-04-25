<?php
include_once 'Header.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    * {box-sizing: border-box}
    body {font-family: "Lato", sans-serif;}

    .tab {
      float: left;
      border: 1px solid #ccc;
      background-color: #f1f1f1;
      width: 30%;
      height: 700px;
      }

  .tab button {
    display: block;
    background-color: inherit;
    color: black;
    padding: 22px 16px;
    width: 100%;
    border: none;
    outline: none;
    text-align: left;
    cursor: pointer;
    transition: 0.3s;
    font-size: 17px;
  }

  .tab button:hover {
    background-color: #ddd;
  }

  .tab button.active {
    background-color: #ccc;
  }


  .tabcontent {
    float: left;
    padding: 0px 12px;
    border: 1px solid #ccc;
    width: 70%;
    border-left: none;
    height: 300px;
  }
    </style>
  </head>
  <body>


    <div class="tab">
      <button class="tablinks" onclick="openCity(event, 'About Us')" id="defaultOpen">About Us</button>
      <button class="tablinks" onclick="openCity(event, 'Acknowledgement')">Acknowledgement</button>
      <button class="tablinks" onclick="openCity(event, 'Intiative')">Why this Intiative</button>
      <button class="tablinks" onclick="openCity(event, 'Courses')">Why This Course</button>


    </div>

    <div id="About Us" class="tabcontent">
      <br><br>
      <p><b>Nirma University (NU)</b> is a private university in Ahmedabad in the state of Gujarat, India. It functions under the aegis of the Nirma Education and Research Foundation (NERF). Nirma University is a statutory university established under a state act.
      </p>

    <br>
      <p>The main goal of Our Online Course Portal is  to build on the engineering and core science courses .
        An additional video courses were created in all major branches of engineering, physical sciences at the undergraduate and postgraduate levels and management courses at the postgraduate level.
        Several improvements such as indexing of all video and web courses and keyword search will be  implemented in future.</p>
    </div>

    <div id="Acknowledgement" class="tabcontent">
<br><br>
      <p>We would like to express our deepest appreciation to all those who provided us the possibility to complete this report. We acknowledge with thanks, the support rendered by <b>Dr. Smita Darandale</b>
, under whose aegis we were able to complete the task in a given period of time. We also appreciate the constructive suggestions given by our friends to further enhance content of the report.</p><br>
  <p>At the home front, we are extremely grateful to our family members for the support and encouragement, we got from them in successfully completing the report.
.</p>
    </div>

    <div id="Intiative" class="tabcontent">
      <br><br>
      <p><b>Massive Open Online Courses (MOOC)</b> is essentially an asynchronous platform and a process for teaching through pre-recorded lectures, resource video materials, lecture notes, assignments and quizzes, which are usually online and provide self assessment in regular intervals during learning.</p>
<br.<p>The learning, through scheduling of fixed time duration for completion of courses and, therefore, the simultaneous participation of teachers and a large number of students may be termed synchronous and is thus similar to a classroom, albeit on the Internet and being much larger in size.
When offered with consideration for students in non-urban and rural areas through supplementary DVDs and mobile delivered content, they enable quality and equitable access to a much larger population of students and can lead to a significant rise in the Gross Enrollment Ratio.</p><br>
<p>These courses are open for anyone to access – at no cost. So anyone who is interested in learning gets access to quality content, which also includes discussion with the content creator and access to assignments for self testing..</p>
    </div>

    <div id="Courses" class="tabcontent">
  <br>
      <p>1. Enables the student to directly engage and learn from the best faculty in the country in that particular subject. This strengthens the fundamentals of the student in the course
<br><br>2. Gives the students the opportunities to explore new areas of interest – which are not possible in regular college environment. Also gives students the opportunity to learn in greater depth the subjects they wish to master. These courses are also serving as faculty development programmes (15-20% of enrollments are by faculty in different colleges).
<br><br>3. The audience in a MOOC includes students spanning the length and breadth of India and a small fraction of foreign students. This mix of peer group gives the students a chance to assess where they stand with respect to this group of learners.
<br><br>4. These courses also bring out the self-learning initiative of the students – where their own motivation is what drives them to complete the course and not external compulsions. This fosters the habit of keeping oneself updated always by means of self-study..</p>
    </div>




    <script>
      function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
          tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
          tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
      }
      document.getElementById("defaultOpen").click();
    </script>

  </body>
</html>
