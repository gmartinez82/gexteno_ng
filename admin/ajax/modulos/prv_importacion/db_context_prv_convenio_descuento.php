<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$prv_importacion_id = Gral::getVars(2, 'prv_importacion_id');
$prv_importacion = PrvImportacion::getOxId($prv_importacion_id);
$prv_convenio_descuento = $prv_importacion->getPrvConvenioDescuento();

?>
<div class="datos" id="<?php Gral::_echo($prv_convenio_descuento->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('PrvConvenioDescuento') ?>: 
        <strong><?php Gral::_echo($prv_convenio_descuento->getId()) ?> - <?php Gral::_echo($prv_convenio_descuento->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="prv_convenio_descuento_alta.php?id=<?php echo($prv_convenio_descuento->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('PrvConvenioDescuento') ?>: <strong><?php Gral::_echo($prv_convenio_descuento->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo PrvImportacion::getFiltrosArrGral() ?>&arr=<?php echo $prv_importacion->getFiltrosArrXCampo('PrvConvenioDescuento', 'prv_convenio_descuento_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('PrvImportacions') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($prv_convenio_descuento->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

