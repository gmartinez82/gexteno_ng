<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$gral_sucursal = GralSucursal::getOxId($id);
//Gral::prr($gral_sucursal);
?>

<div class="tabs ficha-gral_sucursal" identificador="<?php echo $gral_sucursal->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par gral_sucursal id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_sucursal->getId()) ?>
            </div>
        </div>

	
        <div class="par gral_sucursal descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_sucursal->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gral_sucursal gral_empresa_id">
            <div class="label"><?php Lang::_lang('GralEmpresa') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_sucursal->getGralEmpresa()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gral_sucursal gral_sucursal_tipo_id">
            <div class="label"><?php Lang::_lang('GralSucursalTipo') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_sucursal->getGralSucursalTipo()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gral_sucursal domicilio">
            <div class="label"><?php Lang::_lang('Domicilio') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_sucursal->getDomicilio()) ?>
            </div>
        </div>
		
        <div class="par gral_sucursal telefono">
            <div class="label"><?php Lang::_lang('Telefono') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_sucursal->getTelefono()) ?>
            </div>
        </div>
		
        <div class="par gral_sucursal email">
            <div class="label"><?php Lang::_lang('Email') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_sucursal->getEmail()) ?>
            </div>
        </div>
		
        <div class="par gral_sucursal codigo_postal">
            <div class="label"><?php Lang::_lang('Codigo Postal') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_sucursal->getCodigoPostal()) ?>
            </div>
        </div>
		
        <div class="par gral_sucursal geo_localidad_id">
            <div class="label"><?php Lang::_lang('GeoLocalidad') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_sucursal->getGeoLocalidad()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gral_sucursal codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_sucursal->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par gral_sucursal latitud">
            <div class="label"><?php Lang::_lang('Latitud') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_sucursal->getLatitud()) ?>
            </div>
        </div>
		
        <div class="par gral_sucursal longitud">
            <div class="label"><?php Lang::_lang('Longitud') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_sucursal->getLongitud()) ?>
            </div>
        </div>
		
        <div class="par gral_sucursal color">
            <div class="label"><?php Lang::_lang('Color') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_sucursal->getColor()) ?>
            </div>
        </div>
		
        <div class="par gral_sucursal numero">
            <div class="label"><?php Lang::_lang('Numero') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_sucursal->getNumero()) ?>
            </div>
        </div>
		
        <div class="par gral_sucursal observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_sucursal->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par gral_sucursal orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_sucursal->getOrden()) ?>
            </div>
        </div>
		
        <div class="par gral_sucursal estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($gral_sucursal->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

