<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$vta_vendedor_valoracion_tipo_item = VtaVendedorValoracionTipoItem::getOxId($id);
//Gral::prr($vta_vendedor_valoracion_tipo_item);
?>

<div class="tabs ficha-vta_vendedor_valoracion_tipo_item" identificador="<?php echo $vta_vendedor_valoracion_tipo_item->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par vta_vendedor_valoracion_tipo_item id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_vendedor_valoracion_tipo_item->getId()) ?>
            </div>
        </div>

	
        <div class="par vta_vendedor_valoracion_tipo_item descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_vendedor_valoracion_tipo_item->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_vendedor_valoracion_tipo_item descripcion_corta">
            <div class="label"><?php Lang::_lang('Desc Corta') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_vendedor_valoracion_tipo_item->getDescripcionCorta()) ?>
            </div>
        </div>
		
        <div class="par vta_vendedor_valoracion_tipo_item descripcion_publica">
            <div class="label"><?php Lang::_lang('Descr Publica') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_vendedor_valoracion_tipo_item->getDescripcionPublica()) ?>
            </div>
        </div>
		
        <div class="par vta_vendedor_valoracion_tipo_item color">
            <div class="label"><?php Lang::_lang('Color') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_vendedor_valoracion_tipo_item->getColor()) ?>
            </div>
        </div>
		
        <div class="par vta_vendedor_valoracion_tipo_item color_secundario">
            <div class="label"><?php Lang::_lang('Color Secundario') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_vendedor_valoracion_tipo_item->getColorSecundario()) ?>
            </div>
        </div>
		
        <div class="par vta_vendedor_valoracion_tipo_item codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_vendedor_valoracion_tipo_item->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par vta_vendedor_valoracion_tipo_item observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_vendedor_valoracion_tipo_item->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par vta_vendedor_valoracion_tipo_item orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_vendedor_valoracion_tipo_item->getOrden()) ?>
            </div>
        </div>
		
        <div class="par vta_vendedor_valoracion_tipo_item estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($vta_vendedor_valoracion_tipo_item->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

