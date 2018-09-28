<?php
	include('include/config.dba.php');

	$conexao = mysql_pconnect($host,$user,$pass);
	mysql_select_db($base,$conexao);

	$login = $_GET['l'];
	$senha = $_GET['s'];

	$sql = "select login_usuario, senha_usuario, id_usuario from usuario where login_usuario='$login' and senha_usuario='$senha'";

	$result_sql = mysql_query($sql,$conexao);
	$n_ver = mysql_num_rows($result_sql);
	
	if($n_ver == 0){
		
		echo "location.href = \"TelaLogin.php\";";
		die();
	}
	$login = mysql_result($result_sql,0,"login_usuario");
	$senha = mysql_result($result_sql,0,"senha_usuario");
	
	

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
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
	<script type="text/javascript" src="jquery-3.3.1.min.js"></script>
    <link rel="icon" href="../../../../favicon.ico">
	    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">

	</head>
	<body background="">	
<div style="margin: auto">
	<form name="form1" action="alteraSenhaSQL.php" method="post" onsubmit="return verificaSenha()">
	<div> 
		<tr>
			<td><input type="hidden" name="id" value="<?php echo mysql_result($result_sql,0,'id_usuario')?>"></td> 
		</tr>
      <center><img class="mb-4" src="logo.png" alt="" width="250"></center>
      <label class="sr-only">Nova Senha</label>
      <input type="password" id="senhan1" name="senhan1" class="form-control" placeholder="Nova Senha" required autofocus>
	  <br>
      <label for="inputPassword"  class="sr-only">Repita Nova Senha</label>
      <input type="password" name="senhan2" id="senhan2" class="form-control" placeholder="Repita Nova Senha" required>
	  <br>
	</div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Redefinir Senha</button>
    </form>
</div>

  </body>
</html>