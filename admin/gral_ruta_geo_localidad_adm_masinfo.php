<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$gral_ruta_geo_localidad_id = Gral::getVars(2, 'id');
$gral_ruta_geo_localidad = GralRutaGeoLocalidad::getOxId($gral_ruta_geo_localidad_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($gral_ruta_geo_localidad->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'GRAL_RUTA_GEO_LOCALIDAD_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_ruta_geo_localidad->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($gral_ruta_geo_localidad->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'GRAL_RUTA_GEO_LOCALIDAD_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_ruta_geo_localidad->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($gral_ruta_geo_localidad->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

