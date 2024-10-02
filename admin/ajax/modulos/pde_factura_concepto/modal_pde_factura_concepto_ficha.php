<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$pde_factura_concepto = PdeFacturaConcepto::getOxId($id);
//Gral::prr($pde_factura_concepto);
?>

<div class="tabs ficha-pde_factura_concepto" identificador="<?php echo $pde_factura_concepto->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par pde_factura_concepto id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_factura_concepto->getId()) ?>
            </div>
        </div>

	
        <div class="par pde_factura_concepto descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_factura_concepto->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_factura_concepto codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_factura_concepto->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par pde_factura_concepto pde_factura_tipo_concepto_id">
            <div class="label"><?php Lang::_lang('PdeFacturaTipoConcepto') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_factura_concepto->getPdeFacturaTipoConcepto()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_factura_concepto cntb_cuenta_id">
            <div class="label"><?php Lang::_lang('CntbCuenta') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_factura_concepto->getCntbCuenta()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_factura_concepto observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_factura_concepto->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par pde_factura_concepto orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_factura_concepto->getOrden()) ?>
            </div>
        </div>
		
        <div class="par pde_factura_concepto estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_factura_concepto->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

