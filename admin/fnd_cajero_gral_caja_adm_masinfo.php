<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$fnd_cajero_gral_caja_id = Gral::getVars(2, 'id');
$fnd_cajero_gral_caja = FndCajeroGralCaja::getOxId($fnd_cajero_gral_caja_id);
?>
<div class="masinfo-datos">

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'FND_CAJERO_GRAL_CAJA_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($fnd_cajero_gral_caja->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($fnd_cajero_gral_caja->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

