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
  <title> MENU </title>
  <script type="text/javascript" src="jquery-3.3.1.min.js"></script>
  <!--<link href="style.css" rel="stylesheet" type="text/css" />
  <!-- Optional JavaScript -->
			<!-- jQuery first, then Popper.js, then Bootstrap JS -->
			<!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>-->	
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	        <!--<link href="style.css" rel="stylesheet" type="text/css" />
	        <!--<link href="estilo.css" rel="stylesheet" type="text/css">
            <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">



 </head>

 <body class="imagem">
   <?php
	include("include/menu.php");
  ?>
   <center><img src="usuario.png" width="100" height="100" alt="Usuário">
   <div class="row">
   <div class="col-lg-2 col-md-2 col-sm-2 col-xs-0"></div>
    <form class="painel col-lg-8 col-xs-12 form-group" name="pagina" method="post" action="ValidaUsuario.php" onsubmit="return ValidaCPF();" >
		<div class="row form-group" style="margin-left:2px; margin-right:2px;" >

			    <div bgcolor="" class="col-lg-12 col-md-12 col-sm-12 col-xs-12"  ><font color="white"><center><b>CADASTRO USUÁRIO</b></center></font></div>
	
	
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" ><font color="white"><b>Nome</b>:<br></font>
				<input type="text" name="nome" class="form-control"></div>
			
				<div  class="col-lg-4 col-md-4 col-sm-4 col-xs-12" ><font color="white"><b>Cpf</b>:<br></font>
				<input class="form-control"  type="number" id="cpf"  name="cpf" onchange="verificaCpf(); ValidaCPF();"></div>
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><font color="white"><b>Rg:<br></b></font><input class="form-control" size="28" type="number" name="rg"></div>
			
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><font color="white"><b>Logradouro</b>:<br></font>
				<input size="28" type="text" class="form-control" name="logradouro" ></div>
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><font color="white"><b>Número:<br></b></font><input class="form-control" size="28" type="number" name="num"  maxlength=4></div>
		
			    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><font color="white"><b>Bairro</b>:<br></font>
				<input size="28" class="form-control" name="bairro" type="text"></div>
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><font color="white"><b>Cep:<br></b></font><input size="28" class="form-control" type="text" name="cep" ></div>
			
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><font color="white"><b>Cidade:<br></b></font>
				<input type="text" class="form-control" name="cidade" size="28" ></div>
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><font color="white"><b>Estado:<br></b></font><select style="width: 150px;" name="estado">
											<option value="AC">Acre</option>
											<option value="AL">Alagoas</option>
											<option value="AP">Amapá</option>
											<option value="AM">Amazonas</option>
											<option value="BA">Bahia</option>
											<option value="CE">Ceará</option>
											<option value="DF">Distrito Federal</option>
											<option value="ES">Espírito Santo</option>
											<option value="GO">Goiás</option>
											<option value="MA">Maranhão</option>
											<option value="MT">Mato Grosso</option>
											<option value="MS">Mato Grosso do Sul</option>
											<option value="MG">Minas Gerais</option>
											<option value="PA">Pará</option>
											<option value="PB">Paraíba</option>
											<option value="PR">Paraná</option>
											<option value="PE">Pernambuco</option>
											<option value="PI">Piauí</option>
											<option value="RJ">Rio de Janeiro</option>
											<option value="RN">Rio Grande do Norte</option>
											<option value="RS">Rio Grande do Sul</option>
											<option value="RO">Rondônia</option>
											<option value="RR">Roraima</option>
											<option value="SC">Santa Catarina</option>
											<option value="SP">São Paulo</option>
											<option value="SE">Sergipe</option>
											<option value="TO">Tocantins</option>
									</select>
				</div>
			
			    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><font color="white"><b>E-mail</b>:<br></font>
				<input size="28" class="form-control" type="mail" name="email" ></div>
			
			    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><font color="white"><b>Login</b>:<br></font>
				<input size="28" type="text" class="form-control"name="login" ></div>
			    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><font color="white"><b>Senha</b>:<br></font>
				<input size="28" type="password" class="form-control" name="senha" ></div>
			
				
			    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><font color="white"><b>Nível:<br></b></font>
				<input type="radio"  name="nivel" checked value="0"><font color="white">0</font>
				<input type="radio" name="nivel" value="1"><font color="white">1</font>
				<input type="radio"  name="nivel" value="2"><font color="white">2</font>
				<input type="radio"  name="nivel" value="3"><font color="white">3</font></div>
				
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><font color="white"><b>Status:<br></b></font><select style="width: 150px;" name="status">
					<option value="A">Ativo</option>
					<option value="I">Inativo</option>
				</select>
				</div>
			<br>
			<br>
			<br>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" bgcolor=""><input class="btn btn-primary btn-lg" type="submit" name="salvar" value="Salvar" ></div>	
				<br>
				<br>
				<br>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" bgcolor=""><input type="button" onclick="window.location.href='index_menu.php'" class="btn btn-danger btn-lg" name="cancelar" value="Cancelar" ></div>		
			<br>
			<br>
			<br>
		</div>
	</form>
</div>
	</center>
 </body>
 <style>
 .painel{

background: linear-gradient(to bottom, rgba(101, 102, 103 ,1.0) 0%,rgba(44,80,107,0.6) 100%);
border-radius: 20px;


}
.imagem {
  background-image: url(Fundo.jpg);
  background-size: cover;
}
 </style>

	<script>
	function ValidaCPF(){
	var strCPF = $("#cpf").val();
    var Soma;
    var Resto;
    Soma = 0;
	if (strCPF == "00000000000"){
		alert("CPF Inválido");
		strCPF = $("#cpf").val("");
	return false;
	}
     
	for (i=1; i<=9; i++) Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (11 - i);
	 Resto = (Soma * 10) % 11;
   
    if ((Resto == 10) || (Resto == 11))  Resto = 0;
    if (Resto != parseInt(strCPF.substring(9, 10)) ){
		alert("CPF Inválido");
		strCPF = $("#cpf").val("");
	return false;
   }
	Soma = 0;
    for (i = 1; i <= 10; i++) Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (12 - i);
    Resto = (Soma * 10) % 11;
   
    if ((Resto == 10) || (Resto == 11))  Resto = 0;
    if (Resto != parseInt(strCPF.substring(10, 11) ) ){
		alert("CPF Inválido");
		strCPF = $("#cpf").val("");
	return false;
	}
    return true;
	}


	function verificaCpf() {
	var cpf =$("#cpf").val();
		
	$.ajax({
		type: "POST",
		url: "VerificaCpf.php",
		data: {cpf: cpf}

	}).done(function (data){
		if (data!=""){
			var txt;
			var r = confirm(data);
			if (r == true) {
	
		   } else {
				$("#cpf").val("");
			}
		}
		
		
		
	})

	}
	</script>
	</html>
