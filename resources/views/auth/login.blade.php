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
		<link href="css/animate.css" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Quicksand:400,700,300" rel="stylesheet" type="text/css">

		<!-- Helper scripts -->
		<script src="js/Library/jquery.min.js"></script>

		<script src="js/Helper/CanvasHelper.js"></script>
		<script src="js/Helper/Debugger.js"></script>
		<script src="js/Helper/orientationchangeend.min.js"></script>
		<script src="js/Helper/rAF.js"></script>

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
			<svg id="skyline" version="1.1"
				 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
				 x="0px" y="0px" width="1269px" height="338px" viewBox="0 0 1269 338" style="enable-background:new 0 0 1269 338;"
				 xml:space="preserve">
			<path class="st0" d="M1239,33V18h-7V0h-8v18h-7v15h-38v11h-11v207h-15v-90h-56v8h-19v-11h-1.6l-4.4-15.2V126h-6v16.8l-1.8,15.2H1023
	v93h-9v-21h-29v-11h5v-26h-17V83h-11v-9h-37v46h-4v110h-16v-7h4V79h-23v2.1L856.8,58H827v77h-12l-18,13h-7v56h-9v21h4v5h-15v21h-16
	v-54.8l-17.5-29l-17.5,29v4.8h-18v-4.8l-17.5-29l-17.5,29v4.8h-39v50h-14v-74h-44v-6h-9v-7h-28v7h-8v6h-43v74h-15.5l-11.4-42
	c5.8-3,8-10.1,5.1-15.8c-1.2-2.4-3.2-4.2-5.6-5.3l3.6-23.2c7.5-1.9,12-9.5,10.2-17c-1.9-7.5-9.5-12-17-10.2c-1.6,0.4-3,1-4.4,1.9
	l-27.3-17.2c2.4-6.9-1.2-14.5-8.1-16.9s-14.5,1.2-16.9,8.1c-1,2.8-1,5.9,0,8.8l-27.4,17.3c-6.4-4.4-15.1-2.7-19.5,3.7
	c-4.4,6.4-2.7,15.1,3.7,19.5c1.5,1,3.1,1.7,4.8,2.1l3.6,22.8c-6.1,2.2-9.2,8.9-7.1,14.9c1,2.7,2.9,5,5.4,6.3l-0.1,0.1L345.6,251H313
	v-55.2l-17.5-29l-17.5,29v5.2h-18v-5.2l-17.5-29l-17.5,29v5.2h-40v50h-17.5l-0.2-30H123v-36h-6v-5l-12.5-18.9L92,180v5h-6v-5
	l-11-18.9L64,180v5H52v-25h-9V93H0v245h1269V33H1239z M368.6,160.4L368.6,160.4l22.6,16.1l-20.7,13.3c-2.1-1.9-4.9-3-7.8-3h-0.1
	l-2.9-21.8C363.1,164.6,366.3,163,368.6,160.4z M370.8,157.4L370.8,157.4l23.7,12.6c0,1.3,0.3,2.6,0.8,3.8l-0.6,0.4L370.8,157.4z
	 M393.2,179c-0.4,0.8-0.8,1.6-1.1,2.4l-14.3,7.5L393.2,179z M358.6,214.5l0.5,0.1l-0.6,4.1l-1-0.4L358.6,214.5z M357.2,219.5
	l1.1,0.5l-0.7,4.8l-1.8-0.8L357.2,219.5z M355.5,225.3l1.9,0.8l-0.7,4.7l-2.5-1.1L355.5,225.3z M353.8,251h-5.6l0.6-2.5l4.9,2.2V251
	z M354,249.2l-4.8-2.1l1.3-4.4l4.2,1.8L354,249.2z M354.9,243.1l-4-1.8l1.3-4.6l3.4,1.5L354.9,243.1z M355.8,236.9l-3.3-1.4l1.3-4.4
	l2.7,1.2L355.8,236.9z M387,246v5h-30.5l6.4-40.7c3.1-0.1,6-1.4,8.1-3.6l23.6,18.9c-3.2,5.4-2.1,12.3,2.5,16.5L387,246z M397,222.6
	l-23.8-19c0.8-1.6,1.2-3.4,1.2-5.1c0-0.9-0.1-1.7-0.3-2.6l0,0l17-9c0.1,6,3.7,11.4,9.3,13.8l-2.8,21.4
	C397.4,222.3,397.1,222.4,397,222.6z M403,219.2c-1.1,0.3-2.2,0.7-3.2,1.2l0.5-4.5l2.8,1.3L403,219.2L403,219.2z M403,215.8
	l-2.5-1.2l0.3-3.7l2.1,1L403,215.8L403,215.8z M403,210.4l-1.8-0.9l0.3-3.7l1.5,0.7V210.4z M401.9,204.4l0.3-3
	c0.3,0,0.6,0.1,0.9,0.2v3.4L401.9,204.4z M394.9,166.2l-23-12.3c0.9-4.2-0.2-8.5-2.9-11.8l26.3-16.4c2,2.9,5.1,4.8,8.6,5.4l0.5,27.1
	C399.9,158.8,396.3,161.9,394.9,166.2L394.9,166.2z M456.9,229.7l-2.5,1.1l-0.7-4.7l1.9-0.8L456.9,229.7z M455.3,224l-1.8,0.8
	l-0.7-4.8l1.2-0.5L455.3,224z M453.6,218.1l-1,0.4l-0.6-4.1l0.5-0.1L453.6,218.1z M452.7,165l-2.9,21.8h-1c-2.9,0-5.7,1.1-7.9,3.1
	l-20.2-13l22.9-16.2C446,163.2,449.2,164.8,452.7,165z M417.3,174.6l-0.5-0.3c0.6-1.3,0.9-2.7,1-4.1l23.6-12.7v0.1L417.3,174.6z
	 M420,180.2L420,180.2l13.4,8.6l-12.7-6.7C420.5,181.4,420.3,180.8,420,180.2L420,180.2L420,180.2L420,180.2z M421.4,187.5l16,8.4
	c-0.2,0.8-0.3,1.7-0.3,2.5c0,2.2,0.6,4.4,1.8,6.3l-23.1,18.5c-0.3-0.3-0.5-0.5-0.8-0.8l-2.8-21.7
	C417.5,198.4,421.1,193.3,421.4,187.5z M408.4,131c3.4-0.6,6.5-2.6,8.5-5.4l26.2,16.4c-2.8,3.3-4,7.8-3,12.1l-22.8,12.2
	c-1.2-4.2-4.7-7.3-9-8.2L408.4,131z M410.6,205.9l0.5,3.7l-2.1,0.9v-3.9L410.6,205.9z M409,205.2v-3.5c0.3-0.1,0.7-0.2,1-0.2
	l0.4,3.1L409,205.2z M411.2,211l0.5,3.7l-2.7,1.2V212L411.2,211z M409,219.3v-1.9l2.9-1.3l0.6,4.5C411.4,220,410.2,219.6,409,219.3z
	 M425,251v-5l-10.2-4c2.8-2.5,4.4-6.1,4.5-9.8c0-2.1-0.5-4.1-1.4-6l23.5-18.8c1.9,1.6,4.3,2.6,6.8,2.8l6.4,40.8L425,251L425,251z
	 M454.6,232.2l2.7-1.2l1.3,4.5l-3.3,1.4L454.6,232.2z M455.5,238.3l3.4-1.5l1.3,4.5l-4,1.8L455.5,238.3z M456.4,244.5l4.2-1.8
	l1.3,4.4l-4.8,2L456.4,244.5z M457.4,251v-0.3l5-2.1l0.5,2.4L457.4,251L457.4,251z M522,251h-22v-28.9c0-6.1,4.9-11,11-11
	s11,4.9,11,11V251z M557,222.1V251h-22v-28.9c-0.1-6.1,4.8-11,10.9-11.1c0,0,0,0,0,0h0.1C552.1,211,557,215.9,557,222.1L557,222.1z
	 M595,222.1V251h-22v-28.9c-0.1-6.1,4.8-11,10.9-11.1c0,0,0,0,0,0h0.1C590.1,211,595,215.9,595,222.1L595,222.1z M1097,251h-19v-73
	h19V251z" />
</svg>

		</header>

		<section class="main-content animated fadeInUpBig">
			<div id="login-register">
				<article class="tabs">
					<section id="tab1">
						<h2 id="title-tab1" class="selected-tab"><a href="#tab1">sign in</a></h2>
						<h2 id="title-tab2"><a href="#tab2">sign up</a></h2>
						<form action="{{ url('/login') }}" method="post" id="form-login">
							{!! csrf_field() !!}
							<input type="email" placeholder="email" name="email" value="{{ old('email') }}"><br>
							<input type="password" placeholder="password" name="password">
						</form>
					</section>

					<section id="tab2">
						<form action="{{ url('/register') }}" method="post" id="form-register">
							{!! csrf_field() !!}
							<input type="text" placeholder="first name" name="fname" value="{{ old('fname') }}"><br>
							<input type="text" placeholder="last name" name="lname" value="{{ old('lname') }}"><br>
							<input type="email" placeholder="email address" name="email" value="{{ old('email') }}"><br>
							<input type="password" placeholder="password" name="password"><br>
							<input type="password" placeholder="confirm password" name="password_confirmation">
						</form>
					</section>
				</article>

				<a href="#" id="a-forgot-password">Wachtwoord vergeten?</a>

				<input type="submit" class="submit-button login-button" value="Log in" form="form-login">
				<input type="submit" class="submit-button register-button" value="Register" form="form-register">
			</div>

			<div id="forgot-password">
				<section>
					<form action="{{ url('/password/email') }}" method="post" id="form-forgot-password">
						{!! csrf_field() !!}
						<input type="email" placeholder="e-mail" name="email" id="email-forgot-password" value="{{ old('email') }}"><br>
						<input type="submit" class="submit-button register-button" value="Verzenden" id="submit-forgot-password">
					</form>
				</section>
			</div>
		</section>
	</body>
</html>

