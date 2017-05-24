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
        		<h1>BMR CALCULATOR</h1>
          </div>
        </div>

        <div class="row">
            <div class="sigmano col-lg-12 col-md-12">

                <form name="bmiForm">
                <div class="col-md-12">
               		<fieldset class="form-group">
                        <label for="name">Your Weight (Kg.)</label>
                      <center>
                        <input type="text" id="weight" class="form-control textbox">
                      </center>
                  	</fieldset>
                    <fieldset class="form-group">
                          <label for="name">Your Height (cm.)</label>
                        <center>
                          <input type="text" id="height" class="form-control textbox">
                        </center>
                    	</fieldset>
                      <fieldset class="form-group">
                            <label for="name">Age</label>
                          <center>
                            <input type="text" id="age" class="form-control textbox">
                          </center>
                      	</fieldset>
                        <fieldset class="form-group">
                              <label for="name">Sex</label>
                            <center>
                              <select style="width:50%;" id="sex">
                              <option value="ชาย">ชาย</option>
                              <option value="หญิง">หญิง</option>
                              </select>
                            </center>
                        	</fieldset>
                          <fieldset class="form-group">
                                <label for="name">Activity</label>
                              <center>
                                <select style="width:50%;" id="activity">
                                <option value="1.2">นั่งทำงานอยู่กับที่ และไม่ได้ออกกำลังกายเลย</option>
                                <option value="1.375">ออกกำลังกายหรือเล่นกีฬาเล็กน้อย สัปดาห์ละ 1-3 วัน</option>
                                <option value="1.55">ออกกำลังกายหรือเล่นกีฬาปานกลาง สัปดาห์ละ 3-5 วัน </option>
                                <option value="1.725">ออกกำลังกายหรือเล่นกีฬาอย่างหนัก สัปดาห์ละ 6-7 วัน </option>
                                <option value="1.9">ออกกำลังกายหรือเล่นกีฬาอย่างหนักเป็นประจำทุกวันเช้าเย็น</option>
                                </select>
                              </center>
                            </fieldset>
                      <input type="button" class="btn btn-md" value="Calculate" onClick="cal()">
                      <fieldset class="form-group">
                            <label for="name">Calories/Day</label>
                          <center>
                            <input type="text" class="form-control textbox result" id="result" name="bmr"  >
                          </center>
                      	</fieldset>
                        <fieldset class="form-group">
                              <label for="name">Water/Day(ml.)</label>
                            <center>
                              <input type="text" class="form-control textbox result" id="water" name="bmr"  >
                            </center>
                        	</fieldset>



                  	</div>


                </div>
            	</form>

            </div>




	</div>




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
        function cal(){
  	 var weight = document.getElementById("weight").value;
  	 var height = document.getElementById("height").value;
  	 var age = document.getElementById("age").value;
     var activity = document.getElementById("activity").value;
  	 var sex = document.getElementById("sex").value;
  	 var intweight = parseInt(weight);
  	 var intheight = parseInt(height);
  	 var intage = parseInt(age);
     var intactivity = parseFloat(activity);

  	 if(weight ==""){
        alert('กรุณากรอกน้ำหนัก');
  	 } else if(height ==""){
  	 	alert('กรุณากรอกส่วนสูง');
  	 }else if(age == ""){
        alert('กรุณากรอกอายุ');
  	 }else{
       if(sex=="ชาย"){
  	   	  var BMR = 66+(13.7*intweight)+(5*intheight)-(6.8*intage);
          var ans = (intactivity*BMR);
          var cell = Math.ceil(ans);
          document.getElementById("result").value = cell;

  	   }else if(sex=="หญิง"){
          var BMR = 665+(9.6*intweight)+(1.8*intheight)-(4.7*intage);
          var ans = (intactivity*BMR);
          var cell = Math.ceil(ans);
          document.getElementById("result").value = cell;


  	   }
  	 }
     var num=(weight*2.2*30)/2;
     document.getElementById("water").value = num;

  }
        </script>

</body>
</html>
