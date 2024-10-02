<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$ins_insumo_ins_etiqueta_id = Gral::getVars(2, 'id');
$ins_insumo_ins_etiqueta = InsInsumoInsEtiqueta::getOxId($ins_insumo_ins_etiqueta_id);
?>
<div class="masinfo-datos">

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'INS_INSUMO_INS_ETIQUETA_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_insumo_ins_etiqueta->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($ins_insumo_ins_etiqueta->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

