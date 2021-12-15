<?php
$day = 23;
$sql_msg_del = "DELETE FROM messages WHERE result=1 AND day=".$day+1."	 ";

	echo $sql_msg_del;

?>