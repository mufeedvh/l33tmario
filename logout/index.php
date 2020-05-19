<?php

	session_start();
	session_unset();
	session_destroy();
	setcookie("uid", "", time() - 3600);
	setcookie("account_id", "", time() - 3600);
	header('Location: http://localhost./l33tmario/login/');

?>