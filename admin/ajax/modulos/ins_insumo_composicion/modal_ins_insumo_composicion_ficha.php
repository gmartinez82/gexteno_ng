<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$ins_insumo_composicion = InsInsumoComposicion::getOxId($id);
//Gral::prr($ins_insumo_composicion);
?>

<div class="tabs ficha-ins_insumo_composicion" identificador="<?php echo $ins_insumo_composicion->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par ins_insumo_composicion id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_insumo_composicion->getId()) ?>
            </div>
        </div>

	
        <div class="par ins_insumo_composicion descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_insumo_composicion->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ins_insumo_composicion ins_insumo_id">
            <div class="label"><?php Lang::_lang('InsInsumo') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_insumo_composicion->getInsInsumo()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ins_insumo_composicion ins_insumo_composicion">
            <div class="label"><?php Lang::_lang('InsInsumoComposicion') ?></div>
            <div class="dato">
                <?php Gral::_echo(($ins_insumo_composicion->getInsInsumoComposicion() != 'null') ? InsInsumo::getOxId($ins_insumo_composicion->getInsInsumoComposicion())->getDescripcion() : '') ?>
            </div>
        </div>
		
        <div class="par ins_insumo_composicion codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_insumo_composicion->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par ins_insumo_composicion cantidad">
            <div class="label"><?php Lang::_lang('Cantidad') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_insumo_composicion->getCantidad()) ?>
            </div>
        </div>
		
        <div class="par ins_insumo_composicion observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_insumo_composicion->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par ins_insumo_composicion orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_insumo_composicion->getOrden()) ?>
            </div>
        </div>
		
        <div class="par ins_insumo_composicion estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_insumo_composicion->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

