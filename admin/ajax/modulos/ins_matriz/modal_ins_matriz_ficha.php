<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$ins_matriz = InsMatriz::getOxId($id);
//Gral::prr($ins_matriz);
?>

<div class="tabs ficha-ins_matriz" identificador="<?php echo $ins_matriz->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par ins_matriz id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_matriz->getId()) ?>
            </div>
        </div>

	
        <div class="par ins_matriz ins_marca_id">
            <div class="label"><?php Lang::_lang('InsMarca') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_matriz->getInsMarca()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ins_matriz codigo_pieza">
            <div class="label"><?php Lang::_lang('CodigoPieza') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_matriz->getCodigoPieza()) ?>
            </div>
        </div>
		
        <div class="par ins_matriz codigo">
            <div class="label"><?php Lang::_lang('codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_matriz->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par ins_matriz descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_matriz->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ins_matriz observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_matriz->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par ins_matriz orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_matriz->getOrden()) ?>
            </div>
        </div>
		
        <div class="par ins_matriz estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_matriz->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

