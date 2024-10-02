<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$gral_sucursal_valoracion = GralSucursalValoracion::getOxId($id);
//Gral::prr($gral_sucursal_valoracion);
?>

<div class="tabs ficha-gral_sucursal_valoracion" identificador="<?php echo $gral_sucursal_valoracion->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par gral_sucursal_valoracion id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_sucursal_valoracion->getId()) ?>
            </div>
        </div>

	
        <div class="par gral_sucursal_valoracion gral_sucursal_valoracion_agrupacion_id">
            <div class="label"><?php Lang::_lang('Agrupacion') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_sucursal_valoracion->getGralSucursalValoracionAgrupacion()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gral_sucursal_valoracion gral_sucursal_valoracion_tipo_item_id">
            <div class="label"><?php Lang::_lang('Tipo Item') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_sucursal_valoracion->getGralSucursalValoracionTipoItem()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gral_sucursal_valoracion descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_sucursal_valoracion->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gral_sucursal_valoracion apellido">
            <div class="label"><?php Lang::_lang('Apellido') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_sucursal_valoracion->getApellido()) ?>
            </div>
        </div>
		
        <div class="par gral_sucursal_valoracion nombre">
            <div class="label"><?php Lang::_lang('Nombre') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_sucursal_valoracion->getNombre()) ?>
            </div>
        </div>
		
        <div class="par gral_sucursal_valoracion email">
            <div class="label"><?php Lang::_lang('Email') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_sucursal_valoracion->getEmail()) ?>
            </div>
        </div>
		
        <div class="par gral_sucursal_valoracion telefono">
            <div class="label"><?php Lang::_lang('Telefono') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_sucursal_valoracion->getTelefono()) ?>
            </div>
        </div>
		
        <div class="par gral_sucursal_valoracion fecha">
            <div class="label"><?php Lang::_lang('Fecha') ?></div>
            <div class="dato">
                <?php Gral::_echo(Gral::getFechaToWeb($gral_sucursal_valoracion->getFecha())) ?>
            </div>
        </div>
		
        <div class="par gral_sucursal_valoracion gral_sucursal_id">
            <div class="label"><?php Lang::_lang('GralSucursal') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_sucursal_valoracion->getGralSucursal()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gral_sucursal_valoracion valoracion">
            <div class="label"><?php Lang::_lang('Valoracion') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_sucursal_valoracion->getValoracion()) ?>
            </div>
        </div>
		
        <div class="par gral_sucursal_valoracion cli_cliente_id">
            <div class="label"><?php Lang::_lang('CliCliente') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_sucursal_valoracion->getCliCliente()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gral_sucursal_valoracion session">
            <div class="label"><?php Lang::_lang('Session') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_sucursal_valoracion->getSession()) ?>
            </div>
        </div>
		
        <div class="par gral_sucursal_valoracion navegador">
            <div class="label"><?php Lang::_lang('Navegador') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_sucursal_valoracion->getNavegador()) ?>
            </div>
        </div>
		
        <div class="par gral_sucursal_valoracion ip">
            <div class="label"><?php Lang::_lang('IP') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_sucursal_valoracion->getIp()) ?>
            </div>
        </div>
		
        <div class="par gral_sucursal_valoracion observacion">
            <div class="label"><?php Lang::_lang('observacion') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_sucursal_valoracion->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par gral_sucursal_valoracion orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_sucursal_valoracion->getOrden()) ?>
            </div>
        </div>
		
        <div class="par gral_sucursal_valoracion estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_sucursal_valoracion->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

