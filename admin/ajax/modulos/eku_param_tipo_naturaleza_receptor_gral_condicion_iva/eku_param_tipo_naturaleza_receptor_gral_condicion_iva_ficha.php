<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();


$id = Gral::getVars(2, 'id');
$clase = Gral::getVars(2, 'clase');
$eku_param_tipo_naturaleza_receptor_gral_condicion_iva = EkuParamTipoNaturalezaReceptorGralCondicionIva::getOxId($id);

?>
<div class='ficha'>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('EkuParamTipoNaturalezaReceptor') ?></div>
        <div class='dato'><?php Gral::_echo($eku_param_tipo_naturaleza_receptor_gral_condicion_iva->getEkuParamTipoNaturalezaReceptor()->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('GralCondicionIva') ?></div>
        <div class='dato'><?php Gral::_echo($eku_param_tipo_naturaleza_receptor_gral_condicion_iva->getGralCondicionIva()->getDescripcion()) ?></div>
    </div>
	
<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Creado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_param_tipo_naturaleza_receptor_gral_condicion_iva->getCreado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Creado Por') ?></div>
        <div class='dato'><?php Gral::_echo($eku_param_tipo_naturaleza_receptor_gral_condicion_iva->getCreadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

</div>

