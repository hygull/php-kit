<?php
/*
	{
		"createdOn": "08 Nov 2017, Wed",
		"aim": "To demonstrate case sensitivity in PHP 5",
		"codedBy": "Rishikesh Agrawani"
	}
*/

# Initializing variables $name, $NAME and $age
# $name &amp; $NAME both are different variables
$name = "Rasmus Lerdorf";

$NAME = "Guido Van Rossum";

$_age = 48;

print "$name created PHP\n$NAME created Python\n";
echo "$name is of ", $_age, " year";

?>

<?php
/*
Rasmus Lerdorf created PHP
Guido Van Rossum created Python
Rasmus Lerdorf is of 48 year
*/
?>

