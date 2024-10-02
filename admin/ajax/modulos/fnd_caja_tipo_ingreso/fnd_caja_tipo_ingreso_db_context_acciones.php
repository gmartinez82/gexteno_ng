<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$fnd_caja_tipo_ingreso = FndCajaTipoIngreso::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($fnd_caja_tipo_ingreso->getId()) ?>" modulo="fnd_caja_tipo_ingreso">

    <div class="titulo">
        <?php Lang::_lang('FndCajaTipoIngreso') ?>: 
        <strong><?php Gral::_echo($fnd_caja_tipo_ingreso->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('FND_CAJA_TIPO_INGRESO_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('FndCajaTipoIngreso') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

