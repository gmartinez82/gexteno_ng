<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$eku_param_unidad_medida_ins_unidad_medida_id = Gral::getVars(2, 'id');
$eku_param_unidad_medida_ins_unidad_medida = EkuParamUnidadMedidaInsUnidadMedida::getOxId($eku_param_unidad_medida_ins_unidad_medida_id);
?>
<div class="masinfo-datos">

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'EKU_PARAM_UNIDAD_MEDIDA_INS_UNIDAD_MEDIDA_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_param_unidad_medida_ins_unidad_medida->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($eku_param_unidad_medida_ins_unidad_medida->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

