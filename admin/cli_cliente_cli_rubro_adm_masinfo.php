<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$cli_cliente_cli_rubro_id = Gral::getVars(2, 'id');
$cli_cliente_cli_rubro = CliClienteCliRubro::getOxId($cli_cliente_cli_rubro_id);
?>
<div class="masinfo-datos">

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'CLI_CLIENTE_CLI_RUBRO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($cli_cliente_cli_rubro->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($cli_cliente_cli_rubro->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

