<?php

function hello($name){
	if($name == "Mike"){
		return "Hello, Mike";
	}  else {
		return "Hello Stranger.";
	}
}

$greeting = hello("Mike");

echo $greeting;

?>

<?php

function add_up($a, $b) {
  return $a + $b;

}


$value = add_up(2, 4);

echo $value;
?>

<?php

function add_2up($a, $b) {
	$arr = array (
		$a,
		$b,
		$a + $b
		);
	return $arr;
}

$value = add_2up(2, 4);

print_r($value);
echo $value[2];
?>