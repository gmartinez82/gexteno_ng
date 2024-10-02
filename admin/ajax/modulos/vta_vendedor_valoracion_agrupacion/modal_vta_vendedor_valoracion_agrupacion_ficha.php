<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$vta_vendedor_valoracion_agrupacion = VtaVendedorValoracionAgrupacion::getOxId($id);
//Gral::prr($vta_vendedor_valoracion_agrupacion);
?>

<div class="tabs ficha-vta_vendedor_valoracion_agrupacion" identificador="<?php echo $vta_vendedor_valoracion_agrupacion->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par vta_vendedor_valoracion_agrupacion id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_vendedor_valoracion_agrupacion->getId()) ?>
            </div>
        </div>

	
        <div class="par vta_vendedor_valoracion_agrupacion descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_vendedor_valoracion_agrupacion->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_vendedor_valoracion_agrupacion apellido">
            <div class="label"><?php Lang::_lang('Apellido') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_vendedor_valoracion_agrupacion->getApellido()) ?>
            </div>
        </div>
		
        <div class="par vta_vendedor_valoracion_agrupacion nombre">
            <div class="label"><?php Lang::_lang('Nombre') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_vendedor_valoracion_agrupacion->getNombre()) ?>
            </div>
        </div>
		
        <div class="par vta_vendedor_valoracion_agrupacion email">
            <div class="label"><?php Lang::_lang('Email') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_vendedor_valoracion_agrupacion->getEmail()) ?>
            </div>
        </div>
		
        <div class="par vta_vendedor_valoracion_agrupacion telefono">
            <div class="label"><?php Lang::_lang('Telefono') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_vendedor_valoracion_agrupacion->getTelefono()) ?>
            </div>
        </div>
		
        <div class="par vta_vendedor_valoracion_agrupacion fecha">
            <div class="label"><?php Lang::_lang('Fecha') ?></div>
            <div class="dato">
                <?php Gral::_echo(Gral::getFechaToWeb($vta_vendedor_valoracion_agrupacion->getFecha())) ?>
            </div>
        </div>
		
        <div class="par vta_vendedor_valoracion_agrupacion vta_vendedor_id">
            <div class="label"><?php Lang::_lang('VtaVendedor') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_vendedor_valoracion_agrupacion->getVtaVendedor()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_vendedor_valoracion_agrupacion valoracion">
            <div class="label"><?php Lang::_lang('Valoracion') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_vendedor_valoracion_agrupacion->getValoracion()) ?>
            </div>
        </div>
		
        <div class="par vta_vendedor_valoracion_agrupacion cli_cliente_id">
            <div class="label"><?php Lang::_lang('CliCliente') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_vendedor_valoracion_agrupacion->getCliCliente()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_vendedor_valoracion_agrupacion session">
            <div class="label"><?php Lang::_lang('Session') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_vendedor_valoracion_agrupacion->getSession()) ?>
            </div>
        </div>
		
        <div class="par vta_vendedor_valoracion_agrupacion navegador">
            <div class="label"><?php Lang::_lang('Navegador') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_vendedor_valoracion_agrupacion->getNavegador()) ?>
            </div>
        </div>
		
        <div class="par vta_vendedor_valoracion_agrupacion ip">
            <div class="label"><?php Lang::_lang('IP') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_vendedor_valoracion_agrupacion->getIp()) ?>
            </div>
        </div>
		
        <div class="par vta_vendedor_valoracion_agrupacion observacion">
            <div class="label"><?php Lang::_lang('observacion') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_vendedor_valoracion_agrupacion->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par vta_vendedor_valoracion_agrupacion orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_vendedor_valoracion_agrupacion->getOrden()) ?>
            </div>
        </div>
		
        <div class="par vta_vendedor_valoracion_agrupacion estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_vendedor_valoracion_agrupacion->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

