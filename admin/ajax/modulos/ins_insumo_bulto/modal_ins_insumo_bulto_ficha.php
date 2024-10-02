<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$ins_insumo_bulto = InsInsumoBulto::getOxId($id);
//Gral::prr($ins_insumo_bulto);
?>

<div class="tabs ficha-ins_insumo_bulto" identificador="<?php echo $ins_insumo_bulto->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par ins_insumo_bulto id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_insumo_bulto->getId()) ?>
            </div>
        </div>

	
        <div class="par ins_insumo_bulto descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_insumo_bulto->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ins_insumo_bulto ins_insumo_id">
            <div class="label"><?php Lang::_lang('InsInsumo') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_insumo_bulto->getInsInsumo()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ins_insumo_bulto cantidad">
            <div class="label"><?php Lang::_lang('Cantidad') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_insumo_bulto->getCantidad()) ?>
            </div>
        </div>
		
        <div class="par ins_insumo_bulto ins_unidad_medida_id">
            <div class="label"><?php Lang::_lang('InsUnidadMedida') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_insumo_bulto->getInsUnidadMedida()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ins_insumo_bulto codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_insumo_bulto->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par ins_insumo_bulto observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_insumo_bulto->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par ins_insumo_bulto orden">
            <div class="label"><?php Lang::_lang('Orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_insumo_bulto->getOrden()) ?>
            </div>
        </div>
		
        <div class="par ins_insumo_bulto estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_insumo_bulto->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

