<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$ins_categoria = InsCategoria::getOxId($id);
//Gral::prr($ins_categoria);
?>

<div class="tabs ficha-ins_categoria" identificador="<?php echo $ins_categoria->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par ins_categoria id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_categoria->getId()) ?>
            </div>
        </div>

	
        <div class="par ins_categoria descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_categoria->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ins_categoria gen_arbol_id">
            <div class="label"><?php Lang::_lang('GenArbol') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_categoria->getGenArbol()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ins_categoria ins_categoria_padre">
            <div class="label"><?php Lang::_lang('InsCategoriaPadre') ?></div>
            <div class="dato">
                <?php Gral::_echo(($ins_categoria->getInsCategoriaPadre() != 'null') ? InsCategoria::getOxId($ins_categoria->getInsCategoriaPadre())->getDescripcion() : '') ?>
            </div>
        </div>
		
        <div class="par ins_categoria codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_categoria->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par ins_categoria familia_descripcion">
            <div class="label"><?php Lang::_lang('Familia Desc') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_categoria->getFamiliaDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ins_categoria observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_categoria->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par ins_categoria orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_categoria->getOrden()) ?>
            </div>
        </div>
		
        <div class="par ins_categoria estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_categoria->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

