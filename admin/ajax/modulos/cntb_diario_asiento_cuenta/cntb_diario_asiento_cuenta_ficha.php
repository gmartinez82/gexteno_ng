<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();


$id = Gral::getVars(2, 'id');
$clase = Gral::getVars(2, 'clase');
$cntb_diario_asiento_cuenta = CntbDiarioAsientoCuenta::getOxId($id);

?>
<div class='ficha'>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Descripcion') ?></div>
        <div class='dato'><?php Gral::_echo($cntb_diario_asiento_cuenta->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('CntbDiarioAsiento') ?></div>
        <div class='dato'><?php Gral::_echo($cntb_diario_asiento_cuenta->getCntbDiarioAsiento()->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('CntbTipoSaldo') ?></div>
        <div class='dato'><?php Gral::_echo($cntb_diario_asiento_cuenta->getCntbTipoSaldo()->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('CntbCuenta') ?></div>
        <div class='dato'><?php Gral::_echo($cntb_diario_asiento_cuenta->getCntbCuenta()->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Importe Debe') ?></div>
        <div class='dato'><?php Gral::_echo($cntb_diario_asiento_cuenta->getImporteDebe()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Importe Haber') ?></div>
        <div class='dato'><?php Gral::_echo($cntb_diario_asiento_cuenta->getImporteHaber()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Importe Saldo') ?></div>
        <div class='dato'><?php Gral::_echo($cntb_diario_asiento_cuenta->getImporteSaldo()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Codigo') ?></div>
        <div class='dato'><?php Gral::_echo($cntb_diario_asiento_cuenta->getCodigo()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Cod Comprobante') ?></div>
        <div class='dato'><?php Gral::_echo($cntb_diario_asiento_cuenta->getCodigoComprobante()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Observaciones') ?></div>
        <div class='dato'><?php Gral::_echo($cntb_diario_asiento_cuenta->getObservacion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('orden') ?></div>
        <div class='dato'><?php Gral::_echo($cntb_diario_asiento_cuenta->getOrden()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('estado') ?></div>
        <div class='dato'><?php Gral::_echo($cntb_diario_asiento_cuenta->getOrden()) ?></div>
    </div>
	
<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Creado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($cntb_diario_asiento_cuenta->getCreado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Creado Por') ?></div>
        <div class='dato'><?php Gral::_echo($cntb_diario_asiento_cuenta->getCreadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Modificado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($cntb_diario_asiento_cuenta->getModificado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Modificado Por') ?></div>
        <div class='dato'><?php Gral::_echo($cntb_diario_asiento_cuenta->getModificadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

</div>

