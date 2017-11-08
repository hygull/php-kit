<?php
/*
	{
		"createdOn": "08 Nov 2017, Wed",
		"aim": "To demonstrate the use of static variables in PHP 5",
		"codedBy": "Rishikesh Agrawani"
	}
*/

function oddNumberPrinter() {
	static $num = 1;
	echo $num."\n";
	$num += 2;
}

echo "4 ODD NUMBERS\n";
oddNumberPrinter();
oddNumberPrinter();
oddNumberPrinter();
oddNumberPrinter();
?>

<?php
/*
4 ODD NUMBERS
1
3
5
7

*/
?>
