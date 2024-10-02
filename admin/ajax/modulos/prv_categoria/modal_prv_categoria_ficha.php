<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$prv_categoria = PrvCategoria::getOxId($id);
//Gral::prr($prv_categoria);
?>

<div class="tabs ficha-prv_categoria" identificador="<?php echo $prv_categoria->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par prv_categoria id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_categoria->getId()) ?>
            </div>
        </div>

	
        <div class="par prv_categoria descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_categoria->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par prv_categoria codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_categoria->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par prv_categoria observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_categoria->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par prv_categoria orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_categoria->getOrden()) ?>
            </div>
        </div>
		
        <div class="par prv_categoria estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($prv_categoria->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

