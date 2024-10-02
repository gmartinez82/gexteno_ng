<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$eku_param_tipo_emision = EkuParamTipoEmision::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($eku_param_tipo_emision->getId()) ?>" modulo="eku_param_tipo_emision">

    <div class="titulo">
        <?php Lang::_lang('EkuParamTipoEmision') ?>: 
        <strong><?php Gral::_echo($eku_param_tipo_emision->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('EKU_PARAM_TIPO_EMISION_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('EkuParamTipoEmision') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

