<?php
include_once "control/seguridad.php";
include_once "control/saneamiento.php";
include_once "_autoload.php";

$db_nombre_objeto = "os_orden_servicio_gestion";
$db_nombre_pagina = "os_orden_servicio_gestion";


$criterio = new Criterio(OsOrdenServicio::SES_CRITERIOS);
$criterio->addTabla("os_orden_servicio");
$criterio->setCriterios();


$pagina_actual = OsOrdenServicio::getSesPag();
$paginador = new Paginador(15, $pagina_actual);

$os_orden_servicios = OsOrdenServicio::getOsOrdenServiciosDesdeBackend($paginador, $criterio);

?>
<?php include "parciales/head.php" ?>
<script type="text/javascript" src="../js/admin/adm.js"></script>


<body>
<?php include "parciales/encabezado.php" ?>
<?php include "parciales/user.php" ?>
<?php include "parciales/mensajes.php" ?>

<div id='menu'><?php include 'parciales/menuh.php' ?></div>

<div id='cuerpo'>
    <div class='adm_cuerpo_titulo'><?php Lang::_lang('OsOrdenServicio') ?> </div>
      <div class='contenedor central'>
          
		<div class="div_listado_buscador" modulo="os_orden_servicio_gestion">
		<?php include 'ajax/modulos/os_orden_servicio_gestion/os_orden_servicio_gestion_buscador_top.php' ?>
        </div>

		<div class="div_listado_datos" modulo="os_orden_servicio_gestion">
		<?php //include 'ajax/modulos/os_orden_servicio_gestion/os_orden_servicio_gestion_datos.php' ?>
        </div>

	<br />
	
	</div>

</div>
<div id='pie'><?php include 'parciales/pie.php' ?></div>
<div id="div_contextual"></div>
<div class="div_modal"></div>

</body>
</html>
<script type='text/javascript'>
	<?php Gral::_echo($mi_hash) ?>
	refreshAdmAll('os_orden_servicio_gestion', <?php echo $pagina_actual ?>);
</script>