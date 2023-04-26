<!DOCTYPE HTML>
<html>
	<head>
		<title>Eventually by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="{{asset('assets/css/main.css')}}" />
        <style>
            body {
                background-image: url({{asset('assets/images/concert.webp')}});
                background-repeat: no-repeat; /* Prevents the image from repeating */
                background-size: cover; /* Scales the image to cover the entire element */
            }
        </style>
	</head>
	<body class="is-preload">

		<!-- Header -->
			<header id="header">
				<h1>A one in a lifetime Concert</h1>
				<p>Cancun Jasss Music festival. More than 30 Bands!!!!<br />
				Register Below to get free access </p>
			</header>

		<!-- Signup Form -->
			<form id="signup-form" method="post" action="#">
				<input type="email" name="email" id="email" placeholder="Email Address" />
				<input type="submit" value="Sign Up" />
			</form>

		<!-- Footer -->
			<footer id="footer">
				<ul class="icons">
					<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
					<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
					<li><a href="#" class="icon brands fa-github"><span class="label">GitHub</span></a></li>
					<li><a href="#" class="icon fa-envelope"><span class="label">Email</span></a></li>
				</ul>
				<ul class="copyright">
					<li>&copy; Territorium.</li>
				</ul>
			</footer>

		<!-- Scripts -->
			<script src="{{asset('assets/js/main.js')}}"></script>
	</body>
</html>