<?php
/*
	{
		"createdOn": "08 Nov 2017, Wed",
		"aim": "Playing with strings",
		"codedBy": "Rishikesh Agrawani"
	}
*/

// Initializing strings
$name = "Rishikesh Agrawani";
$city = 'Bangalore';

# Definition of message() function
function message($name, $city) {
	echo "My name is $name";
	echo "\nI live in $city";
}

// Calling message() function 
message($name, $city);
?>

<?php
/*
My name is Rishikesh Agrawani
I live in Bangalore

*/
?>
