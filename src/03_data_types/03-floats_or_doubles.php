<?php
/*
	{
		"createdOn": "08 Nov 2017, Wed",
		"aim": "Playing with floats or doubles",
		"codedBy": "Rishikesh Agrawani"
	}
*/

// Initializing floats
$pi = 3.14;
$temperature = 80.67;

# Definition of message() function
function message($pi, $temperature) {
	print "The value of PI is ".$pi;
	echo "\nMy body's temperature is ", $temperature; 
}

// Calling message() function 
message($pi, $temperature);
?>

<?php
/*
The value of PI is 3.14
My body's temperature is 80.67
*/
?>
