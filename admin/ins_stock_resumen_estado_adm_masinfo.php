<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$ins_stock_resumen_estado_id = Gral::getVars(2, 'id');
$ins_stock_resumen_estado = InsStockResumenEstado::getOxId($ins_stock_resumen_estado_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($ins_stock_resumen_estado->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'INS_STOCK_RESUMEN_ESTADO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_stock_resumen_estado->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($ins_stock_resumen_estado->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'INS_STOCK_RESUMEN_ESTADO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_stock_resumen_estado->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($ins_stock_resumen_estado->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

