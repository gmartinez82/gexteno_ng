<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$us_acreditado_id = Gral::getVars(2, 'id');
$us_acreditado = UsAcreditado::getOxId($us_acreditado_id);
?>
<div class="masinfo-datos">

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'US_ACREDITADO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($us_acreditado->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($us_acreditado->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

