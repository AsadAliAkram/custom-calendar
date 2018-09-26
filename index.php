<inc
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<!-- Start Header Area -->
	<div class="head">
		<h1>Find day from date</h1>
	</div>
	<!-- End Header Area -->

	<div class="container">

		<!-- Start Form Area -->
		<div class="form">
			<form action="display.php" method="post">
				<label>Enter Day</label><br>
				<input required type="number" name="day" min="1" max="22"><br><br>
				<label>Enter Month</label><br>
				<input required type="number" name="month" min="1" max="13"><br><br>
				<label>Enter Year</label><br>
				<input required type="number" name="year" min="1"><br><br>
				<input class="submit-button" type="submit" name="submit">
			</form>
		</div>
		<!-- End Form Area -->

	</div>
</body>
</html>