<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$pan_panol_id = Gral::getVars(2, 'pan_panol_id');
$pan_panol = PanPanol::getOxId($pan_panol_id);
$pan_tipo_panol = $pan_panol->getPanTipoPanol();

?>
<div class="datos" id="<?php Gral::_echo($pan_tipo_panol->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('PanTipoPanol') ?>: 
        <strong><?php Gral::_echo($pan_tipo_panol->getId()) ?> - <?php Gral::_echo($pan_tipo_panol->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="pan_tipo_panol_alta.php?id=<?php echo($pan_tipo_panol->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('PanTipoPanol') ?>: <strong><?php Gral::_echo($pan_tipo_panol->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo PanPanol::getFiltrosArrGral() ?>&arr=<?php echo $pan_panol->getFiltrosArrXCampo('PanTipoPanol', 'pan_tipo_panol_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('PanPanols') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($pan_tipo_panol->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

