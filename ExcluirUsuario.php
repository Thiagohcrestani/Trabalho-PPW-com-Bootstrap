<?php
	include('include/config.dba.php');

	$conexao = mysql_pconnect($host,$user,$pass);
	mysql_select_db($base,$conexao);

    $id =  $_POST['id'];
	
	$sql = "delete from usuario where id_usuario = $id";
	echo $result_sql = mysql_query($sql,$conexao);

	//header("location: index_menu.html");
?>