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

		<!-- Start Form Area -->
		<div class="form">
			<form action="display.php" method="post">
				<span>Enter Day&nbsp&nbsp&nbsp&nbsp</span>
				<input required type="number" name="day" min="1" max="22"><br><br>
				<span>Enter Month</span>
				<input required type="number" name="month" min="1" max="13"><br><br>
				<span>Enter Year&nbsp&nbsp&nbsp</span>
				<input required type="number" name="year" min="1"><br><br>
				<input class="submit-button" type="submit" name="submit">
			</form>
		</div>
		<!-- End Form Area -->

</body>
</html>