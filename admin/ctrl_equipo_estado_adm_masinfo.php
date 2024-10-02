<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$ctrl_equipo_estado_id = Gral::getVars(2, 'id');
$ctrl_equipo_estado = CtrlEquipoEstado::getOxId($ctrl_equipo_estado_id);
?>
<div class="masinfo-datos">

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Inicial') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br(GralSiNo::getOxId($ctrl_equipo_estado->getInicial())->getDescripcion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'CTRL_EQUIPO_ESTADO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($ctrl_equipo_estado->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($ctrl_equipo_estado->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'CTRL_EQUIPO_ESTADO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($ctrl_equipo_estado->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($ctrl_equipo_estado->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

