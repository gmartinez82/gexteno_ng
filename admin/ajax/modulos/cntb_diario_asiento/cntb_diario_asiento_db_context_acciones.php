<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$cntb_diario_asiento = CntbDiarioAsiento::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($cntb_diario_asiento->getId()) ?>" modulo="cntb_diario_asiento">

    <div class="titulo">
        <?php Lang::_lang('CntbDiarioAsiento') ?>: 
        <strong><?php Gral::_echo($cntb_diario_asiento->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('CNTB_DIARIO_ASIENTO_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('CntbDiarioAsiento') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

