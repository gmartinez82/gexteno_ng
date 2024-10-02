<?php
include '_autoload.php';
$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$pde_nota_credito = PdeNotaCredito::getOxId($id);

$pde_nota_credito_tipo_estado = $pde_nota_credito->getPdeNotaCreditoTipoEstado();
$pde_tipo_origen_nota_credito = $pde_nota_credito->getPdeTipoOrigenNotaCredito();
?>
<div class="datos" pde_nota_credito_id="<?php Gral::_echo($pde_nota_credito->getId()) ?>">

    <div class="titulo">
        <?php Lang::_lang('PdeNotaCredito') ?>: 
        <strong><?php Gral::_echo($pde_nota_credito->getCodigo()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('PDE_NOTA_CREDITO_GESTION_ACCION_ACCIONES_ANULAR')) { ?>
        <?php if ($pde_tipo_origen_nota_credito->getCodigo() == PdeTipoOrigenNotaCredito::ORIGEN_ITEM) { ?>
            <?php if ($pde_nota_credito_tipo_estado->getCodigo() == PdeNotaCreditoTipoEstado::TIPO_PENDIENTE) { ?>
                <div class="uno anular-recibo">
                    <img class="icono" src="imgs/btn_rechazar.png" width="16" align="absmiddle" title="" />
                    <?php Lang::_lang('Anular') ?> <?php Lang::_lang('PdeNotaCredito') ?>
                </div>
            <?php } ?>
        <?php } ?>
    <?php } ?>

    <br />
</div>