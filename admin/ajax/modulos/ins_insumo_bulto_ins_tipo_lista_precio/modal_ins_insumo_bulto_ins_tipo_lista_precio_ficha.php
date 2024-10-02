<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$ins_insumo_bulto_ins_tipo_lista_precio = InsInsumoBultoInsTipoListaPrecio::getOxId($id);
//Gral::prr($ins_insumo_bulto_ins_tipo_lista_precio);
?>

<div class="tabs ficha-ins_insumo_bulto_ins_tipo_lista_precio" identificador="<?php echo $ins_insumo_bulto_ins_tipo_lista_precio->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par ins_insumo_bulto_ins_tipo_lista_precio id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_insumo_bulto_ins_tipo_lista_precio->getId()) ?>
            </div>
        </div>

	
        <div class="par ins_insumo_bulto_ins_tipo_lista_precio ins_insumo_bulto_id">
            <div class="label"><?php Lang::_lang('InsInsumoBulto') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_insumo_bulto_ins_tipo_lista_precio->getInsInsumoBulto()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ins_insumo_bulto_ins_tipo_lista_precio ins_tipo_lista_precio_id">
            <div class="label"><?php Lang::_lang('InsTipoListaPrecio') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_insumo_bulto_ins_tipo_lista_precio->getInsTipoListaPrecio()->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

