<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$ins_insumo_veh_modelo_id = Gral::getVars(2, 'id');
$ins_insumo_veh_modelo = InsInsumoVehModelo::getOxId($ins_insumo_veh_modelo_id);
?>
<div class="masinfo-datos">

	<div class="par inline">
            <div class="label"><?php Lang::_lang('InsInsumo') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($ins_insumo_veh_modelo->getInsInsumo()->getDescripcion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'INS_INSUMO_VEH_MODELO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_insumo_veh_modelo->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($ins_insumo_veh_modelo->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'INS_INSUMO_VEH_MODELO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_insumo_veh_modelo->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($ins_insumo_veh_modelo->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

