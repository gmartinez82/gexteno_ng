<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$prv_importacion_resultado_id = Gral::getVars(2, 'prv_importacion_resultado_id');
$prv_importacion_resultado = PrvImportacionResultado::getOxId($prv_importacion_resultado_id);
$prv_importacion = $prv_importacion_resultado->getPrvImportacion();

?>
<div class="datos" id="<?php Gral::_echo($prv_importacion->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('PrvImportacion') ?>: 
        <strong><?php Gral::_echo($prv_importacion->getId()) ?> - <?php Gral::_echo($prv_importacion->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="prv_importacion_alta.php?id=<?php echo($prv_importacion->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('PrvImportacion') ?>: <strong><?php Gral::_echo($prv_importacion->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo PrvImportacionResultado::getFiltrosArrGral() ?>&arr=<?php echo $prv_importacion_resultado->getFiltrosArrXCampo('PrvImportacion', 'prv_importacion_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('PrvImportacionResultados') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($prv_importacion->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

