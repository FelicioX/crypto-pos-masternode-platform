<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!-- Sidebar -->
      <ul class="sidebar navbar-nav" style='background-color: #000; '>
        <li class="nav-item active">
          <a class="nav-link" href="dashboard.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>
		<?php
			if($_SESSION['usuarioAdm'] == 1){
        echo '<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Gerenciamento</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Pool:</h6>
            <a class="dropdown-item" href="adm_depositos.php">Visualizar Depósitos</a>
            <a class="dropdown-item" href="adm_saques.php">Visualizar Saques</a>
            <a class="dropdown-item" href="adm_stakes.php">Lançar Stakes</a>
			<a class="dropdown-item" href="adm_masternodes.php">Masternodes</a>
            <div class="dropdown-divider"></div>
            <h6 class="dropdown-header">Configurações:</h6>
            <a class="dropdown-item" href="404.html">Geral</a>
            <a class="dropdown-item" href="adm_moedas.php">Moedas</a>
          </div>
        </li>';
			}
		?>
		<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Histórico</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
		    <a class="dropdown-item" href="hdepositos.php">Deposits</a>
			<a class="dropdown-item" href="hsaques.php">Withdraws</a>
			<a class="dropdown-item" href="hrendimentos.php">Stakes/MN</a>
		  </div>
		</li>
		<li class="nav-item glyphicon glyphicon-send">
		  <a  class="nav-link" href='tips.php'>
		    <i class="material-icons">compare_arrows</i>
			<span>Tips</span>
	      </a>
		</li>
        
      </ul>
