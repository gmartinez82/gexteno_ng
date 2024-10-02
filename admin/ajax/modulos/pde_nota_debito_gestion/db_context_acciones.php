<?php
include '_autoload.php';
$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$pde_nota_debito = PdeNotaDebito::getOxId($id);

$pde_nota_debito_tipo_estado = $pde_nota_debito->getPdeNotaDebitoTipoEstado();
$pde_tipo_origen_nota_debito = $pde_nota_debito->getPdeTipoOrigenNotaDebito();
?>
<div class="datos" pde_nota_debito_id="<?php Gral::_echo($pde_nota_debito->getId()) ?>">

    <div class="titulo">
        <?php Lang::_lang('PdeNotaDebito') ?>: 
        <strong><?php Gral::_echo($pde_nota_debito->getCodigo()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('PDE_NOTA_DEBITO_GESTION_ACCION_ACCIONES_ANULAR')) { ?>
        <?php if ($pde_tipo_origen_nota_debito->getCodigo() == PdeTipoOrigenNotaDebito::ORIGEN_ITEM) { ?>
            <?php if ($pde_nota_debito_tipo_estado->getCodigo() == PdeNotaDebitoTipoEstado::TIPO_PENDIENTE) { ?>
                <div class="uno anular-recibo">
                    <img class="icono" src="imgs/btn_rechazar.png" width="16" align="absmiddle" title="" />
                    <?php Lang::_lang('Anular') ?> <?php Lang::_lang('PdeNotaDebito') ?>
                </div>
            <?php } ?>
        <?php } ?>
    <?php } ?>

    <br />
</div>