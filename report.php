<html>
<head>
	<title>Aliens Abducted Me - Report an Abduction</title>
</head>
	<body>
		<h2>Aliens Abducted Me - Report an Abduction</h2> 
		<?php 
			$dbc = mysqli_connect('localhost', 'sara', 'happyappleday', 'aliendatabase')
				or die('Error connecting to MySQL server.');
				
			$when_it_happened = $_POST['whenithappened']; 
			$how_long = $_POST['howlong']; 
			$alien_description = $_POST['aliendescription']; 
			$fang_spotted = $_POST['fangspotted']; 
			$email = $_POST['email']; 
			$first_name = $_POST['firstname'];
			$last_name = $_POST['lastname'];
			$how_many = $_POST['howmany'];
			$what_they_did = $_POST['whattheydid'];
			$other = $_POST['other'];
			
			$query = "INSERT INTO aliens_abduction (first_name, last_name, when_it_happened, how_long, " .
				"how_many, alien_description, what_they_did, fang_spotted, other, email) " .
				"VALUES ('$first_name', '$last_name', '$when_it_happened', '$how_long', '$how_many', " .
				"'$alien_description', '$what_they_did', '$fang_spotted', '$other', '$email')";
			
			echo 'Thanks for submitting the form.<br />'; 
			echo 'You were abducted ' . $when_it_happened; 
			echo ' and were gone for ' . $how_long . '<br />'; 
			echo 'Number of aliens: ' . $how_many . '<br />';
			echo 'Describe them: ' . $alien_description . '<br />'; 
			echo 'The aliens did this: ' . $what_they_did . '<br />';
			echo 'Was Fang there? ' . $fang_spotted . '<br />'; 
			echo 'Other comments: ' . $other . '<br />';
			echo 'Your email address is ' . $email; 
			
			$result = mysqli_query($dbc, $query)
				or die('Error querying database');
				
			mysqli_close($dbc);
		?> 
	</body>
</html>