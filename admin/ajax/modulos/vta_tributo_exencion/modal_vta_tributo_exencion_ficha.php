<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$vta_tributo_exencion = VtaTributoExencion::getOxId($id);
//Gral::prr($vta_tributo_exencion);
?>

<div class="tabs ficha-vta_tributo_exencion" identificador="<?php echo $vta_tributo_exencion->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par vta_tributo_exencion id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_tributo_exencion->getId()) ?>
            </div>
        </div>

	
        <div class="par vta_tributo_exencion descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_tributo_exencion->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_tributo_exencion vta_tributo_id">
            <div class="label"><?php Lang::_lang('VtaTributo') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_tributo_exencion->getVtaTributo()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_tributo_exencion cli_cliente_id">
            <div class="label"><?php Lang::_lang('CliCliente') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_tributo_exencion->getCliCliente()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_tributo_exencion fecha_inicio">
            <div class="label"><?php Lang::_lang('Fecha de Inicio') ?></div>
            <div class="dato">
                <?php Gral::_echo(Gral::getFechaToWeb($vta_tributo_exencion->getFechaInicio())) ?>
            </div>
        </div>
		
        <div class="par vta_tributo_exencion fecha_fin">
            <div class="label"><?php Lang::_lang('Fecha de Fin') ?></div>
            <div class="dato">
                <?php Gral::_echo(Gral::getFechaToWeb($vta_tributo_exencion->getFechaFin())) ?>
            </div>
        </div>
		
        <div class="par vta_tributo_exencion codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_tributo_exencion->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par vta_tributo_exencion observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_tributo_exencion->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par vta_tributo_exencion orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_tributo_exencion->getOrden()) ?>
            </div>
        </div>
		
        <div class="par vta_tributo_exencion estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($vta_tributo_exencion->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

