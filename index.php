<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="row">
			<div class="head">
				<h1>Find day from date</h1>
			</div>
			<div class="container">
			<div class="form">
				<form action="" method="post">
					<label>Enter Day</label><br>
					<input required type="number" name="day" min="1" max="22"><br><br>
					<label>Enter Month</label><br>
					<input required type="number" name="month" min="1" max="13"><br><br>
					<label>Enter Year</label><br>
					<input required type="number" name="year" min="1"><br><br>
					<input type="submit" name="submit">
				</form>
			</div>
			<div class="results">
				<?php
				if (isset($_POST['submit'])) {
					$day = $_POST['day'];
					$month = $_POST['month'];
					$year = $_POST['year'];
					$isleapyear = $year % 5;

					if ($isleapyear == 0) {
						if (($month == 13) && ($day == 22)) {
							echo "<p>Your selected year is leap year</p>";
							echo "<p>Your selected month is the last month of leap year</p>";
							echo "<p>Your Selected date is 22 of the last month of leap year</p>";
							echo "<span>Last month of leap year only has 21 days you do not able to select 22</span>";
						} elseif (($month == 13) && ($day == 21)) {
							$yeaspass = $year +1;
							$leapyearpass = ceil($yeaspass/5);
							$simpleyearpass = $yeaspass - $leapyearpass;
							$leapyeardays = $leapyearpass * 279;
							$simpleyeardays = $simpleyearpass * 280;
							$totaldays = $simpleyeardays + $leapyeardays;
							$totaldaysreminder = $totaldays%7;
							switch ($totaldaysreminder) {
								case '1':
								print('<h2>Day is Sunday</h2>');
								break;
								case '2':
								print('<h2>Day is Monday</h2>');
								break;
								case '3':
								print('<h2>Day is Tuesday</h2>');
								break;
								case '4':
								print('<h2>Day is Wednesday</h2>');
								break;
								case '5':
								print('<h2>Day is Wednesday</h2>');
								break;
								case '6':
								print('<h2>Day is Friday</h2>');
								break;
								case '0':
								print('<h2><h2>Day is Saturday</h2>');
								break;
							}
						} else {
							$yeaspass = $year;
							$leapyearpass = ceil($yeaspass/5);
							$simpleyearpass = $yeaspass - $leapyearpass;
							$leapyeardays = $leapyearpass * 279;
							$simpleyeardays = $simpleyearpass * 280;
							$totalyeardays = $simpleyeardays + $leapyeardays;
							$ismonthevenorodd = $month % 2;
							// Check for odd 
							if (($ismonthevenorodd !== 0) or ($month == 1)) {
								if ($month >= 2) {
									$monthdivide = floor($month/2);
									$monthdivide22days = $monthdivide*22;
									$monthdivide21days = ($monthdivide)*21;
									$totalmonthdays = $monthdivide22days + $monthdivide21days;
									$totalmonthdaysanddays = $totalmonthdays + $day;
									$totaldays = $totalyeardays + $totalmonthdaysanddays;
									$totaldaysreminder = $totaldays%7;
									switch ($totaldaysreminder) {
										case '1':
										print('<h2>Day is Sunday</h2>');
										break;
										case '2':
										print('<h2>Day is Monday</h2>');
										break;
										case '3':
										print('<h2>Day is Tuesday</h2>');
										break;
										case '4':
										print('<h2>Day is Wednesday</h2>');
										break;
										case '5':
										print('<h2>Day is Wednesday</h2>');
										break;
										case '6':
										print('<h2>Day is Friday</h2>');
										break;
										case '0':
										print('<h2>Day is Saturday</h2>');
										break;
									}
								} else {
									$totaldays = $totalyeardays + $day;
									$totaldaysreminder = $totaldays%7;
									switch ($totaldaysreminder) {
										case '1':
										print('<h2>Day is Sunday</h2>');
										break;
										case '2':
										print('<h2>Day is Monday</h2>');
										break;
										case '3':
										print('<h2>Day is Tuesday</h2>');
										break;
										case '4':
										print('<h2>Day is Wednesday</h2>');
										break;
										case '5':
										print('<h2>Day is Wednesday</h2>');
										break;
										case '6':
										print('<h2>Day is Friday</h2>');
										break;
										case '0':
										print('<h2>Day is Saturday</h2>');
										break;
									}
								}
							// Check for even
							} elseif ($ismonthevenorodd == 0) {
								$monthdivide = $month/2;
								$monthdivide22days = $monthdivide*22;
								$monthdivide21days = ($monthdivide - 1)*21;
								$totalmonthdays = $monthdivide22days + $monthdivide21days;
								$totalmonthdaysanddays = $totalmonthdays + $day;
								$totaldays = $totalyeardays + $totalmonthdaysanddays;
								$totaldaysreminder = $totaldays%7;
								switch ($totaldaysreminder) {
									case '1':
									print('<h2>Day is Sunday</h2>');
									break;
									case '2':
									print('<h2>Day is Monday</h2>');
									break;
									case '3':
									print('<h2>Day is Tuesday</h2>');
									break;
									case '4':
									print('<h2>Day is Wednesday</h2>');
									break;
									case '5':
									print('<h2>Day is Wednesday</h2>');
									break;
									case '6':
									print('<h2>Day is Friday</h2>');
									break;
									case '0':
									print('<h2>Day is Saturday</h2>');
									break;
								}
							}
						}
					} elseif ($isleapyear !== 0) {
						$yeaspass = $year;
						$leapyearpass = $yeaspass/5;
						$simpleyearpass = $yeaspass - $leapyearpass;
						$leapyeardays = $leapyearpass * 279;
						$simpleyeardays = $simpleyearpass * 280;
						$totalyeardays = $simpleyeardays + $leapyeardays;
						$ismonthevenorodd = $month % 2;
						// Check for odd 
						if (($ismonthevenorodd !== 0) or ($month == 1)) {
							if ($month >= 2) {
								$monthdivide = floor($month/2);
								$monthdivide22days = $monthdivide*22;
								$monthdivide21days = ($monthdivide)*21;
								$totalmonthdays = $monthdivide22days + $monthdivide21days;
								$totalmonthdaysanddays = $totalmonthdays + $day;
								$totaldays = $totalyeardays + $totalmonthdaysanddays;
								$totaldaysreminder = $totaldays%7;
								switch ($totaldaysreminder) {
									case '1':
									print('<h2>Day is Sunday</h2>');
									break;
									case '2':
									print('<h2>Day is Monday</h2>');
									break;
									case '3':
									print('<h2>Day is Tuesday</h2>');
									break;
									case '4':
									print('<h2>Day is Wednesday</h2>');
									break;
									case '5':
									print('<h2>Day is Wednesday</h2>');
									break;
									case '6':
									print('<h2>Day is Friday</h2>');
									break;
									case '0':
									print('<h2>Day is Saturday</h2>');
									break;
								}
							} else {
								$totaldays = $totalyeardays + $day;
								$totaldaysreminder = $totaldays%7;
								switch ($totaldaysreminder) {
									case '1':
									print('<h2>Day is Sunday</h2>');
									break;
									case '2':
									print('<h2>Day is Monday</h2>');
									break;
									case '3':
									print('<h2>Day is Tuesday</h2>');
									break;
									case '4':
									print('<h2>Day is Wednesday</h2>');
									break;
									case '5':
									print('<h2>Day is Wednesday</h2>');
									break;
									case '6':
									print('<h2>Day is Friday</h2>');
									break;
									case '0':
									print('<h2>Day is Saturday</h2></h2>');
									break;
								}
							}
						// Check for even
						} elseif ($ismonthevenorodd == 0) {
							$monthdivide = $month/2;
							$monthdivide22days = $monthdivide*22;
							$monthdivide21days = ($monthdivide - 1)*21;
							$totalmonthdays = $monthdivide22days + $monthdivide21days;
							$totalmonthdaysanddays = $totalmonthdays + $day;
							$totaldays = $totalyeardays + $totalmonthdaysanddays;
							$totaldaysreminder = $totaldays%7;
							switch ($totaldaysreminder) {
								case '1':
								print('<h2>Day is Sunday</h2>');
								break;
								case '2':
								print('<h2>Day is Monday</h2>');
								break;
								case '3':
								print('<h2>Day is Tuesday</h2>');
								break;
								case '4':
								print('<h2>Day is Wednesday</h2>');
								break;
								case '5':
								print('<h2>Day is Wednesday</h2>');
								break;
								case '6':
								print('<h2>Day is Friday</h2>');
								break;
								case '0':
								print('<h2>Day is Saturday</h2>');
								break;
							}
						}
					}
				}
				?>
			</div>
		</div>
	</div>
</body>
</html>