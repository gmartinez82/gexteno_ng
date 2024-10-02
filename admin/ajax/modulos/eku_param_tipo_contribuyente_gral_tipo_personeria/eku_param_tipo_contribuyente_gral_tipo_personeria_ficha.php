<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();


$id = Gral::getVars(2, 'id');
$clase = Gral::getVars(2, 'clase');
$eku_param_tipo_contribuyente_gral_tipo_personeria = EkuParamTipoContribuyenteGralTipoPersoneria::getOxId($id);

?>
<div class='ficha'>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('EkuParamTipoContribuyente') ?></div>
        <div class='dato'><?php Gral::_echo($eku_param_tipo_contribuyente_gral_tipo_personeria->getEkuParamTipoContribuyente()->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('GralTipoPersoneria') ?></div>
        <div class='dato'><?php Gral::_echo($eku_param_tipo_contribuyente_gral_tipo_personeria->getGralTipoPersoneria()->getDescripcion()) ?></div>
    </div>
	
<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Creado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_param_tipo_contribuyente_gral_tipo_personeria->getCreado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Creado Por') ?></div>
        <div class='dato'><?php Gral::_echo($eku_param_tipo_contribuyente_gral_tipo_personeria->getCreadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

</div>

