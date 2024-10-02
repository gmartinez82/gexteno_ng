<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$afip_citi_compras_importaciones_id = Gral::getVars(2, 'id');
$afip_citi_compras_importaciones = AfipCitiComprasImportaciones::getOxId($afip_citi_compras_importaciones_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($afip_citi_compras_importaciones->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'AFIP_CITI_COMPRAS_IMPORTACIONES_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($afip_citi_compras_importaciones->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($afip_citi_compras_importaciones->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'AFIP_CITI_COMPRAS_IMPORTACIONES_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($afip_citi_compras_importaciones->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($afip_citi_compras_importaciones->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

