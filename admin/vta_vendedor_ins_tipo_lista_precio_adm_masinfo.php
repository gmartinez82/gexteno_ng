<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$vta_vendedor_ins_tipo_lista_precio_id = Gral::getVars(2, 'id');
$vta_vendedor_ins_tipo_lista_precio = VtaVendedorInsTipoListaPrecio::getOxId($vta_vendedor_ins_tipo_lista_precio_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($vta_vendedor_ins_tipo_lista_precio->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'VTA_VENDEDOR_INS_TIPO_LISTA_PRECIO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_vendedor_ins_tipo_lista_precio->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($vta_vendedor_ins_tipo_lista_precio->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'VTA_VENDEDOR_INS_TIPO_LISTA_PRECIO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_vendedor_ins_tipo_lista_precio->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($vta_vendedor_ins_tipo_lista_precio->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

