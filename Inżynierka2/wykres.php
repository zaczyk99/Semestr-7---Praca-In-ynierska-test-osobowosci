
<?php

$con=mysqli_connect("localhost","root","","test1") or die("Nie można połączyć");

$query="SELECT 
(SELECT COUNT(`pytanie1`) FROM odpowiedzi2) as wszystkie,
ROUND((SELECT COUNT(`pytanie1`) FROM odpowiedzi2 where pytanie1='a') 	* 100 / (SELECT COUNT(`pytanie1`) FROM odpowiedzi2),1) as a1,
ROUND((SELECT COUNT(`pytanie1`) FROM odpowiedzi2 where pytanie1='b') 	* 100 / (SELECT COUNT(`pytanie1`) FROM odpowiedzi2),1) as b1,
ROUND((SELECT COUNT(`pytanie1`) FROM odpowiedzi2 where pytanie1='c') 	* 100 / (SELECT COUNT(`pytanie1`) FROM odpowiedzi2),1) as c1,
ROUND((SELECT COUNT(`pytanie1`) FROM odpowiedzi2 where pytanie1='d') 	* 100 / (SELECT COUNT(`pytanie1`) FROM odpowiedzi2),1) as d1,
ROUND((SELECT COUNT(`pytanie1`) FROM odpowiedzi2 where pytanie1='e') 	* 100 / (SELECT COUNT(`pytanie1`) FROM odpowiedzi2),1) as e1,
ROUND((SELECT COUNT(`pytanie2`) FROM odpowiedzi2 where pytanie2='a') 	* 100 / (SELECT COUNT(`pytanie2`) FROM odpowiedzi2),1) as a2,
ROUND((SELECT COUNT(`pytanie2`) FROM odpowiedzi2 where pytanie2='b') 	* 100 / (SELECT COUNT(`pytanie2`) FROM odpowiedzi2),1) as b2,
ROUND((SELECT COUNT(`pytanie2`) FROM odpowiedzi2 where pytanie2='c') 	* 100 / (SELECT COUNT(`pytanie2`) FROM odpowiedzi2),1) as c2,
ROUND((SELECT COUNT(`pytanie2`) FROM odpowiedzi2 where pytanie2='d') 	* 100 / (SELECT COUNT(`pytanie2`) FROM odpowiedzi2),1) as d2,
ROUND((SELECT COUNT(`pytanie2`) FROM odpowiedzi2 where pytanie2='e') 	* 100 / (SELECT COUNT(`pytanie2`) FROM odpowiedzi2),1) as e2,
ROUND((SELECT COUNT(`pytanie3`) FROM odpowiedzi2 where pytanie3='a') 	* 100 / (SELECT COUNT(`pytanie3`) FROM odpowiedzi2),1) as a3,
ROUND((SELECT COUNT(`pytanie3`) FROM odpowiedzi2 where pytanie3='b') 	* 100 / (SELECT COUNT(`pytanie3`) FROM odpowiedzi2),1) as b3,
ROUND((SELECT COUNT(`pytanie3`) FROM odpowiedzi2 where pytanie3='c') 	* 100 / (SELECT COUNT(`pytanie3`) FROM odpowiedzi2),1) as c3,
ROUND((SELECT COUNT(`pytanie3`) FROM odpowiedzi2 where pytanie3='d') 	* 100 / (SELECT COUNT(`pytanie3`) FROM odpowiedzi2),1) as d3,
ROUND((SELECT COUNT(`pytanie3`) FROM odpowiedzi2 where pytanie3='e') 	* 100 / (SELECT COUNT(`pytanie3`) FROM odpowiedzi2),1) as e3,
ROUND((SELECT COUNT(`pytanie4`) FROM odpowiedzi2 where pytanie4='a') 	* 100 / (SELECT COUNT(`pytanie4`) FROM odpowiedzi2),1) as a4,
ROUND((SELECT COUNT(`pytanie4`) FROM odpowiedzi2 where pytanie4='b') 	* 100 / (SELECT COUNT(`pytanie4`) FROM odpowiedzi2),1) as b4,
ROUND((SELECT COUNT(`pytanie4`) FROM odpowiedzi2 where pytanie4='c') 	* 100 / (SELECT COUNT(`pytanie4`) FROM odpowiedzi2),1) as c4,
ROUND((SELECT COUNT(`pytanie4`) FROM odpowiedzi2 where pytanie4='d') 	* 100 / (SELECT COUNT(`pytanie4`) FROM odpowiedzi2),1) as d4,
ROUND((SELECT COUNT(`pytanie4`) FROM odpowiedzi2 where pytanie4='e') 	* 100 / (SELECT COUNT(`pytanie4`) FROM odpowiedzi2),1) as e4,
ROUND((SELECT COUNT(`pytanie5`) FROM odpowiedzi2 where pytanie5='a') 	* 100 / (SELECT COUNT(`pytanie5`) FROM odpowiedzi2),1) as a5,
ROUND((SELECT COUNT(`pytanie5`) FROM odpowiedzi2 where pytanie5='b') 	* 100 / (SELECT COUNT(`pytanie5`) FROM odpowiedzi2),1) as b5,
ROUND((SELECT COUNT(`pytanie5`) FROM odpowiedzi2 where pytanie5='c') 	* 100 / (SELECT COUNT(`pytanie5`) FROM odpowiedzi2),1) as c5,
ROUND((SELECT COUNT(`pytanie5`) FROM odpowiedzi2 where pytanie5='d') 	* 100 / (SELECT COUNT(`pytanie5`) FROM odpowiedzi2),1) as d5,
ROUND((SELECT COUNT(`pytanie5`) FROM odpowiedzi2 where pytanie5='e') 	* 100 / (SELECT COUNT(`pytanie5`) FROM odpowiedzi2),1) as e5,
ROUND((SELECT COUNT(`pytanie6`) FROM odpowiedzi2 where pytanie6='a') 	* 100 / (SELECT COUNT(`pytanie6`) FROM odpowiedzi2),1) as a6,
ROUND((SELECT COUNT(`pytanie6`) FROM odpowiedzi2 where pytanie6='b') 	* 100 / (SELECT COUNT(`pytanie6`) FROM odpowiedzi2),1) as b6,
ROUND((SELECT COUNT(`pytanie6`) FROM odpowiedzi2 where pytanie6='c') 	* 100 / (SELECT COUNT(`pytanie6`) FROM odpowiedzi2),1) as c6,
ROUND((SELECT COUNT(`pytanie6`) FROM odpowiedzi2 where pytanie6='d') 	* 100 / (SELECT COUNT(`pytanie6`) FROM odpowiedzi2),1) as d6,
ROUND((SELECT COUNT(`pytanie6`) FROM odpowiedzi2 where pytanie6='e') 	* 100 / (SELECT COUNT(`pytanie6`) FROM odpowiedzi2),1) as e6,

ROUND((SELECT COUNT(`pytanie7`) FROM odpowiedzi2 where pytanie7='A') 	* 100 / (SELECT COUNT(`pytanie7`) FROM odpowiedzi2),1) as a7,
ROUND((SELECT COUNT(`pytanie7`) FROM odpowiedzi2 where pytanie7='B') 	* 100 / (SELECT COUNT(`pytanie7`) FROM odpowiedzi2),1) as c7,
ROUND((SELECT COUNT(`pytanie7`) FROM odpowiedzi2 where pytanie7='C') 	* 100 / (SELECT COUNT(`pytanie7`) FROM odpowiedzi2),1) as e7,

ROUND((SELECT COUNT(`pytanie8`) FROM odpowiedzi2 where pytanie8='a') 	* 100 / (SELECT COUNT(`pytanie8`) FROM odpowiedzi2),1) as a8,
ROUND((SELECT COUNT(`pytanie8`) FROM odpowiedzi2 where pytanie8='b') 		* 100 / (SELECT COUNT(`pytanie8`) FROM odpowiedzi2),1) as b8,
ROUND((SELECT COUNT(`pytanie8`) FROM odpowiedzi2 where pytanie8='c') 	* 100 / (SELECT COUNT(`pytanie8`) FROM odpowiedzi2),1) as c8,
ROUND((SELECT COUNT(`pytanie8`) FROM odpowiedzi2 where pytanie8='d') 	* 100 / (SELECT COUNT(`pytanie8`) FROM odpowiedzi2),1) as d8,
ROUND((SELECT COUNT(`pytanie8`) FROM odpowiedzi2 where pytanie8='e') 	* 100 / (SELECT COUNT(`pytanie8`) FROM odpowiedzi2),1) as e8,
ROUND((SELECT COUNT(`pytanie9`) FROM odpowiedzi2 where pytanie9='a') 	* 100 / (SELECT COUNT(`pytanie9`) FROM odpowiedzi2),1) as a9,
ROUND((SELECT COUNT(`pytanie9`) FROM odpowiedzi2 where pytanie9='b') 		* 100 / (SELECT COUNT(`pytanie9`) FROM odpowiedzi2),1) as b9,
ROUND((SELECT COUNT(`pytanie9`) FROM odpowiedzi2 where pytanie9='c') 	* 100 / (SELECT COUNT(`pytanie9`) FROM odpowiedzi2),1) as c9,
ROUND((SELECT COUNT(`pytanie9`) FROM odpowiedzi2 where pytanie9='d') 	* 100 / (SELECT COUNT(`pytanie9`) FROM odpowiedzi2),1) as d9,
ROUND((SELECT COUNT(`pytanie9`) FROM odpowiedzi2 where pytanie9='e') 	* 100 / (SELECT COUNT(`pytanie9`) FROM odpowiedzi2),1) as e9,
ROUND((SELECT COUNT(`pytanie10`) FROM odpowiedzi2 where pytanie10='a') 	* 100 / (SELECT COUNT(`pytanie10`) FROM odpowiedzi2),1) as a10,
ROUND((SELECT COUNT(`pytanie10`) FROM odpowiedzi2 where pytanie10='b') 	* 100 / (SELECT COUNT(`pytanie10`) FROM odpowiedzi2),1) as b10,
ROUND((SELECT COUNT(`pytanie10`) FROM odpowiedzi2 where pytanie10='c') 	* 100 / (SELECT COUNT(`pytanie10`) FROM odpowiedzi2),1) as c10,
ROUND((SELECT COUNT(`pytanie10`) FROM odpowiedzi2 where pytanie10='d') * 100 / (SELECT COUNT(`pytanie10`) FROM odpowiedzi2),1) as d10,
ROUND((SELECT COUNT(`pytanie10`) FROM odpowiedzi2 where pytanie10='e') 	* 100 / (SELECT COUNT(`pytanie10`) FROM odpowiedzi2),1) as e10,
ROUND((SELECT COUNT(`pytanie11`) FROM odpowiedzi2 where pytanie11='a') 	* 100 / (SELECT COUNT(`pytanie11`) FROM odpowiedzi2),1) as a11,
ROUND((SELECT COUNT(`pytanie11`) FROM odpowiedzi2 where pytanie11='b') 	* 100 / (SELECT COUNT(`pytanie11`) FROM odpowiedzi2),1) as b11,
ROUND((SELECT COUNT(`pytanie11`) FROM odpowiedzi2 where pytanie11='c') 	* 100 / (SELECT COUNT(`pytanie11`) FROM odpowiedzi2),1) as c11,
ROUND((SELECT COUNT(`pytanie11`) FROM odpowiedzi2 where pytanie11='d') * 100 / (SELECT COUNT(`pytanie11`) FROM odpowiedzi2),1) as d11,
ROUND((SELECT COUNT(`pytanie11`) FROM odpowiedzi2 where pytanie11='e') 	* 100 / (SELECT COUNT(`pytanie11`) FROM odpowiedzi2),1) as e11,
ROUND((SELECT COUNT(`pytanie12`) FROM odpowiedzi2 where pytanie12='a') 	* 100 / (SELECT COUNT(`pytanie12`) FROM odpowiedzi2),1) as a12,
ROUND((SELECT COUNT(`pytanie12`) FROM odpowiedzi2 where pytanie12='b') 	* 100 / (SELECT COUNT(`pytanie12`) FROM odpowiedzi2),1) as b12,
ROUND((SELECT COUNT(`pytanie12`) FROM odpowiedzi2 where pytanie12='c') 	* 100 / (SELECT COUNT(`pytanie12`) FROM odpowiedzi2),1) as c12,
ROUND((SELECT COUNT(`pytanie12`) FROM odpowiedzi2 where pytanie12='d') * 100 / (SELECT COUNT(`pytanie12`) FROM odpowiedzi2),1) as d12,
ROUND((SELECT COUNT(`pytanie12`) FROM odpowiedzi2 where pytanie12='e') 	* 100 / (SELECT COUNT(`pytanie12`) FROM odpowiedzi2),1) as e12,
ROUND((SELECT COUNT(`pytanie13`) FROM odpowiedzi2 where pytanie13='a') 	* 100 / (SELECT COUNT(`pytanie13`) FROM odpowiedzi2),1) as a13,
ROUND((SELECT COUNT(`pytanie13`) FROM odpowiedzi2 where pytanie13='b') 	* 100 / (SELECT COUNT(`pytanie13`) FROM odpowiedzi2),1) as b13,
ROUND((SELECT COUNT(`pytanie13`) FROM odpowiedzi2 where pytanie13='c') 	* 100 / (SELECT COUNT(`pytanie13`) FROM odpowiedzi2),1) as c13,
ROUND((SELECT COUNT(`pytanie13`) FROM odpowiedzi2 where pytanie13='d') * 100 / (SELECT COUNT(`pytanie13`) FROM odpowiedzi2),1) as d13,
ROUND((SELECT COUNT(`pytanie13`) FROM odpowiedzi2 where pytanie13='e') 	* 100 / (SELECT COUNT(`pytanie13`) FROM odpowiedzi2),1) as e13,
ROUND((SELECT COUNT(`pytanie14`) FROM odpowiedzi2 where pytanie14='a') 	* 100 / (SELECT COUNT(`pytanie14`) FROM odpowiedzi2),1) as a14,
ROUND((SELECT COUNT(`pytanie14`) FROM odpowiedzi2 where pytanie14='b') 	* 100 / (SELECT COUNT(`pytanie14`) FROM odpowiedzi2),1) as b14,
ROUND((SELECT COUNT(`pytanie14`) FROM odpowiedzi2 where pytanie14='c') 	* 100 / (SELECT COUNT(`pytanie14`) FROM odpowiedzi2),1) as c14,
ROUND((SELECT COUNT(`pytanie14`) FROM odpowiedzi2 where pytanie14='d') * 100 / (SELECT COUNT(`pytanie14`) FROM odpowiedzi2),1) as d14,
ROUND((SELECT COUNT(`pytanie14`) FROM odpowiedzi2 where pytanie14='e') 	* 100 / (SELECT COUNT(`pytanie14`) FROM odpowiedzi2),1) as e14,
ROUND((SELECT COUNT(`pytanie15`) FROM odpowiedzi2 where pytanie15='a') 	* 100 / (SELECT COUNT(`pytanie15`) FROM odpowiedzi2),1) as a15,
ROUND((SELECT COUNT(`pytanie15`) FROM odpowiedzi2 where pytanie15='b') 	* 100 / (SELECT COUNT(`pytanie15`) FROM odpowiedzi2),1) as b15,
ROUND((SELECT COUNT(`pytanie15`) FROM odpowiedzi2 where pytanie15='c') 	* 100 / (SELECT COUNT(`pytanie15`) FROM odpowiedzi2),1) as c15,
ROUND((SELECT COUNT(`pytanie15`) FROM odpowiedzi2 where pytanie15='d') * 100 / (SELECT COUNT(`pytanie15`) FROM odpowiedzi2),1) as d15,
ROUND((SELECT COUNT(`pytanie15`) FROM odpowiedzi2 where pytanie15='e') 	* 100 / (SELECT COUNT(`pytanie15`) FROM odpowiedzi2),1) as e15,
ROUND((SELECT COUNT(`pytanie16`) FROM odpowiedzi2 where pytanie16='a') 	* 100 / (SELECT COUNT(`pytanie16`) FROM odpowiedzi2),1) as a16,
ROUND((SELECT COUNT(`pytanie16`) FROM odpowiedzi2 where pytanie16='b') 	* 100 / (SELECT COUNT(`pytanie16`) FROM odpowiedzi2),1) as b16,
ROUND((SELECT COUNT(`pytanie16`) FROM odpowiedzi2 where pytanie16='c') 	* 100 / (SELECT COUNT(`pytanie16`) FROM odpowiedzi2),1) as c16,
ROUND((SELECT COUNT(`pytanie16`) FROM odpowiedzi2 where pytanie16='d') * 100 / (SELECT COUNT(`pytanie16`) FROM odpowiedzi2),1) as d16,
ROUND((SELECT COUNT(`pytanie16`) FROM odpowiedzi2 where pytanie16='e') 	* 100 / (SELECT COUNT(`pytanie16`) FROM odpowiedzi2),1) as e16,
ROUND((SELECT COUNT(`pytanie17`) FROM odpowiedzi2 where pytanie17='a') 	* 100 / (SELECT COUNT(`pytanie17`) FROM odpowiedzi2),1) as a17,
ROUND((SELECT COUNT(`pytanie17`) FROM odpowiedzi2 where pytanie17='b') 	* 100 / (SELECT COUNT(`pytanie17`) FROM odpowiedzi2),1) as b17,
ROUND((SELECT COUNT(`pytanie17`) FROM odpowiedzi2 where pytanie17='c') 	* 100 / (SELECT COUNT(`pytanie17`) FROM odpowiedzi2),1) as c17,
ROUND((SELECT COUNT(`pytanie17`) FROM odpowiedzi2 where pytanie17='d') * 100 / (SELECT COUNT(`pytanie17`) FROM odpowiedzi2),1) as d17,
ROUND((SELECT COUNT(`pytanie17`) FROM odpowiedzi2 where pytanie17='e') 	* 100 / (SELECT COUNT(`pytanie17`) FROM odpowiedzi2),1) as e17,
ROUND((SELECT COUNT(`pytanie18`) FROM odpowiedzi2 where pytanie18='a') 	* 100 / (SELECT COUNT(`pytanie18`) FROM odpowiedzi2),1) as a18,
ROUND((SELECT COUNT(`pytanie18`) FROM odpowiedzi2 where pytanie18='b') 	* 100 / (SELECT COUNT(`pytanie18`) FROM odpowiedzi2),1) as b18,
ROUND((SELECT COUNT(`pytanie18`) FROM odpowiedzi2 where pytanie18='c') 	* 100 / (SELECT COUNT(`pytanie18`) FROM odpowiedzi2),1) as c18,
ROUND((SELECT COUNT(`pytanie18`) FROM odpowiedzi2 where pytanie18='d') * 100 / (SELECT COUNT(`pytanie18`) FROM odpowiedzi2),1) as d18,
ROUND((SELECT COUNT(`pytanie18`) FROM odpowiedzi2 where pytanie18='e') 	* 100 / (SELECT COUNT(`pytanie18`) FROM odpowiedzi2),1) as e18,
ROUND((SELECT COUNT(`pytanie19`) FROM odpowiedzi2 where pytanie19='a') 	* 100 / (SELECT COUNT(`pytanie19`) FROM odpowiedzi2),1) as a19,
ROUND((SELECT COUNT(`pytanie19`) FROM odpowiedzi2 where pytanie19='b') 	* 100 / (SELECT COUNT(`pytanie19`) FROM odpowiedzi2),1) as b19,
ROUND((SELECT COUNT(`pytanie19`) FROM odpowiedzi2 where pytanie19='c') 	* 100 / (SELECT COUNT(`pytanie19`) FROM odpowiedzi2),1) as c19,
ROUND((SELECT COUNT(`pytanie19`) FROM odpowiedzi2 where pytanie19='d') * 100 / (SELECT COUNT(`pytanie19`) FROM odpowiedzi2),1) as d19,
ROUND((SELECT COUNT(`pytanie19`) FROM odpowiedzi2 where pytanie19='e') 	* 100 / (SELECT COUNT(`pytanie19`) FROM odpowiedzi2),1) as e19,
ROUND((SELECT COUNT(`pytanie20`) FROM odpowiedzi2 where pytanie20='a') 	* 100 / (SELECT COUNT(`pytanie20`) FROM odpowiedzi2),1) as a20,
ROUND((SELECT COUNT(`pytanie20`) FROM odpowiedzi2 where pytanie20='b') 	* 100 / (SELECT COUNT(`pytanie20`) FROM odpowiedzi2),1) as b20,
ROUND((SELECT COUNT(`pytanie20`) FROM odpowiedzi2 where pytanie20='c') 	* 100 / (SELECT COUNT(`pytanie20`) FROM odpowiedzi2),1) as c20,
ROUND((SELECT COUNT(`pytanie20`) FROM odpowiedzi2 where pytanie20='d') * 100 / (SELECT COUNT(`pytanie20`) FROM odpowiedzi2),1) as d20,
ROUND((SELECT COUNT(`pytanie20`) FROM odpowiedzi2 where pytanie20='e') 	* 100 / (SELECT COUNT(`pytanie20`) FROM odpowiedzi2),1) as e20,
ROUND((SELECT COUNT(`pytanie21`) FROM odpowiedzi2 where pytanie21='a') 	* 100 / (SELECT COUNT(`pytanie21`) FROM odpowiedzi2),1) as a21,
ROUND((SELECT COUNT(`pytanie21`) FROM odpowiedzi2 where pytanie21='b') 	* 100 / (SELECT COUNT(`pytanie21`) FROM odpowiedzi2),1) as b21,
ROUND((SELECT COUNT(`pytanie21`) FROM odpowiedzi2 where pytanie21='c') 	* 100 / (SELECT COUNT(`pytanie21`) FROM odpowiedzi2),1) as c21,
ROUND((SELECT COUNT(`pytanie21`) FROM odpowiedzi2 where pytanie21='d') * 100 / (SELECT COUNT(`pytanie21`) FROM odpowiedzi2),1) as d21,
ROUND((SELECT COUNT(`pytanie21`) FROM odpowiedzi2 where pytanie21='e') 	* 100 / (SELECT COUNT(`pytanie21`) FROM odpowiedzi2),1) as e21,
ROUND((SELECT COUNT(`pytanie22`) FROM odpowiedzi2 where pytanie22='a') 	* 100 / (SELECT COUNT(`pytanie22`) FROM odpowiedzi2),1) as a22,
ROUND((SELECT COUNT(`pytanie22`) FROM odpowiedzi2 where pytanie22='b') 	* 100 / (SELECT COUNT(`pytanie22`) FROM odpowiedzi2),1) as b22,
ROUND((SELECT COUNT(`pytanie22`) FROM odpowiedzi2 where pytanie22='c') 	* 100 / (SELECT COUNT(`pytanie22`) FROM odpowiedzi2),1) as c22,
ROUND((SELECT COUNT(`pytanie22`) FROM odpowiedzi2 where pytanie22='d') * 100 / (SELECT COUNT(`pytanie22`) FROM odpowiedzi2),1) as d22,
ROUND((SELECT COUNT(`pytanie22`) FROM odpowiedzi2 where pytanie22='e') 	* 100 / (SELECT COUNT(`pytanie22`) FROM odpowiedzi2),1) as e22,
ROUND((SELECT COUNT(`pytanie23`) FROM odpowiedzi2 where pytanie23='a') 	* 100 / (SELECT COUNT(`pytanie23`) FROM odpowiedzi2),1) as a23,
ROUND((SELECT COUNT(`pytanie23`) FROM odpowiedzi2 where pytanie23='b') 	* 100 / (SELECT COUNT(`pytanie23`) FROM odpowiedzi2),1) as b23,
ROUND((SELECT COUNT(`pytanie23`) FROM odpowiedzi2 where pytanie23='c') 	* 100 / (SELECT COUNT(`pytanie23`) FROM odpowiedzi2),1) as c23,
ROUND((SELECT COUNT(`pytanie23`) FROM odpowiedzi2 where pytanie23='d') * 100 / (SELECT COUNT(`pytanie23`) FROM odpowiedzi2),1) as d23,
ROUND((SELECT COUNT(`pytanie23`) FROM odpowiedzi2 where pytanie23='e') 	* 100 / (SELECT COUNT(`pytanie23`) FROM odpowiedzi2),1) as e23,
ROUND((SELECT COUNT(`pytanie24`) FROM odpowiedzi2 where pytanie24='a') 	* 100 / (SELECT COUNT(`pytanie24`) FROM odpowiedzi2),1) as a24,
ROUND((SELECT COUNT(`pytanie24`) FROM odpowiedzi2 where pytanie24='b') 	* 100 / (SELECT COUNT(`pytanie24`) FROM odpowiedzi2),1) as b24,
ROUND((SELECT COUNT(`pytanie24`) FROM odpowiedzi2 where pytanie24='c') 	* 100 / (SELECT COUNT(`pytanie24`) FROM odpowiedzi2),1) as c24,
ROUND((SELECT COUNT(`pytanie24`) FROM odpowiedzi2 where pytanie24='d') * 100 / (SELECT COUNT(`pytanie24`) FROM odpowiedzi2),1) as d24,
ROUND((SELECT COUNT(`pytanie24`) FROM odpowiedzi2 where pytanie24='e') 	* 100 / (SELECT COUNT(`pytanie24`) FROM odpowiedzi2),1) as e24,
ROUND((SELECT COUNT(`pytanie25`) FROM odpowiedzi2 where pytanie25='a') 	* 100 / (SELECT COUNT(`pytanie25`) FROM odpowiedzi2),1) as a25,
ROUND((SELECT COUNT(`pytanie25`) FROM odpowiedzi2 where pytanie25='b') 	* 100 / (SELECT COUNT(`pytanie25`) FROM odpowiedzi2),1) as b25,
ROUND((SELECT COUNT(`pytanie25`) FROM odpowiedzi2 where pytanie25='c') 	* 100 / (SELECT COUNT(`pytanie25`) FROM odpowiedzi2),1) as c25,
ROUND((SELECT COUNT(`pytanie25`) FROM odpowiedzi2 where pytanie25='d') * 100 / (SELECT COUNT(`pytanie25`) FROM odpowiedzi2),1) as d25,
ROUND((SELECT COUNT(`pytanie25`) FROM odpowiedzi2 where pytanie25='e') 	* 100 / (SELECT COUNT(`pytanie25`) FROM odpowiedzi2),1) as e25,
ROUND((SELECT COUNT(`pytanie26`) FROM odpowiedzi2 where pytanie26='a') 	* 100 / (SELECT COUNT(`pytanie26`) FROM odpowiedzi2),1) as a26,
ROUND((SELECT COUNT(`pytanie26`) FROM odpowiedzi2 where pytanie26='b') 	* 100 / (SELECT COUNT(`pytanie26`) FROM odpowiedzi2),1) as b26,
ROUND((SELECT COUNT(`pytanie26`) FROM odpowiedzi2 where pytanie26='c') 	* 100 / (SELECT COUNT(`pytanie26`) FROM odpowiedzi2),1) as c26,
ROUND((SELECT COUNT(`pytanie26`) FROM odpowiedzi2 where pytanie26='d') * 100 / (SELECT COUNT(`pytanie26`) FROM odpowiedzi2),1) as d26,
ROUND((SELECT COUNT(`pytanie26`) FROM odpowiedzi2 where pytanie26='e') 	* 100 / (SELECT COUNT(`pytanie26`) FROM odpowiedzi2),1) as e26

";

$result=$con->query($query);
while($data=$result->fetch_assoc())
{
	?>  

<!DOCTYPE html>
<head>
  <title>Sorting Tables w/ JavaScript</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta charset="utf-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1" />
     <link rel="preconnect" href="https://fonts.gstatic.com" /> 
  <link rel="stylesheet" type="text/css" href="wykres.css">
        <style>
            .table {
                border-collapse: collapse;
            }
            .table__header {
                background-color: transparent;
                border: none;
                cursor: pointer;
            }
            .table,
            .table th,
            .table td {
                border: 1px solid #ccc;
            }
            .table th,
            .table td {
                padding: 0.5rem;
            }
            .table th {
                cursor: pointer;
                text-decoration: underline;
            }
        </style>
</head>

<body>

<center>
<h1>Procentowe przedstawienie wszystkich udzielonych odpowiedzi w pytaniach 1-26</h1>
<h2>Aktualnie udzielono - <?php echo $data['wszystkie']; ?> odpowiedzi</h2>



  <table id="sortMe" class="greyGridTable">
    <thead>
      <tr>
	  

		<th data-type="number"><button class="table__header">Nr. Pytania</button></th>
        <th data-type="number"><button class="table__header">Odpowiedzi A</button></th>
		<th data-type="number"><button class="table__header">Odpowiedzi B</button></th>
		<th data-type="number"><button class="table__header">Odpowiedzi C</button></th>
		<th data-type="number"><button class="table__header">Odpowiedzi D</button></th>
		<th data-type="number"><button class="table__header">Odpowiedzi E</button></th>
      </tr>
    </thead>
    <tbody>
		
	<tr>
		<td>Pytanie1</td>
        <td><?php echo $data['a1']; ?>%</td>
        <td><?php echo $data['b1']; ?>%</td>
        <td><?php echo $data['c1']; ?>%</td>
        <td><?php echo $data['d1']; ?>%</td>
		<td><?php echo $data['e1']; ?>%</td>
    </tr>	
	<tr>
		<td>Pytanie2</td>
        <td><?php echo $data['a2']; ?>%</td>
        <td><?php echo $data['b2']; ?>%</td>
        <td><?php echo $data['c2']; ?>%</td>
        <td><?php echo $data['d2']; ?>%</td>
		<td><?php echo $data['e2']; ?>%</td>
    </tr>	
	<tr>
		<td>Pytanie3</td>
        <td><?php echo $data['a3']; ?>%</td>
        <td><?php echo $data['b3']; ?>%</td>
        <td><?php echo $data['c3']; ?>%</td>
        <td><?php echo $data['d3']; ?>%</td>
		<td><?php echo $data['e3']; ?>%</td>
    </tr>	
	<tr>
		<td>Pytanie4</td>
        <td><?php echo $data['a4']; ?>%</td>
        <td><?php echo $data['b4']; ?>%</td>
        <td><?php echo $data['c4']; ?>%</td>
        <td><?php echo $data['d4']; ?>%</td>
		<td><?php echo $data['e4']; ?>%</td>
    </tr>	
	<tr>
		<td>Pytanie5</td>
        <td><?php echo $data['a5']; ?>%</td>
        <td><?php echo $data['b5']; ?>%</td>
        <td><?php echo $data['c5']; ?>%</td>
        <td><?php echo $data['d5']; ?>%</td>
		<td><?php echo $data['e5']; ?>%</td>
    </tr>	
	<tr>
		<td>Pytanie6</td>
        <td><?php echo $data['a6']; ?>%</td>
        <td><?php echo $data['b6']; ?>%</td>
        <td><?php echo $data['c6']; ?>%</td>
        <td><?php echo $data['d6']; ?>%</td>
		<td><?php echo $data['e6']; ?>%</td>
    </tr>	

		
		
      <tr>
		<td>Pytanie8</td>
        <td><?php echo $data['a8']; ?>%</td>
        <td><?php echo $data['b8']; ?>%</td>
        <td><?php echo $data['c8']; ?>%</td>
        <td><?php echo $data['d8']; ?>%</td>
		<td><?php echo $data['e8']; ?>%</td>
      </tr>
      <tr>
		<td>Pytanie9</td>
        <td><?php echo $data['a9']; ?>%</td>
        <td><?php echo $data['b9']; ?>%</td>
        <td><?php echo $data['c9']; ?>%</td>
        <td><?php echo $data['d9']; ?>%</td>
		<td><?php echo $data['e9']; ?>%</td>
      </tr>
      <tr>
		<td>Pytanie10</td>
        <td><?php echo $data['a10']; ?>%</td>
        <td><?php echo $data['b10']; ?>%</td>
        <td><?php echo $data['c10']; ?>%</td>
        <td><?php echo $data['d10']; ?>%</td>
		<td><?php echo $data['e10']; ?>%</td>
      </tr>
      <tr>
		<td>Pytanie11</td>
        <td><?php echo $data['a11']; ?>%</td>
        <td><?php echo $data['b11']; ?>%</td>
        <td><?php echo $data['c11']; ?>%</td>
        <td><?php echo $data['d11']; ?>%</td>
		<td><?php echo $data['e11']; ?>%</td>
      </tr>
	  <tr>
		<td>Pytanie12</td>
        <td><?php echo $data['a12']; ?>%</td>
        <td><?php echo $data['b12']; ?>%</td>
        <td><?php echo $data['c12']; ?>%</td>
        <td><?php echo $data['d12']; ?>%</td>
		<td><?php echo $data['e12']; ?>%</td>
      </tr>
	  <tr>
		<td>Pytanie13</td>
        <td><?php echo $data['a13']; ?>%</td>
        <td><?php echo $data['b13']; ?>%</td>
        <td><?php echo $data['c13']; ?>%</td>
        <td><?php echo $data['d13']; ?>%</td>
		<td><?php echo $data['e13']; ?>%</td>
      </tr>
	  <!-- <tr>
		<td>Pytanie14</td>
        <td><?php echo $data['a14']; ?>%</td>
        <td><?php echo $data['b14']; ?>%</td>
        <td><?php echo $data['c14']; ?>%</td>
        <td><?php echo $data['d14']; ?>%</td>
		<td><?php echo $data['e14']; ?>%</td>
      </tr>-->
	  <tr>
		<td>Pytanie15</td>
        <td><?php echo $data['a15']; ?>%</td>
        <td><?php echo $data['b15']; ?>%</td>
        <td><?php echo $data['c15']; ?>%</td>
        <td><?php echo $data['d15']; ?>%</td>
		<td><?php echo $data['e15']; ?>%</td>
      </tr>
	  <tr>
		<td>Pytanie16</td>
        <td><?php echo $data['a16']; ?>%</td>
        <td><?php echo $data['b16']; ?>%</td>
        <td><?php echo $data['c16']; ?>%</td>
        <td><?php echo $data['d16']; ?>%</td>
		<td><?php echo $data['e16']; ?>%</td>
      </tr>
	  <tr>
		<td>Pytanie17</td>
        <td><?php echo $data['a17']; ?>%</td>
        <td><?php echo $data['b17']; ?>%</td>
        <td><?php echo $data['c17']; ?>%</td>
        <td><?php echo $data['d17']; ?>%</td>
		<td><?php echo $data['e17']; ?>%</td>
      </tr>
	  <tr>
		<td>Pytanie18</td>
        <td><?php echo $data['a18']; ?>%</td>
        <td><?php echo $data['b18']; ?>%</td>
        <td><?php echo $data['c18']; ?>%</td>
        <td><?php echo $data['d18']; ?>%</td>
		<td><?php echo $data['e18']; ?>%</td>
      </tr>
	  <tr>
		<td>Pytanie19</td>
        <td><?php echo $data['a19']; ?>%</td>
        <td><?php echo $data['b19']; ?>%</td>
        <td><?php echo $data['c19']; ?>%</td>
        <td><?php echo $data['d19']; ?>%</td>
		<td><?php echo $data['e19']; ?>%</td>
      </tr>
	 <!-- <tr>
		<td>Pytanie20</td>
        <td><?php echo $data['a20']; ?>%</td>
        <td><?php echo $data['b20']; ?>%</td>
        <td><?php echo $data['c20']; ?>%</td>
        <td><?php echo $data['d20']; ?>%</td>
		<td><?php echo $data['e20']; ?>%</td>
      </tr>--> 
	  <tr>
		<td>Pytanie21</td>
        <td><?php echo $data['a21']; ?>%</td>
        <td><?php echo $data['b21']; ?>%</td>
        <td><?php echo $data['c21']; ?>%</td>
        <td><?php echo $data['d21']; ?>%</td>
		<td><?php echo $data['e21']; ?>%</td>
      </tr>
	  <tr>
		<td>Pytanie22</td>
        <td><?php echo $data['a22']; ?>%</td>
        <td><?php echo $data['b22']; ?>%</td>
        <td><?php echo $data['c22']; ?>%</td>
        <td><?php echo $data['d22']; ?>%</td>
		<td><?php echo $data['e22']; ?>%</td>
      </tr>
	  <tr>
		<td>Pytanie23</td>
        <td><?php echo $data['a23']; ?>%</td>
        <td><?php echo $data['b23']; ?>%</td>
        <td><?php echo $data['c23']; ?>%</td>
        <td><?php echo $data['d23']; ?>%</td>
		<td><?php echo $data['e23']; ?>%</td>
      </tr>
	  <tr>
		<td>Pytanie24</td>
        <td><?php echo $data['a24']; ?>%</td>
        <td><?php echo $data['b24']; ?>%</td>
        <td><?php echo $data['c24']; ?>%</td>
        <td><?php echo $data['d24']; ?>%</td>
		<td><?php echo $data['e24']; ?>%</td>
      </tr>
	  <tr>
		<td>Pytanie25</td>
        <td><?php echo $data['a25']; ?>%</td>
        <td><?php echo $data['b25']; ?>%</td>
        <td><?php echo $data['c25']; ?>%</td>
        <td><?php echo $data['d25']; ?>%</td>
		<td><?php echo $data['e25']; ?>%</td>
      </tr>
	  <tr>
		<td>Pytanie26</td>
        <td><?php echo $data['a26']; ?>%</td>
        <td><?php echo $data['b26']; ?>%</td>
        <td><?php echo $data['c26']; ?>%</td>
        <td><?php echo $data['d26']; ?>%</td>
		<td><?php echo $data['e26']; ?>%</td>
      </tr>
    </tbody>
  </table>
  </center>
  </br></br>
  <center>
  <table id="sortMe" class="greyGridTable">
    <thead>
      <tr>
	  

		<th data-type="number"><button class="table__header">Nr. Pytania</button></th>
        <th data-type="number"><button class="table__header">Odpowiedzi A</button></th>
		<th data-type="number"><button class="table__header">Odpowiedzi B</button></th>
		<th data-type="number"><button class="table__header">Odpowiedzi C</button></th>

      </tr>
    </thead>
    <tbody>
		
	<tr>
		<td>Pytanie7</td>
        <td><?php echo $data['a7']; ?>%</td>
        
        <td><?php echo $data['c7']; ?>%</td>
        
		<td><?php echo $data['e7']; ?>%</td>
    </tr>	</tbody>
  </table>

<?php
}?>


				<form action="tests.php">
                    <input type="submit" value="Przejdź do edycji pytań" class="myButton" />
                </form></center>


  <script src="wykres.js"></script>
</body>