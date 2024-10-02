<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$vta_tipo_comprador = VtaTipoComprador::getOxId($id);
//Gral::prr($vta_tipo_comprador);
?>

<div class="tabs ficha-vta_tipo_comprador" identificador="<?php echo $vta_tipo_comprador->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par vta_tipo_comprador id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_tipo_comprador->getId()) ?>
            </div>
        </div>

	
        <div class="par vta_tipo_comprador descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_tipo_comprador->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_tipo_comprador codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_tipo_comprador->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par vta_tipo_comprador observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_tipo_comprador->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par vta_tipo_comprador orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_tipo_comprador->getOrden()) ?>
            </div>
        </div>
		
        <div class="par vta_tipo_comprador estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_tipo_comprador->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

