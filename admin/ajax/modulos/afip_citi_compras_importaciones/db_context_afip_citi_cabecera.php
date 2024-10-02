<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$afip_citi_compras_importaciones_id = Gral::getVars(2, 'afip_citi_compras_importaciones_id');
$afip_citi_compras_importaciones = AfipCitiComprasImportaciones::getOxId($afip_citi_compras_importaciones_id);
$afip_citi_cabecera = $afip_citi_compras_importaciones->getAfipCitiCabecera();

?>
<div class="datos" id="<?php Gral::_echo($afip_citi_cabecera->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('AfipCitiCabecera') ?>: 
        <strong><?php Gral::_echo($afip_citi_cabecera->getId()) ?> - <?php Gral::_echo($afip_citi_cabecera->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="afip_citi_cabecera_alta.php?id=<?php echo($afip_citi_cabecera->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('AfipCitiCabecera') ?>: <strong><?php Gral::_echo($afip_citi_cabecera->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo AfipCitiComprasImportaciones::getFiltrosArrGral() ?>&arr=<?php echo $afip_citi_compras_importaciones->getFiltrosArrXCampo('AfipCitiCabecera', 'afip_citi_cabecera_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('AfipCitiComprasImportacioness') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($afip_citi_cabecera->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

