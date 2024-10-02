<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$prv_grupo = PrvGrupo::getOxId($id);
//Gral::prr($prv_grupo);
?>

<div class="tabs ficha-prv_grupo" identificador="<?php echo $prv_grupo->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par prv_grupo id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_grupo->getId()) ?>
            </div>
        </div>

	
        <div class="par prv_grupo descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_grupo->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par prv_grupo codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_grupo->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par prv_grupo observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_grupo->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par prv_grupo orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_grupo->getOrden()) ?>
            </div>
        </div>
		
        <div class="par prv_grupo estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($prv_grupo->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

