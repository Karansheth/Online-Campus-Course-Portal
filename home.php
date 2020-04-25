<?php
session_start();
include_once 'Header.php';
?>


<html>
    <head>
      <style>
      .logo1 {
      background-color: white;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
      margin-bottom: 25px;
      width: 200px;
      height: 150px
      border: 2px solid black;
      margin: 35px 10px 35px 10px;
      }
      .logo2,.logo3,.logo4,.logo5,.logo6 {
      background-color: white;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
      margin-bottom: 25px;
      width: 200px;

      height: 130px;
      border: 2px solid black;
      margin: 35px 5px 35px 5px;
      }


      .main_box{
        box-sizing: border-box;
      }
      .box1{
        height: 200px;
        width: 1300px;
        border: 10px;
        border-style: solid;
        border-color: black;
        border-width: 5px;
        background-color: Azure;
        margin: 10px;
        margin-left: 20px;
        margin-top: 50px;
        margin-right: 50px;
      }

      .box2{
        height: 300px;
        width: 350px;
        float: left;
        border-right: 10px;
        border-style: solid;
        border-color: lightgrey;
        border-width: 2px;
        background-color: white;
        margin: 50px 50px 0 50px;
      }

      .box2_container{
        top:0;
        height: 30px;
        width: 150px;
        background-color: darkgrey;
      }

      .box2_container1{
        height: 100%;
        width: 100%;
        float:left;
        background-color: white;
      }


      .text {
    color: #f2f2f2;
    font-size: 15px;
    padding: 8px 12px;
    position: absolute;
    bottom: 8px;
    width: 100%;
    text-align: center;
  }

  /* Number text (1/3 etc) */
  .numbertext {
    color: #f2f2f2;
    font-size: 12px;
    padding: 8px 12px;
    position: absolute;
    top: 0;
  }

  /* The dots/bullets/indicators */
  .dot {
    height: 15px;
    width: 15px;
    margin: 0 2px;
    background-color: #bbb;
    border-radius: 50%;
    display: inline-block;
    transition: background-color 0.6s ease;
  }

  .active {
    background-color: #717171;
  }

  /* Fading animation */
  .fade {
    -webkit-animation-name: fade;
    -webkit-animation-duration: 1.5s;
    animation-name: fade;
    animation-duration: 1.5s;
  }

  @-webkit-keyframes fade {
    from {opacity: .4}
    to {opacity: 1}
  }

  @keyframes fade {
    from {opacity: .4}
    to {opacity: 1}
  }

  /* On smaller screens, decrease text size */
  @media only screen and (max-width: 300px) {
    .text {font-size: 11px}
  }
  .mySlides {
    display: none;
  }

      .box3{
        height: 350px;
        width: 300px;
        float: left;
        border-right: 10px;
        border-style: solid;
        border-color: darkgrey;
        border-width: 2px;
        background-color: white ;
        margin: 50px 50px 0 120px;
        overflow: auto;

      }
      .box3_container{
        height: 30px;
        width: 100%;
        background-color: darkgrey;

      }
      .box3_container1{
        margin: 15px 13px 15px 8px;
        height: 100px;
        width: 260px;
        border-style: solid;
        border-color: black;
        border-width: 1px;
        background-color: Azure;

      }
      .box3_container2{
        margin: 15px 13px 15px 8px;
        height: 100px;
        width: 260px;
        border-style: solid;
        border-color: black;
        border-width: 1px;
        background-color: Azure;

      }
      .box3_container3{
        margin: 15px 13px 15px 8px;
        height: 100px;
        width: 260px;
        border-style: solid;
        border-color: black;
        border-width: 1px;
        background-color: Azure;

      }
      .box3_container4{
        margin: 15px 13px 15px 8px;
        height: 100px;
        width: 2860px;
        border-style: solid;
        border-color: black;
        border-width: 1px;
        background-color: Azure;

      }
      .space{
        margin-top: 100px;
        margin-left: 50px;
        margin-right: 30px;

        font-family: "source sans pro";
  	    font-size: 1.25em;
  	    font-style: oblique;
      }

      .container{
        margin-top:  550px;
        height: 75px;
      }
      #toTop {
    float: right;
    width: 50px;
    height: 30px;
    cursor: pointer;
    margin-right: 0px;
    margin-bottom: 1%;

    right: 0;
    bottom: 0;
  }
  .box4{
    height:160px;
    width: 300px;

    border-right: 10px;
    margin-left: 10px;
    background-color: white ;




  }
  .outer_box{
    float: left;
    height: 150px;
    width: 250px;
    margin: 100px 50px 0 50px;
  }
  .dots{
    margin-top: 5px;
    margin-left: 50px;
  }
  .special{
	border-left: 5px solid #B89C00;
	padding-left: 5px;
  margin: 20px 50px 0px 50px;
	font-weight: bold;
	font-size: 2.05em;
	font-family: "Times New Roman", Times, serif;
	font-style: oblique;
	color: rgba(0,0,0,0.75);
}
  .photo{

    height: 250px;
    width: 1350px;
    margin: 0px 0px 50px 0px;
    border-color: black;
    border-width: 2px;


  }



      </style>
      </head>
      <body>

        <div class = "photo">
            <img src="photo.png" style="width:100%;height:100%;">


        </div>


      <p class="special">Online learning is that students can complete their
        training in their own time and according to their own schedules.
        Recorded lessons, written content, webinars and collaborative online
        learning software make it easy for anyone with an internet connection to
        access everything they need.</p>

      <div class = "main_box">


      <!-->

      <!-->
      <div class = "box2">
          <div class="box2_container1">
              <p class = "space"><b>The Campus largest selection of courses</b>
              Choose from over 100 online courses with new additions published every month!!
              <?php
                $_SESSION["username2"] = $_SESSION["username1"];
               ?>

              </p>
          </div>
      </div>





      <div class = "outer_box">
      <div class = "box4">
        <div class="mySlides fade">

          <img src="logo3.jpg" style="width:100%;height:100%;">

        </div>

        <div class="mySlides fade">
          <img src="logo4new.jpg" style="width:100%;height:100%;">
        </div>

        <div class="mySlides fade">
          <img src="logo1.png" style="width:100%;height:100%;">
        </div>

        <div class="mySlides fade">
          <img src="management.jpg" style="width:100%;height:100%;">
        </div>

      </div>
      <div class = "dots" style="text-align:center;">
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
      </div>
    </div>








      <script>
      var slideIndex = 0;
      showSlides();

      function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {slideIndex = 1}
        for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
        setTimeout(showSlides, 2000);
      }
      </script>




      <div class = "box3">

          <div class="box3_container1">
            <div style="font-style:italic;font-weight: bold;color: #7F0804;margin:20px 0 0 10px;">Upcoming Live sessions</div>
            <a href="#" style="font-size: 15px;padding:40px 0 0 10px;"><i>Click Here</i></a>
          </div>
          <div class="box3_container2">
            <div style="font-style:italic;font-weight: bold;color: #7F0804;margin:20px 0 0 10px;">Final Course list</div>
            <a href="main1.php" style="font-size: 15px;padding:40px 0 0 10px;"><i>Click Here</i></a>
          </div>
          <div class="box3_container3">
            <div style="font-style:italic;font-weight: bold;color: #7F0804;margin:20px 0 0 10px;">Notification</div>
            <a href="#" style="font-size: 15px;padding:40px 0 0 10px;"><i>Click Here</i></a>

          </div>

      </div>
      </div>

        <footer style="background-color: #000;">
          <div class="container" style="vertical-align: middle;">
              <span class="glyphicon glyphicon-phone-alt"></span>
              <span style="color: lightblue;">&nbsp;&nbsp;&nbsp;9638846446</span>
              <span style="color: lightblue;margin-top: 50px; padding:10px;">Contact information: karan.sheth148@gmail.com</span>
            <div id="toTop" onclick="toTop()">
              <img src="footer.png" style="width:50px;height:50px;margin-top: 10px;">
            </div><br><br>
            <span class="glyphicon glyphicon-phone-alt"></span>
            <span style="color: lightblue;">&nbsp;&nbsp;&nbsp;7575043103</span>
            <span style="color: lightblue;margin-top: 50px; padding:10px;">Contact information: saiyamjain88@gmail.com</span>
            </div>


        </footer>


        <script type="text/javascript">

         function toTop(){
         $("html, body").animate({ scrollTop: 0 }, 1000);
         return false;
          }
      </script>

    </body>
</html>
