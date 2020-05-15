<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<style class="text/css">
		.animateuse{
			animation: leelaanimate 0.5s infinite;
		}
@keyframes leelaanimate{
			0% { color: red },
			10% { color: yellow },
			20%{ color: blue }
			40% {color: green },
			50% { color: pink }
			60% { color: orange },
			80% {  color: black },
			100% {  color: brown }
		}
</style>
</head>
<body>
	<div class="container">
		<br>
		<h1 class=" text-center text-success text-uppercase animateuse text-center text-primary"> Welcome to Quiz World </h1><br>
		<div class="row">
			<div class="col-lg-6">
				<div class="card">
				<h2 class="text-center card-header">Login form</h2>
			<form action="validation.php" method="post">
					<div class="form-group"> 
					<label>username</label>
					<input type="text" name="user" class="form-control">
					</div>
				<div class="form-group">
					<label> Password</label>
					<input type="Password" name="password" class="form-control">
				</div>
				<br>
				<button type="submit" class="btn btn-success m-auto d-block"> Login</button>
				<br>
			</form>
		</div>
		</div>

			<div class="col-lg-6">
				<div class="card">
				<h2 class="text-center card-header">Signin form</h2>
			<form action="registration.php" method="post">
					<div class="form-group"> 
					<label>username</label>
					<input type="text" name="user" class="form-control">
					</div>
				<div class="form-group">
					<label> Password</label>
					<input type="Password" name="password" class="form-control">
				</div>
				<br>
				<button type="submit" class="btn btn-success m-auto d-block"> Sign in</button>
				<br>
			</form>
		</div>
		</div>
		

	</div>
</div>
</body>
</html>