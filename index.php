<?php
if (substr($_SERVER['HTTP_USER_AGENT'],13,12)=='Nintendo 3DS') {
	$version=substr($_SERVER['HTTP_USER_AGENT'],44,6);
	switch ($version) {
		case '1.7567':
			include("payload_17567_fw71to94_index.html");
			break;
		case '1.7552':
			include("payload_17552_fw50to70_index.html");
			break;
		case '1.7498':
			include("payload_17498_fw40_index.html");
			break;
		case '1.7455':
			include("payload_17455_fw21_index.html");
			break;
		case '1.7412':
			include("payload_17412_fw20_index.html");
			break;
		default:
			include("payload_wrong_user_index.html");
			break;
	}
}
?>
Moo.
