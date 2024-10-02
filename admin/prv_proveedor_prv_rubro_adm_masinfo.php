<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$prv_proveedor_prv_rubro_id = Gral::getVars(2, 'id');
$prv_proveedor_prv_rubro = PrvProveedorPrvRubro::getOxId($prv_proveedor_prv_rubro_id);
?>
<div class="masinfo-datos">

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PRV_PROVEEDOR_PRV_RUBRO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($prv_proveedor_prv_rubro->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($prv_proveedor_prv_rubro->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

