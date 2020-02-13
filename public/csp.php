<?php
header("HTTP/1.0 204 No Response");

$data = file_get_contents('php://input');
if ($data = json_decode($data))
	{
		$data = json_encode($data)."\n\r";
		file_put_contents($_SERVER['DOCUMENT_ROOT'].'/csp/'.date("Y-m-d").'-csp-report.txt', $data."\n", FILE_APPEND | LOCK_EX);
	}
?>
