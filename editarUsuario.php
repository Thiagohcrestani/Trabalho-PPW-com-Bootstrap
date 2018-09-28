<?php
include('include/config.dba.php');

session_start();

$conexao = mysql_pconnect($host,$user,$pass);
mysql_select_db($base,$conexao);

$id = $_POST['id'];
$sql = "Select * from usuario where id_usuario = $id";
$result	 = mysql_query($sql);


?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <script type="text/javascript" src="jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="funcs.js"></script>
  <link href="style.css" rel="stylesheet" type="text/css" />
  <!-- <link href="estilo.css" rel="stylesheet" type="text/css">
 --> </head>

 <body background="Fundo.jpg">
 <center>
    <div class="row">
   <div class="col-lg-2 col-md-2 col-sm-2 col-xs-0"></div>
    <form class="painel col-lg-8 col-xs-12" name="pagina" method="post" action="UpdateUsuario.php" onsubmit="return ValidaCPF();" >
		<div class="row">
				<input type="hidden" name="id" value="<?php echo mysql_result($result,0,'id_usuario')?>">
			    <div bgcolor="" class="col-lg-12 col-md-12 col-sm-12 col-xs-12"  ><font color="white"><center><b>EDITAR USUÁRIO</b></center></font></div>
	
	
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" ><font color="white"><b>Nome</b>:<br></font>
				<input class="form-control" type="text" name="nome" value="<?php echo mysql_result($result,0,'nome_usuario')?>"></div>
			
				<div  class="col-lg-4 col-md-4 col-sm-4 col-xs-12" ><font color="white"><b>Cpf</b>:<br></font>
				<input class="form-control" type="number" id="cpf"  name="cpf" onchange="verificaCpf(); ValidaCPF();" value="<?php echo mysql_result($result,0,'cpf_usuario')?>"></div>

				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><font color="white"><b>Rg:<br></b></font><input class="form-control" type="number" name="rg" value="<?php echo mysql_result($result,0,'rg_usuario')?>"></div>
			
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><font color="white"><b>Logradouro</b>:<br></font>
				<input class="form-control" type="text"  name="logradouro" value="<?php echo mysql_result($result,0,'endereco_usuario')?>"></div>

				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><font color="white"><b>Número:<br></b></font><input class="form-control" type="number" name="num"  maxlength=4 value="<?php echo mysql_result($result,0,'num_usuario')?>"></div>
		
			    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><font color="white"><b>Bairro</b>:<br></font>
				<input class="form-control" name="bairro" type="text" value="<?php echo mysql_result($result,0,'bairro_usuario')?>"></div>

				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><font color="white"><b>Cep:<br></b></font><input class="form-control" type="text" name="cep"
				value="<?php echo mysql_result($result,0,'cep_usuario')?>"></div>
			
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><font color="white"><b>Cidade:<br></b></font>
				<input type="text" class="form-control" name="cidade" value="<?php echo mysql_result($result,0,'cidade_usuario')?>" ></div>

				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><font color="white"><b>Estado:<br></b></font><select style="width: 150px;" name="estado" 
				value="<?php echo mysql_result($result,0,'uf_usuario')?>">
											<option value="AC"  <?php if(mysql_result($result, 0, 'uf_usuario')=="AC"){echo " selected ";}?>>Acre</option>
											<option value="AL" <?php if(mysql_result($result, 0, 'uf_usuario')=="AL"){echo " selected ";}?>>Alagoas</option>
											<option value="AP" <?php if(mysql_result($result, 0, 'uf_usuario')=="AP"){echo " selected ";}?>>Amapá</option>
											<option value="AM" <?php if(mysql_result($result, 0, 'uf_usuario')=="AM"){echo " selected ";}?>>Amazonas</option>
											<option value="BA" <?php if(mysql_result($result, 0, 'uf_usuario')=="BA"){echo " selected ";}?>>Bahia</option>
											<option value="CE" <?php if(mysql_result($result, 0, 'uf_usuario')=="CE"){echo " selected ";}?>>Ceará</option>
											<option value="DF" <?php if(mysql_result($result, 0, 'uf_usuario')=="DF"){echo " selected ";}?>>Distrito Federal</option>
											<option value="ES" <?php if(mysql_result($result, 0, 'uf_usuario')=="ES"){echo " selected ";}?>>Espírito Santo</option>
											<option value="GO" <?php if(mysql_result($result, 0, 'uf_usuario')=="GO"){echo " selected ";}?>>Goiás</option>
											<option value="MA" <?php if(mysql_result($result, 0, 'uf_usuario')=="MA"){echo " selected ";}?>>Maranhão</option>
											<option value="MT" <?php if(mysql_result($result, 0, 'uf_usuario')=="MT"){echo " selected ";}?>>Mato Grosso</option>
											<option value="MS" <?php if(mysql_result($result, 0, 'uf_usuario')=="MS"){echo " selected ";}?>>Mato Grosso do Sul</option>
											<option value="MG" <?php if(mysql_result($result, 0, 'uf_usuario')=="MG"){echo " selected ";}?>>Minas Gerais</option>
											<option value="PA" <?php if(mysql_result($result, 0, 'uf_usuario')=="PA"){echo " selected ";}?>>Pará</option>
											<option value="PB" <?php if(mysql_result($result, 0, 'uf_usuario')=="PB"){echo " selected ";}?>>Paraíba</option>
											<option value="PR" <?php if(mysql_result($result, 0, 'uf_usuario')=="PR"){echo " selected ";}?>>Paraná</option>
											<option value="PE" <?php if(mysql_result($result, 0, 'uf_usuario')=="PE"){echo " selected ";}?>>Pernambuco</option>
											<option value="PI" <?php if(mysql_result($result, 0, 'uf_usuario')=="PI"){echo " selected ";}?>>Piauí</option>
											<option value="RJ" <?php if(mysql_result($result, 0, 'uf_usuario')=="RJ"){echo " selected ";}?>>Rio de Janeiro</option>
											<option value="RN" <?php if(mysql_result($result, 0, 'uf_usuario')=="RN"){echo " selected ";}?>>Rio Grande do Norte</option>
											<option value="RS" <?php if(mysql_result($result, 0, 'uf_usuario')=="RS"){echo " selected ";}?>>Rio Grande do Sul</option>
											<option value="RO" <?php if(mysql_result($result, 0, 'uf_usuario')=="RO"){echo " selected ";}?>>Rondônia</option>
											<option value="RR" <?php if(mysql_result($result, 0, 'uf_usuario')=="RR"){echo " selected ";}?>>Roraima</option>
											<option value="SC" <?php if(mysql_result($result, 0, 'uf_usuario')=="SC"){echo " selected ";}?>>Santa Catarina</option>
											<option value="SP" <?php if(mysql_result($result, 0, 'uf_usuario')=="SP"){echo " selected ";}?>>São Paulo</option>
											<option value="SE" <?php if(mysql_result($result, 0, 'uf_usuario')=="SE"){echo " selected ";}?>>Sergipe</option>
											<option value="TO" <?php if(mysql_result($result, 0, 'uf_usuario')=="TO"){echo " selected ";}?>>Tocantins</option>
									</select>
				</div>
			
			    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><font color="white"><b>E-mail</b>:<br></font>
				<input class="form-control" type="mail" name="email" value="<?php echo mysql_result($result,0,'email_usuario')?>"></div>
			
			    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><font color="white"><b>Login</b>:<br></font>
				<input class="form-control" type="text" name="login" value="<?php echo mysql_result($result,0,'login_usuario')?>"></div>
			    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
			    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><font color="white"><b>Nível:<br></b></font>
				<input type="radio"  name="nivel" checked value="0" <?php if(mysql_result($result, 0 , 'nivel_usuario')=='0'){echo 'checked';}?>><font color="white">0</font>
				<input type="radio" name="nivel" value="1" <?php if(mysql_result($result, 0 , 'nivel_usuario')=='1'){echo 'checked';}?>><font color="white">1</font>
				<input type="radio"  name="nivel" value="2" <?php if(mysql_result($result, 0 , 'nivel_usuario')=='2'){echo 'checked';}?>><font color="white">2</font>
				<input type="radio"  name="nivel" value="3" <?php if(mysql_result($result, 0 , 'nivel_usuario')=='3'){echo 'checked';}?>><font color="white">3</font></div>
				
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><font color="white"><b>Status:<br></b></font><select style="width: 150px;" name="status"
				value="<?php echo mysql_result($result,0,'status_usuario')?>">
					<option value="A" <?php if(mysql_result($result, 0, 'status_usuario')=="A"){echo " selected ";}?>>Ativo</option>
					<option value="I" <?php if(mysql_result($result, 0, 'status_usuario')=="I"){echo " selected ";}?>>Inativo</option>
				</select>
				</div>
			<br>
			<br>
			<br>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" bgcolor=""><input class="btn btn-primary btn-lg"" type="submit" name="submit" value="Salvar" ></div>
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

