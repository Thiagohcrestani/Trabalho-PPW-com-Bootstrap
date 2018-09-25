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



$sql_rel = "Select * from usuario";
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
	<form style="margin-left:30%; margin-right:30%;">
	<table class="table table-sm" border=0 align=center  WIDTH=600 ALIGN=CENTER bgcolor="white">
		<tr>
			<td bgcolor="white">
				<center><FONT SIZE="5" face="VERDANA">Relatório de Usuários</font></center>
			</td>
		</tr>
		<tr>
			<td align=right width=250 bgcolor="white"><FONT SIZE=-2 FACE=VERDANA><center><?php echo "Data: ". date("d/m/Y") ." &nbsp; &nbsp; Hora: ". date("H:i:s"); ?></center></FONT></td>
		</tr>
	</table>
	<table class="table table-sm" border=0 align=center cellpadding=0 cellspacing=0 WIDTH=600 ALIGN=CENTER bgcolor="white">
		<tr>
			<td WIDTH=100 bgcolor="white"><FONT SIZE=-2 FACE=VERDANA><center>Código</center></FONT></td>
			<td WIDTH=500 bgcolor="white"><FONT SIZE=-2 FACE=VERDANA><CENTER><center>Nome</CENTER></FONT></TD>
		</tr></center>
	
	

	<?php
	for($x=0; $x < $n_sql_rel; $x++){
			
			?>
			
			<tr
			<?php
			$color="bgcolor=white";
			 if($x%2==0){
				$color= " bgcolor=#EAEAEA";
				
			 }
			 echo $color;
			?>
			>
				<td><font size=-1 face=arial><center><?php echo mysql_result($r_sql_rel, $x, 'id_usuario'); ?></center></font></td>
				<td><font size=-1 face=arial><center><?php echo mysql_result($r_sql_rel, $x, 'nome_usuario');  ?></center></font></td>
	<?php
	}
}
?>
</form>
