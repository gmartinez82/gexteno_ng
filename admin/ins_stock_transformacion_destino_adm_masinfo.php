<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$ins_stock_transformacion_destino_id = Gral::getVars(2, 'id');
$ins_stock_transformacion_destino = InsStockTransformacionDestino::getOxId($ins_stock_transformacion_destino_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($ins_stock_transformacion_destino->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'INS_STOCK_TRANSFORMACION_DESTINO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_stock_transformacion_destino->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($ins_stock_transformacion_destino->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'INS_STOCK_TRANSFORMACION_DESTINO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_stock_transformacion_destino->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($ins_stock_transformacion_destino->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

