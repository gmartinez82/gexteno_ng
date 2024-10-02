<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$us_agrupado_id = Gral::getVars(2, 'id');
$us_agrupado = UsAgrupado::getOxId($us_agrupado_id);
?>
<div class="masinfo-datos">

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'US_AGRUPADO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($us_agrupado->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($us_agrupado->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

