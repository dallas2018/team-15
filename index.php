<?php
session_start();

$ini = parse_ini_file('assets/php/app.ini');

$db_name = $ini['db_name'];
$db_user = $ini['db_user'];
$db_pass = $ini['db_pass'];

if(isset($_POST['dob'])) {
    $dob = $_POST['dob'];
}

if(isset($_POST['f_name'])) {
    $f_name = $_POST['f_name'];
}

if(isset($_POST['l_name'])) {
    $l_name = $_POST['l_name'];
}

if(isset($_POST['social'])) {
    $social = $_POST['social'];
}


$conn = mysqli_connect("localhost", $db_user, $db_pass, $db_name);
$resumeQuery = "select * from clients where dbo='".$dbo."', f_name='".$f_name."', l_name='".$l_name."', social='".$social."';";
$sqlStatement = $conn->prepare($resumeQuery);
$sqlStatement->execute();
$row = $sqlStatement->fetch(PDO::FETCH_ASSOC);

if(!$mysqli) {
    echo "THERE WAS AN ERROR CONNECTING";
}

?>
<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>SER</title>

	<!-- CSS -->
	<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="assets/css/font-awesome.min.css" rel="stylesheet" media="screen">
	<link href="assets/css/simple-line-icons.css" rel="stylesheet" media="screen">
	<link href="assets/css/animate.css" rel="stylesheet">

	<!-- Custom styles CSS -->
	<link href="assets/css/style.css" rel="stylesheet" media="screen">

	<!-- google text fonts -->
      <link href="https://fonts.googleapis.com/css?family=Montserrat:200" rel="stylesheet">
			<script src="assets/js/modernizr.custom.js"></script>

</head>
<body>

	<!-- Home start -->

	<section  id="home" class="pfblock-image screen-height">
		<div id="particles-js">
			<div class="intro">
				<h1>SER</h1>



			</div>

			<a href="#apply">
				<div class="scroll-down">
					<span>
							<i class="fa fa-angle-down fa-2x"></i>
					</span>
				</div>
			</a>
		</div>


	</section>

	<!-- Home end -->

	<!-- Navigation start -->

	<header class="header">

		<nav class="navbar navbar-custom" role="navigation">

			<div class="container">

				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#custom-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.html">SER</a>
				</div>

				<div class="collapse navbar-collapse" id="custom-collapse">
					<ul class="nav navbar-nav navbar-right">
						<!-- <li><a href="#home">Home</a></li> -->
						<li><a href="#apply">Apply</a></li>
	          <li><a href="#skills">Progress</a></li>
						<li><a href="#articles">Articles</a></li>
						<!-- <li><a href="#contact">Contact</a></li> -->
					</ul>
				</div>

			</div><!-- .container -->

		</nav>

	</header>

	<!-- Navigation end -->

    <!-- apply start -->

	<section id="apply" class="pfblock pfblock-gray">
		<div class="container">
			<div class="row">


			</div>

			<div class="row">


				<head> <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"> <title>Registration Form (copy)</title> <style type="text/css"> html{ margin: 0; height: 100%; overflow: hidden; } iframe{ position: absolute; left:0; right:0; bottom:0; top:0; border:0; } </style> </head> <body> <iframe id="typeform-full" width="100%" height="100%" frameborder="0" src="https://jessicahuang3.typeform.com/to/IC5xYp"></iframe> <script type="text/javascript" src="https://embed.typeform.com/embed.js"></script> </body>



			</div><!-- .row -->
		</div><!-- .container -->
	</section>

	<!-- apply end -->



    <!-- skills start -->

  <section class="pfblock pfblock-gray" id="skills">

			<div class="container">

				<div class="row skills">

					<div class="row">

                        <div class="col-sm-6 col-sm-offset-3">

                            <div class="pfblock-header wow fadeInUp">
                                <h2 class="pfblock-title">Our Journey</h2>
                                <div class="pfblock-line"></div>
                                <div class="pfblock-subtitle">Together we achieve better.
                                </div>
                            </div>

                        </div>

                    </div><!-- .row -->

					<div class="col-sm-6 col-md-4 text-center">
						<span data-percent="95" class="chart easyPieChart" style="width: 140px; height: 140px; line-height: 140px;">
                            <span class="percent">95</span>
                        </span>
						<h3 class="text-center">Jobs</h3>
					</div>
					<div class="col-sm-6 col-md-4 text-center">
						<span data-percent="80" class="chart easyPieChart" style="width: 140px; height: 140px; line-height: 140px;">
                            <span class="percent">80</span>
                        </span>
						<h3 class="text-center">Java</h3>
					</div>
					<div class="col-sm-6 col-md-4 text-center">
						<span data-percent="50" class="chart easyPieChart" style="width: 140px; height: 140px; line-height: 140px;">
                            <span class="percent">50</span>
                        </span>
						<h3 class="text-center">Swift / Python</h3>
					</div>
				</div><!--End row -->

			</div>

    </section>

    <!-- skills end -->


	<!-- articles start -->

	<section id="articles" class="pfblock pfblock-gray">

		<div class="container">

            <div class="row">

				<div class="col-sm-6 col-sm-offset-3">

					<div class="pfblock-header wow fadeInUp">
						<h2 class="pfblock-title">Articles</h2>
						<div class="pfblock-line"></div>
						<div class="pfblock-subtitle">
							No one lights a lamp in order to hide it behind the door: the purpose of light is to create more light, to open people’s eyes, to reveal the marvels around.
						</div>
					</div>

				</div>

			</div><!-- .row -->

            <div class="row">

			<div id="cbp-qtrotator" class="cbp-qtrotator">
                <div class="cbp-qtcontent">
                    <img src="assets/img/hologram.jpg" alt="client-1" width="350" />
                    <blockquote>
                      <p>"Cultures, religious sects, and any word used to differentiate and divide society is seriously endangered."
												<a href="https://medium.com/@yasinehsan11/bits-and-bytes-fight-or-flight-3786842b56da" class="myPapers"><b>Read More</b></a>
											</p>
                      <footer>Bits and Bytes: Fight or Flight</footer>
                    </blockquote>
                </div>
								<div class="cbp-qtcontent">
                    <img src="assets/img/glasses.jpg" alt="client-1" width="350"/>
                    <blockquote>
                      <p>"I was looking for CEOs, professionals, teachers, students and anyone with a story."
												<a href="https://medium.com/@yasinehsan11/my-story-my-mantra-8e2ba2fe0861" class="myPapers"><b>Read More</b></a>
											</p>
                      <footer>My Story, My Mantra</footer>
                    </blockquote>
                </div>


            </div>

            </div><!-- .row -->


		</div><!-- .row -->
	</section>

	<!-- article end -->




	<!-- Footer start -->

	<footer id="footer">
		<div class="container">
			<div class="row">

				<div class="col-sm-12">

					<ul class="social-links">
						<li><a href="https://github.com/YasinEhsan" class="wow fadeInUp" data-wow-delay=".1s"><i class="fa fa-github" class="myCode"></i></a></li>
						<li><a aria-hidden="true" href="mailto:yasinehsan11@gmail.com?Subject=Visited%20Website%20--"
							 class="wow fadeInUp" data-wow-delay=".6s"><i class="fa fa-envelope"></i></a></li>
					</ul>

					<!-- <p class="heart">
                        Made with <span class="fa fa-heart fa-2x animated pulse"></span> in Nottingham
                    </p> -->
                    <p class="copyright"> © 2018 SER | <a style="text-decoration: none;" href="http://serhouston.org/" class="myV1">Previous Version</a></p>

				</div>

			</div><!-- .row -->
		</div><!-- .container -->
	</footer>

	<!-- Footer end -->

	<!-- Scroll to top -->

	<div class="scroll-up">
		<a href="#home"><i class="fa fa-angle-up"></i></a>
	</div>

    <!-- Scroll to top end-->

	<!-- Javascript files -->

	<script src="assets/js/jquery-1.11.1.min.js"></script>
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.parallax-1.1.3.js"></script>
	<script src="assets/js/imagesloaded.pkgd.js"></script>
	<script src="assets/js/jquery.sticky.js"></script>
	<script src="assets/js/smoothscroll.js"></script>
	<script src="assets/js/wow.min.js"></script>
  <script src="assets/js/jquery.easypiechart.js"></script>
  <script src="assets/js/waypoints.min.js"></script>
  <script src="assets/js/jquery.cbpQTRotator.js"></script>
	<script src="assets/js/custom.js"></script>
	<script src="assets/js/main.js"></script>

	<!-- particles css -->
	<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
	<script>
	particlesJS.load('particles-js', 'assets/json/particles.json', function() {
	console.log('callback - particles.js config loaded');});
	</script>

</body>
</html>
