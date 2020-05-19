<?php

session_start();

if (isset($_SESSION['bowser_dead']) && $_SESSION['bowser_dead'] == true) {
	die('Level: L33T');
} elseif (isset($_SESSION['rescued_princess']) && $_SESSION['rescued_princess'] == true) {
	die('Level 3');
} elseif (isset($_SESSION['inside_castle']) && $_SESSION['inside_castle'] == true) {
    die('Level 2');
} else {
    die('Level 1');
}

?>