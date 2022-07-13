<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8" />
    <title>Test</title>
	<script src="https://code.jquery.com/jquery-3.5.0.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="test.css">
</head>


<body>






<div class="div-1">
 <h2>Update treści pytań 1-26</h2>
</div>

 		
		
		
		<header><form action="" method="POST">
			<p3>Podaj nową treść pytania 1</p3>
<input type="text" name="pytanie1" placeholder=""/><input type="submit" class="stripe" name="update1" value="Zaktualizuj pytanie"/></br><p3>Podaj nową treść pytania 2</p3>
<input type="text" name="pytanie2" placeholder=""/><input type="submit" class="stripe" name="update2" value="Zaktualizuj pytanie"/></br><p3>Podaj nową treść pytania 3</p3>
<input type="text" name="pytanie3" placeholder=""/><input type="submit" class="stripe" name="update3" value="Zaktualizuj pytanie"/></br><p3>Podaj nową treść pytania 4</p3>
<input type="text" name="pytanie4" placeholder=""/><input type="submit" class="stripe" name="update4" value="Zaktualizuj pytanie"/></br><p3>Podaj nową treść pytania 5</p3>
<input type="text" name="pytanie5" placeholder=""/><input type="submit" class="stripe" name="update5" value="Zaktualizuj pytanie"/></br><p3>Podaj nową treść pytania 6</p3>
<input type="text" name="pytanie6" placeholder=""/><input type="submit" class="stripe" name="update6" value="Zaktualizuj pytanie"/></br><p3>Podaj nową treść pytania 7</p3>
<input type="text" name="pytanie7" placeholder=""/><input type="submit" class="stripe" name="update7" value="Zaktualizuj pytanie"/></br><p3>Podaj nową treść pytania 8</p3>
<input type="text" name="pytanie8" placeholder=""/><input type="submit" class="stripe" name="update8" value="Zaktualizuj pytanie"/></br><p3>Podaj nową treść pytania 9</p3>
<input type="text" name="pytanie9" placeholder=""/><input type="submit" class="stripe" name="update9" value="Zaktualizuj pytanie"/></br><p3>Podaj nową treść pytania 10</p3>
<input type="text" name="pytanie10" placeholder=""/><input type="submit" class="stripe" name="update10" value="Zaktualizuj pytanie"/></br><p3>Podaj nową treść pytania 11</p3>
<input type="text" name="pytanie11" placeholder=""/><input type="submit" class="stripe" name="update11" value="Zaktualizuj pytanie"/></br><p3>Podaj nową treść pytania 12</p3>
<input type="text" name="pytanie12" placeholder=""/><input type="submit" class="stripe" name="update12" value="Zaktualizuj pytanie"/></br><p3>Podaj nową treść pytania 13</p3>
<input type="text" name="pytanie13" placeholder=""/><input type="submit" class="stripe" name="update13" value="Zaktualizuj pytanie"/></br><p3>Podaj nową treść pytania 14</p3>
<input type="text" name="pytanie14" placeholder=""/><input type="submit" class="stripe" name="update14" value="Zaktualizuj pytanie"/></br><p3>Podaj nową treść pytania 15</p3>
<input type="text" name="pytanie15" placeholder=""/><input type="submit" class="stripe" name="update15" value="Zaktualizuj pytanie"/></br><p3>Podaj nową treść pytania 16</p3>
<input type="text" name="pytanie16" placeholder=""/><input type="submit" class="stripe" name="update16" value="Zaktualizuj pytanie"/></br><p3>Podaj nową treść pytania 17</p3>
<input type="text" name="pytanie17" placeholder=""/><input type="submit" class="stripe" name="update17" value="Zaktualizuj pytanie"/></br><p3>Podaj nową treść pytania 18</p3>
<input type="text" name="pytanie18" placeholder=""/><input type="submit" class="stripe" name="update18" value="Zaktualizuj pytanie"/></br><p3>Podaj nową treść pytania 19</p3>
<input type="text" name="pytanie19" placeholder=""/><input type="submit" class="stripe" name="update19" value="Zaktualizuj pytanie"/></br><p3>Podaj nową treść pytania 20</p3>
<input type="text" name="pytanie20" placeholder=""/><input type="submit" class="stripe" name="update20" value="Zaktualizuj pytanie"/></br><p3>Podaj nową treść pytania 21</p3>
<input type="text" name="pytanie21" placeholder=""/><input type="submit" class="stripe" name="update21" value="Zaktualizuj pytanie"/></br><p3>Podaj nową treść pytania 22</p3>
<input type="text" name="pytanie22" placeholder=""/><input type="submit" class="stripe" name="update22" value="Zaktualizuj pytanie"/></br><p3>Podaj nową treść pytania 23</p3>
<input type="text" name="pytanie23" placeholder=""/><input type="submit" class="stripe" name="update23" value="Zaktualizuj pytanie"/></br><p3>Podaj nową treść pytania 24</p3>
<input type="text" name="pytanie24" placeholder=""/><input type="submit" class="stripe" name="update24" value="Zaktualizuj pytanie"/></br><p3>Podaj nową treść pytania 25</p3>
<input type="text" name="pytanie25" placeholder=""/><input type="submit" class="stripe" name="update25" value="Zaktualizuj pytanie"/></br><p3>Podaj nową treść pytania 26</p3>
<input type="text" name="pytanie26" placeholder=""/><input type="submit" class="stripe" name="update26" value="Zaktualizuj pytanie"/>


</form></header> 
 	

<form action="" method="POST">
<input type="submit" class='reset' name="testuje" value="RESET PYTAŃ"/></br>
</form>




</body>
</html>


<?php  

$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'test1');

#====================================================================================

if(isset($_POST['update1']))
{
	$id = 1;
	$query = "UPDATE `pytania` set pytanie1='$_POST[pytanie1]' where id=1 ";
	$query_run = mysqli_query($connection,$query);
}

#====================================================================================

if(isset($_POST['update2']))
{
	$id = 1;
	$query = "UPDATE `pytania` set pytanie2='$_POST[pytanie2]' where id=1 ";
	$query_run = mysqli_query($connection,$query);	
}

#====================================================================================

if(isset($_POST['update3']))
{
	$id = 1;
	$query = "UPDATE `pytania` set pytanie3='$_POST[pytanie3]' where id=1 ";
	$query_run = mysqli_query($connection,$query);
}

#====================================================================================

if(isset($_POST['update4']))
{
	$id = 1;
	$query = "UPDATE `pytania` set pytanie4='$_POST[pytanie4]' where id=1 ";
	$query_run = mysqli_query($connection,$query);
}

#====================================================================================

if(isset($_POST['update5']))
{
	$id = 1;
	$query = "UPDATE `pytania` set pytanie5='$_POST[pytanie5]' where id=1 ";
	$query_run = mysqli_query($connection,$query);
}

#====================================================================================

if(isset($_POST['update6']))
{
	$id = 1;
	$query = "UPDATE `pytania` set pytanie6='$_POST[pytanie6]' where id=1 ";
	$query_run = mysqli_query($connection,$query);
}

#====================================================================================

if(isset($_POST['update7']))
{
	$id = 1;
	$query = "UPDATE `pytania` set pytanie7='$_POST[pytanie7]' where id=1 ";
	$query_run = mysqli_query($connection,$query);
}

#====================================================================================

if(isset($_POST['update8']))
{
	$id = 1;
	$query = "UPDATE `pytania` set pytanie8='$_POST[pytanie8]' where id=1 ";
	$query_run = mysqli_query($connection,$query);
}

#====================================================================================

if(isset($_POST['update9']))
{
	$id = 1;
	$query = "UPDATE `pytania` set pytanie9='$_POST[pytanie9]' where id=1 ";
	$query_run = mysqli_query($connection,$query);
}

#====================================================================================

if(isset($_POST['update10']))
{
	$id = 1;
	$query = "UPDATE `pytania` set pytanie10='$_POST[pytanie10]' where id=1 ";
	$query_run = mysqli_query($connection,$query);
}

#====================================================================================

if(isset($_POST['update11']))
{
	$id = 1;
	$query = "UPDATE `pytania` set pytanie11='$_POST[pytanie11]' where id=1 ";
	$query_run = mysqli_query($connection,$query);
}

#====================================================================================

if(isset($_POST['update12']))
{
	$id = 1;
	$query = "UPDATE `pytania` set pytanie12='$_POST[pytanie12]' where id=1 ";
	$query_run = mysqli_query($connection,$query);
}

#====================================================================================

if(isset($_POST['update13']))
{
	$id = 1;
	$query = "UPDATE `pytania` set pytanie13='$_POST[pytanie13]' where id=1 ";
	$query_run = mysqli_query($connection,$query);
}

#====================================================================================

if(isset($_POST['update14']))
{
	$id = 1;
	$query = "UPDATE `pytania` set pytanie14='$_POST[pytanie14]' where id=1 ";
	$query_run = mysqli_query($connection,$query);
}

#====================================================================================

if(isset($_POST['update15']))
{
	$id = 1;
	$query = "UPDATE `pytania` set pytanie15='$_POST[pytanie15]' where id=1 ";
	$query_run = mysqli_query($connection,$query);
}

#====================================================================================

if(isset($_POST['update16']))
{
	$id = 1;
	$query = "UPDATE `pytania` set pytanie16='$_POST[pytanie16]' where id=1 ";
	$query_run = mysqli_query($connection,$query);
}

#====================================================================================

if(isset($_POST['update17']))
{
	$id = 1;
	$query = "UPDATE `pytania` set pytanie17='$_POST[pytanie17]' where id=1 ";
	$query_run = mysqli_query($connection,$query);
}

#====================================================================================

if(isset($_POST['update18']))
{
	$id = 1;
	$query = "UPDATE `pytania` set pytanie18='$_POST[pytanie18]' where id=1 ";
	$query_run = mysqli_query($connection,$query);
}

#====================================================================================

if(isset($_POST['update19']))
{
	$id = 1;
	$query = "UPDATE `pytania` set pytanie19='$_POST[pytanie19]' where id=1 ";
	$query_run = mysqli_query($connection,$query);
}

#====================================================================================

if(isset($_POST['update20']))
{
	$id = 1;
	$query = "UPDATE `pytania` set pytanie20='$_POST[pytanie20]' where id=1 ";
	$query_run = mysqli_query($connection,$query);
}

#====================================================================================

if(isset($_POST['update21']))
{
	$id = 1;
	$query = "UPDATE `pytania` set pytanie21='$_POST[pytanie21]' where id=1 ";
	$query_run = mysqli_query($connection,$query);
}

#====================================================================================

if(isset($_POST['update22']))
{
	$id = 1;
	$query = "UPDATE `pytania` set pytanie22='$_POST[pytanie22]' where id=1 ";
	$query_run = mysqli_query($connection,$query);
}

#====================================================================================

if(isset($_POST['update23']))
{
	$id = 1;
	$query = "UPDATE `pytania` set pytanie23='$_POST[pytanie23]' where id=1 ";
	$query_run = mysqli_query($connection,$query);
}

#====================================================================================

if(isset($_POST['update24']))
{
	$id = 1;
	$query = "UPDATE `pytania` set pytanie24='$_POST[pytanie24]' where id=1 ";
	$query_run = mysqli_query($connection,$query);
}

#====================================================================================

if(isset($_POST['update25']))
{
	$id = 1;
	$query = "UPDATE `pytania` set pytanie25='$_POST[pytanie25]' where id=1 ";
	$query_run = mysqli_query($connection,$query);
}

#====================================================================================

if(isset($_POST['update26']))
{
	$id = 1;
	$query = "UPDATE `pytania` set pytanie26='$_POST[pytanie26]' where id=1 ";
	$query_run = mysqli_query($connection,$query);
}

#====================================================================================

if(isset($_POST['testuje']))
{
	$id = 1;
	$query = "UPDATE `pytania` set 
	pytanie1='Gdy musisz wybrać się na cały dzień do innego miasta wolisz planować wyjazd i przebieg całego dnia niż iść spontanicznie',	
	pytanie2='Gdybym był nauczycielem wolałbym uczyć zagadnień czysto opartych na faktach niż teoriach, opiniach i domysłach.',	
	pytanie3='Na imprezach jesteś raczej cichy i zdystansowany',	
	pytanie4='Częściej podejmujesz decyzje kierowany sercem niż rozumem',	
	pytanie5='Wolisz trzymać się ogólnie przyjętych standardów niż próbować wymyślić koło na nowo',	
	pytanie6='Pośród swoich znajomych jesteś na bierząco z ich wydarzeniami z ich życia',	
	pytanie7='Jaki wpływ ma na ciebie posiadanie listy rzeczy do zrobienia przez weekend',	
	pytanie8='Gdy dostajesz specjalne zadanie do wykonania to wolisz poświęcić czas i odpowiednio przygotować wcześniej stanowisko pracy i potrzebne narzędzia',	
	pytanie9='Wolę wiele niezobowiązujących przyjaźni z wieloma róznymi ludźmi niż trzymać się głebokiej przyjaźni z wąską grupą osób',	
	pytanie10='Bardziej podziwiam ludzi którzy zachowują się normalnie, nie potrzbują być w centrum uwagi',	
	pytanie11='Preferuje organizować przyjęcia, imprezy, domówki, spotkania etc z dużym wyprzedzeniem',	
	pytanie12='Wolę spędzać czas z realistami niż z marzycielami',	
	pytanie13='Gdy jestem w grupie ludzi wolę stać z tyłu i słuchać niż dołączyć do dyskusji ze wszystkimi',	
	pytanie14='Większym komplementem dla ciebie jest nazwanie cię',	
	pytanie15='Gdy czytasz książkę wolisz by autor wprost powiedział o co chodzi niż żeby używał rozmaitych przenośni, opisów i nawiązań',	
	pytanie16='Łatwo mi znaleźć temat i rozmawiać z prawie każdym przez dłuższy okres czasu',	
	pytanie17='Jeżeli jest zaplanowane że muszę zrobić konkretną rzecz w konkretnym czasie w konkretny sposób to czuję że moja kreatywność jest ograniczana',	
	pytanie18='Wolę podchodzić do problemu we własny sposób w czasie wybranym przez siebie',	
	pytanie19='Lepiej radzę sobie z nagłymi nieoczekiwanymi sytuacjami niż z dokładniej zaplanowanymi',	
	pytanie20='Jesteś uznawany raczej za osobę',	
	pytanie21='W większej grupie pomagam innym się zapoznawać ze sobą aniżeli inni pomagają mi',	
	pytanie22='Uważam że logika jest ważniejsza niż emocje',	
	pytanie23='Wolisz mieć za przyjaciela kogoś kto twardo stąpa po ziemi niż kogoś bujającego głową w obłokach',	
	pytanie24='Chętnie dzielę się informacją o swoich pasjach z nowo poznanymi ludźmi',	
	pytanie25='Na codzień w pracy planuję co będę robił cały dzień, nie lubię spontaniczności i braku z góry zaplanowanych zadań',	
	pytanie26='Łatwo mi okazywać uczucia'	where id=1 ";
	$query_run = mysqli_query($connection,$query);	
}




?>


