<?php
if ($_SESSION["rol_id"] == 1) {
?>
	<nav class="side-menu side-menu-big-icon">

		<div class="jspPane" style="padding: 0px; top: 0px; left: 0px; width: 227px;">
			<ul class="side-menu-list">
				<li class="blue-dirty">
					<a href="..\Home\">
						<span class="glyphicon glyphicon-th"></span>
						<span class="lbl">Inicio</span>
					</a>
				</li>

				<li class="blue-dirty">
					<a href="..\NuevoTicket\">
						<span class="glyphicon glyphicon-folder-close"></span>
						<span class="lbl">Nuevo Ticket</span>
					</a>
				</li>

				<li class="blue-dirty">
					<a href="..\ConsultarTicket\">
						<span class="glyphicon glyphicon-folder-open"></span>
						<span class="lbl">Consultar Ticket</span>
					</a>
				</li>
			</ul>
		</div>
	</nav>
<?php
} else {
?>
	<nav class="side-menu side-menu-big-icon">

		<div class="jspPane" style="padding: 0px; top: 0px; left: 0px; width: 227px;">
			<ul class="side-menu-list">
				<li class="blue-dirty">
					<a href="..\Home\">
						<span class="glyphicon glyphicon-th"></span>
						<span class="lbl">Inicio</span>
					</a>
				</li>

				<li class="blue-dirty">
					<a href="..\ConsultarTicket\">
						<span class="glyphicon glyphicon-folder-open"></span>
						<span class="lbl">Consultar Ticket</span>
					</a>
				</li>
			</ul>
		</div>
	</nav>

<?php
}
?>