<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$cli_cliente_ins_tipo_lista_precio_id = Gral::getVars(2, 'id');
$cli_cliente_ins_tipo_lista_precio = CliClienteInsTipoListaPrecio::getOxId($cli_cliente_ins_tipo_lista_precio_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($cli_cliente_ins_tipo_lista_precio->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'CLI_CLIENTE_INS_TIPO_LISTA_PRECIO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($cli_cliente_ins_tipo_lista_precio->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($cli_cliente_ins_tipo_lista_precio->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'CLI_CLIENTE_INS_TIPO_LISTA_PRECIO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($cli_cliente_ins_tipo_lista_precio->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($cli_cliente_ins_tipo_lista_precio->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

