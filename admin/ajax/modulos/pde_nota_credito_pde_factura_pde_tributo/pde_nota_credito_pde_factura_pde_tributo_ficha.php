<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();


$id = Gral::getVars(2, 'id');
$clase = Gral::getVars(2, 'clase');
$pde_nota_credito_pde_factura_pde_tributo = PdeNotaCreditoPdeFacturaPdeTributo::getOxId($id);

?>
<div class='ficha'>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Descripcion') ?></div>
        <div class='dato'><?php Gral::_echo($pde_nota_credito_pde_factura_pde_tributo->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('PdeNotaCredito') ?></div>
        <div class='dato'><?php Gral::_echo($pde_nota_credito_pde_factura_pde_tributo->getPdeNotaCredito()->getDescripcion()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('PdeFacturaPdeTributo') ?></div>
        <div class='dato'><?php Gral::_echo($pde_nota_credito_pde_factura_pde_tributo->getPdeFacturaPdeTributo()->getDescripcion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Imp Imponible') ?></div>
        <div class='dato'><?php Gral::_echo($pde_nota_credito_pde_factura_pde_tributo->getImporteImponible()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Imp Tributo') ?></div>
        <div class='dato'><?php Gral::_echo($pde_nota_credito_pde_factura_pde_tributo->getImporteTributo()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Alicuota Porcentual') ?></div>
        <div class='dato'><?php Gral::_echo($pde_nota_credito_pde_factura_pde_tributo->getAlicuotaPorcentual()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Alicuota Decimal') ?></div>
        <div class='dato'><?php Gral::_echo($pde_nota_credito_pde_factura_pde_tributo->getAlicuotaDecimal()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('Codigo') ?></div>
        <div class='dato'><?php Gral::_echo($pde_nota_credito_pde_factura_pde_tributo->getCodigo()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Observaciones') ?></div>
        <div class='dato'><?php Gral::_echo($pde_nota_credito_pde_factura_pde_tributo->getObservacion()) ?></div>
    </div>
		
    <div class='par '>
        <div class='label'><?php Lang::_lang('orden') ?></div>
        <div class='dato'><?php Gral::_echo($pde_nota_credito_pde_factura_pde_tributo->getOrden()) ?></div>
    </div>
		
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Estado') ?></div>
        <div class='dato'><?php Gral::_echo(GralSiNo::getOxId($pde_nota_credito_pde_factura_pde_tributo->getEstado())->getDescripcion()) ?></div>
    </div>
	
<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Creado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_nota_credito_pde_factura_pde_tributo->getCreado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Creado Por') ?></div>
        <div class='dato'><?php Gral::_echo($pde_nota_credito_pde_factura_pde_tributo->getCreadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par '>
        <div class='label'><?php Lang::_lang('Modificado') ?></div>
        <div class='dato'><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_nota_credito_pde_factura_pde_tributo->getModificado())) ?></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR')){ ?>
    <div class='par impar'>
        <div class='label'><?php Lang::_lang('Modificado Por') ?></div>
        <div class='dato'><?php Gral::_echo($pde_nota_credito_pde_factura_pde_tributo->getModificadoPorDescripcion()) ?></div>
    </div>
<?php } ?>

</div>

