<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$pde_recepcion_estado_facturacion_id = Gral::getVars(2, 'pde_recepcion_estado_facturacion_id');
$pde_recepcion_estado_facturacion = PdeRecepcionEstadoFacturacion::getOxId($pde_recepcion_estado_facturacion_id);
$pde_recepcion = $pde_recepcion_estado_facturacion->getPdeRecepcion();

?>
<div class="datos" id="<?php Gral::_echo($pde_recepcion->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('PdeRecepcion') ?>: 
        <strong><?php Gral::_echo($pde_recepcion->getId()) ?> - <?php Gral::_echo($pde_recepcion->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="pde_recepcion_alta.php?id=<?php echo($pde_recepcion->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeRecepcion') ?>: <strong><?php Gral::_echo($pde_recepcion->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo PdeRecepcionEstadoFacturacion::getFiltrosArrGral() ?>&arr=<?php echo $pde_recepcion_estado_facturacion->getFiltrosArrXCampo('PdeRecepcion', 'pde_recepcion_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('PdeRecepcionEstadoFacturacions') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($pde_recepcion->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

