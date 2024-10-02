<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$pde_oc_reclamo_motivo = PdeOcReclamoMotivo::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($pde_oc_reclamo_motivo->getId()) ?>" modulo="pde_oc_reclamo_motivo">

    <div class="titulo">
        <?php Lang::_lang('PdeOcReclamoMotivo') ?>: 
        <strong><?php Gral::_echo($pde_oc_reclamo_motivo->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('PDE_OC_RECLAMO_MOTIVO_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('PdeOcReclamoMotivo') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

