<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$vta_vendedor_descuento = VtaVendedorDescuento::getOxId($id);
//Gral::prr($vta_vendedor_descuento);
?>

<div class="tabs ficha-vta_vendedor_descuento" identificador="<?php echo $vta_vendedor_descuento->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par vta_vendedor_descuento id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_vendedor_descuento->getId()) ?>
            </div>
        </div>

	
        <div class="par vta_vendedor_descuento descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_vendedor_descuento->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_vendedor_descuento vta_vendedor_id">
            <div class="label"><?php Lang::_lang('VtaVendedor') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_vendedor_descuento->getVtaVendedor()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_vendedor_descuento ins_etiqueta_id">
            <div class="label"><?php Lang::_lang('InsEtiqueta') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_vendedor_descuento->getInsEtiqueta()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_vendedor_descuento descuento_maximo">
            <div class="label"><?php Lang::_lang('Descuento Maximo') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_vendedor_descuento->getDescuentoMaximo()) ?>
            </div>
        </div>
		
        <div class="par vta_vendedor_descuento codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_vendedor_descuento->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par vta_vendedor_descuento observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_vendedor_descuento->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par vta_vendedor_descuento orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_vendedor_descuento->getOrden()) ?>
            </div>
        </div>
		
        <div class="par vta_vendedor_descuento estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_vendedor_descuento->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

