<?php

if (isset($_POST['conf'])) {
	$account_id = $_POST['conf'];

	$conf_file_read = shell_exec('cat '.$account_id);

	die($conf_file_read);
} else {
	die("ERROR: 'conf' paramater is missing");
}

?>