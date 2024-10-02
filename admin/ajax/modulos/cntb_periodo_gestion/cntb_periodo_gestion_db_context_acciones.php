<?php
include '_autoload.php';
$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$cntb_periodo = CntbPeriodo::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($cntb_periodo->getId()) ?>" modulo="cntb_periodo">

    <div class="titulo">
        <?php Lang::_lang('CntbPeriodo') ?>: 
        <strong><?php Gral::_echo($cntb_periodo->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('CNTB_PERIODO_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('CntbPeriodo') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

