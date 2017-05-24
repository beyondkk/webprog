<!DOCTYPE html>
<html lang="en">
<head>
<title>HEALTHY SITE</title>
<meta charset="utf-8">
<meta name = "format-detection" content = "telephone=no" />
<link rel="icon" href="images/favicon.ico">
<link rel="shortcut icon" href="images/favicon.ico" />
<link rel="stylesheet" href="css/stuck.css">

<link rel="stylesheet" href="css/style2.css">
<link rel="stylesheet" href="css/touchTouch.css">
<script src="js/jquery.js"></script>
<script src="js/jquery-migrate-1.1.1.js"></script>
<script src="js/script.js"></script>
<script src="js/superfish.js"></script>
<script src="js/jquery.equalheights.js"></script>
<script src="js/jquery.mobilemenu.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/tmStickUp.js"></script>
<script src="js/jquery.ui.totop.js"></script>
<script src="js/touchTouch.jquery.js"></script>
<link rel='stylesheet' type='text/css' href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,400italic'>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/ekko-lightbox.css">
<!--    <link rel="stylesheet" type="text/css" href="css/ekko-lightbox-dark.css"> -->
<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.css">
<link rel="stylesheet" href="css/style.css">
<script>
 $(document).ready(function(){

  $().UItoTop({ easingType: 'easeOutQuart' });
  $('#stuck_container').tmStickUp({});
  $('.gallery .gall_item').touchTouch();

  });
</script>
<!--[if lt IE 9]>
 <div style=' clear: both; text-align:center; position: relative;'>
   <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
     <img src="http://storage.ie6countdown.com/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
   </a>
</div>
<script src="js/html5shiv.js"></script>
<link rel="stylesheet" media="screen" href="css/ie.css">


<![endif]-->
</head>

<body>
<!--==============================
              header
=================================-->
<header>

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


<!--=====================
          Content
======================-->
<section class="content gallery pad1"><div class="ic"></div>
  <div class="container">
    <div class="row">
      <div class="grid_12">
            <div class="gall_bot">
            <div class="text1"><a href="drink.php">เครื่องดื่ม</a></div>
        </div>
      </div>
  </div>
      <?php
        include 'test.php';
        echo $ret[0];
      ?>
  </div>

</div>
</div>
</section>
<!--==============================
              footer
=================================-->

  <script>
  $(function (){
        $('#bookingForm').bookingForm({
            ownerEmail: '#'
        });
    })
    $(function() {
   $('#bookingForm input, #bookingForm textarea').placeholder();
  });

  </script>
</body>
</html>
