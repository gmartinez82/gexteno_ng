<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$vta_politica_descuento_ins_tipo_lista_precio = VtaPoliticaDescuentoInsTipoListaPrecio::getOxId($id);
//Gral::prr($vta_politica_descuento_ins_tipo_lista_precio);
?>

<div class="tabs ficha-vta_politica_descuento_ins_tipo_lista_precio" identificador="<?php echo $vta_politica_descuento_ins_tipo_lista_precio->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par vta_politica_descuento_ins_tipo_lista_precio id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_politica_descuento_ins_tipo_lista_precio->getId()) ?>
            </div>
        </div>

	
        <div class="par vta_politica_descuento_ins_tipo_lista_precio vta_politica_descuento_id">
            <div class="label"><?php Lang::_lang('VtaPoliticaDescuento') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_politica_descuento_ins_tipo_lista_precio->getVtaPoliticaDescuento()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_politica_descuento_ins_tipo_lista_precio ins_tipo_lista_precio_id">
            <div class="label"><?php Lang::_lang('InsTipoListaPrecio') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_politica_descuento_ins_tipo_lista_precio->getInsTipoListaPrecio()->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

