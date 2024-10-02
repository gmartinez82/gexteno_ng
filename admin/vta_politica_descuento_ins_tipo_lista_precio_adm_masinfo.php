<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$vta_politica_descuento_ins_tipo_lista_precio_id = Gral::getVars(2, 'id');
$vta_politica_descuento_ins_tipo_lista_precio = VtaPoliticaDescuentoInsTipoListaPrecio::getOxId($vta_politica_descuento_ins_tipo_lista_precio_id);
?>
<div class="masinfo-datos">

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'VTA_POLITICA_DESCUENTO_INS_TIPO_LISTA_PRECIO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_politica_descuento_ins_tipo_lista_precio->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($vta_politica_descuento_ins_tipo_lista_precio->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

