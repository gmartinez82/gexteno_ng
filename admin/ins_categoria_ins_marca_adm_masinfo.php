<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$ins_categoria_ins_marca_id = Gral::getVars(2, 'id');
$ins_categoria_ins_marca = InsCategoriaInsMarca::getOxId($ins_categoria_ins_marca_id);
?>
<div class="masinfo-datos">

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'INS_CATEGORIA_INS_MARCA_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_categoria_ins_marca->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($ins_categoria_ins_marca->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
	</ul>
	
</div>

