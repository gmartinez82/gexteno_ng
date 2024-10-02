<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$pde_recibo_tipo_pago = PdeReciboTipoPago::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($pde_recibo_tipo_pago->getId()) ?>" modulo="pde_recibo_tipo_pago">

    <div class="titulo">
        <?php Lang::_lang('PdeReciboTipoPago') ?>: 
        <strong><?php Gral::_echo($pde_recibo_tipo_pago->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('PDE_RECIBO_TIPO_PAGO_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('PdeReciboTipoPago') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

