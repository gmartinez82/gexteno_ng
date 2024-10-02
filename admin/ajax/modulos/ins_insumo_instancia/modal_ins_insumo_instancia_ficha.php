<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$ins_insumo_instancia = InsInsumoInstancia::getOxId($id);
//Gral::prr($ins_insumo_instancia);
?>

<div class="tabs ficha-ins_insumo_instancia" identificador="<?php echo $ins_insumo_instancia->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par ins_insumo_instancia id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_insumo_instancia->getId()) ?>
            </div>
        </div>

	
        <div class="par ins_insumo_instancia descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_insumo_instancia->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ins_insumo_instancia ins_insumo_id">
            <div class="label"><?php Lang::_lang('InsInsumo') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_insumo_instancia->getInsInsumo()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ins_insumo_instancia vida_util">
            <div class="label"><?php Lang::_lang('Vida Util') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_insumo_instancia->getVidaUtil()) ?>
            </div>
        </div>
		
        <div class="par ins_insumo_instancia margen">
            <div class="label"><?php Lang::_lang('Margen') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_insumo_instancia->getMargen()) ?>
            </div>
        </div>
		
        <div class="par ins_insumo_instancia codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_insumo_instancia->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par ins_insumo_instancia observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_insumo_instancia->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par ins_insumo_instancia orden">
            <div class="label"><?php Lang::_lang('Orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_insumo_instancia->getOrden()) ?>
            </div>
        </div>
		
        <div class="par ins_insumo_instancia estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_insumo_instancia->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

