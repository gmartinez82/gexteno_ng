<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$ins_insumo_vinculado_id = Gral::getVars(2, 'id');
$ins_insumo_vinculado = InsInsumoVinculado::getOxId($ins_insumo_vinculado_id);
?>
<div class="masinfo-datos">

	<div class="par inline">
            <div class="label"><?php Lang::_lang('InsInsumo') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($ins_insumo_vinculado->getInsInsumo()->getDescripcion())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('InsInsumoVinculado') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br(($ins_insumo_vinculado->getInsInsumoVinculado() != 'null') ? InsInsumo::getOxId($ins_insumo_vinculado->getInsInsumoVinculado())->getDescripcion() : '')) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'INS_INSUMO_VINCULADO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_insumo_vinculado->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($ins_insumo_vinculado->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'INS_INSUMO_VINCULADO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_insumo_vinculado->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($ins_insumo_vinculado->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

