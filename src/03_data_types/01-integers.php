<?php
/*
	{
		"createdOn": "08 Nov 2017, Wed",
		"aim": "Playing with integers",
		"codedBy": "Rishikesh Agrawani"
	}
*/

// Initializing integers
$age = 25;
$year = 2017;
$pages = 450;
$cost = 500;

# Definition of message() function
function message($age, $year, $pages, $cost) {
	echo "My age is 25.\n";
	print "I wrote 1 book in this tiny age which contains ".$pages." pages on year $year.\n";
	print "It is nice book. It's cost is Rs. $cost\n";
}

// Calling message() function 
message($age, $year, $pages, $cost);
?>

<?php
/*
My age is 25.
I wrote 1 book in this tiny age which contains 450 pages on year 2017.
It is nice book. It's cost is Rs. 500

*/
?>
