<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Menu</title>
    <link rel="stylesheet" type="text/css" href="menu.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <link href='https://fonts.googleapis.com/css?family=Bakbak One' rel='stylesheet'>
    <style>
        h2 {
    color: white;
	font-size: 100px;
	text-align: center;
	font-weight: bold;
	padding: 100px;
	margin-left: 10%;
	margin-right: 10%;
	


}
.myButton {
	box-shadow:inset 1px 0px 0px 0px #ffffff;
	background:linear-gradient(to bottom, #ffffff 5%, #f6f6f6 100%);
	background-color:#ffffff;
	border-radius:23px;
	border:2px solid #dcdcdc;
	display:inline-block;
	cursor:pointer;
	color:#666666;
	font-family:Arial;
	font-size:18px;
	font-weight:bold;
	padding:20px 80px;
	text-decoration:none;
	text-shadow:0px 0px 0px #ffffff;
	margin-top: 50px;
	margin-bottom: 50px;
}
    </style>

    
</head>
<body style="background-color: #40A474;">
<?php
	
	$pytanie1 = $_POST['pytanie1'];
	$pytanie2 = $_POST['pytanie2'];
	$pytanie3 = $_POST['pytanie3'];
	$pytanie4 = $_POST['pytanie4'];
	$pytanie5 = $_POST['pytanie5'];
	$pytanie6 = $_POST['pytanie6'];
	$pytanie7 = $_POST['pytanie7'];
	$pytanie8 = $_POST['pytanie8'];
	$pytanie9 = $_POST['pytanie9'];
	$pytanie10 = $_POST['pytanie10'];
	$pytanie11 = $_POST['pytanie11'];
	$pytanie12 = $_POST['pytanie12'];
	$pytanie13 = $_POST['pytanie13'];
	$pytanie14 = $_POST['pytanie14'];
	$pytanie15 = $_POST['pytanie15'];
	$pytanie16 = $_POST['pytanie16'];
	$pytanie17 = $_POST['pytanie17'];
	$pytanie18 = $_POST['pytanie18'];
	$pytanie19 = $_POST['pytanie19'];
	$pytanie20 = $_POST['pytanie20'];
	$pytanie21 = $_POST['pytanie21'];
	$pytanie22 = $_POST['pytanie22'];
	$pytanie23 = $_POST['pytanie23'];
	$pytanie24 = $_POST['pytanie24'];
	$pytanie25 = $_POST['pytanie25'];
	$pytanie26 = $_POST['pytanie26'];
	$pytanie27 = $_POST['pytanie27'];
	$pytanie28 = $_POST['pytanie28'];
	$pytanie29 = $_POST['pytanie29'];
	$pytanie30 = $_POST['pytanie30'];
	$pytanie31 = $_POST['pytanie31'];
	$pytanie32 = $_POST['pytanie32'];
	$pytanie33 = $_POST['pytanie33'];
	$pytanie34 = $_POST['pytanie34'];
	$pytanie35 = $_POST['pytanie35'];
	$pytanie36 = $_POST['pytanie36'];
	$pytanie37 = $_POST['pytanie37'];
	$pytanie38 = $_POST['pytanie38'];
	$pytanie39 = $_POST['pytanie39'];
	$pytanie40 = $_POST['pytanie40'];
	$pytanie41 = $_POST['pytanie41'];
	$pytanie42 = $_POST['pytanie42'];
	$pytanie43 = $_POST['pytanie43'];
	$pytanie44 = $_POST['pytanie44'];
	$pytanie45 = $_POST['pytanie45'];
	$pytanie46 = $_POST['pytanie46'];
	$pytanie47 = $_POST['pytanie47'];
	$pytanie48 = $_POST['pytanie48'];
	$pytanie49 = $_POST['pytanie49'];
	$pytanie50 = $_POST['pytanie50'];
	$gender = $_POST['gender'];
	
	



	$conn = new mysqli('localhost','root','','test1');
	if($conn->connect_error){
		die('Connection Failed : '.$conn->connect_error);
		}else{

			$stmt = $conn->prepare("insert into 
			odpowiedzi2 (sex, pytanie1, pytanie2, pytanie3,
			 pytanie4, pytanie5, pytanie6, pytanie7, pytanie8, pytanie9, pytanie10, pytanie11, pytanie12, pytanie13, pytanie14, pytanie15, pytanie16, pytanie17, pytanie18, pytanie19, pytanie20, pytanie21, pytanie22, pytanie23, pytanie24, pytanie25, pytanie26, pytanie27, pytanie28, pytanie29, pytanie30, pytanie31, pytanie32, pytanie33, pytanie34, pytanie35, pytanie36, pytanie37, pytanie38, pytanie39, pytanie40, pytanie41, pytanie42, pytanie43, pytanie44, pytanie45, pytanie46, pytanie47, pytanie48, pytanie49, pytanie50) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
			$stmt->bind_param("sssssssssssssssssssssssssssssssssssssssssssssssssss",$gender, $pytanie1,$pytanie2,
			$pytanie3,$pytanie4,$pytanie5, $pytanie6, $pytanie7, $pytanie8, $pytanie9, $pytanie10, $pytanie11, $pytanie12, $pytanie13, $pytanie14, $pytanie15, $pytanie16, $pytanie17, $pytanie18, $pytanie19, $pytanie20, $pytanie21, $pytanie22, $pytanie23, $pytanie24, $pytanie25, $pytanie26, $pytanie27, $pytanie28, $pytanie29, $pytanie30, $pytanie31, $pytanie32, $pytanie33, $pytanie34, $pytanie35, $pytanie36, $pytanie37, $pytanie38, $pytanie39, $pytanie40, $pytanie41, $pytanie42, $pytanie43, $pytanie44, $pytanie45, $pytanie46, $pytanie47, $pytanie48, $pytanie49, $pytanie50);
			
			$stmt->execute();
			$stmt->close();
			$conn->close();

		}
		




?> 

<center><h2></h2>
</form><form action="test.php"">
<input type="submit" value="Dowiedz się więcej!" class="myButton" />
</form><form action="index.php">
<input type="submit" value="Powrót!" class="myButton" />
</center>
</body>
</html>