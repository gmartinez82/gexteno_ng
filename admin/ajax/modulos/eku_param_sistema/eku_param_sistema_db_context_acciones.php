<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$eku_param_sistema = EkuParamSistema::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($eku_param_sistema->getId()) ?>" modulo="eku_param_sistema">

    <div class="titulo">
        <?php Lang::_lang('EkuParamSistema') ?>: 
        <strong><?php Gral::_echo($eku_param_sistema->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('EKU_PARAM_SISTEMA_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('EkuParamSistema') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

