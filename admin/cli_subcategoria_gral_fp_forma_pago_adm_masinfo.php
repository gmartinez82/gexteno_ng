<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$cli_subcategoria_gral_fp_forma_pago_id = Gral::getVars(2, 'id');
$cli_subcategoria_gral_fp_forma_pago = CliSubcategoriaGralFpFormaPago::getOxId($cli_subcategoria_gral_fp_forma_pago_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($cli_subcategoria_gral_fp_forma_pago->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'CLI_SUBCATEGORIA_GRAL_FP_FORMA_PAGO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($cli_subcategoria_gral_fp_forma_pago->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($cli_subcategoria_gral_fp_forma_pago->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'CLI_SUBCATEGORIA_GRAL_FP_FORMA_PAGO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($cli_subcategoria_gral_fp_forma_pago->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($cli_subcategoria_gral_fp_forma_pago->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

