<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$eku_de_arsch01_resp_mensaje = EkuDeArsch01RespMensaje::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($eku_de_arsch01_resp_mensaje->getId()) ?>" modulo="eku_de_arsch01_resp_mensaje">

    <div class="titulo">
        <?php Lang::_lang('EkuDeArsch01RespMensaje') ?>: 
        <strong><?php Gral::_echo($eku_de_arsch01_resp_mensaje->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('EKU_DE_ARSCH01_RESP_MENSAJE_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('EkuDeArsch01RespMensaje') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

