<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$us_memo = UsMemo::getOxId($id);

$us_memo_tipo_estado = $us_memo->getUsMemoTipoEstado();

?>
<div class="datos" identificador="<?php Gral::_echo($us_memo->getId()) ?>" modulo="us_memo">

    <div class="titulo">
        <?php Lang::_lang('UsMemo') ?>: 
        <strong><?php Gral::_echo($us_memo->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('US_MEMO_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('UsMemo') ?>
        </div>
    <?php endif; ?>

    <?php if (UsCredencial::getEsAcreditado('US_MEMO_ADM_ACCION_CONFIG_CAMBIAR_US_MEMO_ESTADO')): ?>
        <div class="uno cambiar-estado" modulo_estado="us_memo_estado">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Cambiar') ?> <?php Lang::_lang('UsMemoEstado') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

