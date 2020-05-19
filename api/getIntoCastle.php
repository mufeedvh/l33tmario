<?php

if (isset($_POST['user'])) {
	$user = $_POST['user'];

	if ($user === 'bWFyaW8=') {
		die("You need to fly into Bowser's Castle to get in. Current user cannot fly.");
	} elseif ($user === 'bHVpZ2k=') {
		session_start();
		$_SESSION['inside_castle'] = true;
		die("Flying Into Bowser's Castle...<br><br><a href=\"http://localhost./l33tmario/level2/\"><button>To The Castle</button></a>");
	} elseif ($user === 'Ym93c2Vy') {
		session_start();
		$_SESSION['inside_castle'] = true;
		die("You're already inside Bowser's Castle<br><br><a href=\"http://localhost./l33tmario/level2/\"><button>To The Castle</button></a>");
	} else {
		die("ERROR: Given 'user' ID does not associate with any account.");
	}
} else {
	die("ERROR: 'user' parameter missing.");
}

?>