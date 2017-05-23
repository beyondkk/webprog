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
        	<div class="sigma-content col-lg-12 col-md-12 sigma-bg-lightgray text-center">

        <section id="bmicalculate">

	<div class="container-fluid">

        <div class="row sigma-section-header">
        	<div class="col-md-offset-2 col-lg-offset-3 col-lg-6 col-md-8 col-sm-12 text-center">
        		<h1>BMI CALCULATOR</h1>
          </div>
        </div>

        <div class="row">
            <div class="sigmano col-lg-12 col-md-12">

                <form name="bmiForm">
                <div class="col-md-12">
               		<fieldset class="form-group">
                        <label for="name">Your Weight (Kg.)</label>
                      <center>
                        <input type="text" id="weight" class="form-control textbox" id="name" >
                      </center>
                  	</fieldset>
                    <fieldset class="form-group">
                          <label for="name">Your Height (cm.)</label>
                        <center>
                          <input type="text" id="height" class="form-control textbox" id="height" >
                        </center>
                    	</fieldset>
                      <input type="button" class="btn btn-md" value="Calculate" onClick="calculate()">
                      <fieldset class="form-group">
                            <label for="name">Your BMI</label>
                          <center>
                            <input type="text" class="form-control textbox" id="bmi" name="bmi"  >
                          </center>
                      	</fieldset>
                        <fieldset class="form-group">
                              <label for="name">This Mean</label>
                            <center>
                              <input type="text" class="form-control textbox" name="meaning" >
                            </center>
                        	</fieldset>


                  	</div>


                </div>
            	</form>

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
    <script language="JavaScript">
        <!--
        function calculate() {
            var weight = document.bmiForm.weight.value
            var height = document.bmiForm.height.value
                if(weight > 0 && height > 0){
                  var finalBmi = weight/(height/100*height/100)
                  document.bmiForm.bmi.value = finalBmi
                if(finalBmi < 18.5){
                  document.bmiForm.meaning.value = "That you are too thin."
                }if(finalBmi > 18.5 && finalBmi < 25){
            document.bmiForm.meaning.value = "That you are healthy."
            }
            if(finalBmi > 25){
            document.bmiForm.meaning.value = "That you have overweight."

            }
            }
            else{
            alert("Please Fill in everything correctly")
            }
        }
        </script>

</body>
</html>
