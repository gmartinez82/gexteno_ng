<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$vta_nota_credito_id = Gral::getVars(2, 'vta_nota_credito_id');
$vta_nota_credito = VtaNotaCredito::getOxId($vta_nota_credito_id);
$vta_nota_credito_tipo_estado = $vta_nota_credito->getVtaNotaCreditoTipoEstado();

?>
<div class="datos" id="<?php Gral::_echo($vta_nota_credito_tipo_estado->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('VtaNotaCreditoTipoEstado') ?>: 
        <strong><?php Gral::_echo($vta_nota_credito_tipo_estado->getId()) ?> - <?php Gral::_echo($vta_nota_credito_tipo_estado->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="vta_nota_credito_tipo_estado_alta.php?id=<?php echo($vta_nota_credito_tipo_estado->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaNotaCreditoTipoEstado') ?>: <strong><?php Gral::_echo($vta_nota_credito_tipo_estado->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo VtaNotaCredito::getFiltrosArrGral() ?>&arr=<?php echo $vta_nota_credito->getFiltrosArrXCampo('VtaNotaCreditoTipoEstado', 'vta_nota_credito_tipo_estado_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('VtaNotaCreditos') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($vta_nota_credito_tipo_estado->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

