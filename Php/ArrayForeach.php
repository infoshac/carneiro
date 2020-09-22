<?php
$animals= array(
	'Bat'=> 'Snorts',
	'Bear'=> 'Roars',
	'Dolphin'=> 'Clicks',
	'Goose'=> 'Handks',
	'Vullure'=> 'Scream',
);
print_r($animals).'</br>';
foreach ($animals as $nome => $sons) {
	//echo 'The '.$nome.' make sound  '.$sons.'</br>';
	echo $animals[$nome].'</br>';	

}

$numbers= array(1,2,3,4,5);
	print_r ($numbers).'</br>';
foreach ($numbers as $number) {
		$number= $number * 2;
		print $number.'</br>';
	}	
print_r($numbers).'</br>';

?>