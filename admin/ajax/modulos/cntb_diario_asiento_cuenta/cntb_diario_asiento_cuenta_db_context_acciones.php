<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$cntb_diario_asiento_cuenta = CntbDiarioAsientoCuenta::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($cntb_diario_asiento_cuenta->getId()) ?>" modulo="cntb_diario_asiento_cuenta">

    <div class="titulo">
        <?php Lang::_lang('CntbDiarioAsientoCuenta') ?>: 
        <strong><?php Gral::_echo($cntb_diario_asiento_cuenta->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('CNTB_DIARIO_ASIENTO_CUENTA_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('CntbDiarioAsientoCuenta') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

