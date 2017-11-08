<?php
/*
	{
		"createdOn": "08 Nov 2017, Wed",
		"aim": "To demonstrate different kind of variable names in PHP 5",
		"codedBy": "Rishikesh Agrawani"
	}
*/

# Initializing variables $name, $NAME and $age
# $name &amp; $NAME both are different variables
$name = "Rasmus Lerdorf";

$NAME = "Guido Van Rossum";

$_age = 48;

$Age = 45;

$Age2 = 46;

$__city = "Bangalore";

$max_age = 100;

print "$name created PHP\n$NAME created Python\n";
echo "$name is of ", $_age, " year\n";

echo $Age."\n";
echo $Age2,"\n";
print $__city."\n";
print $max_age; 

?>

<?php
/*
Rasmus Lerdorf created PHP
Guido Van Rossum created Python
Rasmus Lerdorf is of 48 year
45
46
Bangalore
100
*/
?>
