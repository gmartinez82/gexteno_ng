<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$per_persona = PerPersona::getOxId($id);
//Gral::prr($per_persona);
?>

<div class="tabs ficha-per_persona" identificador="<?php echo $per_persona->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par per_persona id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($per_persona->getId()) ?>
            </div>
        </div>

	
        <div class="par per_persona legajo">
            <div class="label"><?php Lang::_lang('LEG') ?></div>
            <div class="dato">
                <?php Gral::_echo($per_persona->getLegajo()) ?>
            </div>
        </div>
		
        <div class="par per_persona descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($per_persona->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par per_persona gral_empresa_id">
            <div class="label"><?php Lang::_lang('GralEmpresa') ?></div>
            <div class="dato">
                <?php Gral::_echo($per_persona->getGralEmpresa()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par per_persona gral_sucursal_id">
            <div class="label"><?php Lang::_lang('GralSucursal') ?></div>
            <div class="dato">
                <?php Gral::_echo($per_persona->getGralSucursal()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par per_persona gral_tipo_documento_id">
            <div class="label"><?php Lang::_lang('GralTipoDocumento') ?></div>
            <div class="dato">
                <?php Gral::_echo($per_persona->getGralTipoDocumento()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par per_persona documento">
            <div class="label"><?php Lang::_lang('Documento') ?></div>
            <div class="dato">
                <?php Gral::_echo($per_persona->getDocumento()) ?>
            </div>
        </div>
		
        <div class="par per_persona apellido">
            <div class="label"><?php Lang::_lang('apellido') ?></div>
            <div class="dato">
                <?php Gral::_echo($per_persona->getApellido()) ?>
            </div>
        </div>
		
        <div class="par per_persona nombre">
            <div class="label"><?php Lang::_lang('nombre') ?></div>
            <div class="dato">
                <?php Gral::_echo($per_persona->getNombre()) ?>
            </div>
        </div>
		
        <div class="par per_persona cuil">
            <div class="label"><?php Lang::_lang('Cuit-Cuil') ?></div>
            <div class="dato">
                <?php Gral::_echo($per_persona->getCuil()) ?>
            </div>
        </div>
		
        <div class="par per_persona nacimiento">
            <div class="label"><?php Lang::_lang('Nacimiento') ?></div>
            <div class="dato">
                <?php Gral::_echo(Gral::getFechaToWeb($per_persona->getNacimiento())) ?>
            </div>
        </div>
		
        <div class="par per_persona gral_sexo_id">
            <div class="label"><?php Lang::_lang('GralSexo') ?></div>
            <div class="dato">
                <?php Gral::_echo($per_persona->getGralSexo()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par per_persona geo_localidad_id">
            <div class="label"><?php Lang::_lang('GeoLocalidad') ?></div>
            <div class="dato">
                <?php Gral::_echo($per_persona->getGeoLocalidad()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par per_persona codigo_postal">
            <div class="label"><?php Lang::_lang('Codigo Postal') ?></div>
            <div class="dato">
                <?php Gral::_echo($per_persona->getCodigoPostal()) ?>
            </div>
        </div>
		
        <div class="par per_persona fecha_alta">
            <div class="label"><?php Lang::_lang('Fecha de Alta') ?></div>
            <div class="dato">
                <?php Gral::_echo(Gral::getFechaToWeb($per_persona->getFechaAlta())) ?>
            </div>
        </div>
		
        <div class="par per_persona fecha_baja">
            <div class="label"><?php Lang::_lang('Fecha de Baja') ?></div>
            <div class="dato">
                <?php Gral::_echo(Gral::getFechaToWeb($per_persona->getFechaBaja())) ?>
            </div>
        </div>
		
        <div class="par per_persona nacionalidad">
            <div class="label"><?php Lang::_lang('Nacionalidad') ?></div>
            <div class="dato">
                <?php Gral::_echo(($per_persona->getNacionalidad() != 'null') ? GeoPais::getOxId($per_persona->getNacionalidad())->getDescripcion() : '') ?>
            </div>
        </div>
		
        <div class="par per_persona codigo">
            <div class="label"><?php Lang::_lang('codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($per_persona->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par per_persona codigo_credencial">
            <div class="label"><?php Lang::_lang('Cod Cred') ?></div>
            <div class="dato">
                <?php Gral::_echo($per_persona->getCodigoCredencial()) ?>
            </div>
        </div>
		
        <div class="par per_persona hash">
            <div class="label"><?php Lang::_lang('Hash') ?></div>
            <div class="dato">
                <?php Gral::_echo($per_persona->getHash()) ?>
            </div>
        </div>
		
        <div class="par per_persona per_tipo_estado_id">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($per_persona->getPerTipoEstado()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par per_persona control_horario">
            <div class="label"><?php Lang::_lang('Ctrl Hor') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($per_persona->getControlHorario())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par per_persona observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($per_persona->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par per_persona orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($per_persona->getOrden()) ?>
            </div>
        </div>
		
        <div class="par per_persona estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($per_persona->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

