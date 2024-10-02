<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();


$id = Gral::getVars(2, 'id');
$clase = Gral::getVars(2, 'clase');
$gral_moneda_tipo_cambio = GralMonedaTipoCambio::getOxId($id);

?>
<div class='ficha'>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Descripcion') ?></div>
        <div class='dato'><?php Gral::_echo($gral_moneda_tipo_cambio->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Fecha') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaToWeb($gral_moneda_tipo_cambio->getFecha())) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('GralMoneda') ?></div>
        <div class='dato'><?php Gral::_echo($gral_moneda_tipo_cambio->getGralMoneda()->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Moneda Comparada') ?></div>
        <div class='dato'><?php Gral::_echo(($gral_moneda_tipo_cambio->getGralMonedaComparada() != 'null') ? GralMoneda::getOxId($gral_moneda_tipo_cambio->getGralMonedaComparada())->getDescripcion() : '') ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Tipo Cambio') ?></div>
        <div class='dato'><?php Gral::_echo($gral_moneda_tipo_cambio->getTipoCambio()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Coeficiente Ajuste') ?></div>
        <div class='dato'><?php Gral::_echo($gral_moneda_tipo_cambio->getCoeficienteAjuste()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Tipo Cambio Real') ?></div>
        <div class='dato'><?php Gral::_echo($gral_moneda_tipo_cambio->getTipoCambioReal()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Actual') ?></div>
        <div class='dato'><?php Gral::_echo(GralSiNo::getOxId($gral_moneda_tipo_cambio->getActual())->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('codigo') ?></div>
        <div class='dato'><?php Gral::_echo($gral_moneda_tipo_cambio->getCodigo()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Observaciones') ?></div>
        <div class='dato'><?php Gral::_echo($gral_moneda_tipo_cambio->getObservacion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('orden') ?></div>
        <div class='dato'><?php Gral::_echo($gral_moneda_tipo_cambio->getOrden()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('estado') ?></div>
        <div class='dato'><?php Gral::_echo($gral_moneda_tipo_cambio->getOrden()) ?></div>
    </div>
	
<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Creado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_moneda_tipo_cambio->getCreado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Creado Por') ?></div>
        <div class='dato'><?php Gral::_echo($gral_moneda_tipo_cambio->getCreadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Modificado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_moneda_tipo_cambio->getModificado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Modificado Por') ?></div>
        <div class='dato'><?php Gral::_echo($gral_moneda_tipo_cambio->getModificadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

</div>

