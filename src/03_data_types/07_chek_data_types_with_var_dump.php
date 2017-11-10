<?php
/*
	{
		"createdOn": "10 Nov 2017, Wed",
		"aim": "To demeonstrate the use of var_dump() in PHP 5",
		"codedBy": "Rishikesh Agrawani"
	}
*/

// Initializing different kinds of data
$name = "Rishikesh Agrawani";
$age = 25;
$weight = 65.79;
$languages = array("C", "C++", "Python", "Golang", "PHP", "Node.js");
$isActive = true;

// class Person {
// 	public $name;
// 	public $age;
// }
// $person = new Person;
// $person->name = "Rishikesh";
// $person->age = 25;

echo $name, "\t",var_dump($name), "\n";
echo $age, "\t", var_dump($age), "\n";
echo $weight, "\t", var_dump($weight), "\n";
echo $languages, "\t", var_dump($languages), "\n";
// echo $person, "\t", var_export($person), "\n";
echo $isActive, "\t", var_dump($isActive);
?>

<?php
/*
Rishikesh Agrawani	string(18) "Rishikesh Agrawani"

25	int(25)

65.79	float(65.79)

Array	array(6) {
  [0]=>
  string(1) "C"
  [1]=>
  string(3) "C++"
  [2]=>
  string(6) "Python"
  [3]=>
  string(6) "Golang"
  [4]=>
  string(3) "PHP"
  [5]=>
  string(7) "Node.js"
}

1	bool(true)

*/
?>
