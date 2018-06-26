<?php

$v_ip = $REMOTE_ADDR;
$v_date = date("l d F H:i:s");

$fp = fopen("ips.txt", "a");
fputs($fp, "IP: $v_ip - DATE: $v_date\n\n");
fclose($fp);

?>
