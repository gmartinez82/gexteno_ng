<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$pan_ubi_piso = PanUbiPiso::getOxId($id);
//Gral::prr($pan_ubi_piso);
?>

<div class="tabs ficha-pan_ubi_piso" identificador="<?php echo $pan_ubi_piso->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par pan_ubi_piso id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($pan_ubi_piso->getId()) ?>
            </div>
        </div>

	
        <div class="par pan_ubi_piso descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($pan_ubi_piso->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pan_ubi_piso codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($pan_ubi_piso->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par pan_ubi_piso observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($pan_ubi_piso->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par pan_ubi_piso orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($pan_ubi_piso->getOrden()) ?>
            </div>
        </div>
		
        <div class="par pan_ubi_piso estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($pan_ubi_piso->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

