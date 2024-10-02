<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$ml_attribute_type = MlAttributeType::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($ml_attribute_type->getId()) ?>" modulo="ml_attribute_type">

    <div class="titulo">
        <?php Lang::_lang('MlAttributeType') ?>: 
        <strong><?php Gral::_echo($ml_attribute_type->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('ML_ATTRIBUTE_TYPE_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('MlAttributeType') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

