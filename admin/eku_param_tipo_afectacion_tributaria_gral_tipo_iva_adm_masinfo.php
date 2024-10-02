<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$eku_param_tipo_afectacion_tributaria_gral_tipo_iva_id = Gral::getVars(2, 'id');
$eku_param_tipo_afectacion_tributaria_gral_tipo_iva = EkuParamTipoAfectacionTributariaGralTipoIva::getOxId($eku_param_tipo_afectacion_tributaria_gral_tipo_iva_id);
?>
<div class="masinfo-datos">

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'EKU_PARAM_TIPO_AFECTACION_TRIBUTARIA_GRAL_TIPO_IVA_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_param_tipo_afectacion_tributaria_gral_tipo_iva->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($eku_param_tipo_afectacion_tributaria_gral_tipo_iva->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

