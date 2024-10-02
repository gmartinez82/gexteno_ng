<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$prv_convenio_descuento_id = Gral::getVars(2, 'prv_convenio_descuento_id');
$prv_convenio_descuento = PrvConvenioDescuento::getOxId($prv_convenio_descuento_id);
$prv_proveedor = $prv_convenio_descuento->getPrvProveedor();

?>
<div class="datos" id="<?php Gral::_echo($prv_proveedor->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('PrvProveedor') ?>: 
        <strong><?php Gral::_echo($prv_proveedor->getId()) ?> - <?php Gral::_echo($prv_proveedor->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="prv_proveedor_alta.php?id=<?php echo($prv_proveedor->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('PrvProveedor') ?>: <strong><?php Gral::_echo($prv_proveedor->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo PrvConvenioDescuento::getFiltrosArrGral() ?>&arr=<?php echo $prv_convenio_descuento->getFiltrosArrXCampo('PrvProveedor', 'prv_proveedor_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('PrvConvenioDescuentos') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($prv_proveedor->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

