<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$prv_descuento_comercial = PrvDescuentoComercial::getOxId($id);
//Gral::prr($prv_descuento_comercial);
?>

<div class="tabs ficha-prv_descuento_comercial" identificador="<?php echo $prv_descuento_comercial->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par prv_descuento_comercial id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_descuento_comercial->getId()) ?>
            </div>
        </div>

	
        <div class="par prv_descuento_comercial descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_descuento_comercial->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par prv_descuento_comercial prv_proveedor_id">
            <div class="label"><?php Lang::_lang('PrvProveedor') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_descuento_comercial->getPrvProveedor()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par prv_descuento_comercial codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_descuento_comercial->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par prv_descuento_comercial porcentaje_descuento">
            <div class="label"><?php Lang::_lang('Porc Descuento') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_descuento_comercial->getPorcentajeDescuento()) ?>
            </div>
        </div>
		
        <div class="par prv_descuento_comercial observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_descuento_comercial->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par prv_descuento_comercial orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_descuento_comercial->getOrden()) ?>
            </div>
        </div>
		
        <div class="par prv_descuento_comercial estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_descuento_comercial->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

