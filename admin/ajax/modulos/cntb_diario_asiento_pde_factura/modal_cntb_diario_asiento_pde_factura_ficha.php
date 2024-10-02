<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$cntb_diario_asiento_pde_factura = CntbDiarioAsientoPdeFactura::getOxId($id);
//Gral::prr($cntb_diario_asiento_pde_factura);
?>

<div class="tabs ficha-cntb_diario_asiento_pde_factura" identificador="<?php echo $cntb_diario_asiento_pde_factura->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par cntb_diario_asiento_pde_factura id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($cntb_diario_asiento_pde_factura->getId()) ?>
            </div>
        </div>

	
        <div class="par cntb_diario_asiento_pde_factura cntb_periodo_id">
            <div class="label"><?php Lang::_lang('CntbPeriodo') ?></div>
            <div class="dato">
                <?php Gral::_echo($cntb_diario_asiento_pde_factura->getCntbPeriodo()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par cntb_diario_asiento_pde_factura cntb_diario_asiento_id">
            <div class="label"><?php Lang::_lang('CntbDiarioAsiento') ?></div>
            <div class="dato">
                <?php Gral::_echo($cntb_diario_asiento_pde_factura->getCntbDiarioAsiento()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par cntb_diario_asiento_pde_factura pde_factura_id">
            <div class="label"><?php Lang::_lang('PdeFactura') ?></div>
            <div class="dato">
                <?php Gral::_echo($cntb_diario_asiento_pde_factura->getPdeFactura()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par cntb_diario_asiento_pde_factura estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($cntb_diario_asiento_pde_factura->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

