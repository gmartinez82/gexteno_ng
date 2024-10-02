<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$vta_comision_vta_factura_id = Gral::getVars(2, 'vta_comision_vta_factura_id');
$vta_comision_vta_factura = VtaComisionVtaFactura::getOxId($vta_comision_vta_factura_id);
$vta_comision = $vta_comision_vta_factura->getVtaComision();

?>
<div class="datos" id="<?php Gral::_echo($vta_comision->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('VtaComision') ?>: 
        <strong><?php Gral::_echo($vta_comision->getId()) ?> - <?php Gral::_echo($vta_comision->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="vta_comision_alta.php?id=<?php echo($vta_comision->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaComision') ?>: <strong><?php Gral::_echo($vta_comision->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo VtaComisionVtaFactura::getFiltrosArrGral() ?>&arr=<?php echo $vta_comision_vta_factura->getFiltrosArrXCampo('VtaComision', 'vta_comision_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('VtaComisionVtaFacturas') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($vta_comision->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

