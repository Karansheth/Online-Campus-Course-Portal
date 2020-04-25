<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/datepicker3.css" rel="stylesheet">
        <link href="css/styles.css" rel="stylesheet">
    <style>
    .nirmalogo {
    width: 23px;
    height: 30px;
    margin: -3 0 10px 0;
    }


    </style>
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header" align = "right">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>

                    </button>
                    <a class="navbar-brand" href="http://nirmauni.ac.in/">
                      <img src="images.jpg" class="img-responsive nirmalogo">
                    </a>

                    <a class="navbar-brand" href="home.php"><span>Online Course Portal</span></a>



                        <ul style="float: right; margin-right: 40px;" class="nav navbar-nav">
                          <li><a href="aboutus.php">About us</a></li>
                          <li><a href="#">Analysis</a></li>
                          <li><a href="#">Resources</a></li>
                          <li><a href="feedback.php">Feedback</a></li>
                          <li><a href="#">Links</a></li>
                          <li><a href="#">Help Videos</a></li>
                          <li ><a href="http://bit.ly/NPTELLIVE" target="_blank">Live Sessions</a></li>
                        </ul>

                    <ul class="user-menu">
                        <li class="dropdown pull-right">

                            <a style="position: fixed; right: 9px; top: 14px;" href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> User <span  class="caret"></span></a>

                            <ul style="position: fixed; right: 3  px; top: 40px;" class="dropdown-menu" role="menu">
                                <li><a href="facultyprofile.php"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Profile</a></li>
                                
                                <li><a href="facultysignin.php" ><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg>Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>

            </div><!-- /.container-fluid -->

        </nav>

























        <script src="js/jquery-1.11.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/chart.min.js"></script>
        <script src="js/chart-data.js"></script>
        <script src="js/easypiechart.js"></script>
        <script src="js/easypiechart-data.js"></script>
        <script src="js/bootstrap-datepicker.js"></script>
        <script>
            $('#calendar').datepicker({
            });

            !function ($) {
                $(document).on("click", "ul.nav li.parent > a > span.icon", function () {
                    $(this).find('em:first').toggleClass("glyphicon-minus");


                $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
            }(window.jQuery);

            $(window).on('resize', function () {
                if ($(window).width() > 768)
                    $('#sidebar-collapse').collapse('show')
            })
            $(window).on('resize', function () {
                if ($(window).width() <= 767)
                    $('#sidebar-collapse').collapse('hide')
            })
        </script>
    </body>
</html>
