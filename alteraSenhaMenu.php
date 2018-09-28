<?php
	include('include/config.dba.php');
	
	session_start();
		
	$conexao = mysql_pconnect($host,$user,$pass);
	mysql_select_db($base,$conexao);


	$id = $_SESSION['calory_id'];
	$sql = "Select * from usuario where id_usuario = $id";
	$result	 = mysql_query($sql);

?>
<script>
function verificaSenha(){
		var senhan1 =$("#senhan1").val();
		var senhan2 =$("#senhan2").val();
	
		if (senhan1 != senhan2){
			alert("Senhas Divergentes");
			return false;
		} else {
			return true;
		}

	}


</script>
<html>
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
<div>
	  <div class="row" style="margin-left:2px; margin-right:2px;">
	  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-0"></div>
     <div name="form1"  id="pagina1" class="painel painel col-lg-4 col-md-4 col-sm-4 col-xs-12" style="margin-top:10px;">
	<br>
	<br>
	<div>	
		<tr>
			<td><input type="hidden" name="id" value="<?php echo mysql_result($result,0,'id_usuario')?>"></td> 
		</tr>
      
      <center><label><font color="white" face="verdana">Insira sua senha atual</font></label></center>
      <input type="password" id="senhaatual" name="senhaatual" class="form-control" placeholder="" required autofocus>
	  <br>	
	   <center><div><input class="btn btn-primary btn-sm"" type="button" name="proximo" onclick="checarSenha()" value="Proximo" >&nbsp;&nbsp;&nbsp;	     
	   <button class="btn btn-danger btn-sm" onclick="window.location.href='index_menu.php'"  name="cancelar" >Cancelar</button></div> </center>    
	  <br>
	 </div>
</div>

    <div id="pagina2" class="painel painel col-lg-4 col-md-4 col-sm-4 col-xs-12"  >

	<form name="form1" style="margin: auto" action="alteraSenhaSQL.php" method="post" onsubmit="return verificaSenha()">
	<br>
	<br>
	<div> 
		<tr>
			<td><input type="hidden" name="id" value="<?php echo mysql_result($result,0,'id_usuario')?>"></td> 
		</tr>
      
      <label class="sr-only">Nova Senha</label>
      <input type="password" id="senhan1" name="senhan1" class="form-control" placeholder="Nova Senha" required autofocus>
	  <br>
      <label for="inputPassword"  class="sr-only">Confirme Nova Senha</label>
      <input type="password" name="senhan2" id="senhan2" class="form-control" placeholder="Repita Nova Senha" required>
	  <br>		
	</div>
      <button class="btn btn-md btn-primary btn-block" type="submit">Redefinir Senha</button>
	  <br>
	  <br>
	  
    </div>
</div>

  </body>
  <style>
   .painel{

background: linear-gradient(to bottom, rgba(101, 102, 103 ,1.0) 0%,rgba(44,80,107,0.6) 100%);
border-radius: 20px;


}
</style>

<script>
	$("#pagina2").hide(0);
 function checarSenha() {
	 var senha = $("#senhaatual").val();
	$.ajax({
		type: "POST",
		url: "checarSenha.php",
		data: {senha: senha }

	}).done(function (data){
		if (data == 'erro')	{
			alert("Senha Incorreta");

		}else{
		$("#pagina1").hide(300);
		$("#pagina2").show(300);


		}
		
	})
}

</script>
	

</html>