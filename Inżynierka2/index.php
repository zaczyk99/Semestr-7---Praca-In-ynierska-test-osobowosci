<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Menu</title>
    <link rel="stylesheet" type="text/css" href="menu.css">
</head>
<body>
    
<ul>
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
      <a href="tests2.php">Edycja dla pytań 1-26</a>
      <a href="tworca2.php">Edycja dla słów 27-50</a>
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
</ul>

        <div  class="div-1">
            <h2>
                Czy zastanawiałeś się kiedyś jaką masz osobowość? A może chciałbyś dowiedzieć się jak postępujesz w konkretnych sytuacjach? Nic prostszego,
                drogą do odpowiedzi na te pytania może okazać się ten oto kwestionariusz!
            </h2>
                <p>
                    Test stworzony przez Katherine Cook Briggs oraz jej córkę Isabel Briggs Myers w wysoce prawdopodobny sposób zdiagnozuje jaki masz typ osobowości. Więc na co czekasz?
                </p></div>
                <form action="index1.php">
                    <input type="submit" value="Zaczynamy!" class="button" />
                </form>
</body></html>

