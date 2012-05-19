<?php
require __DIR__."/../../Bindings/includes/prepend.php";
function unused() {
	$a = 1;
	$a++;
	$b = rand(1, 100);
	return;
	
	$c = 5;
}

function used() {
	echo "Hello World";
	rand(1, 100);
	return 1;
	
	$a = 5;
}

used();
require __DIR__."/../../Bindings/includes/append.php";