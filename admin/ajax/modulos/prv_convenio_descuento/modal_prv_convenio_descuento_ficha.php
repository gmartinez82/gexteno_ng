<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$prv_convenio_descuento = PrvConvenioDescuento::getOxId($id);
//Gral::prr($prv_convenio_descuento);
?>

<div class="tabs ficha-prv_convenio_descuento" identificador="<?php echo $prv_convenio_descuento->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par prv_convenio_descuento id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_convenio_descuento->getId()) ?>
            </div>
        </div>

	
        <div class="par prv_convenio_descuento descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_convenio_descuento->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par prv_convenio_descuento prv_proveedor_id">
            <div class="label"><?php Lang::_lang('PrvProveedor') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_convenio_descuento->getPrvProveedor()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par prv_convenio_descuento codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_convenio_descuento->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par prv_convenio_descuento porcentaje_descuento">
            <div class="label"><?php Lang::_lang('Porc Descuento') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_convenio_descuento->getPorcentajeDescuento()) ?>
            </div>
        </div>
		
        <div class="par prv_convenio_descuento observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_convenio_descuento->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par prv_convenio_descuento orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_convenio_descuento->getOrden()) ?>
            </div>
        </div>
		
        <div class="par prv_convenio_descuento estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_convenio_descuento->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

