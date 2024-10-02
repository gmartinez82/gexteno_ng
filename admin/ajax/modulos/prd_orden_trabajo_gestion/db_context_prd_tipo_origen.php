<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$prd_orden_trabajo_id = Gral::getVars(2, 'prd_orden_trabajo_id');
$prd_orden_trabajo = PrdOrdenTrabajo::getOxId($prd_orden_trabajo_id);
$prd_tipo_origen = $prd_orden_trabajo->getPrdTipoOrigen();

?>
<div class="datos" id="<?php Gral::_echo($prd_tipo_origen->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('PrdTipoOrigen') ?>: 
        <strong><?php Gral::_echo($prd_tipo_origen->getId()) ?> - <?php Gral::_echo($prd_tipo_origen->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="prd_tipo_origen_alta.php?id=<?php echo($prd_tipo_origen->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('PrdTipoOrigen') ?>: <strong><?php Gral::_echo($prd_tipo_origen->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo PrdOrdenTrabajo::getFiltrosArrGral() ?>&arr=<?php echo $prd_orden_trabajo->getFiltrosArrXCampo('PrdTipoOrigen', 'prd_tipo_origen_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('PrdOrdenTrabajos') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($prd_tipo_origen->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

