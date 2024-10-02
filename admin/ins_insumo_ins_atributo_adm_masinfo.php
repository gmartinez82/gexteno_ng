<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$ins_insumo_ins_atributo_id = Gral::getVars(2, 'id');
$ins_insumo_ins_atributo = InsInsumoInsAtributo::getOxId($ins_insumo_ins_atributo_id);
?>
<div class="masinfo-datos">

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'INS_INSUMO_INS_ATRIBUTO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_insumo_ins_atributo->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($ins_insumo_ins_atributo->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'INS_INSUMO_INS_ATRIBUTO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_insumo_ins_atributo->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($ins_insumo_ins_atributo->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

