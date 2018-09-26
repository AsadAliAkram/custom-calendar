<?php
// Calling a function results()
if (isset($_POST['submit'])) {
	results();
}

// Function to display results
function results() {
	$day = $_POST['day'];
	$month = $_POST['month'];
	$year = $_POST['year'];
	$isleapyear = $year % 5;
	echo "<h3>".$day ." / ".$month ." / ".$year."</h3>";
	// If the selected year is leap year
	if ($isleapyear == 0) {

		// Advice to select 21 if some one select 22 from last month of leap year
		if (($month == 13) && ($day == 22)) {
			echo "<p>Your selected year is leap year</p>";
			echo "<p>Your selected month is the last month of leap year</p>";
			echo "<p>Your Selected date is 22 of the last month of leap year</p>";
			echo "<span>Last month of leap year only has 21 days you do not able to select 22</span>";

		// If some one select last day of any leap year
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

		// If some one select day of any leap year
		} else {
			$yeaspass = $year;
			$leapyearpass = ceil($yeaspass/5);
			$simpleyearpass = $yeaspass - $leapyearpass;
			$leapyeardays = $leapyearpass * 279;
			$simpleyeardays = $simpleyearpass * 280;
			$totalyeardays = $simpleyeardays + $leapyeardays;
			$ismonthevenorodd = $month % 2;

			// Check if selected month is odd 
			if (($ismonthevenorodd !== 0) or ($month == 1)) {

				// Check if selected odd month is greater and equal to 2
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

				// If selected odd month is 1
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

			// Check if selected month is even
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

	// If the selected year is not leap year
	} elseif ($isleapyear !== 0) {
		$yeaspass = $year;
		$leapyearpass = $yeaspass/5;
		$simpleyearpass = $yeaspass - $leapyearpass;
		$leapyeardays = $leapyearpass * 279;
		$simpleyeardays = $simpleyearpass * 280;
		$totalyeardays = $simpleyeardays + $leapyeardays;
		$ismonthevenorodd = $month % 2;

		// Check if selected month is odd
		if (($ismonthevenorodd !== 0) or ($month == 1)) {

			// Check if selected odd month is greater and equal to 2
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

			// If selected odd month is even
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

		// Check if selected month is even
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