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
