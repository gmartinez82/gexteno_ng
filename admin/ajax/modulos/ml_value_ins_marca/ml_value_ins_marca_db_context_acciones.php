<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$ml_value_ins_marca = MlValueInsMarca::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($ml_value_ins_marca->getId()) ?>" modulo="ml_value_ins_marca">

    <div class="titulo">
        <?php Lang::_lang('MlValueInsMarca') ?>: 
        <strong><?php Gral::_echo($ml_value_ins_marca->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('ML_VALUE_INS_MARCA_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('MlValueInsMarca') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

