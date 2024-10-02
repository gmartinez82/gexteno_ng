<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$vta_tipo_punto_venta = VtaTipoPuntoVenta::getOxId($id);
//Gral::prr($vta_tipo_punto_venta);
?>

<div class="tabs ficha-vta_tipo_punto_venta" identificador="<?php echo $vta_tipo_punto_venta->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par vta_tipo_punto_venta id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_tipo_punto_venta->getId()) ?>
            </div>
        </div>

	
        <div class="par vta_tipo_punto_venta descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_tipo_punto_venta->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_tipo_punto_venta codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_tipo_punto_venta->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par vta_tipo_punto_venta observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_tipo_punto_venta->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par vta_tipo_punto_venta orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_tipo_punto_venta->getOrden()) ?>
            </div>
        </div>
		
        <div class="par vta_tipo_punto_venta estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_tipo_punto_venta->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

