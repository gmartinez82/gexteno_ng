<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();


$id = Gral::getVars(2, 'id');
$clase = Gral::getVars(2, 'clase');
$eku_param_tipo_afectacion_tributaria_gral_tipo_iva = EkuParamTipoAfectacionTributariaGralTipoIva::getOxId($id);

?>
<div class='ficha'>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('EkuParamTipoAfectacionTributaria') ?></div>
        <div class='dato'><?php Gral::_echo($eku_param_tipo_afectacion_tributaria_gral_tipo_iva->getEkuParamTipoAfectacionTributaria()->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('GralTipoIva') ?></div>
        <div class='dato'><?php Gral::_echo($eku_param_tipo_afectacion_tributaria_gral_tipo_iva->getGralTipoIva()->getDescripcion()) ?></div>
    </div>
	
<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Creado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_param_tipo_afectacion_tributaria_gral_tipo_iva->getCreado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Creado Por') ?></div>
        <div class='dato'><?php Gral::_echo($eku_param_tipo_afectacion_tributaria_gral_tipo_iva->getCreadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

</div>

