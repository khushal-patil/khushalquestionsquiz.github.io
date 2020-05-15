<?php

session_start();
if(!isset($_SESSION['username'])){
	header('location:login.php');
}

$con = mysqli_connect('localhost','root');
mysqli_select_db($con, 'quizdbase');

?>

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

<style type="text/css">
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
		<br><h1 class=" text-center text-success text-uppercase animateuse text-center text-primary"> Welcome to My Quiz</h1><br>
		<h2 class="text-center text-colour-green"> welcome <?php echo $_SESSION['username']; ?></h2><br>
<div class=" col-xl-8 col-lg-8 col-md-8 col-sm-8 m-auto d-block">	
		<div class="card">
			<h3 class="text-center card-header">welcome <?php echo $_SESSION['username']; ?>, you have to select only one out of 4. Best of Luck :)</h3>



		</div><br>
		<form action="check.php" method="post">

	<?php

	for ($i=1; $i <11 ; $i++) { 
	
	$q = " select * from questions where qid = $i";
	$query = mysqli_query($con, $q);

	while ($rows = mysqli_fetch_array($query) ) {
		?>

		<div class="card">
			<h4 class="card-header"> <?php echo $rows['question']    ?></h4>
	

			<?php
			$q = " select * from answers where ans_id = $i";
			$query = mysqli_query($con, $q);

			while ($rows = mysqli_fetch_array($query) ) {
			?>



			<div class="card-body">
				<input type="radio" name="quizcheck[<?php echo $rows['ans_id']; ?>]" value="<?php echo $rows['aid']; ?>">
				<?php echo $rows['answer']; ?>
			</div>



<?php

	
}
}
}



	?>

	
</form>
	</div>
</div>	
<br><br>

	


	<div class="m-auto d-block">
		<input type="submit" name="submit" value="Submit" class="btn btn-success m-auto d-block"><br><br>
	<a href="logout.php" class="btn btn-primary"> LOGOUT</a>
	</div>
<br>
	<div>
		<h5 class="text-center">@created by khushal patil</h5>
	</div>
	<br><br>


	</div>
		
</body>
</html>