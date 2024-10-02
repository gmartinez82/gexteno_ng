<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$ml_condition = MlCondition::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($ml_condition->getId()) ?>" modulo="ml_condition">

    <div class="titulo">
        <?php Lang::_lang('MlCondition') ?>: 
        <strong><?php Gral::_echo($ml_condition->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('ML_CONDITION_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('MlCondition') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

