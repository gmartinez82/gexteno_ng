<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$gen_arbol_tipo = GenArbolTipo::getOxId($id);
//Gral::prr($gen_arbol_tipo);
?>

<div class="tabs ficha-gen_arbol_tipo" identificador="<?php echo $gen_arbol_tipo->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par gen_arbol_tipo id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($gen_arbol_tipo->getId()) ?>
            </div>
        </div>

	
        <div class="par gen_arbol_tipo descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($gen_arbol_tipo->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gen_arbol_tipo codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($gen_arbol_tipo->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par gen_arbol_tipo observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($gen_arbol_tipo->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par gen_arbol_tipo orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($gen_arbol_tipo->getOrden()) ?>
            </div>
        </div>
		
        <div class="par gen_arbol_tipo estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($gen_arbol_tipo->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

