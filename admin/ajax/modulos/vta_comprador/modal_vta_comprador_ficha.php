<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$vta_comprador = VtaComprador::getOxId($id);
//Gral::prr($vta_comprador);
?>

<div class="tabs ficha-vta_comprador" identificador="<?php echo $vta_comprador->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par vta_comprador id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_comprador->getId()) ?>
            </div>
        </div>

	
        <div class="par vta_comprador descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_comprador->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_comprador apellido">
            <div class="label"><?php Lang::_lang('Apellido') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_comprador->getApellido()) ?>
            </div>
        </div>
		
        <div class="par vta_comprador nombre">
            <div class="label"><?php Lang::_lang('Nombre') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_comprador->getNombre()) ?>
            </div>
        </div>
		
        <div class="par vta_comprador vta_tipo_comprador_id">
            <div class="label"><?php Lang::_lang('VtaTipoComprador') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_comprador->getVtaTipoComprador()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_comprador geo_localidad_id">
            <div class="label"><?php Lang::_lang('GeoLocalidad') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_comprador->getGeoLocalidad()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par vta_comprador email">
            <div class="label"><?php Lang::_lang('Email') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_comprador->getEmail()) ?>
            </div>
        </div>
		
        <div class="par vta_comprador telefono">
            <div class="label"><?php Lang::_lang('Telefono') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_comprador->getTelefono()) ?>
            </div>
        </div>
		
        <div class="par vta_comprador celular">
            <div class="label"><?php Lang::_lang('Celular') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_comprador->getCelular()) ?>
            </div>
        </div>
		
        <div class="par vta_comprador domicilio">
            <div class="label"><?php Lang::_lang('Domicilio') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_comprador->getDomicilio()) ?>
            </div>
        </div>
		
        <div class="par vta_comprador porcentaje_comision">
            <div class="label"><?php Lang::_lang('Porc Comision') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_comprador->getPorcentajeComision()) ?>
            </div>
        </div>
		
        <div class="par vta_comprador codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_comprador->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par vta_comprador observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_comprador->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par vta_comprador orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_comprador->getOrden()) ?>
            </div>
        </div>
		
        <div class="par vta_comprador estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($vta_comprador->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

