<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
	
    <title>test</title>
	<link rel="stylesheet" type="text/css" href="osobowosci.css">


</head>
<body>
<ul><center>	
  <li><a href="index.php">Strona Domowa</a></li>
  <li><a href="index1.php">Kwestionariusz</a></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Edycja pytań</a>
    <div class="dropdown-content">
      <a href="tests.php">Edycja pytań 1-26</a>
      <a href="tworca.php">Edycja słów 27-50</a>
    </div></li>
	
	<li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Edycja punktacji pytań</a>
    <div class="dropdown-content">
      <a href="tests.php">Edycja dla pytań 1-26</a>
      <a href="tworca.php">Edycja dla słów 27-50</a>
    </div></li>
	
	<li class="dropdown">
	<a href="javascript:void(0)" class="dropbtn">Statystyki</a>
    <div class="dropdown-content">
      <a href="statystyki.php">Ogólne statystyki</a>
      <a href="wykres.php">Statystyki pytań</a>
      <a href="wykresy2.php">Statystyki słów</a>
    </div></li>
  </li>
   <li><a href="test.php">Osobowości</a></li>
  
  </center>	
</ul>
<center>

<div  class="div-menu">
<h1>Dowiedz się więcej o typach osobowości!</h1>
</div>
<h3>Typy osobowości rozróżniamy w 4 kategoriach - <p1>Analitycy</p1>, <p2>Dyplomaci</p2>, <p3>Strażnicy</p3> oraz <p4>Odkrywcy</p4>.</br>
W każdej z tych kategorii rozróżniamy dodatkowo 4 podtypy osób, a prezentują się one następująco:</h3>







<div  class="div-1">
<p>Analitycy</p>

		<div class="div-4">  <a href="typy/strateg.php">
		<img id="myImg"  src="ikony/architekt.png" width="400" height="400"></a>
		<p class="pa">Architekt - INTJ</p></div>
		
		<div class="div-4"> <a href="typy/logik.php">
        <img id="myImg"  src="ikony/logik.png" width="400" height="400"></a>
		<p class="pa">Logik - INTP</p></div>
		
		<div class="div-4"> <a href="typy/dyrektor.php">
        <img id="myImg"  src="ikony/dowódca.png" width="400" height="400"></a>
		<p class="pa">Dyrektor - ENTJ</p></div>
		
		<div class="div-4"> <a href="typy/innowator.php">
        <img id="myImg"  src="ikony/dyskutant.png" width="400" height="400"></a>
		<p class="pa">Innowator - ENTP</p></div>

</div>

<div  class="div-2">
<p>Dyplomaci</p>

		<div class="div-4">  <a href="typy/mentor.php">
		<img id="myImg"  src="ikony/rzecznik.png" width="400" height="400"></a>
		<p class="pa">Mentor - INFJ</p></div>
		
		<div class="div-4"> <a href="typy/idealista.php">
        <img id="myImg"  src="ikony/pośrednik.png" width="400" height="400"></a>
		<p class="pa">Idealista - INFP</p></div>
		
		<div class="div-4"> <a href="typy/doradca.php">
        <img id="myImg"  src="ikony/protagonista.png" width="400" height="400"></a>
		<p class="pa">Doradca - ENFJ</p></div>
		
		<div class="div-4"> <a href="typy/entuzjasta.php">
        <img id="myImg"  src="ikony/działacz.png" width="400" height="400"></a>
		<p class="pa">Entuzjasta - ENFP</p></div>

</div>

<div  class="div-3">
<p>Strażnicy</p>

		<div class="div-4">  <a href="typy/inspektor.php">
		<img id="myImg"  src="ikony/logistyk.png" width="400" height="400"></a>
		<p class="pa">Inspektor - ISTJ</p></div>
		
		<div class="div-4"> <a href="typy/opiekun.php">
        <img id="myImg"  src="ikony/obrońca.png" width="400" height="400"></a>
		<p class="pa">Opiekun - ISFJ</p></div>
		
		<div class="div-4"> <a href="typy/administrator.php">
        <img id="myImg"  src="ikony/wykonawca.png" width="400" height="400"></a>
		<p class="pa">Administrator - ESTJ</p></div>
		
		<div class="div-4"> <a href="typy/adwokat.php">
        <img id="myImg"  src="ikony/doradca.png" width="400" height="400"></a>
		<p class="pa">Adwokat - ESFJ</p></div>

</div>

<div  class="div4">
<p>Odkrywcy</p>

		<div class="div-4">  <a href="typy/praktyk.php">
		<img id="myImg"  src="ikony/wirtuoz.png" width="400" height="400"></a>
		<p class="pa">Praktyk - ISTP</p></div>
		
		<div class="div-4"> <a href="typy/artysta.php">
        <img id="myImg"  src="ikony/poszukiwacz.png" width="400" height="400"></a>
		<p  class="pa">Artysta - ISFP</p></div>
		
		<div class="div-4"> <a href="typy/animator.php">
        <img id="myImg"  src="ikony/przedsiębiorca.png" width="400" height="400"></a>
		<p class="pa">Animator - ESTP</p></div>
		
		<div class="div-4"> <a href="typy/prezenter.php">
        <img id="myImg"  src="ikony/animator.png" width="400" height="400"></a>
		<p class="pa">Prezenter - ESFP</p></div>

</div>






<center>


<script>

var modal = document.getElementById("myModal");


var img = document.getElementById("myImg");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}


var span = document.getElementsByClassName("close")[0];


span.onclick = function() { 
  modal.style.display = "none";
}
</script>
</body>
</html>