<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
    <meta lang="EN">
    <meta name="author" content="Sam Castaigne">
    <meta name="author" content="Dieter Holvoet">
    <meta name="author" content="Sammy Sadati">
	<meta name="author" content="Brent De Hauwere">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="css/login.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,700,300" rel="stylesheet" type="text/css">

	<!-- Helper scripts -->
	<script src="js/Helper/CanvasHelper.js"></script>
	<script src="js/Helper/Debugger.js"></script>
	<script src="js/Helper/orientationchangeend.min.js"></script>
	<script src="js/Helper/rAF.js"></script>
	<script src="js/Helper/jquery.min.js"></script>

	<script src="js/Prototype/Degrees.js"></script>
	<script src="js/Prototype/Color.js"></script>
	<script src="js/Prototype/Number.js"></script>
	<script src="js/Prototype/Radians.js"></script>
	<script src="js/Prototype/Time.js"></script>
	<script src="js/Prototype/Viewport.js"></script>

	<!-- Scene scripts -->
	<script src="js/Scene/Planet.js"></script>
	<script src="js/Scene/Sky.js"></script>

	<!-- Main script -->
    <script src="js/login.js"></script>

	<title>Ineffable Brussels</title>
</head>

<body>
	<header>
 		<img class="logo" src="svg/logo.svg">
		<canvas id="page-header-canvas"></canvas>
	</header>
	
	<section class="main-content">
		<article class="tabs">

		<section id="tab1">
			<h2 id="title-tab1" class="selected-tab"><a href="#tab1" >sign in</a></h2>
			<h2 id="title-tab2"><a href="#tab2" >sign up</a></h2>
			<form action="/Login" method="post">
				<input type="text" placeholder="email" name="email"><br>
				<input type="text" placeholder="password" name="password">
				<button class="submit-button login-button">Log in</button>
			</form>
		</section>
	
		<section id="tab2">
			<form action="/Register" method="post">
				<input type="text" placeholder="first name" name="first-name"><br>
				<input type="text" placeholder="last name" name="first-name"><br>
				<input type="text" placeholder="email address" name="first-name"><br>
				<input type="text" placeholder="password" name="first-name"><br>
				<input type="text" placeholder="repeat password" name="password">
				<button class="submit-button register-button">Register</button>
			</form>
		</section>
		
		</article>
		
	</section>
</body>
</html>

