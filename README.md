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

##### Data type - integer

```php
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
```

##### Data type - strings

```php
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

```

##### Data type - floats

```php
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
```

##### Data type - booleans

```php
<?php
/*
	{
		"createdOn": "08 Nov 2017, Wed",
		"aim": "Playing with booleans",
		"codedBy": "Rishikesh Agrawani"
	}
*/

// Initializing booleans
$iAmOld = false;
$mathIsNice = TRUE;

// echo $mathIsNice, "\n";	// "1"
// echo $iAmOld;			// ""

# Definition of message() function
function message($boolValue) {
	if($boolValue) {
		echo "TRUE: ";
	} else {
		echo "FALSE: ";
	}
	echo "GOT value as ", (int)$boolValue, "\n";
}

// Calling message() function 
message($iAmOld);
message($mathIsNice);
?>

<?php
/*
FALSE: GOT value as 0
TRUE: GOT value as 1
*/
?>
```

##### Data type  - arrays

```php
<?php
/*
	{
		"createdOn": "08 Nov 2017, Wed",
		"aim": "Playing with arrays",
		"codedBy": "Rishikesh Agrawani"
	}
*/

// Initializing arrays
$cities = array("Bangalore", "Raipur", "Kondagaon", "Gurgaon", "Newyork");

for($i = 0; $i < count($cities); $i++){
	echo "City => ", $cities[$i]."\n";
}

$details = array("name" => "Rishikesh Agrawani", "age" => 25, "langs" => array("C", "C++", "Python", "Golang", "PHP", "Node.js"));

foreach($details as $key => $value) {
	echo "$key : ", $value, "\n";
} 
?>

<?php
/*
City => Bangalore
City => Raipur
City => Kondagaon
City => Gurgaon
City => Newyork
name : Rishikesh Agrawani
age : 25
langs : Array

*/
?>
```

##### Data type - objects

```php
<?php
/*
	{
		"createdOn": "10 Nov 2017, Wed",
		"aim": "Playing with objects",
		"codedBy": "Rishikesh Agrawani"
	}
*/

// Defining class
class Person {

	function Person() {
		$this->name = "Rishikesh Agrawani";
		$this->age = 25;
		$this->langs = array("C", "C++", "Python", "Golang", "PHP", "Node.js");
		$this->hobbies = array("Reading books", "Playing chess", "Watching cricket");
	}

	function getDetails() {
		echo "DETAILS:-\n";
		echo "\nName: ", $this->name;
		echo "\nAge: ", $this->age;

		echo "\nLanguages known: \n";
		for($i = 0; $i < count($this->langs); $i++) {
			echo $i + 1, " - ", $this->langs[$i], "\n";
		}

		echo "Hobbies \n";
		for($i = 0; $i < count($this->hobbies); $i++) {
			echo $i + 1, " - ", $this->hobbies[$i], "\n";
		}
	}
}

// Instantiating object
$myDetails = new Person();

// Calling getDetails() method on instantiated $myDetails object
$myDetails->getDetails();
?>

<?php
/*
DETAILS:-

Name: Rishikesh Agrawani
Age: 25
Languages known: 
1 - C
2 - C++
3 - Python
4 - Golang
5 - PHP
6 - Node.js
Hobbies 
1 - Reading books
2 - Playing chess
3 - Watching cricket

*/
?>
```

# Extra important links

[References](https://github.com/hygull/php-kit/blob/master/docs/references.md)

[Similarity with other languages](https://github.com/hygull/php-kit/blob/master/notes/similarity-with-other-languages.md)

