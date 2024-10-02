<?php
include '_autoload.php';
$user = UsUsuario::autenticado();

$ins_insumo_id = Gral::getVars(2, 'ins_insumo_id');
$ins_insumo = InsInsumo::getOxId($ins_insumo_id);
$gral_tipo_iva = $ins_insumo->getGralTipoIva();

?>
<div class="datos" id="<?php Gral::_echo($gral_tipo_iva->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('GralTipoIva') ?>: 
        <strong><?php Gral::_echo($gral_tipo_iva->getId()) ?> - <?php Gral::_echo($gral_tipo_iva->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="gral_tipo_iva_alta.php?id=<?php echo($gral_tipo_iva->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('GralTipoIva') ?>: <strong><?php Gral::_echo($gral_tipo_iva->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo InsInsumo::getFiltrosArrGral() ?>&arr=<?php echo $ins_insumo->getFiltrosArrXCampo('GralTipoIva', 'gral_tipo_iva_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('InsInsumos') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($gral_tipo_iva->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

