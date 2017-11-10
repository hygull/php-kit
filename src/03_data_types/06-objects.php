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
