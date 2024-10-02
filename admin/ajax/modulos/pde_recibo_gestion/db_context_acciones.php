<?php
include '_autoload.php';
$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$pde_recibo = PdeRecibo::getOxId($id);

$pde_recibo_tipo_estado = $pde_recibo->getPdeReciboTipoEstado();
$pde_tipo_origen_recibo = $pde_recibo->getPdeTipoOrigenRecibo();
?>
<div class="datos" pde_recibo_id="<?php Gral::_echo($pde_recibo->getId()) ?>">

    <div class="titulo">
        <?php Lang::_lang('PdeRecibo') ?>: 
        <strong><?php Gral::_echo($pde_recibo->getCodigo()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('PDE_RECIBO_GESTION_ACCION_ACCIONES_ANULAR')) { ?>
        <?php if ($pde_tipo_origen_recibo->getCodigo() == PdeTipoOrigenRecibo::ORIGEN_ITEM || true) { ?>
            <?php if ($pde_recibo_tipo_estado->getCodigo() == PdeReciboTipoEstado::TIPO_PENDIENTE) { ?>
                <div class="uno anular-recibo">
                    <img class="icono" src="imgs/btn_rechazar.png" width="16" align="absmiddle" title="" />
                    <?php Lang::_lang('Anular') ?> <?php Lang::_lang('PdeRecibo') ?>
                </div>
            <?php } ?>
        <?php } ?>
    <?php } ?>

    <br />
</div>