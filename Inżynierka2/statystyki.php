<?php

$con=mysqli_connect("localhost","root","","test1") or die("Nie można połączyć");

$query="SELECT ROUND((SELECT COUNT(`sex`) FROM odpowiedzi2 WHERE `sex`='m') *100 / (SELECT COUNT(`sex`) FROM odpowiedzi2),1) as mezczyzni,ROUND((SELECT COUNT(`sex`) FROM odpowiedzi2 WHERE `sex`='f') *100 / (SELECT COUNT(`sex`) FROM odpowiedzi2),1) as kobiety,ROUND((SELECT COUNT(`sex`) FROM odpowiedzi2 WHERE `sex`='o') *100 / (SELECT COUNT(`sex`) FROM odpowiedzi2),1) as other from odpowiedzi2 limit 1;";
$query2="SELECT 
ROUND((SELECT COUNT(`typ`) FROM typy2 WHERE typ='INTJ') * 100 / (SELECT COUNT(`typ`) FROM typy2),1) as Ilość_INTJ,
ROUND((SELECT COUNT(`typ`) FROM typy2 WHERE typ='INTP') * 100 / (SELECT COUNT(`typ`) FROM typy2),1) as Ilość_INTP,
ROUND((SELECT COUNT(`typ`) FROM typy2 WHERE typ='ENTJ') * 100 / (SELECT COUNT(`typ`) FROM typy2),1) as Ilość_ENTJ,
ROUND((SELECT COUNT(`typ`) FROM typy2 WHERE typ='ENTP') * 100 / (SELECT COUNT(`typ`) FROM typy2),1) as Ilość_ENTP,
ROUND((SELECT COUNT(`typ`) FROM typy2 WHERE typ='INFJ') * 100 / (SELECT COUNT(`typ`) FROM typy2),1) as Ilość_INFJ,
ROUND((SELECT COUNT(`typ`) FROM typy2 WHERE typ='INFP') * 100 / (SELECT COUNT(`typ`) FROM typy2),1) as Ilość_INFP,
ROUND((SELECT COUNT(`typ`) FROM typy2 WHERE typ='ENFJ') * 100 / (SELECT COUNT(`typ`) FROM typy2),1) as Ilość_ENFJ,
ROUND((SELECT COUNT(`typ`) FROM typy2 WHERE typ='ENFP') * 100 / (SELECT COUNT(`typ`) FROM typy2),1) as Ilość_ENFP,
ROUND((SELECT COUNT(`typ`) FROM typy2 WHERE typ='ISTJ') * 100 / (SELECT COUNT(`typ`) FROM typy2),1) as Ilość_ISTJ,
ROUND((SELECT COUNT(`typ`) FROM typy2 WHERE typ='ISTP') * 100 / (SELECT COUNT(`typ`) FROM typy2),1) as Ilość_ISTP,
ROUND((SELECT COUNT(`typ`) FROM typy2 WHERE typ='ESTJ') * 100 / (SELECT COUNT(`typ`) FROM typy2),1) as Ilość_ESTJ,
ROUND((SELECT COUNT(`typ`) FROM typy2 WHERE typ='ESTP') * 100 / (SELECT COUNT(`typ`) FROM typy2),1) as Ilość_ESTP,
ROUND((SELECT COUNT(`typ`) FROM typy2 WHERE typ='ISFJ') * 100 / (SELECT COUNT(`typ`) FROM typy2),1) as Ilość_ISFJ,
ROUND((SELECT COUNT(`typ`) FROM typy2 WHERE typ='ISFP') * 100 / (SELECT COUNT(`typ`) FROM typy2),1) as Ilość_ISFP,
ROUND((SELECT COUNT(`typ`) FROM typy2 WHERE typ='ESFJ') * 100 / (SELECT COUNT(`typ`) FROM typy2),1) as Ilość_ESFJ,
ROUND((SELECT COUNT(`typ`) FROM typy2 WHERE typ='ESFP') * 100 / (SELECT COUNT(`typ`) FROM typy2),1) as Ilość_ESFP";

$query3="SELECT 
ROUND((SELECT COUNT(t.typ) FROM typy2 as t JOIN odpowiedzi2 as o WHERE t.typ='ISTJ' and o.sex='m' AND o.id = t.id) * 100 / (SELECT COUNT(t.typ) FROM typy2 as t JOIN odpowiedzi2 as o WHERE o.sex='m' AND o.id = t.id),1) AS Ilość_m_ISTJ_Procent,
ROUND((SELECT COUNT(t.typ) FROM typy2 as t JOIN odpowiedzi2 as o WHERE t.typ='ISTP' and o.sex='m' AND o.id = t.id) * 100 / (SELECT COUNT(t.typ) FROM typy2 as t JOIN odpowiedzi2 as o WHERE o.sex='m' AND o.id = t.id),1) AS Ilość_m_ISTP_Procent,
ROUND((SELECT COUNT(t.typ) FROM typy2 as t JOIN odpowiedzi2 as o WHERE t.typ='ESTJ' and o.sex='m' AND o.id = t.id) * 100 / (SELECT COUNT(t.typ) FROM typy2 as t JOIN odpowiedzi2 as o WHERE o.sex='m' AND o.id = t.id),1) AS Ilość_m_ESTJ_Procent,
ROUND((SELECT COUNT(t.typ) FROM typy2 as t JOIN odpowiedzi2 as o WHERE t.typ='ESTP' and o.sex='m' AND o.id = t.id) * 100 / (SELECT COUNT(t.typ) FROM typy2 as t JOIN odpowiedzi2 as o WHERE o.sex='m' AND o.id = t.id),1) AS Ilość_m_ESTP_Procent,
ROUND((SELECT COUNT(t.typ) FROM typy2 as t JOIN odpowiedzi2 as o WHERE t.typ='ISFJ' and o.sex='m' AND o.id = t.id) * 100 / (SELECT COUNT(t.typ) FROM typy2 as t JOIN odpowiedzi2 as o WHERE o.sex='m' AND o.id = t.id),1) AS Ilość_m_ISFJ_Procent,
ROUND((SELECT COUNT(t.typ) FROM typy2 as t JOIN odpowiedzi2 as o WHERE t.typ='ISFP' and o.sex='m' AND o.id = t.id) * 100 / (SELECT COUNT(t.typ) FROM typy2 as t JOIN odpowiedzi2 as o WHERE o.sex='m' AND o.id = t.id),1) AS Ilość_m_ISFP_Procent,
ROUND((SELECT COUNT(t.typ) FROM typy2 as t JOIN odpowiedzi2 as o WHERE t.typ='ESFJ' and o.sex='m' AND o.id = t.id) * 100 / (SELECT COUNT(t.typ) FROM typy2 as t JOIN odpowiedzi2 as o WHERE o.sex='m' AND o.id = t.id),1) AS Ilość_m_ESFJ_Procent,
ROUND((SELECT COUNT(t.typ) FROM typy2 as t JOIN odpowiedzi2 as o WHERE t.typ='ESFP' and o.sex='m' AND o.id = t.id) * 100 / (SELECT COUNT(t.typ) FROM typy2 as t JOIN odpowiedzi2 as o WHERE o.sex='m' AND o.id = t.id),1) AS Ilość_m_ESFP_Procent,
ROUND((SELECT COUNT(t.typ) FROM typy2 as t JOIN odpowiedzi2 as o WHERE t.typ='INTJ' and o.sex='m' AND o.id = t.id) * 100 / (SELECT COUNT(t.typ) FROM typy2 as t JOIN odpowiedzi2 as o WHERE o.sex='m' AND o.id = t.id),1) AS Ilość_m_INTJ_Procent,
ROUND((SELECT COUNT(t.typ) FROM typy2 as t JOIN odpowiedzi2 as o WHERE t.typ='INTP' and o.sex='m' AND o.id = t.id) * 100 / (SELECT COUNT(t.typ) FROM typy2 as t JOIN odpowiedzi2 as o WHERE o.sex='m' AND o.id = t.id),1) AS Ilość_m_INTP_Procent,
ROUND((SELECT COUNT(t.typ) FROM typy2 as t JOIN odpowiedzi2 as o WHERE t.typ='ENTJ' and o.sex='m' AND o.id = t.id) * 100 / (SELECT COUNT(t.typ) FROM typy2 as t JOIN odpowiedzi2 as o WHERE o.sex='m' AND o.id = t.id),1) AS Ilość_m_ENTJ_Procent,
ROUND((SELECT COUNT(t.typ) FROM typy2 as t JOIN odpowiedzi2 as o WHERE t.typ='ENTP' and o.sex='m' AND o.id = t.id) * 100 / (SELECT COUNT(t.typ) FROM typy2 as t JOIN odpowiedzi2 as o WHERE o.sex='m' AND o.id = t.id),1) AS Ilość_m_ENTP_Procent,
ROUND((SELECT COUNT(t.typ) FROM typy2 as t JOIN odpowiedzi2 as o WHERE t.typ='INFJ' and o.sex='m' AND o.id = t.id) * 100 / (SELECT COUNT(t.typ) FROM typy2 as t JOIN odpowiedzi2 as o WHERE o.sex='m' AND o.id = t.id),1) AS Ilość_m_INFJ_Procent,
ROUND((SELECT COUNT(t.typ) FROM typy2 as t JOIN odpowiedzi2 as o WHERE t.typ='INFP' and o.sex='m' AND o.id = t.id) * 100 / (SELECT COUNT(t.typ) FROM typy2 as t JOIN odpowiedzi2 as o WHERE o.sex='m' AND o.id = t.id),1) AS Ilość_m_INFP_Procent,
ROUND((SELECT COUNT(t.typ) FROM typy2 as t JOIN odpowiedzi2 as o WHERE t.typ='ENFJ' and o.sex='m' AND o.id = t.id) * 100 / (SELECT COUNT(t.typ) FROM typy2 as t JOIN odpowiedzi2 as o WHERE o.sex='m' AND o.id = t.id),1) AS Ilość_m_ENFJ_Procent,
ROUND((SELECT COUNT(t.typ) FROM typy2 as t JOIN odpowiedzi2 as o WHERE t.typ='ENFP' and o.sex='m' AND o.id = t.id) * 100 / (SELECT COUNT(t.typ) FROM typy2 as t JOIN odpowiedzi2 as o WHERE o.sex='m' AND o.id = t.id),1) AS Ilość_m_ENFP_Procent,
ROUND((SELECT COUNT(t.typ) FROM typy2 as t JOIN odpowiedzi2 as o WHERE t.typ='ISTJ' and o.sex='f' AND o.id = t.id) * 100 / (SELECT COUNT(t.typ) FROM typy2 as t JOIN odpowiedzi2 as o WHERE o.sex='f' AND o.id = t.id),1) AS Ilość_k_ISTJ_Procent,
ROUND((SELECT COUNT(t.typ) FROM typy2 as t JOIN odpowiedzi2 as o WHERE t.typ='ISTP' and o.sex='f' AND o.id = t.id) * 100 / (SELECT COUNT(t.typ) FROM typy2 as t JOIN odpowiedzi2 as o WHERE o.sex='f' AND o.id = t.id),1) AS Ilość_k_ISTP_Procent,
ROUND((SELECT COUNT(t.typ) FROM typy2 as t JOIN odpowiedzi2 as o WHERE t.typ='ESTJ' and o.sex='f' AND o.id = t.id) * 100 / (SELECT COUNT(t.typ) FROM typy2 as t JOIN odpowiedzi2 as o WHERE o.sex='f' AND o.id = t.id),1) AS Ilość_k_ESTJ_Procent,
ROUND((SELECT COUNT(t.typ) FROM typy2 as t JOIN odpowiedzi2 as o WHERE t.typ='ESTP' and o.sex='f' AND o.id = t.id) * 100 / (SELECT COUNT(t.typ) FROM typy2 as t JOIN odpowiedzi2 as o WHERE o.sex='f' AND o.id = t.id),1) AS Ilość_k_ESTP_Procent,
ROUND((SELECT COUNT(t.typ) FROM typy2 as t JOIN odpowiedzi2 as o WHERE t.typ='ISFJ' and o.sex='f' AND o.id = t.id) * 100 / (SELECT COUNT(t.typ) FROM typy2 as t JOIN odpowiedzi2 as o WHERE o.sex='f' AND o.id = t.id),1) AS Ilość_k_ISFJ_Procent,
ROUND((SELECT COUNT(t.typ) FROM typy2 as t JOIN odpowiedzi2 as o WHERE t.typ='ISFP' and o.sex='f' AND o.id = t.id) * 100 / (SELECT COUNT(t.typ) FROM typy2 as t JOIN odpowiedzi2 as o WHERE o.sex='f' AND o.id = t.id),1) AS Ilość_k_ISFP_Procent,
ROUND((SELECT COUNT(t.typ) FROM typy2 as t JOIN odpowiedzi2 as o WHERE t.typ='ESFJ' and o.sex='f' AND o.id = t.id) * 100 / (SELECT COUNT(t.typ) FROM typy2 as t JOIN odpowiedzi2 as o WHERE o.sex='f' AND o.id = t.id),1) AS Ilość_k_ESFJ_Procent,
ROUND((SELECT COUNT(t.typ) FROM typy2 as t JOIN odpowiedzi2 as o WHERE t.typ='ESFP' and o.sex='f' AND o.id = t.id) * 100 / (SELECT COUNT(t.typ) FROM typy2 as t JOIN odpowiedzi2 as o WHERE o.sex='f' AND o.id = t.id),1) AS Ilość_k_ESFP_Procent,
ROUND((SELECT COUNT(t.typ) FROM typy2 as t JOIN odpowiedzi2 as o WHERE t.typ='INTJ' and o.sex='f' AND o.id = t.id) * 100 / (SELECT COUNT(t.typ) FROM typy2 as t JOIN odpowiedzi2 as o WHERE o.sex='f' AND o.id = t.id),1) AS Ilość_k_INTJ_Procent,
ROUND((SELECT COUNT(t.typ) FROM typy2 as t JOIN odpowiedzi2 as o WHERE t.typ='INTP' and o.sex='f' AND o.id = t.id) * 100 / (SELECT COUNT(t.typ) FROM typy2 as t JOIN odpowiedzi2 as o WHERE o.sex='f' AND o.id = t.id),1) AS Ilość_k_INTP_Procent,
ROUND((SELECT COUNT(t.typ) FROM typy2 as t JOIN odpowiedzi2 as o WHERE t.typ='ENTJ' and o.sex='f' AND o.id = t.id) * 100 / (SELECT COUNT(t.typ) FROM typy2 as t JOIN odpowiedzi2 as o WHERE o.sex='f' AND o.id = t.id),1) AS Ilość_k_ENTJ_Procent,
ROUND((SELECT COUNT(t.typ) FROM typy2 as t JOIN odpowiedzi2 as o WHERE t.typ='ENTP' and o.sex='f' AND o.id = t.id) * 100 / (SELECT COUNT(t.typ) FROM typy2 as t JOIN odpowiedzi2 as o WHERE o.sex='f' AND o.id = t.id),1) AS Ilość_k_ENTP_Procent,
ROUND((SELECT COUNT(t.typ) FROM typy2 as t JOIN odpowiedzi2 as o WHERE t.typ='INFJ' and o.sex='f' AND o.id = t.id) * 100 / (SELECT COUNT(t.typ) FROM typy2 as t JOIN odpowiedzi2 as o WHERE o.sex='f' AND o.id = t.id),1) AS Ilość_k_INFJ_Procent,
ROUND((SELECT COUNT(t.typ) FROM typy2 as t JOIN odpowiedzi2 as o WHERE t.typ='INFP' and o.sex='f' AND o.id = t.id) * 100 / (SELECT COUNT(t.typ) FROM typy2 as t JOIN odpowiedzi2 as o WHERE o.sex='f' AND o.id = t.id),1) AS Ilość_k_INFP_Procent,
ROUND((SELECT COUNT(t.typ) FROM typy2 as t JOIN odpowiedzi2 as o WHERE t.typ='ENFJ' and o.sex='f' AND o.id = t.id) * 100 / (SELECT COUNT(t.typ) FROM typy2 as t JOIN odpowiedzi2 as o WHERE o.sex='f' AND o.id = t.id),1) AS Ilość_k_ENFJ_Procent,
ROUND((SELECT COUNT(t.typ) FROM typy2 as t JOIN odpowiedzi2 as o WHERE t.typ='ENFP' and o.sex='f' AND o.id = t.id) * 100 / (SELECT COUNT(t.typ) FROM typy2 as t JOIN odpowiedzi2 as o WHERE o.sex='f' AND o.id = t.id),1) AS Ilość_k_ENFP_Procent,
ROUND((SELECT COUNT(t.typ) FROM typy2 as t JOIN odpowiedzi2 as o WHERE t.typ='ISTJ' and o.sex='o' AND o.id = t.id) * 100 / (SELECT COUNT(t.typ) FROM typy2 as t JOIN odpowiedzi2 as o WHERE o.sex='o' AND o.id = t.id),1) AS Ilość_o_ISTJ_Procent,
ROUND((SELECT COUNT(t.typ) FROM typy2 as t JOIN odpowiedzi2 as o WHERE t.typ='ISTP' and o.sex='o' AND o.id = t.id) * 100 / (SELECT COUNT(t.typ) FROM typy2 as t JOIN odpowiedzi2 as o WHERE o.sex='o' AND o.id = t.id),1) AS Ilość_o_ISTP_Procent,
ROUND((SELECT COUNT(t.typ) FROM typy2 as t JOIN odpowiedzi2 as o WHERE t.typ='ESTJ' and o.sex='o' AND o.id = t.id) * 100 / (SELECT COUNT(t.typ) FROM typy2 as t JOIN odpowiedzi2 as o WHERE o.sex='o' AND o.id = t.id),1) AS Ilość_o_ESTJ_Procent,
ROUND((SELECT COUNT(t.typ) FROM typy2 as t JOIN odpowiedzi2 as o WHERE t.typ='ESTP' and o.sex='o' AND o.id = t.id) * 100 / (SELECT COUNT(t.typ) FROM typy2 as t JOIN odpowiedzi2 as o WHERE o.sex='o' AND o.id = t.id),1) AS Ilość_o_ESTP_Procent,
ROUND((SELECT COUNT(t.typ) FROM typy2 as t JOIN odpowiedzi2 as o WHERE t.typ='ISFJ' and o.sex='o' AND o.id = t.id) * 100 / (SELECT COUNT(t.typ) FROM typy2 as t JOIN odpowiedzi2 as o WHERE o.sex='o' AND o.id = t.id),1) AS Ilość_o_ISFJ_Procent,
ROUND((SELECT COUNT(t.typ) FROM typy2 as t JOIN odpowiedzi2 as o WHERE t.typ='ISFP' and o.sex='o' AND o.id = t.id) * 100 / (SELECT COUNT(t.typ) FROM typy2 as t JOIN odpowiedzi2 as o WHERE o.sex='o' AND o.id = t.id),1) AS Ilość_o_ISFP_Procent,
ROUND((SELECT COUNT(t.typ) FROM typy2 as t JOIN odpowiedzi2 as o WHERE t.typ='ESFJ' and o.sex='o' AND o.id = t.id) * 100 / (SELECT COUNT(t.typ) FROM typy2 as t JOIN odpowiedzi2 as o WHERE o.sex='o' AND o.id = t.id),1) AS Ilość_o_ESFJ_Procent,
ROUND((SELECT COUNT(t.typ) FROM typy2 as t JOIN odpowiedzi2 as o WHERE t.typ='ESFP' and o.sex='o' AND o.id = t.id) * 100 / (SELECT COUNT(t.typ) FROM typy2 as t JOIN odpowiedzi2 as o WHERE o.sex='o' AND o.id = t.id),1) AS Ilość_o_ESFP_Procent,
ROUND((SELECT COUNT(t.typ) FROM typy2 as t JOIN odpowiedzi2 as o WHERE t.typ='INTJ' and o.sex='o' AND o.id = t.id) * 100 / (SELECT COUNT(t.typ) FROM typy2 as t JOIN odpowiedzi2 as o WHERE o.sex='o' AND o.id = t.id),1) AS Ilość_o_INTJ_Procent,
ROUND((SELECT COUNT(t.typ) FROM typy2 as t JOIN odpowiedzi2 as o WHERE t.typ='INTP' and o.sex='o' AND o.id = t.id) * 100 / (SELECT COUNT(t.typ) FROM typy2 as t JOIN odpowiedzi2 as o WHERE o.sex='o' AND o.id = t.id),1) AS Ilość_o_INTP_Procent,
ROUND((SELECT COUNT(t.typ) FROM typy2 as t JOIN odpowiedzi2 as o WHERE t.typ='ENTJ' and o.sex='o' AND o.id = t.id) * 100 / (SELECT COUNT(t.typ) FROM typy2 as t JOIN odpowiedzi2 as o WHERE o.sex='o' AND o.id = t.id),1) AS Ilość_o_ENTJ_Procent,
ROUND((SELECT COUNT(t.typ) FROM typy2 as t JOIN odpowiedzi2 as o WHERE t.typ='ENTP' and o.sex='o' AND o.id = t.id) * 100 / (SELECT COUNT(t.typ) FROM typy2 as t JOIN odpowiedzi2 as o WHERE o.sex='o' AND o.id = t.id),1) AS Ilość_o_ENTP_Procent,
ROUND((SELECT COUNT(t.typ) FROM typy2 as t JOIN odpowiedzi2 as o WHERE t.typ='INFJ' and o.sex='o' AND o.id = t.id) * 100 / (SELECT COUNT(t.typ) FROM typy2 as t JOIN odpowiedzi2 as o WHERE o.sex='o' AND o.id = t.id),1) AS Ilość_o_INFJ_Procent,
ROUND((SELECT COUNT(t.typ) FROM typy2 as t JOIN odpowiedzi2 as o WHERE t.typ='INFP' and o.sex='o' AND o.id = t.id) * 100 / (SELECT COUNT(t.typ) FROM typy2 as t JOIN odpowiedzi2 as o WHERE o.sex='o' AND o.id = t.id),1) AS Ilość_o_INFP_Procent,
ROUND((SELECT COUNT(t.typ) FROM typy2 as t JOIN odpowiedzi2 as o WHERE t.typ='ENFJ' and o.sex='o' AND o.id = t.id) * 100 / (SELECT COUNT(t.typ) FROM typy2 as t JOIN odpowiedzi2 as o WHERE o.sex='o' AND o.id = t.id),1) AS Ilość_o_ENFJ_Procent,
ROUND((SELECT COUNT(t.typ) FROM typy2 as t JOIN odpowiedzi2 as o WHERE t.typ='ENFP' and o.sex='o' AND o.id = t.id) * 100 / (SELECT COUNT(t.typ) FROM typy2 as t JOIN odpowiedzi2 as o WHERE o.sex='o' AND o.id = t.id),1) AS Ilość_o_ENFP_Procent";


$result=$con->query($query);

while($data=$result->fetch_assoc())
{
	
	
	
	

?>  
                         
                          
	

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
	
    <title>Statystyki</title>
    <link rel="stylesheet" type="text/css" href="statystyki.css">

    

    
   

    
</head>
<body>
	<center>

<div class="div-1">

<h1>Statystyki i Dane</h1></div>
</br></br>

<table class="greyGridTable">
<tbody>
<tr>
<td colspan="3" class='typ'><center>Procent Płci Ankietowanych</center></td>
</tr>
<tr>
<td>Mężczyźni</td>
<td>Kobiety</td>
<td>Nie podano</td>
</tr>
<tr>
<td><?php echo $data['mezczyzni']; ?>%</td>
<td><?php echo $data['kobiety']; ?>%</td>
<td><?php echo $data['other']; ?>%</td>
</tr>
</tbody>
</table></br></br></br>
<?php
}?>



<?php  
	



$result3=$con->query($query3);
while($data3=$result3->fetch_assoc())


{
	?>  


<table class="greyGridTable">
<tbody>
<tr>
<td colspan="16">Podział na osobowości</td>
</tr>

<tr><td colspan="4" class='analitycy'>Analitycy</td>
<td colspan="4" class='dyplomaci'>Dyplomaci</td>
<td colspan="4" class='straznicy'>Strażnicy</td>
<td colspan="4" class='odkrywcy'>Odkrywcy</td>
</tr>
<tr>

<td class='black'>&nbsp;</td>
<td colspan="3">Płeć</td>
<td class='black'>&nbsp;</td>
<td colspan="3">Płeć</td>
<td class='black'>&nbsp;</td>
<td colspan="3">Płeć</td>
<td class='black'>&nbsp;</td>
<td colspan="3">Płeć</td>
</tr>
<tr>
<td class='typ'>Typ</td>
<td>M</td>
<td>K</td>
<td>O</td>
<td class='typ'>Typ</td>
<td>M</td>
<td>K</td>
<td>O</td>
<td class='typ'>Typ</td>
<td>M</td>
<td>K</td>
<td>O</td>
<td class='typ'>Typ</td>
<td>M</td>
<td>K</td>
<td>O</td>
</tr>
<tr>
<td class='typ'>INTJ</td>
<td><?php echo $data3['Ilość_m_INTJ_Procent']; ?>%</td>
<td><?php echo $data3['Ilość_k_INTJ_Procent']; ?>%</td>
<td><?php echo $data3['Ilość_o_INTJ_Procent']; ?>%</td>
<td class='typ'>INFJ</td>
<td><?php echo $data3['Ilość_m_INFJ_Procent']; ?>%</td>
<td><?php echo $data3['Ilość_k_INFJ_Procent']; ?>%</td>
<td><?php echo $data3['Ilość_o_INFJ_Procent']; ?>%</td>
<td class='typ'>ISTJ</td>
<td><?php echo $data3['Ilość_m_ISTJ_Procent']; ?>%</td>
<td><?php echo $data3['Ilość_k_ISTJ_Procent']; ?>%</td>
<td><?php echo $data3['Ilość_o_ISTJ_Procent']; ?>%</td>
<td class='typ'>ISTP</td>
<td><?php echo $data3['Ilość_m_ISTP_Procent']; ?>%</td>
<td><?php echo $data3['Ilość_k_ISTP_Procent']; ?>%</td>
<td><?php echo $data3['Ilość_o_ISTP_Procent']; ?>%</td>
</tr>
<tr>
<td class='typ'>INTP</td>
<td><?php echo $data3['Ilość_m_INTP_Procent']; ?>%</td>
<td><?php echo $data3['Ilość_k_INTP_Procent']; ?>%</td>
<td><?php echo $data3['Ilość_o_INTP_Procent']; ?>%</td>
<td class='typ'>INFP</td>
<td><?php echo $data3['Ilość_m_INFP_Procent']; ?>%</td>
<td><?php echo $data3['Ilość_k_INFP_Procent']; ?>%</td>
<td><?php echo $data3['Ilość_o_INFP_Procent']; ?>%</td>
<td class='typ'>ISFJ</td>
<td><?php echo $data3['Ilość_m_ISFJ_Procent']; ?>%</td>
<td><?php echo $data3['Ilość_k_ISFJ_Procent']; ?>%</td>
<td><?php echo $data3['Ilość_o_ISFJ_Procent']; ?>%</td>
<td class='typ'>ISFP</td>
<td><?php echo $data3['Ilość_m_ISFP_Procent']; ?>%</td>
<td><?php echo $data3['Ilość_k_ISFP_Procent']; ?>%</td>
<td><?php echo $data3['Ilość_o_ISFP_Procent']; ?>%</td>
</tr>
<tr>
<td class='typ'>ENTJ</td>
<td><?php echo $data3['Ilość_m_ENTJ_Procent']; ?>%</td>
<td><?php echo $data3['Ilość_k_ENTJ_Procent']; ?>%</td>
<td><?php echo $data3['Ilość_o_ENTJ_Procent']; ?>%</td>
<td class='typ'>ENFJ</td>
<td><?php echo $data3['Ilość_m_ENFJ_Procent']; ?>%</td>
<td><?php echo $data3['Ilość_k_ENFJ_Procent']; ?>%</td>
<td><?php echo $data3['Ilość_o_ENFJ_Procent']; ?>%</td>
<td class='typ'>ESTJ</td>
<td><?php echo $data3['Ilość_m_ESTJ_Procent']; ?>%</td>
<td><?php echo $data3['Ilość_k_ESTJ_Procent']; ?>%</td>
<td><?php echo $data3['Ilość_o_ESTJ_Procent']; ?>%</td>
<td class='typ'>ESTP</td>
<td><?php echo $data3['Ilość_m_ESTP_Procent']; ?>%</td>
<td><?php echo $data3['Ilość_k_ESTP_Procent']; ?>%</td>
<td><?php echo $data3['Ilość_o_ESTP_Procent']; ?>%</td>
</tr>
<tr>
<td class='typ'>ENTP</td>
<td><?php echo $data3['Ilość_m_ENTP_Procent']; ?>%</td>
<td><?php echo $data3['Ilość_k_ENTP_Procent']; ?>%</td>
<td><?php echo $data3['Ilość_o_ENTP_Procent']; ?>%</td>
<td class='typ'>ENFP</td>
<td><?php echo $data3['Ilość_m_ENFP_Procent']; ?>%</td>
<td><?php echo $data3['Ilość_k_ENFP_Procent']; ?>%</td>
<td><?php echo $data3['Ilość_o_ENFP_Procent']; ?>%</td>
<td class='typ'>ENFJ</td>
<td><?php echo $data3['Ilość_m_ENFJ_Procent']; ?>%</td>
<td><?php echo $data3['Ilość_k_ENFJ_Procent']; ?>%</td>
<td><?php echo $data3['Ilość_o_ENFJ_Procent']; ?>%</td>
<td class='typ'>ESFP</td>
<td><?php echo $data3['Ilość_m_ESFP_Procent']; ?>%</td>
<td><?php echo $data3['Ilość_k_ESFP_Procent']; ?>%</td>
<td><?php echo $data3['Ilość_o_ESFP_Procent']; ?>%</td>
</tr>
</tbody>
</table>
<?php  
	

}




?>




</br></br></br>


<?php  
	



$result2=$con->query($query2);
while($data2=$result2->fetch_assoc())
{
	?>  

<table class="greyGridTable">
<tbody>
<tr>
<td colspan="8">Procentowe przedstawienie typów</td>
</tr>
<tr>
<td colspan="2" class='analitycy'>Analitycy</td>
<td colspan="2" class='dyplomaci'>Dyplomaci</td>
<td colspan="2" class='straznicy'>Strażnicy</td>
<td colspan="2" class='odkrywcy'>Odkrywcy</td>
</tr>
<tr>
<td class='typ'>INTJ</td>
<td><?php echo $data2['Ilość_INTJ']; ?>%</td>
<td class='typ'>INFJ</td>
<td><?php echo $data2['Ilość_INFJ']; ?>%</td>
<td class='typ'>ISTJ</td>
<td><?php echo $data2['Ilość_ISTJ']; ?>%</td>
<td class='typ'>ISTP</td>
<td><?php echo $data2['Ilość_ISTP']; ?>%</td>

</tr>
<tr>
<td class='typ'>INTP</td>
<td><?php echo $data2['Ilość_INTP']; ?>%</td>
<td class='typ'>INFP</td>
<td><?php echo $data2['Ilość_INFP']; ?>%</td>
<td class='typ'>ISFJ</td>
<td><?php echo $data2['Ilość_ISFJ']; ?>%</td>
<td class='typ'>ISFP</td>
<td><?php echo $data2['Ilość_ISFP']; ?>%</td>
</tr>
<tr>
<td class='typ'>ENTJ</td>
<td><?php echo $data2['Ilość_ENTJ']; ?>%</td>
<td class='typ'>ENFJ</td>
<td><?php echo $data2['Ilość_ENFJ']; ?>%</td>
<td class='typ'>ESTJ</td>
<td><?php echo $data2['Ilość_ESTJ']; ?>%</td>
<td class='typ'>ESTP</td>
<td><?php echo $data2['Ilość_ESTP']; ?>%</td>

</tr>
<tr>
<td class='typ'>ENTP</td>
<td><?php echo $data2['Ilość_ENTP']; ?>%</td>
<td class='typ'>ENFP</td>
<td><?php echo $data2['Ilość_ENFP']; ?>%</td>
<td class='typ'>ENFJ</td>
<td><?php echo $data2['Ilość_ENFJ']; ?>%</td>
<td class='typ'>ESFP</td>
<td><?php echo $data2['Ilość_ESFP']; ?>%</td>

</tr>
</tbody>
</table>

<?php  
}

?>
</br></br></br></br></br></br>
</center>
</body>
</html>