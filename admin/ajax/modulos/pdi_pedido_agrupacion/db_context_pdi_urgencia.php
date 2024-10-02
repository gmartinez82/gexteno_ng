<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$pdi_pedido_agrupacion_id = Gral::getVars(2, 'pdi_pedido_agrupacion_id');
$pdi_pedido_agrupacion = PdiPedidoAgrupacion::getOxId($pdi_pedido_agrupacion_id);
$pdi_urgencia = $pdi_pedido_agrupacion->getPdiUrgencia();

?>
<div class="datos" id="<?php Gral::_echo($pdi_urgencia->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('PdiUrgencia') ?>: 
        <strong><?php Gral::_echo($pdi_urgencia->getId()) ?> - <?php Gral::_echo($pdi_urgencia->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="pdi_urgencia_alta.php?id=<?php echo($pdi_urgencia->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdiUrgencia') ?>: <strong><?php Gral::_echo($pdi_urgencia->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo PdiPedidoAgrupacion::getFiltrosArrGral() ?>&arr=<?php echo $pdi_pedido_agrupacion->getFiltrosArrXCampo('PdiUrgencia', 'pdi_urgencia_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('PdiPedidoAgrupacions') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($pdi_urgencia->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

