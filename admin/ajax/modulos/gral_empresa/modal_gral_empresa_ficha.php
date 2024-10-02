<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$gral_empresa = GralEmpresa::getOxId($id);
//Gral::prr($gral_empresa);
?>

<div class="tabs ficha-gral_empresa" identificador="<?php echo $gral_empresa->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par gral_empresa id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_empresa->getId()) ?>
            </div>
        </div>

	
        <div class="par gral_empresa descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_empresa->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gral_empresa gral_tipo_personeria_id">
            <div class="label"><?php Lang::_lang('GralTipoPersoneria') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_empresa->getGralTipoPersoneria()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gral_empresa gral_condicion_iva_id">
            <div class="label"><?php Lang::_lang('GralCondicionIva') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_empresa->getGralCondicionIva()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gral_empresa geo_localidad_id">
            <div class="label"><?php Lang::_lang('GeoLocalidad') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_empresa->getGeoLocalidad()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gral_empresa cuit">
            <div class="label"><?php Lang::_lang('CUIT') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_empresa->getCuit()) ?>
            </div>
        </div>
		
        <div class="par gral_empresa razon_social">
            <div class="label"><?php Lang::_lang('Razon Social') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_empresa->getRazonSocial()) ?>
            </div>
        </div>
		
        <div class="par gral_empresa codigo_postal">
            <div class="label"><?php Lang::_lang('Cod Postal') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_empresa->getCodigoPostal()) ?>
            </div>
        </div>
		
        <div class="par gral_empresa domicilio_legal">
            <div class="label"><?php Lang::_lang('Domicilio Legal') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_empresa->getDomicilioLegal()) ?>
            </div>
        </div>
		
        <div class="par gral_empresa telefono">
            <div class="label"><?php Lang::_lang('Telefono') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_empresa->getTelefono()) ?>
            </div>
        </div>
		
        <div class="par gral_empresa email">
            <div class="label"><?php Lang::_lang('Email') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_empresa->getEmail()) ?>
            </div>
        </div>
		
        <div class="par gral_empresa fecha_inicio_actividad">
            <div class="label"><?php Lang::_lang('Fecha Inicio Act') ?></div>
            <div class="dato">
                <?php Gral::_echo(Gral::getFechaToWeb($gral_empresa->getFechaInicioActividad())) ?>
            </div>
        </div>
		
        <div class="par gral_empresa codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_empresa->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par gral_empresa afip_crt">
            <div class="label"><?php Lang::_lang('AFIP CRT') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_empresa->getAfipCrt()) ?>
            </div>
        </div>
		
        <div class="par gral_empresa afip_key">
            <div class="label"><?php Lang::_lang('AFIP KEY') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_empresa->getAfipKey()) ?>
            </div>
        </div>
		
        <div class="par gral_empresa observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_empresa->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par gral_empresa orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_empresa->getOrden()) ?>
            </div>
        </div>
		
        <div class="par gral_empresa estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($gral_empresa->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

