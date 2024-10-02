<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$eku_param_condicion_credito = EkuParamCondicionCredito::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($eku_param_condicion_credito->getId()) ?>" modulo="eku_param_condicion_credito">

    <div class="titulo">
        <?php Lang::_lang('EkuParamCondicionCredito') ?>: 
        <strong><?php Gral::_echo($eku_param_condicion_credito->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('EKU_PARAM_CONDICION_CREDITO_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('EkuParamCondicionCredito') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

