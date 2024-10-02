<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$gen_api_proyecto = GenApiProyecto::getOxId($id);
//Gral::prr($gen_api_proyecto);
?>

<div class="tabs ficha-gen_api_proyecto" identificador="<?php echo $gen_api_proyecto->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par gen_api_proyecto id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($gen_api_proyecto->getId()) ?>
            </div>
        </div>

	
        <div class="par gen_api_proyecto descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($gen_api_proyecto->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gen_api_proyecto url_api">
            <div class="label"><?php Lang::_lang('Url Api') ?></div>
            <div class="dato">
                <?php Gral::_echo($gen_api_proyecto->getUrlApi()) ?>
            </div>
        </div>
		
        <div class="par gen_api_proyecto codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($gen_api_proyecto->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par gen_api_proyecto observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($gen_api_proyecto->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par gen_api_proyecto orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($gen_api_proyecto->getOrden()) ?>
            </div>
        </div>
		
        <div class="par gen_api_proyecto estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($gen_api_proyecto->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

