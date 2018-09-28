  <nav class="navbar navbar-expand-lg navbar-light bg-light">
   <a class="navbar-brand" href="index_menu.php" ><img src="logo.png" width="150" height="50" alt="login" ></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent" ">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Cadastros
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="Usuario.php">Novo Usuário</a>
          <a class="dropdown-item" href="PesquisaUsuario.php">Editar Usuário</a>
        </div>
      </li>
	  <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Relatórios
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="relusu.php">Relatório de Usuários</a>
        </div>
    </ul>
  </div>
  <span class="navbar-text">
		<img src="img/usuariologado.png" width="25" height="25" alt="login">
		<font size="" face="verdana" color="" align="right"><?php echo $_SESSION["calory_usuario"];?></font>
		<button onclick="window.location.href='logoff.php'" class="btn btn-sm btn-outline-secondary" type="button">Sair</button>
	</span>
</nav>