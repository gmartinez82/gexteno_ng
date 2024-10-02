<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$gen_arbol = GenArbol::getOxId($id);
//Gral::prr($gen_arbol);
?>

<div class="tabs ficha-gen_arbol" identificador="<?php echo $gen_arbol->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par gen_arbol id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($gen_arbol->getId()) ?>
            </div>
        </div>

	
        <div class="par gen_arbol descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($gen_arbol->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gen_arbol gen_arbol_tipo_id">
            <div class="label"><?php Lang::_lang('GenArbolTipo') ?></div>
            <div class="dato">
                <?php Gral::_echo($gen_arbol->getGenArbolTipo()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gen_arbol codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($gen_arbol->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par gen_arbol php_clase">
            <div class="label"><?php Lang::_lang('PHP Clase') ?></div>
            <div class="dato">
                <?php Gral::_echo($gen_arbol->getPhpClase()) ?>
            </div>
        </div>
		
        <div class="par gen_arbol bd_tabla">
            <div class="label"><?php Lang::_lang('BD Tabla') ?></div>
            <div class="dato">
                <?php Gral::_echo($gen_arbol->getBdTabla()) ?>
            </div>
        </div>
		
        <div class="par gen_arbol observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($gen_arbol->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par gen_arbol orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($gen_arbol->getOrden()) ?>
            </div>
        </div>
		
        <div class="par gen_arbol estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($gen_arbol->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

