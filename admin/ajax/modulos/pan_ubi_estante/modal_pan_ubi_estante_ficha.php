<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$pan_ubi_estante = PanUbiEstante::getOxId($id);
//Gral::prr($pan_ubi_estante);
?>

<div class="tabs ficha-pan_ubi_estante" identificador="<?php echo $pan_ubi_estante->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par pan_ubi_estante id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($pan_ubi_estante->getId()) ?>
            </div>
        </div>

	
        <div class="par pan_ubi_estante descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($pan_ubi_estante->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pan_ubi_estante codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($pan_ubi_estante->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par pan_ubi_estante observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($pan_ubi_estante->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par pan_ubi_estante orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($pan_ubi_estante->getOrden()) ?>
            </div>
        </div>
		
        <div class="par pan_ubi_estante estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($pan_ubi_estante->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

