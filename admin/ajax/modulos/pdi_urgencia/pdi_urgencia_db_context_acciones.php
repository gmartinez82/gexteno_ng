<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$pdi_urgencia = PdiUrgencia::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($pdi_urgencia->getId()) ?>" modulo="pdi_urgencia">

    <div class="titulo">
        <?php Lang::_lang('PdiUrgencia') ?>: 
        <strong><?php Gral::_echo($pdi_urgencia->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('PDI_URGENCIA_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('PdiUrgencia') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

