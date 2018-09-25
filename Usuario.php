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
  <title> MPD </title>
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

 <body background="Fundo.jpg">
   <?php
	include("include/menu.php");
  ?>
   <center><img src="usuario.png" width="100" height="100" alt="Usuário"></center>
    <form name="pagina" method="post" action="ValidaUsuario.php" onsubmit="return ValidaCPF();" style="margin-left:30%; margin-right:30%;">
      <table class="table table-borderless table-sm painel" align="center"  width= border=1 style="font-size:2;">
			<tr> 
			    <td bgcolor="" colspan=2 width=><font color="white"><center><b>CADASTRO USUÁRIO</b></center></font></td>
			</tr>
			<tr>
				<td width="10%" height="10%"><font color="white"><b>Nome</b>:</td></font>
				<td width="70%" height="10%"><input type="text"  name="nome"  size="60"></td>
			</tr>
			<tr>
				<td bgcolor="" width=><font color="white"><b>Cpf</b>:</td></font>
				<td width=><input type="number" id="cpf"  name="cpf"  size="23" onchange="verificaCpf(); ValidaCPF();">
				&nbsp;<font color="white"><b>Rg:</b></font><input type="number"  name="rg"  size="23"></td>
			</tr>
			<tr>
				<td bgcolor="" width=><font color="white"><b>Logradouro</b>:</font></td>
				<td width=><input type="text"  name="logradouro" >
				&nbsp;<font color="white"><b>Número:</b></font><input type="number"  name="num"  maxlength=4></td>
			</tr>
			<tr>
			    <td bgcolor="" width=><font color="white"><b>Bairro</b>:</font></td>
				<td width=><input type="text" " name="bairro"  size="20">	
				<font color="white"><b>Cep:</b></font><input type="text"  name="cep"  size="25"></td>
			</tr>
			<tr>
				<td width=><font color="white"><b>Cidade:</b></font></td>
				<td width=><input type="text"  name="cidade" size="30">
				<font color="white"><b>Estado:</b></font><select style="width: 80px;" name="estado">
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
				</td>
			</tr>
			<tr>
			    <td bgcolor="" width=><font color="white"><b>Login</b>:</font></td>
				<td width=><input type="text" " name="login" size="20">
			    <font color="white"><b>Senha</b>:</font>
				<input type="password" name="senha" size="20"></td>
			</tr>
			<tr>
				<tr>
			    <td bgcolor="" width=><font color="white"><b>Nível:</b></font></td>
				<td width=><input type="radio"  name="nivel" checked value="0"><font color="white">0
				&nbsp;<input type="radio" name="nivel" value="1"><font color="white">1</font>
				&nbsp;<input type="radio"  name="nivel" value="2"><font color="white">2</font>
				<input type="radio"  name="nivel" value="3"><font color="white">3</font>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="white"><b>Status:</b>&nbsp;&nbsp;</font><select style="width: 80px;" name="status">
					<option value="A">Ativo</option>
					<option value="I">Inativo</option>
				</td>
			</tr>
			<tr>
                <td bgcolor="" colspan=2 width=><center><input type="submit" name="submit" value="Salvar" ></center></td>
			</tr>
 	  </table>
	</form>
 </body>
 <style>
 .painel{

background: linear-gradient(to bottom, rgba(101, 102, 103 ,1.0) 0%,rgba(44,80,107,0.6) 100%);
border-radius: 20px;


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
