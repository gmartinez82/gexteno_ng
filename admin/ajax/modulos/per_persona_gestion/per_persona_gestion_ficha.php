<?php
include '_autoload.php';
$user = UsUsuario::autenticado();


$id = Gral::getVars(2, 'id');
$clase = Gral::getVars(2, 'clase');
$per_persona = PerPersona::getOxId($id);

?>
<div class='ficha'>
		
	<div class='par impar'>
		<div class='label'><?php Lang::_lang('LEG') ?></div>
		<div class='dato'><?php Gral::_echo($per_persona->getLegajo()) ?></div>
	</div>
		
	<div class='par '>
		<div class='label'><?php Lang::_lang('Descripcion') ?></div>
		<div class='dato'><?php Gral::_echo($per_persona->getDescripcion()) ?></div>
	</div>
		
	<div class='par impar'>
		<div class='label'><?php Lang::_lang('GralEmpresa') ?></div>
		<div class='dato'><?php Gral::_echo($per_persona->getGralEmpresa()->getDescripcion()) ?></div>
	</div>
		
	<div class='par '>
		<div class='label'><?php Lang::_lang('CoSector') ?></div>
		<div class='dato'><?php Gral::_echo($per_persona->getCoSector()->getDescripcion()) ?></div>
	</div>
		
	<div class='par impar'>
		<div class='label'><?php Lang::_lang('GralArea') ?></div>
		<div class='dato'><?php Gral::_echo($per_persona->getGralArea()->getDescripcion()) ?></div>
	</div>
		
	<div class='par '>
		<div class='label'><?php Lang::_lang('GralSector') ?></div>
		<div class='dato'><?php Gral::_echo($per_persona->getGralSector()->getDescripcion()) ?></div>
	</div>
		
	<div class='par impar'>
		<div class='label'><?php Lang::_lang('GralPuesto') ?></div>
		<div class='dato'><?php Gral::_echo($per_persona->getGralPuesto()->getDescripcion()) ?></div>
	</div>
		
	<div class='par '>
		<div class='label'><?php Lang::_lang('gral_empresa_sector_id') ?></div>
		<div class='dato'><?php Gral::_echo($per_persona->getGralEmpresaSector()->getDescripcion()) ?></div>
	</div>
		
	<div class='par impar'>
		<div class='label'><?php Lang::_lang('GralTipoDocumento') ?></div>
		<div class='dato'><?php Gral::_echo($per_persona->getGralTipoDocumento()->getDescripcion()) ?></div>
	</div>
		
	<div class='par '>
		<div class='label'><?php Lang::_lang('Documento') ?></div>
		<div class='dato'><?php Gral::_echo($per_persona->getDocumento()) ?></div>
	</div>
		
	<div class='par impar'>
		<div class='label'><?php Lang::_lang('apellido') ?></div>
		<div class='dato'><?php Gral::_echo($per_persona->getApellido()) ?></div>
	</div>
		
	<div class='par '>
		<div class='label'><?php Lang::_lang('nombre') ?></div>
		<div class='dato'><?php Gral::_echo($per_persona->getNombre()) ?></div>
	</div>
		
	<div class='par impar'>
		<div class='label'><?php Lang::_lang('Cuit-Cuil') ?></div>
		<div class='dato'><?php Gral::_echo($per_persona->getCuil()) ?></div>
	</div>
		
	<div class='par '>
		<div class='label'><?php Lang::_lang('Nacimiento') ?></div>
		<div class='dato'><?php Gral::_echo($per_persona->getNacimiento()) ?></div>
	</div>
		
	<div class='par impar'>
		<div class='label'><?php Lang::_lang('GralSexo') ?></div>
		<div class='dato'><?php Gral::_echo($per_persona->getGralSexo()->getDescripcion()) ?></div>
	</div>
		
	<div class='par '>
		<div class='label'><?php Lang::_lang('GeoLocalidad') ?></div>
		<div class='dato'><?php Gral::_echo($per_persona->getGeoLocalidad()->getDescripcion()) ?></div>
	</div>
		
	<div class='par impar'>
		<div class='label'><?php Lang::_lang('Codigo Postal') ?></div>
		<div class='dato'><?php Gral::_echo($per_persona->getCodigoPostal()) ?></div>
	</div>
		
	<div class='par '>
		<div class='label'><?php Lang::_lang('Fecha de Alta') ?></div>
		<div class='dato'><?php Gral::_echo($per_persona->getFechaAlta()) ?></div>
	</div>
		
	<div class='par impar'>
		<div class='label'><?php Lang::_lang('Fecha de Baja') ?></div>
		<div class='dato'><?php Gral::_echo($per_persona->getFechaBaja()) ?></div>
	</div>
		
	<div class='par '>
		<div class='label'><?php Lang::_lang('Nacionalidad') ?></div>
		<div class='dato'><?php Gral::_echo(($per_persona->getNacionalidad() != 'null') ? GeoPais::getOxId($per_persona->getNacionalidad())->getDescripcion() : '') ?></div>
	</div>
		
	<div class='par impar'>
		<div class='label'><?php Lang::_lang('codigo') ?></div>
		<div class='dato'><?php Gral::_echo($per_persona->getCodigo()) ?></div>
	</div>
		
	<div class='par '>
		<div class='label'><?php Lang::_lang('Cod Cred') ?></div>
		<div class='dato'><?php Gral::_echo($per_persona->getCodigoCredencial()) ?></div>
	</div>
		
	<div class='par impar'>
		<div class='label'><?php Lang::_lang('Hash') ?></div>
		<div class='dato'><?php Gral::_echo($per_persona->getHash()) ?></div>
	</div>
		
	<div class='par '>
		<div class='label'><?php Lang::_lang('Estado') ?></div>
		<div class='dato'><?php Gral::_echo($per_persona->getPerTipoEstado()->getDescripcion()) ?></div>
	</div>
		
	<div class='par impar'>
		<div class='label'><?php Lang::_lang('Sincro Estado') ?></div>
		<div class='dato'><?php Gral::_echo($per_persona->getSincroEstado()) ?></div>
	</div>
		
	<div class='par '>
		<div class='label'><?php Lang::_lang('Sincro Fecha') ?></div>
		<div class='dato'><?php Gral::_echo($per_persona->getSincroFecha()) ?></div>
	</div>
		
	<div class='par impar'>
		<div class='label'><?php Lang::_lang('Sincro Codigo') ?></div>
		<div class='dato'><?php Gral::_echo($per_persona->getSincroCodigo()) ?></div>
	</div>
		
	<div class='par '>
		<div class='label'><?php Lang::_lang('SncrProceso') ?></div>
		<div class='dato'><?php Gral::_echo($per_persona->getSincroCodigo()) ?></div>
	</div>
		
	<div class='par impar'>
		<div class='label'><?php Lang::_lang('Observaciones') ?></div>
		<div class='dato'><?php Gral::_echo($per_persona->getObservacion()) ?></div>
	</div>
		
	<div class='par '>
		<div class='label'><?php Lang::_lang('orden') ?></div>
		<div class='dato'><?php Gral::_echo($per_persona->getOrden()) ?></div>
	</div>
		
	<div class='par impar'>
		<div class='label'><?php Lang::_lang('estado') ?></div>
		<div class='dato'><?php Gral::_echo(GralSiNo::getOxId($per_persona->getEstado())->getDescripcion()) ?></div>
	</div>
	
<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
	<div class='par '>
		<div class='label'><?php Lang::_lang('Creado') ?></div>
		<div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($per_persona->getCreado())) ?></div>
	</div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
	<div class='par impar'>
		<div class='label'><?php Lang::_lang('Creado Por') ?></div>
		<div class='dato'><?php Gral::_echo($per_persona->getCreadoPorDescripcion()) ?></div>
	</div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
	<div class='par '>
		<div class='label'><?php Lang::_lang('Modificado') ?></div>
		<div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($per_persona->getModificado())) ?></div>
	</div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
	<div class='par impar'>
		<div class='label'><?php Lang::_lang('Modificado Por') ?></div>
		<div class='dato'><?php Gral::_echo($per_persona->getModificadoPorDescripcion()) ?></div>
	</div>
<?php } ?>

</div>

