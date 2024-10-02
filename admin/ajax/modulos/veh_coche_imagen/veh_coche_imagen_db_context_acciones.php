<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$veh_coche_imagen = VehCocheImagen::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($veh_coche_imagen->getId()) ?>" modulo="veh_coche_imagen">

    <div class="titulo">
        <?php Lang::_lang('VehCocheImagen') ?>: 
        <strong><?php Gral::_echo($veh_coche_imagen->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('VEH_COCHE_IMAGEN_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('VehCocheImagen') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

