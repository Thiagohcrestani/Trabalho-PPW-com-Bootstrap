<head>
<?php
session_start();

	include('seguranca.php');
	if (!verificaSessao()) {
		header("location: TelaLogin.php");
}

?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Início</title>
<link href="style.css" rel="stylesheet" type="text/css" />
 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<script type="text/javascript">
function slide1(){
document.getElementById('id').src="img/img1.jpg";
setTimeout("slide2()", 3000)
}
  
function slide2(){
document.getElementById('id').src="img/img2.jpg";
setTimeout("slide3()", 3000)
}
  
function slide3(){
document.getElementById('id').src="img/img3.jpg";
setTimeout("slide1()", 3000)
}
</script>

</head>

<body onload="slide1()" background="Fundo.jpg">
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  </head>
  <body>
  <?php
	include("include/menu.php");
  ?>
<div style="margin-top:5%; box-schadow:0px 1px 3px rgba(35,57,64,0.5),inset 0px 1px 3px rgba(209,209,209,0.7)">
<center>
	<img height=400 id="id"/>
</center>
</div>
</body>