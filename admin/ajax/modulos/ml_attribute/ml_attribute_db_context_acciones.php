<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$ml_attribute = MlAttribute::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($ml_attribute->getId()) ?>" modulo="ml_attribute">

    <div class="titulo">
        <?php Lang::_lang('MlAttribute') ?>: 
        <strong><?php Gral::_echo($ml_attribute->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('ML_ATTRIBUTE_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('MlAttribute') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

