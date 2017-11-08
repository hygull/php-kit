<?php
/*
	{
		"createdOn": "08 Nov 2017, Wed",
		"aim": "To demonstrate the use of global keyword in PHP 5",
		"codedBy": "Rishikesh Agrawani"
	}
*/

$name = "Rishikesh Agrawani";
$age = 25;

function printDetails() {
	// If the following line is not there then $name & $age will be unavailable here
	global $name, $age;

	echo "My name is: ".$name, "\n";
	print  "My age is: ".$age;
}

echo "DETAILS:-\n";
printDetails();

?>

<?php
/*
DETAILS:-
My name is: Rishikesh Agrawani
My age is: 25
*/
?>
