<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$ctrl_equipo_ctrl_sector_id = Gral::getVars(2, 'id');
$ctrl_equipo_ctrl_sector = CtrlEquipoCtrlSector::getOxId($ctrl_equipo_ctrl_sector_id);
?>
<div class="masinfo-datos">

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'CTRL_EQUIPO_CTRL_SECTOR_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($ctrl_equipo_ctrl_sector->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($ctrl_equipo_ctrl_sector->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

