<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$us_usuario_auditoria = UsUsuarioAuditoria::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($us_usuario_auditoria->getId()) ?>" modulo="us_usuario_auditoria">

    <div class="titulo">
        <?php Lang::_lang('UsUsuarioAuditoria') ?>: 
        <strong><?php Gral::_echo($us_usuario_auditoria->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('US_USUARIO_AUDITORIA_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('UsUsuarioAuditoria') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

