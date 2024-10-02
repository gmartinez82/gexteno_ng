<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'pde_recepcion_gestion';
$db_nombre_pagina = 'pde_recepcion_gestion';

$string_centro_pedido_ids = PdeCentroPedido::getArrayPdeCentroPedidoIdsXCredencialParaComparadorIn();
//Gral::prr($string_centro_pedido_ids);

/*
$criterio = new Criterio(PdeRecepcion::SES_CRITERIOS);
$criterio->addTabla('pde_recepcion');
$criterio->setCriteriosInicial();
*/
$criterio = new Criterio(PdeRecepcion::SES_CRITERIOS);
$criterio->addDistinct(true);
/*
if(!$user->getAbsoluto()){
	$criterio->add('pde_recepcion_destinatario.us_usuario_id', $user->getId(), Criterio::IGUAL);
	$criterio->add('pde_recepcion_destinatario.estado', 1, Criterio::IGUAL);
}
*/
//$criterio->add('pde_oc.pde_centro_pedido_id', $string_centro_pedido_ids, Criterio::IN);
$criterio->addTabla('pde_recepcion');
//$criterio->addRealJoin('pde_recepcion_estado', 'pde_recepcion_estado.pde_recepcion_id', 'pde_recepcion.id');
$criterio->addRealJoin('pde_recepcion_destinatario', 'pde_recepcion_destinatario.pde_recepcion_id', 'pde_recepcion.id', 'LEFT JOIN');
$criterio->addRealJoin('pde_oc', 'pde_oc.id', 'pde_recepcion.pde_oc_id');

$criterio->setCriterios();


$pagina_actual = PdeRecepcion::getSesPag();
$paginador = new Paginador(15, $pagina_actual);

$pde_recepcions = PdeRecepcion::getPdeRecepcionsDesdeBackend($paginador, $criterio);
?>
<?php include 'parciales/head.php' ?>
<script type="text/javascript" src="../js/admin/adm.js"></script>


<body>
<?php include 'parciales/encabezado.php' ?>
<?php include 'parciales/user.php' ?>
<?php include 'parciales/mensajes.php' ?>

<div id='menu'><?php include 'parciales/menuh.php' ?></div>

<div id='cuerpo'>
    <div class='adm_cuerpo_titulo'><?php Lang::_lang('PdeRecepcions') ?> </div>
      <div class='contenedor central'>
                
		<div class="div_listado_buscador" modulo="pde_recepcion_gestion">
		<?php include 'ajax/modulos/pde_recepcion_gestion/pde_recepcion_gestion_buscador_top.php' ?>
		</div>

		<div class="div_listado_datos" modulo="pde_recepcion_gestion">
		<?php //include 'ajax/modulos/pde_recepcion/pde_recepcion_datos.php' ?>
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
	refreshAdmAll('pde_recepcion_gestion', <?php echo $pagina_actual ?>);
</script>

