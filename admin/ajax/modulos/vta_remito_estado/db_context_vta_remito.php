<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$vta_remito_estado_id = Gral::getVars(2, 'vta_remito_estado_id');
$vta_remito_estado = VtaRemitoEstado::getOxId($vta_remito_estado_id);
$vta_remito = $vta_remito_estado->getVtaRemito();

?>
<div class="datos" id="<?php Gral::_echo($vta_remito->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('VtaRemito') ?>: 
        <strong><?php Gral::_echo($vta_remito->getId()) ?> - <?php Gral::_echo($vta_remito->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="vta_remito_alta.php?id=<?php echo($vta_remito->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaRemito') ?>: <strong><?php Gral::_echo($vta_remito->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo VtaRemitoEstado::getFiltrosArrGral() ?>&arr=<?php echo $vta_remito_estado->getFiltrosArrXCampo('VtaRemito', 'vta_remito_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('VtaRemitoEstados') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($vta_remito->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

