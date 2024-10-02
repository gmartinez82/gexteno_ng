<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$eku_de_ope_tipo_estado = EkuDeOpeTipoEstado::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($eku_de_ope_tipo_estado->getId()) ?>" modulo="eku_de_ope_tipo_estado">

    <div class="titulo">
        <?php Lang::_lang('EkuDeOpeTipoEstado') ?>: 
        <strong><?php Gral::_echo($eku_de_ope_tipo_estado->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('EKU_DE_OPE_TIPO_ESTADO_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('EkuDeOpeTipoEstado') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

