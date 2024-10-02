<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$cli_subcategoria_vta_descuento_financiero_id = Gral::getVars(2, 'id');
$cli_subcategoria_vta_descuento_financiero = CliSubcategoriaVtaDescuentoFinanciero::getOxId($cli_subcategoria_vta_descuento_financiero_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($cli_subcategoria_vta_descuento_financiero->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'CLI_SUBCATEGORIA_VTA_DESCUENTO_FINANCIERO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($cli_subcategoria_vta_descuento_financiero->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($cli_subcategoria_vta_descuento_financiero->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'CLI_SUBCATEGORIA_VTA_DESCUENTO_FINANCIERO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($cli_subcategoria_vta_descuento_financiero->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($cli_subcategoria_vta_descuento_financiero->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

