<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$vta_politica_descuento_rango = VtaPoliticaDescuentoRango::getOxId($id);
//Gral::prr($vta_politica_descuento_rango);
?>

<div class="tabs ficha-vta_politica_descuento_rango" identificador="<?php echo $vta_politica_descuento_rango->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par vta_politica_descuento_rango id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_politica_descuento_rango->getId()) ?>
            </div>
        </div>

	
        <div class="par vta_politica_descuento_rango descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_politica_descuento_rango->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_politica_descuento_rango vta_politica_descuento_id">
            <div class="label"><?php Lang::_lang('VtaPoliticaDescuento') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_politica_descuento_rango->getVtaPoliticaDescuento()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_politica_descuento_rango cantidad_desde">
            <div class="label"><?php Lang::_lang('Desde') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_politica_descuento_rango->getCantidadDesde()) ?>
            </div>
        </div>
		
        <div class="par vta_politica_descuento_rango cantidad_hasta">
            <div class="label"><?php Lang::_lang('Hasta') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_politica_descuento_rango->getCantidadHasta()) ?>
            </div>
        </div>
		
        <div class="par vta_politica_descuento_rango porcentaje_descuento">
            <div class="label"><?php Lang::_lang('Porc Descuento') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_politica_descuento_rango->getPorcentajeDescuento()) ?>
            </div>
        </div>
		
        <div class="par vta_politica_descuento_rango porcentaje_negociacion">
            <div class="label"><?php Lang::_lang('Porc Negociacion') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_politica_descuento_rango->getPorcentajeNegociacion()) ?>
            </div>
        </div>
		
        <div class="par vta_politica_descuento_rango codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_politica_descuento_rango->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par vta_politica_descuento_rango observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_politica_descuento_rango->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par vta_politica_descuento_rango orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_politica_descuento_rango->getOrden()) ?>
            </div>
        </div>
		
        <div class="par vta_politica_descuento_rango estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_politica_descuento_rango->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

