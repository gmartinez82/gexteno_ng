<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$vta_vendedor_valoracion = VtaVendedorValoracion::getOxId($id);
//Gral::prr($vta_vendedor_valoracion);
?>

<div class="tabs ficha-vta_vendedor_valoracion" identificador="<?php echo $vta_vendedor_valoracion->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par vta_vendedor_valoracion id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_vendedor_valoracion->getId()) ?>
            </div>
        </div>

	
        <div class="par vta_vendedor_valoracion descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_vendedor_valoracion->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_vendedor_valoracion vta_vendedor_valoracion_agrupacion_id">
            <div class="label"><?php Lang::_lang('Agrupacion') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_vendedor_valoracion->getVtaVendedorValoracionAgrupacion()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_vendedor_valoracion vta_vendedor_valoracion_tipo_item_id">
            <div class="label"><?php Lang::_lang('Tipo Item') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_vendedor_valoracion->getVtaVendedorValoracionTipoItem()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_vendedor_valoracion apellido">
            <div class="label"><?php Lang::_lang('Apellido') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_vendedor_valoracion->getApellido()) ?>
            </div>
        </div>
		
        <div class="par vta_vendedor_valoracion nombre">
            <div class="label"><?php Lang::_lang('Nombre') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_vendedor_valoracion->getNombre()) ?>
            </div>
        </div>
		
        <div class="par vta_vendedor_valoracion email">
            <div class="label"><?php Lang::_lang('Email') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_vendedor_valoracion->getEmail()) ?>
            </div>
        </div>
		
        <div class="par vta_vendedor_valoracion telefono">
            <div class="label"><?php Lang::_lang('Telefono') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_vendedor_valoracion->getTelefono()) ?>
            </div>
        </div>
		
        <div class="par vta_vendedor_valoracion fecha">
            <div class="label"><?php Lang::_lang('Fecha') ?></div>
            <div class="dato">
                <?php Gral::_echo(Gral::getFechaToWeb($vta_vendedor_valoracion->getFecha())) ?>
            </div>
        </div>
		
        <div class="par vta_vendedor_valoracion vta_vendedor_id">
            <div class="label"><?php Lang::_lang('VtaVendedor') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_vendedor_valoracion->getVtaVendedor()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_vendedor_valoracion valoracion">
            <div class="label"><?php Lang::_lang('Valoracion') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_vendedor_valoracion->getValoracion()) ?>
            </div>
        </div>
		
        <div class="par vta_vendedor_valoracion cli_cliente_id">
            <div class="label"><?php Lang::_lang('CliCliente') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_vendedor_valoracion->getCliCliente()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_vendedor_valoracion session">
            <div class="label"><?php Lang::_lang('Session') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_vendedor_valoracion->getSession()) ?>
            </div>
        </div>
		
        <div class="par vta_vendedor_valoracion navegador">
            <div class="label"><?php Lang::_lang('Navegador') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_vendedor_valoracion->getNavegador()) ?>
            </div>
        </div>
		
        <div class="par vta_vendedor_valoracion ip">
            <div class="label"><?php Lang::_lang('IP') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_vendedor_valoracion->getIp()) ?>
            </div>
        </div>
		
        <div class="par vta_vendedor_valoracion observacion">
            <div class="label"><?php Lang::_lang('observacion') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_vendedor_valoracion->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par vta_vendedor_valoracion orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_vendedor_valoracion->getOrden()) ?>
            </div>
        </div>
		
        <div class="par vta_vendedor_valoracion estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_vendedor_valoracion->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

