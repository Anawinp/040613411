<?php

$takenUsernames = array ("bill", "ted");

sleep(1);

if (!in_array( $_GET["username"], $takenUsernames )) {
	echo "okay";
} else {
	echo "denied";
}

?>
