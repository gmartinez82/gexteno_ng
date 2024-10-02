<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$us_memo_tipo_estado = UsMemoTipoEstado::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($us_memo_tipo_estado->getId()) ?>" modulo="us_memo_tipo_estado">

    <div class="titulo">
        <?php Lang::_lang('UsMemoTipoEstado') ?>: 
        <strong><?php Gral::_echo($us_memo_tipo_estado->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('US_MEMO_TIPO_ESTADO_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('UsMemoTipoEstado') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

