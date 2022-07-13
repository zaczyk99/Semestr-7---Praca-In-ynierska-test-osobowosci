<?php
$emps = json_decode($_POST['emps']);
foreach($emps as $emp){
	print_r($emp->name);
}
?>