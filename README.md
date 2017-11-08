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