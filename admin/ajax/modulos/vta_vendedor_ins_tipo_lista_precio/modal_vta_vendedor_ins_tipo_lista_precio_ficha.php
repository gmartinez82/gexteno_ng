<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$vta_vendedor_ins_tipo_lista_precio = VtaVendedorInsTipoListaPrecio::getOxId($id);
//Gral::prr($vta_vendedor_ins_tipo_lista_precio);
?>

<div class="tabs ficha-vta_vendedor_ins_tipo_lista_precio" identificador="<?php echo $vta_vendedor_ins_tipo_lista_precio->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par vta_vendedor_ins_tipo_lista_precio id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_vendedor_ins_tipo_lista_precio->getId()) ?>
            </div>
        </div>

	
        <div class="par vta_vendedor_ins_tipo_lista_precio descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_vendedor_ins_tipo_lista_precio->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_vendedor_ins_tipo_lista_precio vta_vendedor_id">
            <div class="label"><?php Lang::_lang('VtaVendedor') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_vendedor_ins_tipo_lista_precio->getVtaVendedor()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_vendedor_ins_tipo_lista_precio ins_tipo_lista_precio_id">
            <div class="label"><?php Lang::_lang('InsTipoListaPrecio') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_vendedor_ins_tipo_lista_precio->getInsTipoListaPrecio()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_vendedor_ins_tipo_lista_precio codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_vendedor_ins_tipo_lista_precio->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par vta_vendedor_ins_tipo_lista_precio observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_vendedor_ins_tipo_lista_precio->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par vta_vendedor_ins_tipo_lista_precio orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_vendedor_ins_tipo_lista_precio->getOrden()) ?>
            </div>
        </div>
		
        <div class="par vta_vendedor_ins_tipo_lista_precio estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($vta_vendedor_ins_tipo_lista_precio->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

