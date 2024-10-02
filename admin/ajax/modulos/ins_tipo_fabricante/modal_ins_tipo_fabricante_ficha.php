<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$ins_tipo_fabricante = InsTipoFabricante::getOxId($id);
//Gral::prr($ins_tipo_fabricante);
?>

<div class="tabs ficha-ins_tipo_fabricante" identificador="<?php echo $ins_tipo_fabricante->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par ins_tipo_fabricante id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_tipo_fabricante->getId()) ?>
            </div>
        </div>

	
        <div class="par ins_tipo_fabricante descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_tipo_fabricante->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ins_tipo_fabricante codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_tipo_fabricante->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par ins_tipo_fabricante observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_tipo_fabricante->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par ins_tipo_fabricante orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_tipo_fabricante->getOrden()) ?>
            </div>
        </div>
		
        <div class="par ins_tipo_fabricante estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_tipo_fabricante->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

