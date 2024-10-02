<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$us_agrupador_id = Gral::getVars(2, 'id');
$us_agrupador = UsAgrupador::getOxId($us_agrupador_id);
?>
<div class="masinfo-datos">

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'US_AGRUPADOR_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($us_agrupador->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($us_agrupador->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

