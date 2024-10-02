<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$cntb_cuenta = CntbCuenta::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($cntb_cuenta->getId()) ?>" modulo="cntb_cuenta">

    <div class="titulo">
        <?php Lang::_lang('CntbCuenta') ?>: 
        <strong><?php Gral::_echo($cntb_cuenta->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('CNTB_CUENTA_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('CntbCuenta') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

