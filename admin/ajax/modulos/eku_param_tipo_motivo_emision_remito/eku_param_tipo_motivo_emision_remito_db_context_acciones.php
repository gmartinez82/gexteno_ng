<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$eku_param_tipo_motivo_emision_remito = EkuParamTipoMotivoEmisionRemito::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($eku_param_tipo_motivo_emision_remito->getId()) ?>" modulo="eku_param_tipo_motivo_emision_remito">

    <div class="titulo">
        <?php Lang::_lang('EkuParamTipoMotivoEmisionRemito') ?>: 
        <strong><?php Gral::_echo($eku_param_tipo_motivo_emision_remito->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('EKU_PARAM_TIPO_MOTIVO_EMISION_REMITO_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('EkuParamTipoMotivoEmisionRemito') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

