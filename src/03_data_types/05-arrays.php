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
