<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$vta_recibo_id = Gral::getVars(2, 'vta_recibo_id');
$vta_recibo = VtaRecibo::getOxId($vta_recibo_id);
$vta_recibo_tipo_estado = $vta_recibo->getVtaReciboTipoEstado();

?>
<div class="datos" id="<?php Gral::_echo($vta_recibo_tipo_estado->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('VtaReciboTipoEstado') ?>: 
        <strong><?php Gral::_echo($vta_recibo_tipo_estado->getId()) ?> - <?php Gral::_echo($vta_recibo_tipo_estado->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="vta_recibo_tipo_estado_alta.php?id=<?php echo($vta_recibo_tipo_estado->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaReciboTipoEstado') ?>: <strong><?php Gral::_echo($vta_recibo_tipo_estado->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo VtaRecibo::getFiltrosArrGral() ?>&arr=<?php echo $vta_recibo->getFiltrosArrXCampo('VtaReciboTipoEstado', 'vta_recibo_tipo_estado_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('VtaRecibos') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($vta_recibo_tipo_estado->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

