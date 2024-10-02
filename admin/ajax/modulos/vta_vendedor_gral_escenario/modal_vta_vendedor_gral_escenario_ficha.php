<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$vta_vendedor_gral_escenario = VtaVendedorGralEscenario::getOxId($id);
//Gral::prr($vta_vendedor_gral_escenario);
?>

<div class="tabs ficha-vta_vendedor_gral_escenario" identificador="<?php echo $vta_vendedor_gral_escenario->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par vta_vendedor_gral_escenario id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_vendedor_gral_escenario->getId()) ?>
            </div>
        </div>

	
        <div class="par vta_vendedor_gral_escenario descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_vendedor_gral_escenario->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_vendedor_gral_escenario vta_vendedor_id">
            <div class="label"><?php Lang::_lang('VtaVendedor') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_vendedor_gral_escenario->getVtaVendedor()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_vendedor_gral_escenario gral_escenario_id">
            <div class="label"><?php Lang::_lang('GralEscenario') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_vendedor_gral_escenario->getGralEscenario()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_vendedor_gral_escenario codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_vendedor_gral_escenario->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par vta_vendedor_gral_escenario observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_vendedor_gral_escenario->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par vta_vendedor_gral_escenario orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_vendedor_gral_escenario->getOrden()) ?>
            </div>
        </div>
		
        <div class="par vta_vendedor_gral_escenario estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($vta_vendedor_gral_escenario->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

