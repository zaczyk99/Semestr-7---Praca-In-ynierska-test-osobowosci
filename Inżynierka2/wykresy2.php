
<?php

$con=mysqli_connect("localhost","root","","test1") or die("Nie można połączyć");

$query="SELECT 
(SELECT COUNT(`pytanie1`) FROM odpowiedzi2) as wszystkie,
ROUND((SELECT COUNT(`pytanie14`) FROM odpowiedzi2 where pytanie14='A') *100 / (SELECT COUNT(`pytanie14`) FROM odpowiedzi2),1) as a14,
ROUND((SELECT COUNT(`pytanie14`) FROM odpowiedzi2 where pytanie14='B') *100 / (SELECT COUNT(`pytanie14`) FROM odpowiedzi2),1) as b14,
ROUND((SELECT COUNT(`pytanie20`) FROM odpowiedzi2 where pytanie20='A') *100 / (SELECT COUNT(`pytanie20`) FROM odpowiedzi2),1) as a20,
ROUND((SELECT COUNT(`pytanie20`) FROM odpowiedzi2 where pytanie20='B') *100 / (SELECT COUNT(`pytanie20`) FROM odpowiedzi2),1) as b20,
ROUND((SELECT COUNT(`pytanie27`) FROM odpowiedzi2 where pytanie27='A') *100 / (SELECT COUNT(`pytanie27`) FROM odpowiedzi2),1) as a27,
ROUND((SELECT COUNT(`pytanie27`) FROM odpowiedzi2 where pytanie27='B') *100 / (SELECT COUNT(`pytanie27`) FROM odpowiedzi2),1) as b27,
ROUND((SELECT COUNT(`pytanie28`) FROM odpowiedzi2 where pytanie28='A') *100 / (SELECT COUNT(`pytanie28`) FROM odpowiedzi2),1) as a28,
ROUND((SELECT COUNT(`pytanie28`) FROM odpowiedzi2 where pytanie28='B') *100 / (SELECT COUNT(`pytanie28`) FROM odpowiedzi2),1) as b28,
ROUND((SELECT COUNT(`pytanie29`) FROM odpowiedzi2 where pytanie29='A') *100 / (SELECT COUNT(`pytanie29`) FROM odpowiedzi2),1) as a29,
ROUND((SELECT COUNT(`pytanie29`) FROM odpowiedzi2 where pytanie29='B') *100 / (SELECT COUNT(`pytanie29`) FROM odpowiedzi2),1) as b29,
ROUND((SELECT COUNT(`pytanie30`) FROM odpowiedzi2 where pytanie30='A') *100 / (SELECT COUNT(`pytanie30`) FROM odpowiedzi2),1) as a30,
ROUND((SELECT COUNT(`pytanie30`) FROM odpowiedzi2 where pytanie30='B') *100 / (SELECT COUNT(`pytanie30`) FROM odpowiedzi2),1) as b30,
ROUND((SELECT COUNT(`pytanie31`) FROM odpowiedzi2 where pytanie31='A') *100 / (SELECT COUNT(`pytanie31`) FROM odpowiedzi2),1) as a31,
ROUND((SELECT COUNT(`pytanie31`) FROM odpowiedzi2 where pytanie31='B') *100 / (SELECT COUNT(`pytanie31`) FROM odpowiedzi2),1) as b31,
ROUND((SELECT COUNT(`pytanie32`) FROM odpowiedzi2 where pytanie32='A') *100 / (SELECT COUNT(`pytanie32`) FROM odpowiedzi2),1) as a32,
ROUND((SELECT COUNT(`pytanie32`) FROM odpowiedzi2 where pytanie32='B') *100 / (SELECT COUNT(`pytanie32`) FROM odpowiedzi2),1) as b32,
ROUND((SELECT COUNT(`pytanie33`) FROM odpowiedzi2 where pytanie33='A') *100 / (SELECT COUNT(`pytanie33`) FROM odpowiedzi2),1) as a33,
ROUND((SELECT COUNT(`pytanie33`) FROM odpowiedzi2 where pytanie33='B') *100 / (SELECT COUNT(`pytanie33`) FROM odpowiedzi2),1) as b33,
ROUND((SELECT COUNT(`pytanie34`) FROM odpowiedzi2 where pytanie34='A') *100 / (SELECT COUNT(`pytanie34`) FROM odpowiedzi2),1) as a34,
ROUND((SELECT COUNT(`pytanie34`) FROM odpowiedzi2 where pytanie34='B') *100 / (SELECT COUNT(`pytanie34`) FROM odpowiedzi2),1) as b34,
ROUND((SELECT COUNT(`pytanie35`) FROM odpowiedzi2 where pytanie35='A') *100 / (SELECT COUNT(`pytanie35`) FROM odpowiedzi2),1) as a35,
ROUND((SELECT COUNT(`pytanie35`) FROM odpowiedzi2 where pytanie35='B') *100 / (SELECT COUNT(`pytanie35`) FROM odpowiedzi2),1) as b35,
ROUND((SELECT COUNT(`pytanie36`) FROM odpowiedzi2 where pytanie36='A') *100 / (SELECT COUNT(`pytanie36`) FROM odpowiedzi2),1) as a36,
ROUND((SELECT COUNT(`pytanie36`) FROM odpowiedzi2 where pytanie36='B') *100 / (SELECT COUNT(`pytanie36`) FROM odpowiedzi2),1) as b36,
ROUND((SELECT COUNT(`pytanie37`) FROM odpowiedzi2 where pytanie37='A') *100 / (SELECT COUNT(`pytanie37`) FROM odpowiedzi2),1) as a37,
ROUND((SELECT COUNT(`pytanie37`) FROM odpowiedzi2 where pytanie37='B') *100 / (SELECT COUNT(`pytanie37`) FROM odpowiedzi2),1) as b37,
ROUND((SELECT COUNT(`pytanie38`) FROM odpowiedzi2 where pytanie38='A') *100 / (SELECT COUNT(`pytanie38`) FROM odpowiedzi2),1) as a38,
ROUND((SELECT COUNT(`pytanie38`) FROM odpowiedzi2 where pytanie38='B') *100 / (SELECT COUNT(`pytanie38`) FROM odpowiedzi2),1) as b38,
ROUND((SELECT COUNT(`pytanie39`) FROM odpowiedzi2 where pytanie39='A') *100 / (SELECT COUNT(`pytanie39`) FROM odpowiedzi2),1) as a39,
ROUND((SELECT COUNT(`pytanie39`) FROM odpowiedzi2 where pytanie39='B') *100 / (SELECT COUNT(`pytanie39`) FROM odpowiedzi2),1) as b39,
ROUND((SELECT COUNT(`pytanie40`) FROM odpowiedzi2 where pytanie40='A') *100 / (SELECT COUNT(`pytanie40`) FROM odpowiedzi2),1) as a40,
ROUND((SELECT COUNT(`pytanie40`) FROM odpowiedzi2 where pytanie40='B') *100 / (SELECT COUNT(`pytanie40`) FROM odpowiedzi2),1) as b40,
ROUND((SELECT COUNT(`pytanie41`) FROM odpowiedzi2 where pytanie41='A') *100 / (SELECT COUNT(`pytanie41`) FROM odpowiedzi2),1) as a41,
ROUND((SELECT COUNT(`pytanie41`) FROM odpowiedzi2 where pytanie41='B') *100 / (SELECT COUNT(`pytanie41`) FROM odpowiedzi2),1) as b41,
ROUND((SELECT COUNT(`pytanie42`) FROM odpowiedzi2 where pytanie42='A') *100 / (SELECT COUNT(`pytanie42`) FROM odpowiedzi2),1) as a42,
ROUND((SELECT COUNT(`pytanie42`) FROM odpowiedzi2 where pytanie42='B') *100 / (SELECT COUNT(`pytanie42`) FROM odpowiedzi2),1) as b42,
ROUND((SELECT COUNT(`pytanie43`) FROM odpowiedzi2 where pytanie43='A') *100 / (SELECT COUNT(`pytanie43`) FROM odpowiedzi2),1) as a43,
ROUND((SELECT COUNT(`pytanie43`) FROM odpowiedzi2 where pytanie43='B') *100 / (SELECT COUNT(`pytanie43`) FROM odpowiedzi2),1) as b43,
ROUND((SELECT COUNT(`pytanie44`) FROM odpowiedzi2 where pytanie44='A') *100 / (SELECT COUNT(`pytanie44`) FROM odpowiedzi2),1) as a44,
ROUND((SELECT COUNT(`pytanie44`) FROM odpowiedzi2 where pytanie44='B') *100 / (SELECT COUNT(`pytanie44`) FROM odpowiedzi2),1) as b44,
ROUND((SELECT COUNT(`pytanie45`) FROM odpowiedzi2 where pytanie45='A') *100 / (SELECT COUNT(`pytanie45`) FROM odpowiedzi2),1) as a45,
ROUND((SELECT COUNT(`pytanie45`) FROM odpowiedzi2 where pytanie45='B') *100 / (SELECT COUNT(`pytanie45`) FROM odpowiedzi2),1) as b45,
ROUND((SELECT COUNT(`pytanie46`) FROM odpowiedzi2 where pytanie46='A') *100 / (SELECT COUNT(`pytanie46`) FROM odpowiedzi2),1) as a46,
ROUND((SELECT COUNT(`pytanie46`) FROM odpowiedzi2 where pytanie46='B') *100 / (SELECT COUNT(`pytanie46`) FROM odpowiedzi2),1) as b46,
ROUND((SELECT COUNT(`pytanie47`) FROM odpowiedzi2 where pytanie47='A') *100 / (SELECT COUNT(`pytanie47`) FROM odpowiedzi2),1) as a47,
ROUND((SELECT COUNT(`pytanie47`) FROM odpowiedzi2 where pytanie47='B') *100 / (SELECT COUNT(`pytanie47`) FROM odpowiedzi2),1) as b47,
ROUND((SELECT COUNT(`pytanie48`) FROM odpowiedzi2 where pytanie48='A') *100 / (SELECT COUNT(`pytanie48`) FROM odpowiedzi2),1) as a48,
ROUND((SELECT COUNT(`pytanie48`) FROM odpowiedzi2 where pytanie48='B') *100 / (SELECT COUNT(`pytanie48`) FROM odpowiedzi2),1) as b48,
ROUND((SELECT COUNT(`pytanie49`) FROM odpowiedzi2 where pytanie49='A') *100 / (SELECT COUNT(`pytanie49`) FROM odpowiedzi2),1) as a49,
ROUND((SELECT COUNT(`pytanie49`) FROM odpowiedzi2 where pytanie49='B') *100 / (SELECT COUNT(`pytanie49`) FROM odpowiedzi2),1) as b49,
ROUND((SELECT COUNT(`pytanie50`) FROM odpowiedzi2 where pytanie50='A') *100 / (SELECT COUNT(`pytanie50`) FROM odpowiedzi2),1) as a50,
ROUND((SELECT COUNT(`pytanie50`) FROM odpowiedzi2 where pytanie50='B') *100 / (SELECT COUNT(`pytanie50`) FROM odpowiedzi2),1) as b50





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

</head>

<body>
<center>

<center>
<h1>Procentowe przedstawienie wszystkich udzielonych odpowiedzi w pytaniach 27-50</h1>
<h2>Aktualnie udzielono - <?php echo $data['wszystkie']; ?> odpowiedzi</h2>






  <table id="sortMe" class="greyGridTable">
    <thead>
      <tr>
	  

		<th data-type="number"><button class="table__header">Nr. Pytania</button></th>
        <th data-type="number"><button class="table__header">Odpowiedzi A</button></th>
		<th data-type="number"><button class="table__header">Odpowiedzi B</button></th>
      </tr>
    </thead>
    <tbody>
	<tr>
		<td>Pytanie14</td>
        <td><?php echo $data['a14']; ?>%</td>
        <td><?php echo $data['b14']; ?>%</td>

      </tr>
	  <tr>
		<td>Pytanie20</td>
        <td><?php echo $data['a20']; ?>%</td>
        <td><?php echo $data['b20']; ?>%</td>

      </tr>

	<tr>
		<td>Pytanie27</td>
        <td><?php echo $data['a27']; ?>%</td>
        <td><?php echo $data['b27']; ?>%</td>

      </tr>
	<tr>
		<td>Pytanie28</td>
        <td><?php echo $data['a28']; ?>%</td>
        <td><?php echo $data['b28']; ?>%</td>

      </tr>
	<tr>
		<td>Pytanie29</td>
        <td><?php echo $data['a29']; ?>%</td>
        <td><?php echo $data['b29']; ?>%</td>

      </tr>
	  
	<tr>
		<td>Pytanie30</td>
        <td><?php echo $data['a30']; ?>%</td>
        <td><?php echo $data['b30']; ?>%</td>

      </tr>
	  
	<tr>
		<td>Pytanie31</td>
        <td><?php echo $data['a31']; ?>%</td>
        <td><?php echo $data['b31']; ?>%</td>

      </tr>
	  
	<tr>
		<td>Pytanie32</td>
        <td><?php echo $data['a32']; ?>%</td>
        <td><?php echo $data['b32']; ?>%</td>

      </tr>
	  
	<tr>
		<td>Pytanie33</td>
        <td><?php echo $data['a33']; ?>%</td>
        <td><?php echo $data['b33']; ?>%</td>

      </tr>
	  
	<tr>
		<td>Pytanie34</td>
        <td><?php echo $data['a34']; ?>%</td>
        <td><?php echo $data['b34']; ?>%</td>

      </tr>
	  
	<tr>
		<td>Pytanie35</td>
        <td><?php echo $data['a35']; ?>%</td>
        <td><?php echo $data['b35']; ?>%</td>

      </tr>
	  
	<tr>
		<td>Pytanie36</td>
        <td><?php echo $data['a36']; ?>%</td>
        <td><?php echo $data['b36']; ?>%</td>

      </tr>
	  
	<tr>
		<td>Pytanie37</td>
        <td><?php echo $data['a37']; ?>%</td>
        <td><?php echo $data['b37']; ?>%</td>

      </tr>
	  
	<tr>
		<td>Pytanie38</td>
        <td><?php echo $data['a38']; ?>%</td>
        <td><?php echo $data['b38']; ?>%</td>

      </tr>
	  
	<tr>
		<td>Pytanie39</td>
        <td><?php echo $data['a39']; ?>%</td>
        <td><?php echo $data['b39']; ?>%</td>

      </tr>
	  
	<tr>
		<td>Pytanie40</td>
        <td><?php echo $data['a40']; ?>%</td>
        <td><?php echo $data['b40']; ?>%</td>

      </tr>
	  
	<tr>
		<td>Pytanie41</td>
        <td><?php echo $data['a41']; ?>%</td>
        <td><?php echo $data['b41']; ?>%</td>

      </tr>
	  
	<tr>
		<td>Pytanie42</td>
        <td><?php echo $data['a42']; ?>%</td>
        <td><?php echo $data['b42']; ?>%</td>

      </tr>
	  
	<tr>
		<td>Pytanie43</td>
        <td><?php echo $data['a43']; ?>%</td>
        <td><?php echo $data['b43']; ?>%</td>

      </tr>
	  
	<tr>
		<td>Pytanie44</td>
        <td><?php echo $data['a44']; ?>%</td>
        <td><?php echo $data['b44']; ?>%</td>

      </tr>
	  
	<tr>
		<td>Pytanie45</td>
        <td><?php echo $data['a45']; ?>%</td>
        <td><?php echo $data['b45']; ?>%</td>

      </tr>
	  
	<tr>
		<td>Pytanie46</td>
        <td><?php echo $data['a46']; ?>%</td>
        <td><?php echo $data['b46']; ?>%</td>

      </tr>
	  
	<tr>
		<td>Pytanie47</td>
        <td><?php echo $data['a47']; ?>%</td>
        <td><?php echo $data['b47']; ?>%</td>

      </tr>
	  
	<tr>
		<td>Pytanie48</td>
        <td><?php echo $data['a48']; ?>%</td>
        <td><?php echo $data['b48']; ?>%</td>

      </tr>
	  
	<tr>
		<td>Pytanie49</td>
        <td><?php echo $data['a49']; ?>%</td>
        <td><?php echo $data['b49']; ?>%</td>

      </tr>
	  
	<tr>
		<td>Pytanie50</td>
        <td><?php echo $data['a50']; ?>%</td>
        <td><?php echo $data['b50']; ?>%</td>

      </tr>
	 </tbody>
  </table>
  </center>

<?php
}?>

<center>
<form action="tworca.php">
                    <input type="submit" value="Przejdź do edycji pytań" class="myButton" />
                </form>
</center>

  <script src="wykres.js"></script>
</body>