<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel='stylesheet' type='text/css' href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,400italic'>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/ekko-lightbox.css">
<!--    <link rel="stylesheet" type="text/css" href="css/ekko-lightbox-dark.css"> -->
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
<!--
Sigma Template
http://www.templatemo.com/tm-479-sigma
-->
    <title>Healthy Site</title>
</head>

<body>

<header id="top">

	<div class="container-fluid">

        <div class="row">

            <div class="col-lg-4 col-md-12 site-title">
                <a href="index.php" class="nav-link"><h1 id="head-link">HEALTY SITE</h1></a>
                <h2>SITE &nbsp;&nbsp;&nbsp;FOR &nbsp;&nbsp;&nbsp;YOUR &nbsp;&nbsp;&nbsp;HEALTH</h2>


            </div>


        </div>

        <div class="row">
            <div class="col-md-12">
            	<hr class="sigma-hr">
            </div>
        </div>

    </div>

</header>

<section id="home">

	<div class="container-fluid">

        <div class="row">
        	<div class="sigma-content col-lg-4 col-md-6 sigma-bg-lightgray text-center">
            	<span class="sigma-icon fa fa-power-off"></span>
              <center>
              <a href="hfood.php"><img class="home-img" src="images/food.jpg" alt=""></a>
              </center>
            	<h2><br>Healthy Food</h2>
            </div>
            <div class="sigma-content col-lg-4 col-md-6 sigma-bg-gray text-center">
            	<span class="sigma-icon fa fa-bolt"></span>
            	<h2>BMI Calculate</h2><br>
            	<a href="bmi.php"><img class="home-img" src="images/bmi.png" alt=""></a>
            </div>
            <div class="sigma-content col-lg-4 col-md-6 sigma-bg-darkgray text-center">
            	<span class="sigma-icon fa fa-thumbs-up"></span>
              <center>
                <a href="bmr.php"><img class="home-img" src="images/bmr.jpg" alt=""></a>
              </center>


              <h2><br>BMR Calculate</h2>
            </div>

        </div>

	</div>

</section>



<footer id="footer">
  <div class="container">
    <div class="row">
      <div class="grid_12">

        <div class="copyright"><span class="brand">Web Project</span> &copy; <span id="copyright-year"></span> | UBON RATCHATHANI UNIVERSITY
          <div>Website designed by Kittipong sudcha
          </div>
          <div><p>THANK Sigma Bootstrap 4 Theme

                | design: <a rel="nofollow" href="http://www.templatemo.com" target="_parent">templatemo</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>

		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
        <script src="js/ekko-lightbox.min.js"></script>
        <script src="js/jquery.singlePageNav.min.js"></script>
        <script>

            // Prevent console.log from generating errors in IE for the purposes of the demo
            if ( ! window.console ) console = { log: function(){} };

            // The actual plugin
            $('.single-page-nav').singlePageNav({
                offset: $('.single-page-nav').outerHeight(),
                filter: ':not(.external)',
                updateHash: true,
                beforeStart: function() {
                    console.log('begin scrolling');
                },
                onComplete: function() {
                    console.log('done scrolling');
                }
            });

			$(document).ready(function ($) {

				// delegate calls to data-toggle="lightbox"
				$(document).delegate('*[data-toggle="lightbox"]', 'click', function(event) {
					event.preventDefault();
					return $(this).ekkoLightbox({
						always_show_close: true
					});
				});

			});

        </script>

</body>
</html>
