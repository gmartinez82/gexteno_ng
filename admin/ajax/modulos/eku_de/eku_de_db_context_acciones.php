<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$eku_de = EkuDe::getOxId($id);

$eku_de_ope_tipo_estado = $eku_de->getEkuDeOpeTipoEstado();

?>
<div class="datos" identificador="<?php Gral::_echo($eku_de->getId()) ?>" modulo="eku_de">

    <div class="titulo">
        <?php Lang::_lang('EkuDe') ?>: 
        <strong><?php Gral::_echo($eku_de->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('EKU_DE_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('EkuDe') ?>
        </div>
    <?php endif; ?>

    <?php if (UsCredencial::getEsAcreditado('EKU_DE_ADM_ACCION_CONFIG_CAMBIAR_EKU_DE_OPE_ESTADO')): ?>
        <div class="uno cambiar-estado" modulo_estado="eku_de_ope_estado">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Cambiar') ?> <?php Lang::_lang('EkuDeOpeEstado') ?>
        </div>
    <?php endif; ?>
    
    <?php 
    // -------------------------------------------------------------------------
    // acciones personalizadas
    // -------------------------------------------------------------------------    
    if(file_exists("eku_de_db_context_acciones_custom.php")){
        include "eku_de_db_context_acciones_custom.php";
    } 
    ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

