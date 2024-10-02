<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$prd_orden_trabajo_ciclo_id = Gral::getVars(2, 'prd_orden_trabajo_ciclo_id');
$prd_orden_trabajo_ciclo = PrdOrdenTrabajoCiclo::getOxId($prd_orden_trabajo_ciclo_id);
$prd_orden_trabajo = $prd_orden_trabajo_ciclo->getPrdOrdenTrabajo();

?>
<div class="datos" id="<?php Gral::_echo($prd_orden_trabajo->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('PrdOrdenTrabajo') ?>: 
        <strong><?php Gral::_echo($prd_orden_trabajo->getId()) ?> - <?php Gral::_echo($prd_orden_trabajo->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="prd_orden_trabajo_alta.php?id=<?php echo($prd_orden_trabajo->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('PrdOrdenTrabajo') ?>: <strong><?php Gral::_echo($prd_orden_trabajo->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo PrdOrdenTrabajoCiclo::getFiltrosArrGral() ?>&arr=<?php echo $prd_orden_trabajo_ciclo->getFiltrosArrXCampo('PrdOrdenTrabajo', 'prd_orden_trabajo_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('PrdOrdenTrabajoCiclos') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($prd_orden_trabajo->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

