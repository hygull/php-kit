# php-kit

##### hello world

```php
<?php
/*
	{
		"createdOn": "08 Nov 2017, Wed",
		"aim": "To write hello world PHP script",
		"codedBy": "Rishikesh Agrawani"
	}
*/

# Initializing variables $a and $b
$a = 10;
$b = 20;

# Storing sum of $a and $b into $c
$c = $a + $b;

// Outputting final sum with some extra message 
echo "Hello programers, the additon of $a and $b is ".$c."\n";

?>

<?php

# Hello programers, the additon of 10 and 20 is 30

?>
```

##### echo statement

```php
<?php
/*
	{
		"createdOn": "08 Nov 2017, Wed",
		"aim": "To write hello world PHP script with echo examples",
		"codedBy": "Rishikesh Agrawani"
	}
*/

# Initializing variables $a and $b
$a = 38;
$b = 22;

# Storing sum of $a and $b into $c
$c = $a + $b;

// Outputting final sum with some extra message 
echo "Hello programers, the additon of $a and $b is ".$c."\n";

// echo takes multiple parameters too
echo "This ", "is ", "a ", "great ", "chance ", "to ", "learn ", "PHP\n";

// variable's value and string values
echo $a, "\t", $b, "\t", $c, "\n";

echo "$a, "." $b, "."$c\n";

?>

<?php

/*
Hello programers, the additon of 38 and 22 is 60
This is a great chance to learn PHP
38	22	60
38,  22, 60
*/

?>

```

##### print statement

```php
<?php
/*
	{
		"createdOn": "08 Nov 2017, Wed",
		"aim": "Using print in PHP 5",
		"codedBy": "Rishikesh Agrawani"
	}
*/

# Initializing variables $a and $b
$a = 10;
$b = 20;

# Storing sum of $a and $b into $c
$c = $a + $b;

// Outputting final sum with some extra message 
print "Hello programers, the additon of $a and $b is ".$c."\n".$a;

echo "\n";

print $a.$b.$c

?>

<?php

// Hello programers, the additon of 10 and 20 is 30
// 10
// 102030

?>
```

##### Case sensitivity

```php

/*
	{
		"createdOn": "08 Nov 2017, Wed",
		"aim": "To demonstrate case sensitivity in PHP 5",
		"codedBy": "Rishikesh Agrawani"
	}
*/

# Initializing variables $name, $NAME and $age
# $name & $NAME both are different variables
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
```

##### Different variable names

```php
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
```

##### static variable

```php
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

```

##### global keyword

```php
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
```

# Extra important links

[References](https://github.com/hygull/php-kit/blob/master/docs/references.md)

[Similarity with other languages](https://github.com/hygull/php-kit/blob/master/notes/similarity-with-other-languages.md)

