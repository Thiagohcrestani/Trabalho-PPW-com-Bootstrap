<?php
	include('include/config.dba.php');

	$conexao = mysql_pconnect($host,$user,$pass);
	mysql_select_db($base,$conexao);

    $id =  $_POST['id'];
	$senhan = MD5($_POST['senhan1']);
	
	$sql = "update usuario set 
	senha_usuario = '$senhan'
	where id_usuario = $id";
	$result_sql = mysql_query($sql,$conexao);

	header("location: TelaLogin.php");