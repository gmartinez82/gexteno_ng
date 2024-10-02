<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$cntb_tipo_saldo = CntbTipoSaldo::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($cntb_tipo_saldo->getId()) ?>" modulo="cntb_tipo_saldo">

    <div class="titulo">
        <?php Lang::_lang('CntbTipoSaldo') ?>: 
        <strong><?php Gral::_echo($cntb_tipo_saldo->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('CNTB_TIPO_SALDO_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('CntbTipoSaldo') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

