<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$prv_descuento_financiero = PrvDescuentoFinanciero::getOxId($id);
//Gral::prr($prv_descuento_financiero);
?>

<div class="tabs ficha-prv_descuento_financiero" identificador="<?php echo $prv_descuento_financiero->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par prv_descuento_financiero id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_descuento_financiero->getId()) ?>
            </div>
        </div>

	
        <div class="par prv_descuento_financiero descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_descuento_financiero->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par prv_descuento_financiero prv_proveedor_id">
            <div class="label"><?php Lang::_lang('PrvProveedor') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_descuento_financiero->getPrvProveedor()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par prv_descuento_financiero codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_descuento_financiero->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par prv_descuento_financiero porcentaje_descuento">
            <div class="label"><?php Lang::_lang('Porc Descuento') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_descuento_financiero->getPorcentajeDescuento()) ?>
            </div>
        </div>
		
        <div class="par prv_descuento_financiero observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_descuento_financiero->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par prv_descuento_financiero orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_descuento_financiero->getOrden()) ?>
            </div>
        </div>
		
        <div class="par prv_descuento_financiero estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_descuento_financiero->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

