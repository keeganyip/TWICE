<!DOCTYPE html>
<?php session_start();?>
<html>
  <head>
    <title>Twice Schedule</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.dropotron.min.js"></script>
    <script src="js/skel.min.js"></script>
    <script src="js/skel-layers.min.js"></script>
    <script src="js/init.js"></script>
    <noscript>
      <link rel="stylesheet" href="css/skel.css" />
      <link rel="stylesheet" href="css/style.css" />
    </noscript>
    <!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
  </head>
  <body>
    <!-- Header Wrapper -->
      <div class="wrapper style1">

      <!-- Header -->
        <div id="header">
          <div class="container">

            <!-- Logo -->
              <h1><a href="index.html" id="logo">TWICEZONE</a></h1>

            <!-- Nav -->
              <nav id="nav">
                <ul>
                  <li class="active"><a href="index.html">Home</a></li>

                  <li><a href="about.html" class="Me"><span>About</span></a></li>

                  <li>
                    <a href="Members.html">Members</a>
                    <ul>
                      <li><a href="Nayeon.html">Nayeon</a></li>
                      <li><a href="Jeongyeon.html">Jeongyeon</a></li>
                      <li><a href="Momo.html">Momo</a></li>
                      <li><a href="Sana.html">Sana</a></li>
                      <li><a href="Jihyo.html">Jihyo</a></li>
                      <li><a href="Mina.html">Mina</a></li>
                      <li><a href="Dahyun.html">Dahyun</a></li>
                      <li><a href="Chaeyoung.html">Chaeyoung</a></li>
                      <li><a href="Tzuyu.html">Tzuyu</a></li>
                    </ul>
                  </li>

                  <li><a href="MV.html">Music Videos</a></li>

                  <li><a href="Shop.html">Merchandise</a></li>

                  <?php
                      if($_SESSION['Name']){
                        $Name = $_SESSION['Name'];
                        echo("<li>
                            Welcome, $Name &nbsp&nbsp&nbsp&nbsp&nbsp
                            <a href='logout.php' style='display: inline-block; color: white;'><u>Logout</u></a>
                          </li>");
                    }
                  ?>
                </ul>
              </nav>

          </div>
        </div>
      </div>

      <?php
    		if($_SESSION['Name'] == ''){

    			echo("<script type='text/javascript'>
    					alert('Your Session Has Expired, Please Login To Continue...');
    					window.location = 'login.html';</script>");

    		}
    	?>

      <!-- Main -->
  			<div id="main" class="wrapper style4">

  				<!-- Content -->
  				<div id="content" class="container">
  					<section>
  						<header class="major">
  							<h2>Twice Schedule</h2>
  							<span class="byline">Find out what Twice are up to!</span>
  						</header>
              <div id="caleandar">

              </div>
  					</section>
  				</div>
  			</div>

        <!-- Footer -->
      		<div id="footer">
      			<section class="container">
      				<header class="major">
      					<h2>Twice Socials</h2>
      					<span class="byline">Stay connected to TWICE on all channels</span>
      				</header>
      				<ul class="icons">
      					<li class="active"><a href="https://www.facebook.com/JYPETWICE/" class="fa fa-facebook"><span>Facebook</span></a></li>
      					<li><a href="https://twitter.com/JYPETWICE" class="fa fa-twitter"><span>Twitter</span></a></li>
      					<li><a href="https://channels.vlive.tv/EDBF" class="fa fa-video-camera"><span>V LIVE</span></a></li>
      					<li><a href="https://www.youtube.com/channel/UCzgxx_DM2Dcb9Y1spb9mUJA" class="fa fa-youtube"><span>Youtube</span></a></li>
      				</ul>
      				<hr />
      			</section>

      			<!-- Copyright -->
      				<div id="copyright">
      					Twice by JYP Entertainment&copy;<br><br>
      					<a href="http://jype.com"><img class="jyp" src="./images/JYP.png" alt="JYP LOGO" /></a>
      					<!--Design: <a href="http://templated.co">TEMPLATED</a> Images: <a href="http://unsplash.com">Unsplash</a> (<a href="http://unsplash.com/cc0">CC0</a>) -->
      				</div>
      		</div>

    <script type="text/javascript" src="js/calendar.js"></script>
    <script type="text/javascript" src="js/events.js"></script>
  </body>
</html>
