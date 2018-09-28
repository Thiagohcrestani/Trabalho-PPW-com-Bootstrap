<?php
date_default_timezone_set("America/Sao_Paulo");
include('include/config.dba.php');

session_start();

include('seguranca.php');
	if (!verificaSessao()) {
		header("location: TelaLogin.php");
	}

$conexao = mysql_pconnect($host,$user,$pass);
mysql_select_db($base,$conexao);



$sql_rel = "Select * from usuario order by nome_usuario";
$r_sql_rel = mysql_query($sql_rel, $conexao);
$n_sql_rel = mysql_num_rows($r_sql_rel);


if($n_sql_rel!=0){
	?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--<link href="style.css" rel="stylesheet" type="text/css" />
  <!-- Optional JavaScript -->
			<!-- jQuery first, then Popper.js, then Bootstrap JS -->
			<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	        <!--<link href="style.css" rel="stylesheet" type="text/css" />
	        <!--<link href="estilo.css" rel="stylesheet" type="text/css">
            <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


<body background="Fundo.jpg">
  <?php
	include("include/menu.php");
  ?>
	<br>
	<br>
	<div class="row">
   <div class="col-lg-4 col-md-2 col-sm-2 col-xs-0"></div>
	<form class="painel col-lg-4 col-md-4 col-sm-4 col-xs-12">
		<div class="row">
			 	
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><FONT SIZE="5" face="VERDANA" color="white"><center>Relatório de Usuários</center></font></div>
			
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-0"></div>
			<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12"bgcolor="white"><FONT SIZE=-2 FACE=VERDANA color="white"><center><?php echo "Data: ". date("d/m/Y") ." &nbsp; &nbsp; Hora: ". date("H:i"); ?></center></FONT></div>
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-0"></div>

			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" bgcolor="white"><center><FONT SIZE=-2 color="white" FACE=VERDANA>Código</FONT></center></div>
			<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8" bgcolor="white"><center><FONT SIZE=-2  color="white"FACE=VERDANA>Nome</FONT></center></div>

	
	

	<?php
	for($x=0; $x < $n_sql_rel; $x++){
			
			?>
			
		
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"><center><font size=-1 color="white" face=arial><?php echo mysql_result($r_sql_rel, $x, 'id_usuario'); ?></font></center></div>
				<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8"><center><font size=-1 color="white" face=arial><?php echo mysql_result($r_sql_rel, $x, 'nome_usuario');  ?></font></center></div>
				<hr>
				
	<?php
	}
}
?>
<style>
 .painel{

background: linear-gradient(to bottom, rgba(101, 102, 103 ,1.0) 0%,rgba(44,80,107,0.6) 100%);
border-radius: 10px;


}
</style>
</div>
</form>
</div>