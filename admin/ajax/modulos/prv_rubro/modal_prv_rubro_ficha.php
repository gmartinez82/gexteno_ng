<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$prv_rubro = PrvRubro::getOxId($id);
//Gral::prr($prv_rubro);
?>

<div class="tabs ficha-prv_rubro" identificador="<?php echo $prv_rubro->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par prv_rubro id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_rubro->getId()) ?>
            </div>
        </div>

	
        <div class="par prv_rubro descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_rubro->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par prv_rubro codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_rubro->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par prv_rubro observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_rubro->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par prv_rubro orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_rubro->getOrden()) ?>
            </div>
        </div>
		
        <div class="par prv_rubro estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_rubro->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

