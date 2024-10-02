<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$cntb_diario_asiento_vta_factura = CntbDiarioAsientoVtaFactura::getOxId($id);
//Gral::prr($cntb_diario_asiento_vta_factura);
?>

<div class="tabs ficha-cntb_diario_asiento_vta_factura" identificador="<?php echo $cntb_diario_asiento_vta_factura->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par cntb_diario_asiento_vta_factura id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($cntb_diario_asiento_vta_factura->getId()) ?>
            </div>
        </div>

	
        <div class="par cntb_diario_asiento_vta_factura cntb_periodo_id">
            <div class="label"><?php Lang::_lang('CntbPeriodo') ?></div>
            <div class="dato">
                <?php Gral::_echo($cntb_diario_asiento_vta_factura->getCntbPeriodo()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par cntb_diario_asiento_vta_factura cntb_diario_asiento_id">
            <div class="label"><?php Lang::_lang('CntbDiarioAsiento') ?></div>
            <div class="dato">
                <?php Gral::_echo($cntb_diario_asiento_vta_factura->getCntbDiarioAsiento()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par cntb_diario_asiento_vta_factura vta_factura_id">
            <div class="label"><?php Lang::_lang('VtaFactura') ?></div>
            <div class="dato">
                <?php Gral::_echo($cntb_diario_asiento_vta_factura->getVtaFactura()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par cntb_diario_asiento_vta_factura estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($cntb_diario_asiento_vta_factura->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

