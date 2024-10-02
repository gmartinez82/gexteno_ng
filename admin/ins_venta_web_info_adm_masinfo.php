<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$ins_venta_web_info_id = Gral::getVars(2, 'id');
$ins_venta_web_info = InsVentaWebInfo::getOxId($ins_venta_web_info_id);
?>
<div class="masinfo-datos">

	<div class="par inline">
            <div class="label"><?php Lang::_lang('InsInsumo') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($ins_venta_web_info->getInsInsumo()->getDescripcion())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Desc Breve') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($ins_venta_web_info->getDescripcionBreve())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Desc Extendida') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($ins_venta_web_info->getDescripcionExt())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($ins_venta_web_info->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'INS_VENTA_WEB_INFO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_venta_web_info->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($ins_venta_web_info->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'INS_VENTA_WEB_INFO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_venta_web_info->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($ins_venta_web_info->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

