<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$prv_domicilio_id = Gral::getVars(2, 'prv_domicilio_id');
$prv_domicilio = PrvDomicilio::getOxId($prv_domicilio_id);
$prv_proveedor = $prv_domicilio->getPrvProveedor();

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
        <a href="_init.php?arr_gral=<?php echo PrvDomicilio::getFiltrosArrGral() ?>&arr=<?php echo $prv_domicilio->getFiltrosArrXCampo('PrvProveedor', 'prv_proveedor_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('PrvDomicilios') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($prv_proveedor->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

