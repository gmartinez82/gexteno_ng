<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$gral_centro_costo = GralCentroCosto::getOxId($id);
//Gral::prr($gral_centro_costo);
?>

<div class="tabs ficha-gral_centro_costo" identificador="<?php echo $gral_centro_costo->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par gral_centro_costo id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_centro_costo->getId()) ?>
            </div>
        </div>

	
        <div class="par gral_centro_costo descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_centro_costo->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gral_centro_costo descripcion_corta">
            <div class="label"><?php Lang::_lang('Descripcion Corta') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_centro_costo->getDescripcionCorta()) ?>
            </div>
        </div>
		
        <div class="par gral_centro_costo gral_empresa_id">
            <div class="label"><?php Lang::_lang('GralEmpresa') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_centro_costo->getGralEmpresa()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gral_centro_costo domicilio">
            <div class="label"><?php Lang::_lang('Domicilio') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_centro_costo->getDomicilio()) ?>
            </div>
        </div>
		
        <div class="par gral_centro_costo telefono">
            <div class="label"><?php Lang::_lang('Telefono') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_centro_costo->getTelefono()) ?>
            </div>
        </div>
		
        <div class="par gral_centro_costo email">
            <div class="label"><?php Lang::_lang('Email') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_centro_costo->getEmail()) ?>
            </div>
        </div>
		
        <div class="par gral_centro_costo codigo_postal">
            <div class="label"><?php Lang::_lang('Codigo Postal') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_centro_costo->getCodigoPostal()) ?>
            </div>
        </div>
		
        <div class="par gral_centro_costo geo_localidad_id">
            <div class="label"><?php Lang::_lang('GeoLocalidad') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_centro_costo->getGeoLocalidad()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gral_centro_costo codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_centro_costo->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par gral_centro_costo color">
            <div class="label"><?php Lang::_lang('Color') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_centro_costo->getColor()) ?>
            </div>
        </div>
		
        <div class="par gral_centro_costo observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_centro_costo->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par gral_centro_costo orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_centro_costo->getOrden()) ?>
            </div>
        </div>
		
        <div class="par gral_centro_costo estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($gral_centro_costo->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

