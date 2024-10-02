<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$vta_tipo_vendedor = VtaTipoVendedor::getOxId($id);
//Gral::prr($vta_tipo_vendedor);
?>

<div class="tabs ficha-vta_tipo_vendedor" identificador="<?php echo $vta_tipo_vendedor->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par vta_tipo_vendedor id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_tipo_vendedor->getId()) ?>
            </div>
        </div>

	
        <div class="par vta_tipo_vendedor descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_tipo_vendedor->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_tipo_vendedor codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_tipo_vendedor->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par vta_tipo_vendedor observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_tipo_vendedor->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par vta_tipo_vendedor orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_tipo_vendedor->getOrden()) ?>
            </div>
        </div>
		
        <div class="par vta_tipo_vendedor estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_tipo_vendedor->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

