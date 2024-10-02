<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$pde_oc_reclamo_envio_email = PdeOcReclamoEnvioEmail::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($pde_oc_reclamo_envio_email->getId()) ?>" modulo="pde_oc_reclamo_envio_email">

    <div class="titulo">
        <?php Lang::_lang('PdeOcReclamoEnvioEmail') ?>: 
        <strong><?php Gral::_echo($pde_oc_reclamo_envio_email->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('PDE_OC_RECLAMO_ENVIO_EMAIL_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('PdeOcReclamoEnvioEmail') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

