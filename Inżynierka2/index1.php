<?php 
include 'dbh.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Quiz</title>
    
   <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
   rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
   crossorigin="anonymous">-->
	<link rel="stylesheet" type="text/css" href="styles1.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	
	
	<?php 
	
$con=mysqli_connect("localhost","root","","test1") or die("Nie można połączyć");

$query="SELECT * from testwart";
$result=$con->query($query);
while($data=$result->fetch_assoc())
{
	?>  


<script type="text/javascript">
        
		
		var a1 = parseInt("<?php $data['a1']; ?>");
		var a2 = parseInt("<?php $data['a2']; ?>");
		var a3 = parseInt("<?php $data['a3']; ?>");
		var a4 = parseInt("<?php $data['a4']; ?>");
		var a5 = parseInt("<?php $data['a5']; ?>");
		var a6 = parseInt("<?php $data['a6']; ?>");
		var a7 = parseInt("<?php $data['a7']; ?>");
		var a8 = parseInt("<?php $data['a8']; ?>");
		var a9 = parseInt("<?php $data['a9']; ?>");
		var a10 = parseInt("<?php $data['a10']; ?>");
		var a11 = parseInt("<?php $data['a11']; ?>");
		var a12 = parseInt("<?php $data['a12']; ?>");
		var a13 = parseInt("<?php $data['a13']; ?>");
		var a14 = parseInt("<?php $data['a14']; ?>");
		var a15 = parseInt("<?php $data['a15']; ?>");
		var a16 = parseInt("<?php $data['a16']; ?>");
		var a17 = parseInt("<?php $data['a17']; ?>");
		var a18 = parseInt("<?php $data['a18']; ?>");
		var a19 = parseInt("<?php $data['a19']; ?>");
		var a20 = parseInt("<?php $data['a20']; ?>");
		var a21 = parseInt("<?php $data['a21']; ?>");
		var a22 = parseInt("<?php $data['a22']; ?>");
		var a23 = parseInt("<?php $data['a23']; ?>");
		var a24 = parseInt("<?php $data['a24']; ?>");
		var a25 = parseInt("<?php $data['a25']; ?>");
		var a26 = parseInt("<?php $data['a26']; ?>");
		var a27 = parseInt("<?php $data['a27']; ?>");
		var a28 = parseInt("<?php $data['a28']; ?>");
		var a29 = parseInt("<?php $data['a29']; ?>");
		var a30 = parseInt("<?php $data['a30']; ?>");
		var a31 = parseInt("<?php $data['a31']; ?>");
		var a32 = parseInt("<?php $data['a32']; ?>");
		var a33 = parseInt("<?php $data['a33']; ?>");
		var a34 = parseInt("<?php $data['a34']; ?>");
		var a35 = parseInt("<?php $data['a35']; ?>");
		var a36 = parseInt("<?php $data['a36']; ?>");
		var a37 = parseInt("<?php $data['a37']; ?>");
		var a38 = parseInt("<?php $data['a38']; ?>");
		var a39 = parseInt("<?php $data['a39']; ?>");
		var a40 = parseInt("<?php $data['a40']; ?>");
		var a41 = parseInt("<?php $data['a41']; ?>");
		var a42 = parseInt("<?php $data['a42']; ?>");
		var a43 = parseInt("<?php $data['a43']; ?>");
		var a44 = parseInt("<?php $data['a44']; ?>");
		var a45 = parseInt("<?php $data['a45']; ?>");
		var a46 = parseInt("<?php $data['a46']; ?>");
		var a47 = parseInt("<?php $data['a47']; ?>");
		var a48 = parseInt("<?php $data['a48']; ?>");
		var a49 = parseInt("<?php $data['a49']; ?>");
		var a50 = parseInt("<?php $data['a50']; ?>");
		var b1 = parseInt("<?php $data['b1']; ?>");
		var b2 = parseInt("<?php $data['b2']; ?>");
		var b3 = parseInt("<?php $data['b3']; ?>");
		var b4 = parseInt("<?php $data['b4']; ?>");
		var b5 = parseInt("<?php $data['b5']; ?>");
		var b6 = parseInt("<?php $data['b6']; ?>");
		var b7 = parseInt("<?php $data['b7']; ?>");
		var b8 = parseInt("<?php $data['b8']; ?>");
		var b9 = parseInt("<?php $data['b9']; ?>");
		var b10 = parseInt("<?php $data['b10']; ?>");
		var b11 = parseInt("<?php $data['b11']; ?>");
		var b12 = parseInt("<?php $data['b12']; ?>");
		var b13 = parseInt("<?php $data['b13']; ?>");
		var b14 = parseInt("<?php $data['b14']; ?>");
		var b15 = parseInt("<?php $data['b15']; ?>");
		var b16 = parseInt("<?php $data['b16']; ?>");
		var b17 = parseInt("<?php $data['b17']; ?>");
		var b18 = parseInt("<?php $data['b18']; ?>");
		var b19 = parseInt("<?php $data['b19']; ?>");
		var b20 = parseInt("<?php $data['b20']; ?>");
		var b21 = parseInt("<?php $data['b21']; ?>");
		var b22 = parseInt("<?php $data['b22']; ?>");
		var b23 = parseInt("<?php $data['b23']; ?>");
		var b24 = parseInt("<?php $data['b24']; ?>");
		var b25 = parseInt("<?php $data['b25']; ?>");
		var b26 = parseInt("<?php $data['b26']; ?>");
		var b27 = parseInt("<?php $data['b27']; ?>");
		var b28 = parseInt("<?php $data['b28']; ?>");
		var b29 = parseInt("<?php $data['b29']; ?>");
		var b30 = parseInt("<?php $data['b30']; ?>");
		var b31 = parseInt("<?php $data['b31']; ?>");
		var b32 = parseInt("<?php $data['b32']; ?>");
		var b33 = parseInt("<?php $data['b33']; ?>");
		var b34 = parseInt("<?php $data['b34']; ?>");
		var b35 = parseInt("<?php $data['b35']; ?>");
		var b36 = parseInt("<?php $data['b36']; ?>");
		var b37 = parseInt("<?php $data['b37']; ?>");
		var b38 = parseInt("<?php $data['b38']; ?>");
		var b39 = parseInt("<?php $data['b39']; ?>");
		var b40 = parseInt("<?php $data['b40']; ?>");
		var b41 = parseInt("<?php $data['b41']; ?>");
		var b42 = parseInt("<?php $data['b42']; ?>");
		var b43 = parseInt("<?php $data['b43']; ?>");
		var b44 = parseInt("<?php $data['b44']; ?>");
		var b45 = parseInt("<?php $data['b45']; ?>");
		var b46 = parseInt("<?php $data['b46']; ?>");
		var b47 = parseInt("<?php $data['b47']; ?>");
		var b48 = parseInt("<?php $data['b48']; ?>");
		var b49 = parseInt("<?php $data['b49']; ?>");
		var b50 = parseInt("<?php $data['b50']; ?>");
		
		
		
</script>
<?php 
} ?>


	<script>
	
function check() {
	
	
	


		
    var e = 0; //ekstrawertyzm
    var i = 0; //introwertyzm
    var s = 0; //
    var n = 0;

    var p = 0;
    var j = 0;
    var f = 0;
    var t = 0;
    var q1 = document.quiz.pytanie1.value;
    var q2 = document.quiz.pytanie2.value;
    var q3 = document.quiz.pytanie3.value;
    var q4 = document.quiz.pytanie4.value;
    var q5 = document.quiz.pytanie5.value;
    var q6 = document.quiz.pytanie6.value;
    var q7 = document.quiz.pytanie7.value;
    var q8 = document.quiz.pytanie8.value;
    var q9 = document.quiz.pytanie9.value;
    var q10 = document.quiz.pytanie10.value;
    var q11 = document.quiz.pytanie11.value;
    var q12 = document.quiz.pytanie12.value;
    var q13 = document.quiz.pytanie13.value;
    var q14 = document.quiz.pytanie14.value;
    var q15 = document.quiz.pytanie15.value;
    var q16 = document.quiz.pytanie16.value;
    var q17 = document.quiz.pytanie17.value;
    var q18 = document.quiz.pytanie18.value;
    var q19 = document.quiz.pytanie19.value;
    var q20 = document.quiz.pytanie20.value;
    var q21 = document.quiz.pytanie21.value;
    var q22 = document.quiz.pytanie22.value;
    var q23 = document.quiz.pytanie23.value;
    var q24 = document.quiz.pytanie24.value;
    var q25 = document.quiz.pytanie25.value;
    var q26 = document.quiz.pytanie26.value;
    var q27 = document.quiz.pytanie27.value;
    var q28 = document.quiz.pytanie28.value;
    var q29 = document.quiz.pytanie29.value;
    var q30 = document.quiz.pytanie30.value;
    var q31 = document.quiz.pytanie31.value;
    var q32 = document.quiz.pytanie32.value;
    var q33 = document.quiz.pytanie33.value;
    var q34 = document.quiz.pytanie34.value;
    var q35 = document.quiz.pytanie35.value;
    var q36 = document.quiz.pytanie36.value;
    var q37 = document.quiz.pytanie37.value;
    var q38 = document.quiz.pytanie38.value;
    var q39 = document.quiz.pytanie39.value;
    var q40 = document.quiz.pytanie40.value;
    var q41 = document.quiz.pytanie41.value;
    var q42 = document.quiz.pytanie42.value;
    var q43 = document.quiz.pytanie43.value;
    var q44 = document.quiz.pytanie44.value;
    var q45 = document.quiz.pytanie45.value;
    var q46 = document.quiz.pytanie46.value;
    var q47 = document.quiz.pytanie47.value;
    var q48 = document.quiz.pytanie48.value;
    var q49 = document.quiz.pytanie49.value;
    var q50 = document.quiz.pytanie50.value;
    var result = document.getElementById('result');
    var quiz = document.getElementById("quiz");
	
	
	//pass te takie


	

    /* TUTAJ JEST AKTUALNA PRACA NAD PODPIĘCIE JS

    var src = "connect.php?stringg=";
    var stringg = "test1";
    src += stringg;
    window.location.href = src;

    */

  //  if (q1 == "a") { e++ }
   // if (q1 == "b") { i++ }


	
	switch (q1) {
		
		
    case "a": s = s + a1; break;
    case "b": s = s + a1/2; break;
	case "c": s = s + 0; break;
    case "d": n = n + b1/2; 	break;	
    case "e": n = n + b1; 
	break;
		
           
    }

    switch (q2) {
        case "a": s = s + a2; break;
        case "b": s = s + a2/2; break;
        case "c": s = s + 0; break;
        case "d": n = n + b2/2; break;
        case "e": n = n + b2;
           break;
    }

    switch (q3) {
        case "a": e = e + a3; break;
        case "b": e = e + a3/2; break;
        case "c": e = e + 0; break;
        case "d": i = i + b3/2; break;
        case "e": i = i + b3; break;
           break;
    }
    switch (q4) {
        case "a": f = f + a4;break;
        case "b": f = f + a4/2;break;
        case "c": f = f + 0;break;
        case "d": t = t + b4/2; break;
        case "e": t = t + b4;
            break;
    }
    switch (q5) {
        case "a": n = n + a5; break;
        case "b": n = n + a5/2; break;
        case "c": n = n + 0; break;
        case "d": s = s + b5/2; break;
        case "e": s = s + b5; 
           break;
    }
    switch (q6) {
        case "a": e = e + a6; break;
        case "b": e = e + a6/2; break;
        case "c": e = e + 0; break;
        case "d": i = i + b6/2;break;
        case "e": i = i + b6; 
           break;
    }
    switch (q7) {
        case "A": j=a7; break;
        case "B": p=b7; break;
        case "C": p=b7; 
            break;
    }
    switch (q8) {
        case "a": t = t + a8; break;
        case "b": t = t + a8/2; break;
        case "c": t = t + 0; break;
        case "d": f = f + b8/2;break;
        case "e": f = f + b8; 
            break;
    }
    switch (q9) {
        case "a": j = j + a9; break;
        case "b": j = j + a9/2; break;
        case "c": j = j + 0; break;
        case "d": p = p + b9/2; break;
        case "e": p = p + b9; 
            break;
    }
    switch (q10) {
        case "a": s = s + a10; break;
        case "b": s = s + a10/2; break;
        case "c": s = s + 0; break;
        case "d": n = n + b10/2; break;
        case "e": n = n + b10; 
            break;
    }
    switch (q11) {
        case "a": j = j + a11; break;
        case "b": j = j + a11/2; break;
        case "c": j = j + 0;break;
        case "d": p = p + b11/2; break;
        case "e": p = p + b11; 
            break;
    }
    switch (q12) {
        case "a": s = s + a12; break;
        case "b": s = s + a12/2; break;
        case "c": s = s + 0; break;
        case "d": n = n + b12/2; break;
        case "e": n = n + b12;
            break;
    }
    switch (q13) {
        case "a": e = e + a13; break;
        case "b": e = e + a13/2; break;
        case "c": e = e + 0; break;
        case "d": i = i + b13/2;break;
        case "e": i = i + b13; 
           break;
    }
    switch (q14) {
        case "A": f = f + a14; break;
        case "B": t = t + b14; 
            break;
    }
    switch (q15) {
        case "a": n = n + a15; break;
        case "b": n = n + a15/2; break;
        case "c": n = n + 0; break;
        case "d": s = s + b15/2; break;
        case "e": s = s + b15; 
           break;
    }
    switch (q16) {
        case "a": e = e + a16; break;
        case "b": e = e + a16/2; break;
        case "c": e = e + 0; break;
        case "d": i = i + b16/2;break;
        case "e": i = i + b16; 
            break;
    }
    switch (q17) {
        case "a": j = j + a17; break;
        case "b": j = j + a17/2; break;
        case "c": j = j + 0; break;
        case "d": p = p + b17/2; break;
        case "e": p = p + b17;
            break;
    }
    switch (q18) {
        case "a": j = j + a18;break;
        case "b": j = j + a18/2; break;
        case "c": j = j + 0; break;
        case "d": p = p + b18/2;break;
        case "e": p = p + b18; 
            break;
    }
    switch (q19) {
        case "a": j = j + a19;break;
        case "b": j = j + a19/2; break;
        case "c": j = j + 0; break;
        case "d": p = p + b19/2; break;
        case "e": p = p + b19; 
            break;
    }

    switch (q20) {
        case "A": s = s + a20;break;
        case "B": n = n + b20; 
            break;
    }

    switch (q21) {
        case "a": e = e + a21;break;
        case "b": e = e + a21/2; break;
        case "c": e = e + 0; break;
        case "d": i = i + b21/2; break;
        case "e": i = i + b21; 
           break;
    }
    switch (q22) {
        case "a": f = f + a22; break;
        case "b": f = f + a22/2; break;
        case "c": f = f + 0;break;
        case "d": t = t + b22/2; break;
        case "e": t = t + b22; 
            break;
    }
    switch (q23) {
        case "a": n = n + a23; break;
        case "b": n = n + a23/2; break;
        case "c": n = n + 0;break;
        case "d": s = s + b23/2; break;
        case "e": s = s + b23;
            break;
    }
    switch (q24) {
        case "a": e = e + a24; break;
        case "b": e = e + a24/2;break;
        case "c": e = e + 0; break;
        case "d": i = i + b24/2; break;
        case "e": i = i + b24; 
            break;
    }
    switch (q25) {
        case "a": j = j + a25; break;
        case "b": j = j + a25/2; break;
        case "c": j = j + 0; break;
        case "d": p = p + b25/2; break;
        case "e": p = p + b25; 
            break;
    }
    switch (q26) {
        case "a": e = e + a26;break;
        case "b": e = e + a26/2; break;
        case "c": e = e + 0; break;
        case "d": i = i + b26/2; break;
        case "e": i = i + b26;
           break;
    }
    switch (q27) {
        case "A": j = j + a27;break;
        case "B": p = p + b27; 
           break;
    }

    switch (q28) {
        case "A": s = s + a28; break;
        case "B": n = n + b28; 
            break;
    }

    switch (q29) {
        case "A": i = i + a29; break;
        case "B": e = e + b29; 
            break;
    }

    switch (q30) {
        case "A": t = t + a30; break;
        case "B": f = f + b30; 
            break;
    }

    switch (q31) {
        case "A": n = n + a31; break;
        case "B": s = s + b31; 
            break;
    }
    switch (q32) {
        case "A": t = t + a32; break;
        case "B": f = f + b32; 
            break;
    }
    switch (q33) {
        case "A": t = t + a33; break;
        case "B": f = f + b33; 
            break;
    }
    switch (q34) {
        case "A": j = j + a34; break;
        case "B": p = p + b34; 
            break;
    }
    switch (q35) {
        case "A": s = s + a35; break;
        case "B": n = n + b35;
           break;
    }
    switch (q36) {
        case "A": i = i + a36; break;
        case "B": e = e + b36; 
            break;
    }
    switch (q37) {
        case "A": t = t + a37; break;
        case "B": f = f + b37;
            break;
    }
    switch (q38) {
        case "A": n = n + a38; break;
        case "B": s = s + b38; 
            break;
    }
    switch (q39) {
        case "A": t = t + a39; break;
        case "B": f = f + b39; 
            break;
    }

    switch (q40) {
        case "A": f = f + a40; break;
        case "B": t = t + b40; 
            break;
    }

    switch (q41) {
        case "A": j = j + a41; break;
        case "B": p = p + b41; 
           break;
    }
    switch (q42) {
        case "A": s = s + a42; break;
        case "B": n = n + b42; 
           break;
    }
    switch (q43) {
        case "A": i = i + a43; break;
        case "B": e = e + b43; 
            break;
    }
    switch (q44) {
        case "A": t = t + a44; break;
        case "B": f = f + b44;
            break;
    }
    switch (q45) {
        case "A": n = n + a45; break;
        case "B": s = s + b45; 
           break;
    }
    switch (q46) {
        case "A": t = t + a46; break;
        case "B": f = f + b46;
            break;
    }
    switch (q47) {
        case "A": f = f + a47;break;
        case "B": t = t + b47;
            break;
    }
    switch (q48) {
        case "A": s = s + a48; break;
        case "B": n = n + b48; 
            break;
    }
    switch (q49) {
        case "A": t = t + a49; break;
        case "B": f = f + b49; 
            break;
    }
    switch (q50) {
        case "A": t = t + a50;break;
        case "B": f = f + b50; 
            break;
    }


    quiz.style.display = "none";

   // if (e > 0) {
   //     result.textContent = 'twoj wynik to e'
   // } else {
    //    result.textContent='twoj wynik jest inny' }

    if (e >= i) {
        if (s >= n) {
            if (t >= f) {
                if (j >= p) {
                    result.textContent = 'Jesteś ESTJ';
                    //location.href = "estp.html";
                    var typ = 'ESTJ';
					
				


if(typ!=""){
	$.ajax({
		url: "save.php",
		type: "POST",
		data: {
			typ: typ,
			
		},
		cache: false,
		success: function(dataResult){
			var dataResult = JSON.parse(dataResult);
			if(dataResult.statusCode==200){
				//$("#butsave").removeAttr("disabled");
				//$('#fupForm').find('input:text').val('');
				//$("#success").show();
				$('#success').html('Data added successfully !'); 						
			}
			else if(dataResult.statusCode==201){
				alert("Error occured !");
			}
			
		}
	});
	}
	else{
		alert('Please fill all the field !');
	}
                    alert(typ);
                }
                else {
                    result.textContent = 'ESTP';
                    var typ = 'ESTP';
					
				


if(typ!=""){
	$.ajax({
		url: "save.php",
		type: "POST",
		data: {
			typ: typ,
			
		},
		cache: false,
		success: function(dataResult){
			var dataResult = JSON.parse(dataResult);
			if(dataResult.statusCode==200){
				//$("#butsave").removeAttr("disabled");
				//$('#fupForm').find('input:text').val('');
				//$("#success").show();
				$('#success').html('Data added successfully !'); 						
			}
			else if(dataResult.statusCode==201){
				alert("Error occured !");
			}
			
		}
	});
	}
	else{
		alert('Please fill all the field !');
	}
                    alert(typ);
                }
            }
            else {
                if (j >= p) {
                    result.textContent = 'Jesteś ESFJ';
                    var typ = 'ESFJ';
					
				


if(typ!=""){
	$.ajax({
		url: "save.php",
		type: "POST",
		data: {
			typ: typ,
			
		},
		cache: false,
		success: function(dataResult){
			var dataResult = JSON.parse(dataResult);
			if(dataResult.statusCode==200){
				//$("#butsave").removeAttr("disabled");
				//$('#fupForm').find('input:text').val('');
				//$("#success").show();
				$('#success').html('Data added successfully !'); 						
			}
			else if(dataResult.statusCode==201){
				alert("Error occured !");
			}
			
		}
	});
	}
	else{
		alert('Please fill all the field !');
	}
                    alert(typ);
                }
                else {
                    result.textContent = 'ESFP';
                    var typ='ESFP';
				
if(typ!=""){
	$.ajax({
		url: "save.php",
		type: "POST",
		data: {
			typ: typ,
			
		},
		cache: false,
		success: function(dataResult){
			var dataResult = JSON.parse(dataResult);
			if(dataResult.statusCode==200){
				//$("#butsave").removeAttr("disabled");
				//$('#fupForm').find('input:text').val('');
				//$("#success").show();
				$('#success').html('Data added successfully !'); 						
			}
			else if(dataResult.statusCode==201){
				alert("Error occured !");
			}
			
		}
	});
	}
	else{
		alert('Please fill all the field !');
	}
                    alert(typ);
                }
            }
        }
        else {
            if (t >= f) {
                if (j >= p) {
                    result.textContent = 'Jesteś ENTJ';
                    var typ = 'ENTJ';
					
					


if(typ!=""){
	$.ajax({
		url: "save.php",
		type: "POST",
		data: {
			typ: typ,
			
		},
		cache: false,
		success: function(dataResult){
			var dataResult = JSON.parse(dataResult);
			if(dataResult.statusCode==200){
				//$("#butsave").removeAttr("disabled");
				//$('#fupForm').find('input:text').val('');
				//$("#success").show();
				$('#success').html('Data added successfully !'); 						
			}
			else if(dataResult.statusCode==201){
				alert("Error occured !");
			}
			
		}
	});
	}
	else{
		alert('Please fill all the field !');
	}
                    alert(typ);
                }
                else {
                    result.textContent = 'ENTP';
                    var typ = 'ENTP';
					
				


if(typ!=""){
	$.ajax({
		url: "save.php",
		type: "POST",
		data: {
			typ: typ,
			
		},
		cache: false,
		success: function(dataResult){
			var dataResult = JSON.parse(dataResult);
			if(dataResult.statusCode==200){
				//$("#butsave").removeAttr("disabled");
				//$('#fupForm').find('input:text').val('');
				//$("#success").show();
				$('#success').html('Data added successfully !'); 						
			}
			else if(dataResult.statusCode==201){
				alert("Error occured !");
			}
			
		}
	});
	}
	else{
		alert('Please fill all the field !');
	}
                    alert(typ);
                }
            }
            else {
                if (j >= p) {
                    result.textContent = 'Jesteś ENFJ';
                    var typ = 'ENFJ';
					


if(typ!=""){
	$.ajax({
		url: "save.php",
		type: "POST",
		data: {
			typ: typ,
			
		},
		cache: false,
		success: function(dataResult){
			var dataResult = JSON.parse(dataResult);
			if(dataResult.statusCode==200){
				//$("#butsave").removeAttr("disabled");
				//$('#fupForm').find('input:text').val('');
				//$("#success").show();
				$('#success').html('Data added successfully !'); 						
			}
			else if(dataResult.statusCode==201){
				alert("Error occured !");
			}
			
		}
	});
	}
	else{
		alert('Please fill all the field !');
	}
                    alert(typ);
                }
                else {
                    result.textContent = 'ENFP';
                    var typ = 'ENFP';
					
				


if(typ!=""){
	$.ajax({
		url: "save.php",
		type: "POST",
		data: {
			typ: typ,
			
		},
		cache: false,
		success: function(dataResult){
			var dataResult = JSON.parse(dataResult);
			if(dataResult.statusCode==200){
				//$("#butsave").removeAttr("disabled");
				//$('#fupForm').find('input:text').val('');
				//$("#success").show();
				$('#success').html('Data added successfully !'); 						
			}
			else if(dataResult.statusCode==201){
				alert("Error occured !");
			}
			
		}
	});
	}
	else{
		alert('Please fill all the field !');
	}
                    alert(typ);
                }
            }
        }
    }
    else
    {
        if (s >= n) {
            if (t >= f) {
                if (j >= p) {
                    result.textContent = 'Jesteś ISTJ';
                    var typ = 'ISTJ';
					
				


if(typ!=""){
	$.ajax({
		url: "save.php",
		type: "POST",
		data: {
			typ: typ,
			
		},
		cache: false,
		success: function(dataResult){
			var dataResult = JSON.parse(dataResult);
			if(dataResult.statusCode==200){
				//$("#butsave").removeAttr("disabled");
				//$('#fupForm').find('input:text').val('');
				//$("#success").show();
				$('#success').html('Data added successfully !'); 						
			}
			else if(dataResult.statusCode==201){
				alert("Error occured !");
			}
			
		}
	});
	}
	else{
		alert('Please fill all the field !');
	}
                    alert(typ);
                }
                else {
                    result.textContent = 'ISTP';
                    var typ = 'ISTP';
					
				

					

if(typ!=""){
	$.ajax({
		url: "save.php",
		type: "POST",
		data: {
			typ: typ,
			
		},
		cache: false,
		success: function(dataResult){
			var dataResult = JSON.parse(dataResult);
			if(dataResult.statusCode==200){
				//$("#butsave").removeAttr("disabled");
				//$('#fupForm').find('input:text').val('');
				//$("#success").show();
				$('#success').html('Data added successfully !'); 						
			}
			else if(dataResult.statusCode==201){
				alert("Error occured !");
			}
			
		}
	});
	}
	else{
		alert('Please fill all the field !');
	}
                    alert(typ);
                }
            }
            else {
                if (j >= p) {
                    result.textContent = 'Jesteś ISFJ';
                    var typ = 'ISFJ';
					
				


if(typ!=""){
	$.ajax({
		url: "save.php",
		type: "POST",
		data: {
			typ: typ,
			
		},
		cache: false,
		success: function(dataResult){
			var dataResult = JSON.parse(dataResult);
			if(dataResult.statusCode==200){
				//$("#butsave").removeAttr("disabled");
				//$('#fupForm').find('input:text').val('');
				//$("#success").show();
				$('#success').html('Data added successfully !'); 						
			}
			else if(dataResult.statusCode==201){
				alert("Error occured !");
			}
			
		}
	});
	}
	else{
		alert('Please fill all the field !');
	}
                    alert(typ);
                }
                else {
                    result.textContent = 'ISFP';
                    var typ = 'ISFP';
					
				

if(typ!=""){
	$.ajax({
		url: "save.php",
		type: "POST",
		data: {
			typ: typ,
			
		},
		cache: false,
		success: function(dataResult){
			var dataResult = JSON.parse(dataResult);
			if(dataResult.statusCode==200){
				//$("#butsave").removeAttr("disabled");
				//$('#fupForm').find('input:text').val('');
				//$("#success").show();
				$('#success').html('Data added successfully !'); 						
			}
			else if(dataResult.statusCode==201){
				alert("Error occured !");
			}
			
		}
	});
	}
	else{
		alert('Please fill all the field !');
	}
                    alert(typ);
                }
            }
        }
        else {
            if (t >= f) {
                if (j >= p) {
                    result.textContent = 'Jesteś INTJ';
                    var typ = 'INTJ';
					
				

if(typ!=""){
	$.ajax({
		url: "save.php",
		type: "POST",
		data: {
			typ: typ,
			
		},
		cache: false,
		success: function(dataResult){
			var dataResult = JSON.parse(dataResult);
			if(dataResult.statusCode==200){
				//$("#butsave").removeAttr("disabled");
				//$('#fupForm').find('input:text').val('');
				//$("#success").show();
				$('#success').html('Data added successfully !'); 						
			}
			else if(dataResult.statusCode==201){
				alert("Error occured !");
			}
			
		}
	});
	}
	else{
		alert('Please fill all the field !');
	}
                    alert(typ);
                }
                else {
                    result.textContent = 'INTP';
                    var typ = 'INTP';
				


if(typ!=""){
	$.ajax({
		url: "save.php",
		type: "POST",
		data: {
			typ: typ,
			
		},
		cache: false,
		success: function(dataResult){
			var dataResult = JSON.parse(dataResult);
			if(dataResult.statusCode==200){
				//$("#butsave").removeAttr("disabled");
				//$('#fupForm').find('input:text').val('');
				//$("#success").show();
				$('#success').html('Data added successfully !'); 						
			}
			else if(dataResult.statusCode==201){
				alert("Error occured !");
			}
			
		}
	});
	}
	else{
		alert('Please fill all the field !');
	}
                    alert(typ);
                }
            }
            else {
                if (j >= p) {
                    result.textContent = 'Jesteś INFJ';
                    var typ = 'INFJ';
					
				


if(typ!=""){
	$.ajax({
		url: "save.php",
		type: "POST",
		data: {
			typ: typ,
			
		},
		cache: false,
		success: function(dataResult){
			var dataResult = JSON.parse(dataResult);
			if(dataResult.statusCode==200){
				//$("#butsave").removeAttr("disabled");
				//$('#fupForm').find('input:text').val('');
				//$("#success").show();
				$('#success').html('Data added successfully !'); 						
			}
			else if(dataResult.statusCode==201){
				alert("Error occured !");
			}
			
		}
	});
	}
	else{
		alert('Please fill all the field !');
	}
                    alert(typ);
                }
                else {
                    result.textContent = 'INFP';
                    var typ = 'INFP';
					
					
					


if(typ!=""){
	$.ajax({
		url: "save.php",
		type: "POST",
		data: {
			typ: typ,
			
		},
		cache: false,
		success: function(dataResult){
			var dataResult = JSON.parse(dataResult);
			if(dataResult.statusCode==200){
				//$("#butsave").removeAttr("disabled");
				//$('#fupForm').find('input:text').val('');
				//$("#success").show();
				$('#success').html('Data added successfully !'); 						
			}
			else if(dataResult.statusCode==201){
				alert("Error occured !");
			}
			
		}
	});
	}
	else{
		alert('Please fill all the field !');
	}
                    alert(typ);
					
                }
            }
        }
    }

}













	
	</script>


</head>
<body>






<div  class="div-1">

    <form name="quiz" id="quiz" action="connect.php" method="post">
        <h2>Sprawdź jaki masz typ osobowości.</h2>
		<H4>Na podstawie Testu Myers-Briggs </H4>


		<h4 class="question">_________________________________________________</h4>
		  <div>
                <h4>Jakiej jesteś płci?</h4>
				
				</br>
                <div class="radio-toolbar">
				<p2  >Męska  Żeńska Other</p2></br></br>
				<input type="radio" name="gender" id="male" value="m">
				<label class="label neutralne" for="male" class="radio-inline"></label>

                  <input type="radio" name="gender" id="female" value="f">
<label class="label neutralne" for="female" class="radio-inline"></label>
				  
				  <input type="radio" name="gender" id="other" value="o">
<label class="label neutralne" for="other" class="radio-inline"></label></br></br></div>


</div>
	</div>
		
		
<!--												START SEKCJI PYTAŃ																		   		 -->
<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->		
		
		
<section class="q-n-a">
<h3 class="question">1. <?php  
$con=mysqli_connect("localhost","root","","test1");
if (mysqli_connect_errno())
{echo "Failed to connect to MySQL: " . mysqli_connect_error();}

$result = mysqli_query($con,"SELECT pytanie1 from pytania");
while($row = mysqli_fetch_array($result))
{echo "<td>" . $row['pytanie1'] . "</td>";}?></h3>

            
			<div class="radio-toolbar2">
			<p3>Zgadzam się</p3>
				<input  type="radio" name="pytanie1" value="a" id="pytanie1a"><label for="pytanie1a"></label>
                <input  type="radio" name="pytanie1" value="b" id="pytanie1b"><label for="pytanie1b"></label>
				<input  type="radio" name="pytanie1" value="c" id="pytanie1c"><label for="pytanie1c"></label>
				<input  type="radio" name="pytanie1" value="d" id="pytanie1d"><label for="pytanie1d"></label>
				<input  type="radio" name="pytanie1" value="e" id="pytanie1e"><label for="pytanie1e"></label>
				<p4>Nie zgadzam się</p4>
			</div></section>
			
			
			
			</br></br>



<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->




<section class="q-n-a">
<h3 class="question">2. <?php  
$result = mysqli_query($con,"SELECT pytanie2 from pytania");
while($row = mysqli_fetch_array($result))
{echo "<td>" . $row['pytanie2'] . "</td>";}?>   </h3>
            
			<div class="radio-toolbar2">
			<p3>Zgadzam się</p3>
				<input  type="radio" name="pytanie2" value="a" id="pytanie2a"><label for="pytanie2a"></label>
                <input  type="radio" name="pytanie2" value="b" id="pytanie2b"><label for="pytanie2b"></label>
				<input  type="radio" name="pytanie2" value="c" id="pytanie2c"><label for="pytanie2c"></label>
				<input  type="radio" name="pytanie2" value="d" id="pytanie2d"><label for="pytanie2d"></label>
				<input  type="radio" name="pytanie2" value="e" id="pytanie2e"><label for="pytanie2e"></label>
				<p4>Nie zgadzam się</p4>
			</div></section></br></br>

<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->




<section class="q-n-a">
<h3 class="question">3. <?php  
$result = mysqli_query($con,"SELECT pytanie3 from pytania");
while($row = mysqli_fetch_array($result))
{echo "<td>" . $row['pytanie3'] . "</td>";}?>   </h3>
            
			<div class="radio-toolbar2">
			
			<p3>Zgadzam się</p3>
				<input  type="radio" name="pytanie3" value="a" id="pytanie3a"><label for="pytanie3a"></label>
                <input  type="radio" name="pytanie3" value="b" id="pytanie3b"><label for="pytanie3b"></label>
				<input  type="radio" name="pytanie3" value="c" id="pytanie3c"><label for="pytanie3c"></label>
				<input  type="radio" name="pytanie3" value="d" id="pytanie3d"><label for="pytanie3d"></label>
				<input  type="radio" name="pytanie3" value="e" id="pytanie3e"><label for="pytanie3e"></label>
				<p4>Nie zgadzam się</p4>
			</div></section></br></br>

<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->



<section class="q-n-a">
<h3 class="question">4. <?php  
$result = mysqli_query($con,"SELECT pytanie4 from pytania");
while($row = mysqli_fetch_array($result))
{echo "<td>" . $row['pytanie4'] . "</td>";}?>   </h3>
            
			<div class="radio-toolbar2">
			
			<p3>Zgadzam się</p3>
				<input  type="radio" name="pytanie4" value="a" id="pytanie4a"><label for="pytanie4a"></label>
                <input  type="radio" name="pytanie4" value="b" id="pytanie4b"><label for="pytanie4b"></label>
				<input  type="radio" name="pytanie4" value="c" id="pytanie4c"><label for="pytanie4c"></label>
				<input  type="radio" name="pytanie4" value="d" id="pytanie4d"><label for="pytanie4d"></label>
				<input  type="radio" name="pytanie4" value="e" id="pytanie4e"><label for="pytanie4e"></label>
				<p4>Nie zgadzam się</p4>
			</div></section></br></br>

<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->



<section class="q-n-a">
<h3 class="question">5. <?php  
$result = mysqli_query($con,"SELECT pytanie5 from pytania");
while($row = mysqli_fetch_array($result))
{echo "<td>" . $row['pytanie5'] . "</td>";}?>   </h3>
            
			<div class="radio-toolbar2">
			
			<p3>Zgadzam się</p3>
				<input  type="radio" name="pytanie5" value="a" id="pytanie5a"><label for="pytanie5a"></label>
                <input  type="radio" name="pytanie5" value="b" id="pytanie5b"><label for="pytanie5b"></label>
				<input  type="radio" name="pytanie5" value="c" id="pytanie5c"><label for="pytanie5c"></label>
				<input  type="radio" name="pytanie5" value="d" id="pytanie5d"><label for="pytanie5d"></label>
				<input  type="radio" name="pytanie5" value="e" id="pytanie5e"><label for="pytanie5e"></label>
				<p4>Nie zgadzam się</p4>
			</div></section></br></br>

<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->



<section class="q-n-a">
<h3 class="question">6. <?php  
$result = mysqli_query($con,"SELECT pytanie6 from pytania");
while($row = mysqli_fetch_array($result))
{echo "<td>" . $row['pytanie6'] . "</td>";}?>   </h3>
            
			<div class="radio-toolbar2">
			
			<p3>Zgadzam się</p3>
				<input  type="radio" name="pytanie6" value="a" id="pytanie6a"><label for="pytanie6a"></label>
                <input  type="radio" name="pytanie6" value="b" id="pytanie6b"><label for="pytanie6b"></label>
				<input  type="radio" name="pytanie6" value="c" id="pytanie6c"><label for="pytanie6c"></label>
				<input  type="radio" name="pytanie6" value="d" id="pytanie6d"><label for="pytanie6d"></label>
				<input  type="radio" name="pytanie6" value="e" id="pytanie6e"><label for="pytanie6e"></label>
				<p4>Nie zgadzam się</p4>
			</div></section></br></br>

<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->






        <section class="q-n-a">
 <div class="radio-toolbar3">
 <h3 class="question">7. <?php  
$result = mysqli_query($con,"SELECT pytanie7 from pytania");
while($row = mysqli_fetch_array($result))
{echo "<td>" . $row['pytanie7'] . "</td>";}?>   </h3>
 
				<input type="radio" name="pytanie7"  value="A" id="pytanie7a">
				<label  for="pytanie7a" class="radio-inline"><?php  
$result = mysqli_query($con,"SELECT pierwa from slowa");
while($row = mysqli_fetch_array($result))
{echo "<td>" . $row['pierwa'] . "</td>";}?></label>

                <input type="radio" name="pytanie7"  value="B" id="pytanie7b">
				<label for="pytanie7b" class="radio-inline"><?php  
$result = mysqli_query($con,"SELECT pierwb from slowa");
while($row = mysqli_fetch_array($result))
{echo "<td>" . $row['pierwb'] . "</td>";}?></label>

				<input type="radio" name="pytanie7"  value="C" id="pytanie7c">
				<label for="pytanie7c" class="radio-inline"><?php  
$result = mysqli_query($con,"SELECT druga from slowa");
while($row = mysqli_fetch_array($result))
{echo "<td>" . $row['druga'] . "</td>";}?></label>
				 
				  
</div></section>




       

<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->





<section class="q-n-a">
<h3 class="question">8. <?php  
$result = mysqli_query($con,"SELECT pytanie8 from pytania");
while($row = mysqli_fetch_array($result))
{echo "<td>" . $row['pytanie8'] . "</td>";}?>   </h3>
            
			<div class="radio-toolbar2">
			
			<p3>Zgadzam się</p3>
				<input  type="radio" name="pytanie8" value="a" id="pytanie8a"><label for="pytanie8a"></label>
                <input  type="radio" name="pytanie8" value="b" id="pytanie8b"><label for="pytanie8b"></label>
				<input  type="radio" name="pytanie8" value="c" id="pytanie8c"><label for="pytanie8c"></label>
				<input  type="radio" name="pytanie8" value="d" id="pytanie8d"><label for="pytanie8d"></label>
				<input  type="radio" name="pytanie8" value="e" id="pytanie8e"><label for="pytanie8e"></label>
				<p4>Nie zgadzam się</p4>
			</div></section></br></br>

<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->


<section class="q-n-a">
<h3 class="question">9. <?php  
$result = mysqli_query($con,"SELECT pytanie9 from pytania");
while($row = mysqli_fetch_array($result))
{echo "<td>" . $row['pytanie9'] . "</td>";}?>   </h3>
            
			<div class="radio-toolbar2">
			
			<p3>Zgadzam się</p3>
				<input  type="radio" name="pytanie9" value="a" id="pytanie9a"><label for="pytanie9a"></label>
                <input  type="radio" name="pytanie9" value="b" id="pytanie9b"><label for="pytanie9b"></label>
				<input  type="radio" name="pytanie9" value="c" id="pytanie9c"><label for="pytanie9c"></label>
				<input  type="radio" name="pytanie9" value="d" id="pytanie9d"><label for="pytanie9d"></label>
				<input  type="radio" name="pytanie9" value="e" id="pytanie9e"><label for="pytanie9e"></label>
				<p4>Nie zgadzam się</p4>
			</div></section></br></br>

<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->



<section class="q-n-a">
<h3 class="question">10. <?php  
$result = mysqli_query($con,"SELECT pytanie10 from pytania");
while($row = mysqli_fetch_array($result))
{echo "<td>" . $row['pytanie10'] . "</td>";}?>   </h3>
            
			<div class="radio-toolbar2">
			
			<p3>Zgadzam się</p3>
				<input  type="radio" name="pytanie10" value="a" id="pytanie10a"><label for="pytanie10a"></label>
                <input  type="radio" name="pytanie10" value="b" id="pytanie10b"><label for="pytanie10b"></label>
				<input  type="radio" name="pytanie10" value="c" id="pytanie10c"><label for="pytanie10c"></label>
				<input  type="radio" name="pytanie10" value="d" id="pytanie10d"><label for="pytanie10d"></label>
				<input  type="radio" name="pytanie10" value="e" id="pytanie10e"><label for="pytanie10e"></label>
				<p4>Nie zgadzam się</p4>
			</div></section></br></br>

<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->



<section class="q-n-a">
<h3 class="question">11. <?php  
$result = mysqli_query($con,"SELECT pytanie11 from pytania");
while($row = mysqli_fetch_array($result))
{echo "<td>" . $row['pytanie11'] . "</td>";}?>   </h3>
            
			<div class="radio-toolbar2">
			
			<p3>Zgadzam się</p3>
				<input  type="radio" name="pytanie11" value="a" id="pytanie11a"><label for="pytanie11a"></label>
                <input  type="radio" name="pytanie11" value="b" id="pytanie11b"><label for="pytanie11b"></label>
				<input  type="radio" name="pytanie11" value="c" id="pytanie11c"><label for="pytanie11c"></label>
				<input  type="radio" name="pytanie11" value="d" id="pytanie11d"><label for="pytanie11d"></label>
				<input  type="radio" name="pytanie11" value="e" id="pytanie11e"><label for="pytanie11e"></label>
				<p4>Nie zgadzam się</p4>
			</div></section></br></br>

<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->


<section class="q-n-a">
<h3 class="question">12. <?php  
$result = mysqli_query($con,"SELECT pytanie12 from pytania");
while($row = mysqli_fetch_array($result))
{echo "<td>" . $row['pytanie12'] . "</td>";}?>   </h3>
            
			<div class="radio-toolbar2">
			
			<p3>Zgadzam się</p3>
				<input  type="radio" name="pytanie12" value="a" id="pytanie12a"><label for="pytanie12a"></label>
                <input  type="radio" name="pytanie12" value="b" id="pytanie12b"><label for="pytanie12b"></label>
				<input  type="radio" name="pytanie12" value="c" id="pytanie12c"><label for="pytanie12c"></label>
				<input  type="radio" name="pytanie12" value="d" id="pytanie12d"><label for="pytanie12d"></label>
				<input  type="radio" name="pytanie12" value="e" id="pytanie12e"><label for="pytanie12e"></label>
				<p4>Nie zgadzam się</p4>
			</div></section></br></br>

<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->


<section class="q-n-a">
<h3 class="question">13. <?php  
$result = mysqli_query($con,"SELECT pytanie13 from pytania");
while($row = mysqli_fetch_array($result))
{echo "<td>" . $row['pytanie13'] . "</td>";}?>   </h3>
            
			<div class="radio-toolbar2">
			
			<p3>Zgadzam się</p3>
				<input  type="radio" name="pytanie13" value="a" id="pytanie13a"><label for="pytanie13a"></label>
                <input  type="radio" name="pytanie13" value="b" id="pytanie13b"><label for="pytanie13b"></label>
				<input  type="radio" name="pytanie13" value="c" id="pytanie13c"><label for="pytanie13c"></label>
				<input  type="radio" name="pytanie13" value="d" id="pytanie13d"><label for="pytanie13d"></label>
				<input  type="radio" name="pytanie13" value="e" id="pytanie13e"><label for="pytanie13e"></label>
				<p4>Nie zgadzam się</p4>
			</div></section></br></br>

<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<section class="q-n-a">
 <div class="radio-toolbar3">
 <h3 class="question">14. <?php  
$result = mysqli_query($con,"SELECT pytanie14 from pytania");
while($row = mysqli_fetch_array($result))
{echo "<td>" . $row['pytanie14'] . "</td>";}?>   </h3>
 
				<input type="radio" name="pytanie14"  value="A" id="pytanie14a">
				<label  for="pytanie14a" class="radio-inline"><?php  
$result = mysqli_query($con,"SELECT trzeb from slowa");
while($row = mysqli_fetch_array($result))
{echo "<td>" . $row['trzeb'] . "</td>";}?></label>

                <input type="radio" name="pytanie14"  value="B" id="pytanie14b">
				<label for="pytanie14b" class="radio-inline"><?php  
$result = mysqli_query($con,"SELECT trzec from slowa");
while($row = mysqli_fetch_array($result))
{echo "<td>" . $row['trzec'] . "</td>";}?></label>
				
				  
</div></section>







<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->



<section class="q-n-a">
<h3 class="question">15. <?php  
$result = mysqli_query($con,"SELECT pytanie15 from pytania");
while($row = mysqli_fetch_array($result))
{echo "<td>" . $row['pytanie15'] . "</td>";}?>   </h3>
            
			<div class="radio-toolbar2">
			
			<p3>Zgadzam się</p3>
				<input  type="radio" name="pytanie15" value="a" id="pytanie15a"><label for="pytanie15a"></label>
                <input  type="radio" name="pytanie15" value="b" id="pytanie15b"><label for="pytanie15b"></label>
				<input  type="radio" name="pytanie15" value="c" id="pytanie15c"><label for="pytanie15c"></label>
				<input  type="radio" name="pytanie15" value="d" id="pytanie15d"><label for="pytanie15d"></label>
				<input  type="radio" name="pytanie15" value="e" id="pytanie15e"><label for="pytanie15e"></label>
				<p4>Nie zgadzam się</p4>
			</div></section></br></br>

<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->



<section class="q-n-a">
<h3 class="question">16. <?php  
$result = mysqli_query($con,"SELECT pytanie16 from pytania");
while($row = mysqli_fetch_array($result))
{echo "<td>" . $row['pytanie16'] . "</td>";}?>   </h3>
            
			<div class="radio-toolbar2">
			
			<p3>Zgadzam się</p3>
				<input  type="radio" name="pytanie16" value="a" id="pytanie16a"><label for="pytanie16a"></label>
                <input  type="radio" name="pytanie16" value="b" id="pytanie16b"><label for="pytanie16b"></label>
				<input  type="radio" name="pytanie16" value="c" id="pytanie16c"><label for="pytanie16c"></label>
				<input  type="radio" name="pytanie16" value="d" id="pytanie16d"><label for="pytanie16d"></label>
				<input  type="radio" name="pytanie16" value="e" id="pytanie16e"><label for="pytanie16e"></label>
				<p4>Nie zgadzam się</p4>
			</div></section></br></br>

<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->


<section class="q-n-a">
<h3 class="question">17. <?php  
$result = mysqli_query($con,"SELECT pytanie17 from pytania");
while($row = mysqli_fetch_array($result))
{echo "<td>" . $row['pytanie17'] . "</td>";}?>   </h3>
            
			<div class="radio-toolbar2">
			
			<p3>Zgadzam się</p3>
				<input  type="radio" name="pytanie17" value="a" id="pytanie17a"><label for="pytanie17a"></label>
                <input  type="radio" name="pytanie17" value="b" id="pytanie17b"><label for="pytanie17b"></label>
				<input  type="radio" name="pytanie17" value="c" id="pytanie17c"><label for="pytanie17c"></label>
				<input  type="radio" name="pytanie17" value="d" id="pytanie17d"><label for="pytanie17d"></label>
				<input  type="radio" name="pytanie17" value="e" id="pytanie17e"><label for="pytanie17e"></label>
				<p4>Nie zgadzam się</p4>
			</div></section></br></br>

<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->


<section class="q-n-a">
<h3 class="question">18. <?php  
$result = mysqli_query($con,"SELECT pytanie18 from pytania");
while($row = mysqli_fetch_array($result))
{echo "<td>" . $row['pytanie18'] . "</td>";}?>   </h3>
            
			<div class="radio-toolbar2">
			
			<p3>Zgadzam się</p3>
				<input  type="radio" name="pytanie18" value="a" id="pytanie18a"><label for="pytanie18a"></label>
                <input  type="radio" name="pytanie18" value="b" id="pytanie18b"><label for="pytanie18b"></label>
				<input  type="radio" name="pytanie18" value="c" id="pytanie18c"><label for="pytanie18c"></label>
				<input  type="radio" name="pytanie18" value="d" id="pytanie18d"><label for="pytanie18d"></label>
				<input  type="radio" name="pytanie18" value="e" id="pytanie18e"><label for="pytanie18e"></label>
				<p4>Nie zgadzam się</p4>
			</div></section></br></br>

<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->


<section class="q-n-a">
<h3 class="question">19. <?php  
$result = mysqli_query($con,"SELECT pytanie19 from pytania");
while($row = mysqli_fetch_array($result))
{echo "<td>" . $row['pytanie19'] . "</td>";}?>   </h3>
            
			<div class="radio-toolbar2">
			
			<p3>Zgadzam się</p3>
				<input  type="radio" name="pytanie19" value="a" id="pytanie19a"><label for="pytanie19a"></label>
                <input  type="radio" name="pytanie19" value="b" id="pytanie19b"><label for="pytanie19b"></label>
				<input  type="radio" name="pytanie19" value="c" id="pytanie19c"><label for="pytanie19c"></label>
				<input  type="radio" name="pytanie19" value="d" id="pytanie19d"><label for="pytanie19d"></label>
				<input  type="radio" name="pytanie19" value="e" id="pytanie19e"><label for="pytanie19e"></label>
				<p4>Nie zgadzam się</p4>
			</div></section></br></br>

<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->




<section class="q-n-a">
 <div class="radio-toolbar3">
 <h3 class="question">20. <?php  
$result = mysqli_query($con,"SELECT pytanie20 from pytania");
while($row = mysqli_fetch_array($result))
{echo "<td>" . $row['pytanie20'] . "</td>";}?>   </h3>
 
				<input type="radio" name="pytanie20"  value="A" id="pytanie20a">
				<label  for="pytanie20a" class="radio-inline"><?php  
$result = mysqli_query($con,"SELECT drugb from slowa");
while($row = mysqli_fetch_array($result))
{echo "<td>" . $row['drugb'] . "</td>";}?></label>

                <input type="radio" name="pytanie20"  value="B" id="pytanie20b">
				<label for="pytanie20b" class="radio-inline"><?php  
$result = mysqli_query($con,"SELECT trzea from slowa");
while($row = mysqli_fetch_array($result))
{echo "<td>" . $row['trzea'] . "</td>";}?></label>
				
				  
</div></section>






        


      
	    
		
<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->


<section class="q-n-a">
<h3 class="question">21. <?php  
$result = mysqli_query($con,"SELECT pytanie21 from pytania");
while($row = mysqli_fetch_array($result))
{echo "<td>" . $row['pytanie21'] . "</td>";}?>   </h3>
            
			<div class="radio-toolbar2">
			
			<p3>Zgadzam się</p3>
				<input  type="radio" name="pytanie21" value="a" id="pytanie21a"><label for="pytanie21a"></label>
                <input  type="radio" name="pytanie21" value="b" id="pytanie21b"><label for="pytanie21b"></label>
				<input  type="radio" name="pytanie21" value="c" id="pytanie21c"><label for="pytanie21c"></label>
				<input  type="radio" name="pytanie21" value="d" id="pytanie21d"><label for="pytanie21d"></label>
				<input  type="radio" name="pytanie21" value="e" id="pytanie21e"><label for="pytanie21e"></label>
				<p4>Nie zgadzam się</p4>
			</div></section></br></br>

<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
		





<section class="q-n-a">
<h3 class="question">22. <?php  
$result = mysqli_query($con,"SELECT pytanie22 from pytania");
while($row = mysqli_fetch_array($result))
{echo "<td>" . $row['pytanie22'] . "</td>";}?>   </h3>
            
			<div class="radio-toolbar2">
			
			<p3>Zgadzam się</p3>
				<input  type="radio" name="pytanie22" value="a" id="pytanie22a"><label for="pytanie22a"></label>
                <input  type="radio" name="pytanie22" value="b" id="pytanie22b"><label for="pytanie22b"></label>
				<input  type="radio" name="pytanie22" value="c" id="pytanie22c"><label for="pytanie22c"></label>
				<input  type="radio" name="pytanie22" value="d" id="pytanie22d"><label for="pytanie22d"></label>
				<input  type="radio" name="pytanie22" value="e" id="pytanie22e"><label for="pytanie22e"></label>
				<p4>Nie zgadzam się</p4>
			</div></section></br></br>

<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->


<section class="q-n-a">
<h3 class="question">23. <?php  
$result = mysqli_query($con,"SELECT pytanie23 from pytania");
while($row = mysqli_fetch_array($result))
{echo "<td>" . $row['pytanie23'] . "</td>";}?>   </h3>
            
			<div class="radio-toolbar2">
			
			<p3>Zgadzam się</p3>
				<input  type="radio" name="pytanie23" value="a" id="pytanie23a"><label for="pytanie23a"></label>
                <input  type="radio" name="pytanie23" value="b" id="pytanie23b"><label for="pytanie23b"></label>
				<input  type="radio" name="pytanie23" value="c" id="pytanie23c"><label for="pytanie23c"></label>
				<input  type="radio" name="pytanie23" value="d" id="pytanie23d"><label for="pytanie23d"></label>
				<input  type="radio" name="pytanie23" value="e" id="pytanie23e"><label for="pytanie23e"></label>
				<p4>Nie zgadzam się</p4>
			</div></section></br></br>

<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->


<section class="q-n-a">
<h3 class="question">24. <?php  
$result = mysqli_query($con,"SELECT pytanie24 from pytania");
while($row = mysqli_fetch_array($result))
{echo "<td>" . $row['pytanie24'] . "</td>";}?>   </h3>
            
			<div class="radio-toolbar2">
			
			<p3>Zgadzam się</p3>
				<input  type="radio" name="pytanie24" value="a" id="pytanie24a"><label for="pytanie24a"></label>
                <input  type="radio" name="pytanie24" value="b" id="pytanie24b"><label for="pytanie24b"></label>
				<input  type="radio" name="pytanie24" value="c" id="pytanie24c"><label for="pytanie24c"></label>
				<input  type="radio" name="pytanie24" value="d" id="pytanie24d"><label for="pytanie24d"></label>
				<input  type="radio" name="pytanie24" value="e" id="pytanie24e"><label for="pytanie24e"></label>
				<p4>Nie zgadzam się</p4>
			</div></section></br></br>

<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->


<section class="q-n-a">
<h3 class="question">25. <?php  
$result = mysqli_query($con,"SELECT pytanie25 from pytania");
while($row = mysqli_fetch_array($result))
{echo "<td>" . $row['pytanie25'] . "</td>";}?>   </h3>
            
			<div class="radio-toolbar2">
			
			<p3>Zgadzam się</p3>
				<input  type="radio" name="pytanie25" value="a" id="pytanie25a"><label for="pytanie25a"></label>
                <input  type="radio" name="pytanie25" value="b" id="pytanie25b"><label for="pytanie25b"></label>
				<input  type="radio" name="pytanie25" value="c" id="pytanie25c"><label for="pytanie25c"></label>
				<input  type="radio" name="pytanie25" value="d" id="pytanie25d"><label for="pytanie25d"></label>
				<input  type="radio" name="pytanie25" value="e" id="pytanie25e"><label for="pytanie25e"></label>
				<p4>Nie zgadzam się</p4>
			</div></section></br></br>

<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->


<section class="q-n-a">
<h3 class="question">26. <?php  
$result = mysqli_query($con,"SELECT pytanie26 from pytania");
while($row = mysqli_fetch_array($result))
{echo "<td>" . $row['pytanie26'] . "</td>";}?>   </h3>
            
			<div class="radio-toolbar2">
			
			<p3>Zgadzam się</p3>
				<input  type="radio" name="pytanie26" value="a" id="pytanie26a"><label for="pytanie26a"></label>
                <input  type="radio" name="pytanie26" value="b" id="pytanie26b"><label for="pytanie26b"></label>
				<input  type="radio" name="pytanie26" value="c" id="pytanie26c"><label for="pytanie26c"></label>
				<input  type="radio" name="pytanie26" value="d" id="pytanie26d"><label for="pytanie26d"></label>
				<input  type="radio" name="pytanie26" value="e" id="pytanie26e"><label for="pytanie26e"></label>
				<p4>Nie zgadzam się</p4>
			</div></section></br></br>

<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->





  <h3 class="question">Które słowo lepiej cię opisuje?</h3>
            <h3 class="question">_______________________</h3>
			<center><h3>27</h3></center>

<section class="q-n-a">
 <div class="radio-toolbar3">
 
 
				<input type="radio" name="pytanie27"  value="A" id="pytanie27a">
				<label  for="pytanie27a" class="radio-inline"><?php  
$result = mysqli_query($con,"SELECT 27a from slowa");
while($row = mysqli_fetch_array($result))
{echo "<td>" . $row['27a'] . "</td>";}?></label>

                <input type="radio" name="pytanie27"  value="B" id="pytanie27b">
				<label for="pytanie27b" class="radio-inline"><?php  
$result = mysqli_query($con,"SELECT 27b from slowa");
while($row = mysqli_fetch_array($result))
{echo "<td>" . $row['27b'] . "</td>";}?></label>
				 <h3 class="question">_______________________</h3>
			<center><h3>28</h3></center>
				  
</div></section>


















        <section class="q-n-a">
 <div class="radio-toolbar3">
 
 
				<input type="radio" name="pytanie28"  value="A" id="pytanie28a">
				<label  for="pytanie28a" class="radio-inline"><?php  
$result = mysqli_query($con,"SELECT 28a from slowa");
while($row = mysqli_fetch_array($result))
{echo "<td>" . $row['28a'] . "</td>";}?></label>

                <input type="radio" name="pytanie28"  value="B" id="pytanie28b">
				<label for="pytanie28b" class="radio-inline"><?php  
$result = mysqli_query($con,"SELECT 28b from slowa");
while($row = mysqli_fetch_array($result))
{echo "<td>" . $row['28b'] . "</td>";}?></label>
				 <h3 class="question">_______________________</h3>
			<center><h3>29</h3></center>
				  
</div></section>




        <section class="q-n-a">
 <div class="radio-toolbar3">
 
 
				<input type="radio" name="pytanie29"  value="A" id="pytanie29a">
				<label  for="pytanie29a" class="radio-inline"><?php  
$result = mysqli_query($con,"SELECT 29a from slowa");
while($row = mysqli_fetch_array($result))
{echo "<td>" . $row['29a'] . "</td>";}?></label>

                <input type="radio" name="pytanie29"  value="B" id="pytanie29b">
				<label for="pytanie29b" class="radio-inline"><?php  
$result = mysqli_query($con,"SELECT 29b from slowa");
while($row = mysqli_fetch_array($result))
{echo "<td>" . $row['29b'] . "</td>";}?></label>
				 <h3 class="question">_______________________</h3>
			<center><h3>30</h3></center>
				  
</div></section>







        <section class="q-n-a">
 <div class="radio-toolbar3">
 
 
				<input type="radio" name="pytanie30"  value="A" id="pytanie30a">
				<label  for="pytanie30a" class="radio-inline"><?php  
$result = mysqli_query($con,"SELECT 30a from slowa");
while($row = mysqli_fetch_array($result))
{echo "<td>" . $row['30a'] . "</td>";}?></label>

                <input type="radio" name="pytanie30"  value="B" id="pytanie30b">
				<label for="pytanie30b" class="radio-inline"><?php  
$result = mysqli_query($con,"SELECT 30b from slowa");
while($row = mysqli_fetch_array($result))
{echo "<td>" . $row['30b'] . "</td>";}?></label>
				 <h3 class="question">_______________________</h3><center><h3>31</h3></center>
				  
</div></section>






        <section class="q-n-a">
 <div class="radio-toolbar3">
 
 
				<input type="radio" name="pytanie31"  value="A" id="pytanie31a">
				<label  for="pytanie31a" class="radio-inline"><?php  
$result = mysqli_query($con,"SELECT 31a from slowa");
while($row = mysqli_fetch_array($result))
{echo "<td>" . $row['31a'] . "</td>";}?></label>

                <input type="radio" name="pytanie31"  value="B" id="pytanie31b">
				<label for="pytanie31b" class="radio-inline"><?php  
$result = mysqli_query($con,"SELECT 31b from slowa");
while($row = mysqli_fetch_array($result))
{echo "<td>" . $row['31b'] . "</td>";}?></label>
				 <h3 class="question">_______________________</h3><center><h3>32</h3></center>
				  
</div></section>






        <section class="q-n-a">
 <div class="radio-toolbar3">
 
 
				<input type="radio" name="pytanie32"  value="A" id="pytanie32a">
				<label  for="pytanie32a" class="radio-inline"><?php  
$result = mysqli_query($con,"SELECT 32a from slowa");
while($row = mysqli_fetch_array($result))
{echo "<td>" . $row['32a'] . "</td>";}?></label>

                <input type="radio" name="pytanie32"  value="B" id="pytanie32b">
				<label for="pytanie32b" class="radio-inline"><?php  
$result = mysqli_query($con,"SELECT 32b from slowa");
while($row = mysqli_fetch_array($result))
{echo "<td>" . $row['32b'] . "</td>";}?></label>
				 <h3 class="question">_______________________</h3><center><h3>33</h3></center>
				  
</div></section>






        <section class="q-n-a">
 <div class="radio-toolbar3">
 
 
				<input type="radio" name="pytanie33"  value="A" id="pytanie33a">
				<label  for="pytanie33a" class="radio-inline"><?php  
$result = mysqli_query($con,"SELECT 33a from slowa");
while($row = mysqli_fetch_array($result))
{echo "<td>" . $row['33a'] . "</td>";}?></label>

                <input type="radio" name="pytanie33"  value="B" id="pytanie33b">
				<label for="pytanie33b" class="radio-inline"><?php  
$result = mysqli_query($con,"SELECT 33b from slowa");
while($row = mysqli_fetch_array($result))
{echo "<td>" . $row['33b'] . "</td>";}?></label>
				 <h3 class="question">_______________________</h3><center><h3>34</h3></center>
				  
</div></section>






        <section class="q-n-a">
 <div class="radio-toolbar3">
 
 
				<input type="radio" name="pytanie34"  value="A" id="pytanie34a">
				<label  for="pytanie34a" class="radio-inline"><?php  
$result = mysqli_query($con,"SELECT 34a from slowa");
while($row = mysqli_fetch_array($result))
{echo "<td>" . $row['34a'] . "</td>";}?></label>

                <input type="radio" name="pytanie34"  value="B" id="pytanie34b">
				<label for="pytanie34b" class="radio-inline"><?php  
$result = mysqli_query($con,"SELECT 34b from slowa");
while($row = mysqli_fetch_array($result))
{echo "<td>" . $row['34b'] . "</td>";}?></label>
				 <h3 class="question">_______________________</h3><center><h3>35</h3></center>
				  
</div></section>






        <section class="q-n-a">
 <div class="radio-toolbar3">
 
 
				<input type="radio" name="pytanie35"  value="A" id="pytanie35a">
				<label  for="pytanie35a" class="radio-inline"><?php  
$result = mysqli_query($con,"SELECT 35a from slowa");
while($row = mysqli_fetch_array($result))
{echo "<td>" . $row['35a'] . "</td>";}?></label>

                <input type="radio" name="pytanie35"  value="B" id="pytanie35b">
				<label for="pytanie35b" class="radio-inline"><?php  
$result = mysqli_query($con,"SELECT 35b from slowa");
while($row = mysqli_fetch_array($result))
{echo "<td>" . $row['35b'] . "</td>";}?></label>
				 <h3 class="question">_______________________</h3><center><h3>36</h3></center>
				  
</div></section>






        <section class="q-n-a">
 <div class="radio-toolbar3">
 
 
				<input type="radio" name="pytanie36"  value="A" id="pytanie36a">
				<label  for="pytanie36a" class="radio-inline"><?php  
$result = mysqli_query($con,"SELECT 36a from slowa");
while($row = mysqli_fetch_array($result))
{echo "<td>" . $row['36a'] . "</td>";}?></label>

                <input type="radio" name="pytanie36"  value="B" id="pytanie36b">
				<label for="pytanie36b" class="radio-inline"><?php  
$result = mysqli_query($con,"SELECT 36b from slowa");
while($row = mysqli_fetch_array($result))
{echo "<td>" . $row['36b'] . "</td>";}?></label>
				 <h3 class="question">_______________________</h3><center><h3>37</h3></center>
				  
</div></section>






        <section class="q-n-a">
 <div class="radio-toolbar3">
 
 
				<input type="radio" name="pytanie37"  value="A" id="pytanie37a">
				<label  for="pytanie37a" class="radio-inline"><?php  
$result = mysqli_query($con,"SELECT 37a from slowa");
while($row = mysqli_fetch_array($result))
{echo "<td>" . $row['37a'] . "</td>";}?></label>

                <input type="radio" name="pytanie37"  value="B" id="pytanie37b">
				<label for="pytanie37b" class="radio-inline"><?php  
$result = mysqli_query($con,"SELECT 37b from slowa");
while($row = mysqli_fetch_array($result))
{echo "<td>" . $row['37b'] . "</td>";}?></label>
				 <h3 class="question">_______________________</h3><center><h3>38</h3></center>
				  
</div></section>






        <section class="q-n-a">
 <div class="radio-toolbar3">
 
 
				<input type="radio" name="pytanie38"  value="A" id="pytanie38a">
				<label  for="pytanie38a" class="radio-inline"><?php  
$result = mysqli_query($con,"SELECT 38a from slowa");
while($row = mysqli_fetch_array($result))
{echo "<td>" . $row['38a'] . "</td>";}?></label>

                <input type="radio" name="pytanie38"  value="B" id="pytanie38b">
				<label for="pytanie38b" class="radio-inline"><?php  
$result = mysqli_query($con,"SELECT 38b from slowa");
while($row = mysqli_fetch_array($result))
{echo "<td>" . $row['38b'] . "</td>";}?></label>
				 <h3 class="question">_______________________</h3><center><h3>39</h3></center>
				  
</div></section>






        <section class="q-n-a">
 <div class="radio-toolbar3">
 
 
				<input type="radio" name="pytanie39"  value="A" id="pytanie39a">
				<label  for="pytanie39a" class="radio-inline"><?php  
$result = mysqli_query($con,"SELECT 39a from slowa");
while($row = mysqli_fetch_array($result))
{echo "<td>" . $row['39a'] . "</td>";}?></label>

                <input type="radio" name="pytanie39"  value="B" id="pytanie39b">
				<label for="pytanie39b" class="radio-inline"><?php  
$result = mysqli_query($con,"SELECT 39b from slowa");
while($row = mysqli_fetch_array($result))
{echo "<td>" . $row['39b'] . "</td>";}?></label>
				 <h3 class="question">_______________________</h3><center><h3>40</h3></center>
				  
</div></section>
       







        <section class="q-n-a">
 <div class="radio-toolbar3">
 
 
				<input type="radio" name="pytanie40"  value="A" id="pytanie40a">
				<label  for="pytanie40a" class="radio-inline"><?php  
$result = mysqli_query($con,"SELECT 40a from slowa");
while($row = mysqli_fetch_array($result))
{echo "<td>" . $row['40a'] . "</td>";}?></label>

                <input type="radio" name="pytanie40"  value="B" id="pytanie40b">
				<label for="pytanie40b" class="radio-inline"><?php  
$result = mysqli_query($con,"SELECT 40b from slowa");
while($row = mysqli_fetch_array($result))
{echo "<td>" . $row['40b'] . "</td>";}?></label>
				 <h3 class="question">_______________________</h3><center><h3>41</h3></center>
				  
</div></section>
       







        <section class="q-n-a">
 <div class="radio-toolbar3">
 
 
				<input type="radio" name="pytanie41"  value="A" id="pytanie41a">
				<label  for="pytanie41a" class="radio-inline"><?php  
$result = mysqli_query($con,"SELECT 41a from slowa");
while($row = mysqli_fetch_array($result))
{echo "<td>" . $row['41a'] . "</td>";}?></label>

                <input type="radio" name="pytanie41"  value="B" id="pytanie41b">
				<label for="pytanie41b" class="radio-inline"><?php  
$result = mysqli_query($con,"SELECT 41b from slowa");
while($row = mysqli_fetch_array($result))
{echo "<td>" . $row['41b'] . "</td>";}?></label>
				 <h3 class="question">_______________________</h3><center><h3>42</h3></center>
				  
</div></section>       








     







        <section class="q-n-a">
 <div class="radio-toolbar3">
 
 
				<input type="radio" name="pytanie42"  value="A" id="pytanie42a">
				<label  for="pytanie42a" class="radio-inline"><?php  
$result = mysqli_query($con,"SELECT 42a from slowa");
while($row = mysqli_fetch_array($result))
{echo "<td>" . $row['42a'] . "</td>";}?></label>

                <input type="radio" name="pytanie42"  value="B" id="pytanie42b">
				<label for="pytanie42b" class="radio-inline"><?php  
$result = mysqli_query($con,"SELECT 42b from slowa");
while($row = mysqli_fetch_array($result))
{echo "<td>" . $row['42b'] . "</td>";}?></label>
				 <h3 class="question">_______________________</h3><center><h3>43</h3></center>
				  
</div></section>       







        <section class="q-n-a">
 <div class="radio-toolbar3">
 
 
				<input type="radio" name="pytanie43"  value="A" id="pytanie43a">
				<label  for="pytanie43a" class="radio-inline"><?php  
$result = mysqli_query($con,"SELECT 43a from slowa");
while($row = mysqli_fetch_array($result))
{echo "<td>" . $row['43a'] . "</td>";}?></label>

                <input type="radio" name="pytanie43"  value="B" id="pytanie43b">
				<label for="pytanie43b" class="radio-inline"><?php  
$result = mysqli_query($con,"SELECT 43b from slowa");
while($row = mysqli_fetch_array($result))
{echo "<td>" . $row['43b'] . "</td>";}?></label>
				 <h3 class="question">_______________________</h3><center><h3>44</h3></center>
				  
</div></section>       







        <section class="q-n-a">
 <div class="radio-toolbar3">
 
 
				<input type="radio" name="pytanie44"  value="A" id="pytanie44a">
				<label  for="pytanie44a" class="radio-inline"><?php  
$result = mysqli_query($con,"SELECT 44a from slowa");
while($row = mysqli_fetch_array($result))
{echo "<td>" . $row['44a'] . "</td>";}?></label>

                <input type="radio" name="pytanie44"  value="B" id="pytanie44b">
				<label for="pytanie44b" class="radio-inline"><?php  
$result = mysqli_query($con,"SELECT 44b from slowa");
while($row = mysqli_fetch_array($result))
{echo "<td>" . $row['44b'] . "</td>";}?></label>
				 <h3 class="question">_______________________</h3><center><h3>45</h3></center>
				  
</div></section>       







        <section class="q-n-a">
 <div class="radio-toolbar3">
 
 
				<input type="radio" name="pytanie45"  value="A" id="pytanie45a">
				<label  for="pytanie45a" class="radio-inline"><?php  
$result = mysqli_query($con,"SELECT 45a from slowa");
while($row = mysqli_fetch_array($result))
{echo "<td>" . $row['45a'] . "</td>";}?></label>

                <input type="radio" name="pytanie45"  value="B" id="pytanie45b">
				<label for="pytanie45b" class="radio-inline"><?php  
$result = mysqli_query($con,"SELECT 45b from slowa");
while($row = mysqli_fetch_array($result))
{echo "<td>" . $row['45b'] . "</td>";}?></label>
				 <h3 class="question">_______________________</h3><center><h3>46</h3></center>
				  
</div></section>       







        <section class="q-n-a">
 <div class="radio-toolbar3">
 
 
				<input type="radio" name="pytanie46"  value="A" id="pytanie46a">
				<label  for="pytanie46a" class="radio-inline"><?php  
$result = mysqli_query($con,"SELECT 46a from slowa");
while($row = mysqli_fetch_array($result))
{echo "<td>" . $row['46a'] . "</td>";}?></label>

                <input type="radio" name="pytanie46"  value="B" id="pytanie46b">
				<label for="pytanie46b" class="radio-inline"><?php  
$result = mysqli_query($con,"SELECT 46b from slowa");
while($row = mysqli_fetch_array($result))
{echo "<td>" . $row['46b'] . "</td>";}?></label>
				 <h3 class="question">_______________________</h3><center><h3>47</h3></center>
				  
</div></section>       







        <section class="q-n-a">
 <div class="radio-toolbar3">
 
 
				<input type="radio" name="pytanie47"  value="A" id="pytanie47a">
				<label  for="pytanie47a" class="radio-inline"><?php  
$result = mysqli_query($con,"SELECT 47a from slowa");
while($row = mysqli_fetch_array($result))
{echo "<td>" . $row['47a'] . "</td>";}?></label>

                <input type="radio" name="pytanie47"  value="B" id="pytanie47b">
				<label for="pytanie47b" class="radio-inline"><?php  
$result = mysqli_query($con,"SELECT 47b from slowa");
while($row = mysqli_fetch_array($result))
{echo "<td>" . $row['47b'] . "</td>";}?></label>
				 <h3 class="question">_______________________</h3><center><h3>48</h3></center>
				  
</div></section>








        <section class="q-n-a">
 <div class="radio-toolbar3">
 
 
				<input type="radio" name="pytanie48"  value="A" id="pytanie48a">
				<label  for="pytanie48a" class="radio-inline"><?php  
$result = mysqli_query($con,"SELECT 48a from slowa");
while($row = mysqli_fetch_array($result))
{echo "<td>" . $row['48a'] . "</td>";}?></label>

                <input type="radio" name="pytanie48"  value="B" id="pytanie48b">
				<label for="pytanie48b" class="radio-inline"><?php  
$result = mysqli_query($con,"SELECT 48b from slowa");
while($row = mysqli_fetch_array($result))
{echo "<td>" . $row['48b'] . "</td>";}?></label>
				 <h3 class="question">_______________________</h3><center><h3>49</h3></center>
				  
</div></section>       







        <section class="q-n-a">
 <div class="radio-toolbar3">
 
 
				<input type="radio" name="pytanie49"  value="A" id="pytanie49a">
				<label  for="pytanie49a" class="radio-inline"><?php  
$result = mysqli_query($con,"SELECT 49a from slowa");
while($row = mysqli_fetch_array($result))
{echo "<td>" . $row['49a'] . "</td>";}?></label>

                <input type="radio" name="pytanie49"  value="B" id="pytanie49b">
				<label for="pytanie49b" class="radio-inline"><?php  
$result = mysqli_query($con,"SELECT 49b from slowa");
while($row = mysqli_fetch_array($result))
{echo "<td>" . $row['49b'] . "</td>";}?></label>
				 <h3 class="question">_______________________</h3><center><h3>50</h3></center>
				  
</div></section>       
        








        <section class="q-n-a">
 <div class="radio-toolbar3">
 
 
				<input type="radio" name="pytanie50"  value="A" id="pytanie50a">
				<label  for="pytanie50a" class="radio-inline"><?php  
$result = mysqli_query($con,"SELECT 50a from slowa");
while($row = mysqli_fetch_array($result))
{echo "<td>" . $row['50a'] . "</td>";}?></label>

                <input type="radio" name="pytanie50"  value="B" id="pytanie50b">
				<label for="pytanie50b" class="radio-inline"><?php  
$result = mysqli_query($con,"SELECT 50b from slowa");
while($row = mysqli_fetch_array($result))
{echo "<td>" . $row['50b'] . "</td>";}?></label>
				 <h3 class="question">_______________________</h3>
				  
</div></section>  




    <input type="submit" name="" class="button" value="Skonczylem" id="button" onclick="check()">
    </form>
    <p id="result"></p>

	<?php 
	//mysqli_close($con);    TOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO
	?>  
	
    <!--<input type="submit" name="" value="Skonczylem" id="button" onclick="check()">-->
    <!--
    <section class="q-n-a">
        <h3 class="question">Text for question 2</h3>
        <div class="answers">
            <div class="answer" data-is="1">5</div>
            <div class="answer" data-is="2">6</div>
            <div class="answer" data-is="3">7</div>
            <div class="answer" data-is="4">8</div>
        </div>
        <div class="button-holder clearfix">
            <div class="previous mini button">Poprzednie</div><div class="next mini button">Następne</div>
        </div>
    </section>

    <section class="q-n-a">
        <h3 class="question">Text for question 3</h3>
        <div class="answers">
            <div class="answer" data-is="1">9</div>
            <div class="answer" data-is="2">10</div>
            <div class="answer" data-is="3">11</div>
            <div class="answer" data-is="4">12</div>
        </div>
        <div class="button-holder clearfix">
            <div class="previous mini button">Poprzednie</div><div class="next mini button">Następne</div>
        </div>
    </section>
        -->
    <!--  </div>
          <div class="button finish" style="display: none;">Jaką mam osobowość?</div>
          <div class="response" style="display: none;">
              <p></p>
              <div class="missed button" style="display: none;">Sprawdź odpowiedzi</div>



          </div>-->
    <!--
        <script src="https://code.jquery.com/jquery-3.5.0.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
    -->
</body>
</html>       