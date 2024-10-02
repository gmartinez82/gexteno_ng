<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$ins_insumo_instancia_id = Gral::getVars(2, 'id');
$ins_insumo_instancia = InsInsumoInstancia::getOxId($ins_insumo_instancia_id);
?>
<div class="masinfo-datos">

	<div class="par inline">
            <div class="label"><?php Lang::_lang('InsInsumo') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($ins_insumo_instancia->getInsInsumo()->getDescripcion())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($ins_insumo_instancia->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'INS_INSUMO_INSTANCIA_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_insumo_instancia->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($ins_insumo_instancia->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'INS_INSUMO_INSTANCIA_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_insumo_instancia->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($ins_insumo_instancia->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

