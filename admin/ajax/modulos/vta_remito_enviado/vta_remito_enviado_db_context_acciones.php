<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$vta_remito_enviado = VtaRemitoEnviado::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($vta_remito_enviado->getId()) ?>" modulo="vta_remito_enviado">

    <div class="titulo">
        <?php Lang::_lang('VtaRemitoEnviado') ?>: 
        <strong><?php Gral::_echo($vta_remito_enviado->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('VTA_REMITO_ENVIADO_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('VtaRemitoEnviado') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

