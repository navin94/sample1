<?php
/* First method to create array. */
$numbers = array( 1, 2, 3, 4, 5, 6);
foreach( $numbers as $value )
{
	echo "Value is $value <br />";
}
/* Second method to create array. */
$numbers[0] = "one";
$numbers[1] = "two";
$numbers[2] = "three";
$numbers[3] = "four";
$numbers[4] = "five";
$numbers[5] = "six";
foreach( $numbers as $value )
{
	echo "Value is $value <br />";
}
?>