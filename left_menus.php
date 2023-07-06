<div class="col-md-3 col-lg-2 sidebar-offcanvas" id="sidebar" role="navigation">
	<ul class="nav flex-column pl-1">
		<?php if ($user->isAdmin()) { ?>
			<li class="nav-item"><a class="nav-link" href="dashboard.php"><strong>Dashboard</strong></a></li>>
			</li>
			<li class="nav-item"><a class="nav-link" href="reporte.php"><strong>Logs</strong></a></li>
			<li class="nav-item"><a class="nav-link" href="user.php"><strong>Usuario</strong></a></li>
			<li class="nav-item"><a class="nav-link" href="logout.php"><strong>Cerrar Sesión</strong></a></li>
		<?php } else { ?>

		<?php } ?>
	</ul>
</div>