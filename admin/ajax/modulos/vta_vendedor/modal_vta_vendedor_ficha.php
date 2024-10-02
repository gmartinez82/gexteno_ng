<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$vta_vendedor = VtaVendedor::getOxId($id);
//Gral::prr($vta_vendedor);
?>

<div class="tabs ficha-vta_vendedor" identificador="<?php echo $vta_vendedor->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par vta_vendedor id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_vendedor->getId()) ?>
            </div>
        </div>

	
        <div class="par vta_vendedor descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_vendedor->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_vendedor gral_sucursal_id">
            <div class="label"><?php Lang::_lang('GralSucursal') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_vendedor->getGralSucursal()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_vendedor apellido">
            <div class="label"><?php Lang::_lang('Apellido') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_vendedor->getApellido()) ?>
            </div>
        </div>
		
        <div class="par vta_vendedor nombre">
            <div class="label"><?php Lang::_lang('Nombre') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_vendedor->getNombre()) ?>
            </div>
        </div>
		
        <div class="par vta_vendedor vta_tipo_vendedor_id">
            <div class="label"><?php Lang::_lang('VtaTipoVendedor') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_vendedor->getVtaTipoVendedor()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_vendedor email">
            <div class="label"><?php Lang::_lang('Email') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_vendedor->getEmail()) ?>
            </div>
        </div>
		
        <div class="par vta_vendedor telefono">
            <div class="label"><?php Lang::_lang('Telefono') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_vendedor->getTelefono()) ?>
            </div>
        </div>
		
        <div class="par vta_vendedor celular">
            <div class="label"><?php Lang::_lang('Celular') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_vendedor->getCelular()) ?>
            </div>
        </div>
		
        <div class="par vta_vendedor porcentaje_comision">
            <div class="label"><?php Lang::_lang('Porc Comision') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_vendedor->getPorcentajeComision()) ?>
            </div>
        </div>
		
        <div class="par vta_vendedor codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_vendedor->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par vta_vendedor observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_vendedor->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par vta_vendedor orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_vendedor->getOrden()) ?>
            </div>
        </div>
		
        <div class="par vta_vendedor estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($vta_vendedor->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

