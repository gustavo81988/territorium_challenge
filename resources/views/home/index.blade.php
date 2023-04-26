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

            #signup-form input,
            #signup-form textarea,
            #signup-form input[type="submit"] {
            display: block;
            margin-bottom: 10px; /* Add some spacing between the elements */
            }
        </style>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	</head>
	<body class="is-preload">

		<!-- Header -->
			<header id="header">
				<h1>A once in a lifetime Concert</h1>
				<p>Cancun Jasss Music festival. More than 30 Bands!!!!<br />
				Register Below to get free access </p>
			</header>

		<!-- Signup Form -->
			<form id="signup-form" method="post" action="{{ url('/home/save') }}">
                @csrf
				<input type="email" name="email" id="email" placeholder="Email Address" />
				<input type="text" required name="name" id="name" placeholder="Name" />
				<input style="width: 600px;" required type="text"  name="about" id="about" placeholder="Tell me more about yourself" />
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
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script>
                $(document).ready(function() {
                    $('#signup-form').submit(function(event) {
                        event.preventDefault();
                        var formData = $(this).serialize();
                        console.log($(this).attr('action'));
                        $.ajax({
                            url: $(this).attr('action'),
                            type: "POST",
                            data: formData,
                            success: function(response) {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Success',
                                    text: 'Your form has been submitted successfully!'
                                });
                                $('#signup-form')[0].reset(); // Clear the form
                            },
                            error: function(xhr, status, error) {
                                var errors = xhr.responseJSON.errors;
                                var errorText = '';
                                for (var error in errors) {
                                    errorText += errors[error][0] + '\n';
                                }
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Oops...',
                                    text: errorText
                                });
                            }
                        });
                    });
                });
            </script>
	</body>
</html>