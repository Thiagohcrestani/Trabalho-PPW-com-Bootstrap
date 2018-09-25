<?php

session_start();

include('seguranca.php');
	if (!verificaSessao()) {
		header("location: TelaLogin.php");
	}

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<script type="text/javascript" src="jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="funcs.js"></script>
			<!-- Optional JavaScript -->
			<!-- jQuery first, then Popper.js, then Bootstrap JS -->
			<!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>-->
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	        <!--<link href="style.css" rel="stylesheet" type="text/css" />
	        <!-- <link href="estilo.css" rel="stylesheet" type="text/css">
            <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

 </head>

 <body background="Fundo.jpg">
   <?php
	include("include/menu.php");
  ?>

   <center><img src="usuario.png" width="100" height="100" alt="Usuário"></center>
	<form style="margin-left:30%; margin-right:30%;">
      <table class="table table-borderless table-sm painel" id="pesquisa" align="center" border=0>
			<tr>
			    <td Colspan=2><center><font color="white"><b>EDITAR USUÁRIO</b></font></center></td>
			</tr>
			<tr>
				<td><font color="white"><b>PESQUISAR</b>:</font></td>
				<td><input type="text"  id="busca" onkeyup="buscarNoticias(this.value)" name="text" pattern="[A-z\s]+$" size="60"></td>
				
				<br>
				<div id="conteudo"></div>
			</tr>	
			<td colspan=2>
			 <div id="resultado"></div>
			</td>
	  </table>
	 </form>
	  <div id="divEdit"> </div>
 </body>
 <style>
 .painel{

background: linear-gradient(to bottom, rgba(101, 102, 103 ,1.0) 0%,rgba(44,80,107,0.6) 100%);
border-radius: 20px;


}
 </style>
 <script>
 
 function buscarNoticias(valor) {
	$.ajax({
		type: "POST",
		url: "busca.php",
		data: {valor: valor}

	}).done(function (data){
		$("#resultado").html(data);
		
	})


}
 function exibirConteudo(id) {
	$.ajax({
		type: "POST",
		url: "editarUsuario.php",
		data: {id: id}

	}).done(function (data){
		$("#pesquisa").hide(300);
		$("#resultado").hide(300);
		$("#divEdit").html(data);
		
		
	})

	}
	function Excluir (id) {
	$.ajax({
		type: "POST",
		url: "ExcluirUsuario.php",
		data: {id: id}

	}).done(function (data){
		
		buscarNoticias($("#busca").val());
	})

	}
	function setEstado(){	
		var id=$("#selectEstado").val();
			alert(id);
				$("#"+id).attr('selected','selected');
			

		
		}
	
</script>
</html>
