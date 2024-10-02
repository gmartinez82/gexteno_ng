<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$prv_importacion_estado_id = Gral::getVars(2, 'prv_importacion_estado_id');
$prv_importacion_estado = PrvImportacionEstado::getOxId($prv_importacion_estado_id);
$prv_importacion_tipo_estado = $prv_importacion_estado->getPrvImportacionTipoEstado();

?>
<div class="datos" id="<?php Gral::_echo($prv_importacion_tipo_estado->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('PrvImportacionTipoEstado') ?>: 
        <strong><?php Gral::_echo($prv_importacion_tipo_estado->getId()) ?> - <?php Gral::_echo($prv_importacion_tipo_estado->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="prv_importacion_tipo_estado_alta.php?id=<?php echo($prv_importacion_tipo_estado->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('PrvImportacionTipoEstado') ?>: <strong><?php Gral::_echo($prv_importacion_tipo_estado->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo PrvImportacionEstado::getFiltrosArrGral() ?>&arr=<?php echo $prv_importacion_estado->getFiltrosArrXCampo('PrvImportacionTipoEstado', 'prv_importacion_tipo_estado_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('PrvImportacionEstados') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($prv_importacion_tipo_estado->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

