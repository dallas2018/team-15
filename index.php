<?php
session_start();

$ini = parse_ini_file('assets/php/app.ini');

$db_name = $ini['db_name'];
$db_user = $ini['db_user'];
$db_pass = $ini['db_pass'];

$dob = "";
$f_name = "";
$l_name = "";
$social = "";

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
// $sqlStatement = $conn->prepare($resumeQuery);
// $sqlStatement->execute();
// $row = $sqlStatement->fetch(PDO::FETCH_ASSOC);
//
if(!$conn) {
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

	<!-- Load materializecss -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="src/css/main.css" rel="stylesheet">

    <!-- Load fav and touch icons -->
    <link rel="shortcut icon" href="assets/favicon.png">

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
	          <!-- <li><a href="#skills">Progress</a></li> -->
						<li><a href="#articles">Articles</a></li>
						<!-- <li><a href="#contact">Contact</a></li> -->
					</ul>
				</div>
			</div><!-- .container -->
		</nav>
	</header>
	<!-- Navigation end -->



  <!-- q1 LANGUAGE-->
	<section id="apply" class="pfblock pfblock-gray formAll" >
		<div class="container">
			<div class="row">

				<div class="col s12 m12 l6">
              <!-- <div class="card"> -->
                <!-- <div class="card-image">
                  <img src="assets/img/021-chat.png">
                </div> -->
                <span class="icon major style1 fa-comments"></span>
							</div>
						<!-- </div> -->

				<!-- area -->
          <div class="input-field col l6 m6 s12">
						<form action="#">
							<label for="sport"><div class="question1">Hi, what language are you most comfortable with?</label></div>
					     <p>
					       <label>
					         <input id="myInput" name="group1" type="radio" onclick="location.href='#apply2';" checked autofocus="autofocus"/>
					         <span><div class="question">English</span></div>
					       </label>
					     </p>
					     <p>
					       <label>
					         <input id="myInput"name="group1" type="radio" onclick="location.href='#apply2';"/>
					         <span><div class="choice">Español</span></div>
					       </label>
					     </p>
					   </form>
          </div>

					<!--Progress Bar -->
					<div class="progress">
					  <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
					</div>

			</div><!-- .row -->
		</div><!-- .container -->
	</section>
	<!-- q1 end -->


	<!-- q2 FIRST NAME-->
	<section id="apply2" class="pfblock pfblock-gray formAll" >
		<div class="container">
			<div class="row">

				<div class="col s12 m12 l6">
              <!-- <div class="card">
                <div class="card-image">
                  <img src="assets/img/content.jpg">
                </div>
							</div> -->
				<span class="icon major style1 fa-user"></span>
							</div>
						</div>

				<!-- area -->
          <div class="input-field col l6 m6 s12">
						<i class="material-icons prefix">panorama_fish_eye</i>
						<input  type="text" class="validate" checked autofocus="autofocus"
						onKeyDown="if(event.keyCode==13) location.href='#apply3';"
						<label for="sport"><div class="question">What is your first name?<div class="question"></label>
          </div>
			</div><!-- .row -->
		</div><!-- .container -->
	</section>
	<!-- q2 end -->

	<!-- q3 LAST NAME-->
	<section id="apply3" class="pfblock pfblock-gray formAll" >
		<div class="container">
			<div class="row">

				<div class="col s12 m12 l6">
              <span class="icon major style1 fa-user"></span>
							</div>
						</div>

				<!-- area -->
				<div class="input-field col l6 m6 s12">
					<i class="material-icons prefix">panorama_fish_eye</i>
					<input  type="text" class="validate"
					checked autofocus="autofocus"
					onKeyDown="if(event.keyCode==13) location.href='#apply4';"
					<label for="sport"><div class="question">What is your last name?</label></div>
				</div>

			</div><!-- .row -->
		</div><!-- .container -->
	</section>
	<!-- q3 end -->

	<!-- q4 BIRTHDAY-->
	<section id="apply4" class="pfblock pfblock-gray formAll" >
		<div class="container">
			<div class="row">

				<div class="col s12 m12 l6">
							<span class="icon major style1 fa-calendar"></span>
						</div>

						<!-- area -->
						<div class="input-field col l6 m6 s12">
							<i class="material-icons prefix">panorama_fish_eye</i>
							<input  type="text" class="validate"
							checked autofocus="autofocus"
							onKeyDown="if(event.keyCode==13) location.href='#apply5';"
							<label for="sport"><div class="question">What is your birthday?</label></div>
						</div>

			</div><!-- .row -->
		</div><!-- .container -->
	</section>
	<!-- q4 end -->

	<!-- q5 GENDER-->
	<section id="apply5" class="pfblock pfblock-gray formAll" >
		<div class="container">
			<div class="row">

				<div class="col s12 m12 l6">
							<span class="icon major style1 fa-calendar"></span>
							</div>

				<!-- area -->
				<div class="input-field col s12 l6 m12">
					<form action="#">
						<label for="sport"><div class="question">What's your gender?</label></div>
						 <p>
							 <label>
								 <input id="myInput" name="group1" type="radio" onclick="location.href='#apply6';" />
								 <span><div class="choice">Male</span></div>
							 </label>
						 </p>
						 <p>
							 <label>
								 <input id="myInput"name="group1" type="radio" onclick="location.href='#apply6';"/>
								 <span><div class="choice">Female</span></div>
							 </label>
						 </p>
						 <p>
							 <label>
								 <input id="myInput"name="group1" type="radio" onclick="location.href='#apply6';"/>
								 <span><div class="choice">Other</span></div>
							 </label>
						 </p>
					 </form>
  		 </div>

			</div><!-- .row -->
		</div><!-- .container -->
	</section>
	<!-- q5 end -->

	<!-- q6 SSN-->
	<section id="apply6" class="pfblock pfblock-gray formAll" >
		<div class="container">
			<div class="row">

				<div class="col s12 m12 l6">
							<span class="icon major style1 fa-calendar"></span>
						</div>

				<!-- area -->
				<div class="input-field col l6 m6 s12">
					<i class="material-icons prefix">panorama_fish_eye</i>
					<input  type="text" class="validate"
					checked autofocus="autofocus"
					onKeyDown="if(event.keyCode==13) location.href='#apply7';"
					<label for="sport">last 4 digits of your social security number?</label>
				</div>

			</div><!-- .row -->
		</div><!-- .container -->
	</section>
	<!-- q6 end -->

	<!-- q7 County-->
	<section id="apply7" class="pfblock pfblock-gray formAll" >
		<div class="container">
			<div class="row">

				<div class="col s12 m12 l6">
							<span class="icon major style1 fa-map-marker"></span>
						</div>

				<!-- area -->
					<div class="input-field col l6 m6 s12">
						<div class="input-field col s12">
    					<select>
      					<option value="" disabled selected>Brazoria</option>
      					<option value="1">Chambers</option>
      					<option value="2">Fort Bend</option>
      					<option value="3">Galveston</option>
								<option value="4">Harris</option>
								<option value="5">Liberty</option>
								<option value="6">Montgomery</option>
								<option value="7">Waller</option>
								<option value="8">Other</option>
    					</select>
    					<label>What county do you currently live in?</label>
  					</div>

					</div>

			</div><!-- .row -->
		</div><!-- .container -->
	</section>
	<!-- q7 end -->

	<!-- q8 Top 3 Needs-->
	<section id="apply" class="pfblock pfblock-gray formAll" >
		<div class="container">
			<div class="row">

				<div class="col s12 m12 l6">
							<span class="icon major style1 fa-exclamation"></span>
						</div>

				<!-- area -->
					<div class="input-field col l6 m6 s12">
						<i class="material-icons prefix">panorama_fish_eye</i>
						<input  type="text" class="validate">
						<label for="sport">Please select your top three areas of need, in order.</label>
					</div>

			</div><!-- .row -->
		</div><!-- .container -->
	</section>
	<!-- q8 end -->

	<!-- q9 Availability-->
	<section id="apply" class="pfblock pfblock-gray formAll" >
		<div class="container">
			<div class="row">

				<div class="col s12 m12 l6">
							<span class="icon major style1 fa-calendar"></span>
						</div>

				<!-- area -->
					<div class="input-field col s12">
						<select>
								<option value="" disabled selected>Days</option>
								<option value="1">Evening</option>
								<option value="2">Weekends</option>
								<option value="3">Any time</option>
						</select>
						<label>What is your availability for these activities? (Select one)/label>
					</div>

			</div><!-- .row -->
		</div><!-- .container -->
	</section>
	<!-- q9 end -->

	<!-- q10 Commitment slider-->
	<section id="apply" class="pfblock pfblock-gray formAll" >
		<div class="container">
			<div class="row">

				<div class="col s12 m12 l6">
							<span class="icon major style1 fa-clock-o"></span>
						</div>

				<!-- area -->
					<div class="input-field col l6 m6 s12">
						<i class="material-icons prefix">panorama_fish_eye</i>
						<input  type="text" class="validate">
						<form action="#">
							<p class="range-field">
								<input type="range" id="test5" min="2" max="52" />
							</p>
						</form>
						<label for="sport">How many weeks are you willing to invest in a program?</label>
					</div>

			</div><!-- .row -->
		</div><!-- .container -->
	</section>
	<!-- q10 end -->

	<!-- q11 Transportation Method-->
	<section id="apply" class="pfblock pfblock-gray formAll" >
		<div class="container">
			<div class="row">

				<div class="col s12 m12 l6">
							<span class="icon major style1 fa-calendar"></span>
						</div>

				<!-- area -->
					<div class="input-field col s12">
						<select>
								<option value="" disabled selected>Own/lease vehicle</option>
								<option value="1">Borrow vehicle</option>
								<option value="2">Public transit</option>
								<option value="3">Own/lease vehicle but it's not operable/not reliable</option>
						</select>
						<label>How do you get from place to place? (Select one)>
					</div>

			</div><!-- .row -->
		</div><!-- .container -->
	</section>
		<!-- q11 end -->

		<!-- q12 ID follow-up question, only displays if "yes" to above-->
		<section id="apply" class="pfblock pfblock-gray formAll" >
			<div class="container">
				<div class="row">

					<div class="col s12 m12 l6">
								<span class="icon major style1 fa-calendar"></span>
							</div>

					<!-- area -->
						<div class="input-field col s12 l6 m12">
								<form action="#">
									<label for="sport"><div class="question">Do you have a valid ID? Don’t worry - If not, we can help with that!</label></div>
									 <p>
										 <label>
											 <input id="myInput" name="group1" type="radio" onclick="location.href='#apply6';" />
											 <span><div class="choice">Yes</span></div>
										 </label>
									 </p>
									 <p>
										 <label>
											 <input id="myInput"name="group1" type="radio" onclick="location.href='#apply6';"/>
											 <span><div class="choice">No</span></div>
										 </label>
									 </p>
								 </form>
						 </div>
				</div><!-- .row -->
			</div><!-- .container -->
		</section>
			<!-- q12 end -->

			<!-- q13 ID follow-up question, only displays if "yes" to above-->
			<section id="apply" class="pfblock pfblock-gray formAll" >
				<div class="container">
					<div class="row">

						<div class="col s12 m12 l6">
									<span class="icon major style1 fa-calendar"></span>
								</div>

						<!-- area -->
							<div class="input-field col s12">
								<select>
										<option value="" disabled selected>Texas-issued Driver's License</option>
										<option value="1">Other State's Driver's License</option>
										<option value="2">Texas Issued ID Card</option>
										<option value="3">Other State's ID Card</option>
										<option value="4">Passport</option>
								</select>
								<label>Select one of the following>
							</div>

					</div><!-- .row -->
				</div><!-- .container -->
			</section>
				<!-- q13 end -->

				<!-- q14 ID follow-up question, only displays if 0 or 1 to above-->
				<section id="apply" class="pfblock pfblock-gray formAll" >
					<div class="container">
						<div class="row">

							<div class="col s12 m12 l6">
										<span class="icon major style1 fa-calendar"></span>
									</div>

							<!-- area -->
							<div class="input-field col s12 l6 m12">
									<form action="#">
										<label for="sport"><div class="question">What type of driver's license do you have?</label></div>
										 <p>
											 <label>
												 <input id="myInput" name="group1" type="radio" onclick="location.href='#apply6';" />
												 <span><div class="choice">A</span></div>
											 </label>
										 </p>
										 <p>
											 <label>
												 <input id="myInput"name="group1" type="radio" onclick="location.href='#apply6';"/>
												 <span><div class="choice">B</span></div>
											 </label>
										 </p>
										 <p>
											 <label>
												 <input id="myInput"name="group1" type="radio" onclick="location.href='#apply6';"/>
												 <span><div class="choice">C</span></div>
											 </label>
										 </p>
										 <p>
											 <label>
												 <input id="myInput"name="group1" type="radio" onclick="location.href='#apply6';"/>
												 <span><div class="choice">M</span></div>
											 </label>
										 </p>
									 </form>
							 </div>

						</div><!-- .row -->
					</div><!-- .container -->
				</section>
					<!-- q14 end -->

<!-- Some sort of Checkpoint would be good here!>

<!-- q15 Living Arrangement-->
<section id="apply" class="pfblock pfblock-gray formAll" >
	<div class="container">
		<div class="row">

			<div class="col s12 m12 l6">
						<span class="icon major style1 fa-calendar"></span>
					</div>

			<!-- area -->
				<div class="input-field col s12">
					<label>What is your current living arrangement?>
					<select>
							<option value="" disabled selected>Homeowner</option>
							<option value="1">Renter - Unsubsized (not receiving public assistance)</option>
							<option value="2">Renter - Subsidized (receiving public assistance to cover your rent)</option>
							<option value="3">Living with a friend/dfamily</option>
							<option value="4">Staying in a shelter</option>
							<option value="5">Homeless</option>
					</select>

				</div>

		</div><!-- .row -->
	</div><!-- .container -->
</section>
	<!-- q15 end -->

	<!-- q16 Hispanic/Latino Question -->
	<section id="apply" class="pfblock pfblock-gray formAll" >
		<div class="container">
			<div class="row">

				<div class="col s12 m12 l6">
							<span class="icon major style1 fa-calendar"></span>
						</div>

				<!-- area -->
				<div class="input-field col s12 l6 m12">
						<form action="#">
							<label for="sport"><div class="question">Do you consider yourself Hispanic or Latino?</label></div>
							 <p>
								 <label>
									 <input id="myInput" name="group1" type="radio" onclick="location.href='#apply6';" />
									 <span><div class="choice">Yes</span></div>
								 </label>
							 </p>
							 <p>
								 <label>
									 <input id="myInput"name="group1" type="radio" onclick="location.href='#apply6';"/>
									 <span><div class="choice">No</span></div>
								 </label>
							 </p>


						 </form>
				 </div>

			</div><!-- .row -->
		</div><!-- .container -->
	</section>
		<!-- q16 end -->




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
                    <img src="assets/img/content.jpg" alt="client-1" width="350" />
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

	<!-- materialize  -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<!-- particles css -->
	<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
	<script>
	particlesJS.load('particles-js', 'assets/json/particles.json', function() {
	console.log('callback - particles.js config loaded');});
	</script>


</body>
</html>
