<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$eku_param_transporte_responsable_flete = EkuParamTransporteResponsableFlete::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($eku_param_transporte_responsable_flete->getId()) ?>" modulo="eku_param_transporte_responsable_flete">

    <div class="titulo">
        <?php Lang::_lang('EkuParamTransporteResponsableFlete') ?>: 
        <strong><?php Gral::_echo($eku_param_transporte_responsable_flete->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('EKU_PARAM_TRANSPORTE_RESPONSABLE_FLETE_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('EkuParamTransporteResponsableFlete') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

