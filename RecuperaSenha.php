<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">
	    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">

	</head>
	<body background="">
	
<div style="margin: auto">
	<form name="form1" action="enviaEmail.php" method="post" onsubmit="">
	<div> 
		<img class="mb-4" src="logo.png" alt="" width="250">
		 
		<label class="sr-only">Login</label>
		<input type="text" id="login" name="login" class="form-control" placeholder="Insira Login" required autofocus>
	    <br>
        <label for="inputPassword"  class="sr-only">E-mail</label>
        <input type="mail" name="email" id="email" class="form-control" placeholder="Insira Email" required>
	    <br>
	</div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Enviar</button>
    </form>
</div>

  </body>
</html>