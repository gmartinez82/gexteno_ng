<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$ws_fe_ope_solicitud_iva = WsFeOpeSolicitudIva::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($ws_fe_ope_solicitud_iva->getId()) ?>" modulo="ws_fe_ope_solicitud_iva">

    <div class="titulo">
        <?php Lang::_lang('WsFeOpeSolicitudIva') ?>: 
        <strong><?php Gral::_echo($ws_fe_ope_solicitud_iva->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('WS_FE_OPE_SOLICITUD_IVA_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('WsFeOpeSolicitudIva') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

