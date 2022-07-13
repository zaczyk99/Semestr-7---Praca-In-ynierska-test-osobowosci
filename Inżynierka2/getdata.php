<?php
if(isset($_POST['typ'])){
$typ=$_POST['typ'];

$conx=mysqli_connect("localhost","root","","test1");

$sql=("INSERT INTO typy(typ) VALUES (typ)");

$result=mysqli_query($conx,$sql);
if($result==true){
	echo "<h3>Dodawanie</h3>";
}
}
?>