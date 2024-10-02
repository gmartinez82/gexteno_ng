<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$gral_novedad_motivo_extendido = GralNovedadMotivoExtendido::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($gral_novedad_motivo_extendido->getId()) ?>" modulo="gral_novedad_motivo_extendido">

    <div class="titulo">
        <?php Lang::_lang('GralNovedadMotivoExtendido') ?>: 
        <strong><?php Gral::_echo($gral_novedad_motivo_extendido->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('GRAL_NOVEDAD_MOTIVO_EXTENDIDO_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('GralNovedadMotivoExtendido') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

