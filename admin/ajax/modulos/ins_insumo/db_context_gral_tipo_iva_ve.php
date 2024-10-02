<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$ins_insumo_id = Gral::getVars(2, 'ins_insumo_id');
$ins_insumo = InsInsumo::getOxId($ins_insumo_id);
$gral_tipo_iva_ve = $ins_insumo->getGralTipoIvaVe();

?>
<div class="datos" id="<?php Gral::_echo($gral_tipo_iva_ve->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('GralTipoIvaVe') ?>: 
        <strong><?php Gral::_echo($gral_tipo_iva_ve->getId()) ?> - <?php Gral::_echo($gral_tipo_iva_ve->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="gral_tipo_iva_ve_alta.php?id=<?php echo($gral_tipo_iva_ve->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('GralTipoIvaVe') ?>: <strong><?php Gral::_echo($gral_tipo_iva_ve->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo InsInsumo::getFiltrosArrGral() ?>&arr=<?php echo $ins_insumo->getFiltrosArrXCampo('GralTipoIvaVe', 'gral_tipo_iva_ve_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('InsInsumos') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($gral_tipo_iva_ve->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

