<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$pln_jornada_us_usuario_id = Gral::getVars(2, 'id');
$pln_jornada_us_usuario = PlnJornadaUsUsuario::getOxId($pln_jornada_us_usuario_id);
?>
<div class="masinfo-datos">

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PLN_JORNADA_US_USUARIO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($pln_jornada_us_usuario->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($pln_jornada_us_usuario->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

