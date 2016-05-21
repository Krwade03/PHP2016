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