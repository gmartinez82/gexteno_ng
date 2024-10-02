<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$vta_recibo_enviado = VtaReciboEnviado::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($vta_recibo_enviado->getId()) ?>" modulo="vta_recibo_enviado">

    <div class="titulo">
        <?php Lang::_lang('VtaReciboEnviado') ?>: 
        <strong><?php Gral::_echo($vta_recibo_enviado->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('VTA_RECIBO_ENVIADO_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('VtaReciboEnviado') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

