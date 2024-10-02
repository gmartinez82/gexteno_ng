<?php
include '_autoload.php';
$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$vta_nota_debito = VtaNotaDebito::getOxId($id);

$vta_nota_debito_tipo_estado = $vta_nota_debito->getVtaNotaDebitoTipoEstado();
$vta_tipo_origen_nota_debito = $vta_nota_debito->getVtaTipoOrigenNotaDebito();
?>
<div class="datos" vta_nota_debito_id="<?php Gral::_echo($vta_nota_debito->getId()) ?>">

    <div class="titulo">
        <?php Lang::_lang('VtaNotaDebito') ?>: 
        <strong><?php Gral::_echo($vta_nota_debito->getCodigo()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('VTA_NOTA_DEBITO_GESTION_ACCION_ACCIONES_ANULAR')) { ?>
        <?php if ($vta_tipo_origen_nota_debito->getCodigo() == VtaTipoOrigenNotaDebito::ORIGEN_ITEM) { ?>
            <?php if ($vta_nota_debito_tipo_estado->getAprobadoAfip() == 0) { ?>
                <div class="uno anular-nota-debito">
                    <img class="icono" src="imgs/btn_rechazar.png" width="16" align="absmiddle" title="" />
                    <?php Lang::_lang('Anular') ?> <?php Lang::_lang('VtaNotaDebito') ?>
                </div>
            <?php } ?>
        <?php } ?>
    <?php } ?>
    
    <?php if (UsCredencial::getEsAcreditado('VTA_NOTA_DEBITO_GESTION_ACCION_ACCIONES_REASIGNAR_NUMERO')) { ?>
        <?php if (!$vta_nota_debito_tipo_estado->getAnulado()) { ?>
            <div class="uno reasignar-numero gen-modal-open" gen-modal-file="ajax/modulos/vta_nota_debito_gestion/modal_reasignar_numero_comprobante.php?vta_nota_debito_id=<?php echo $vta_nota_debito->getId() ?>" gen-modal-content=".div_modal" gen-modal-width="70%" gen-modal-height="400" gen-modal-titulo="Reasignar Numero de Comprobante" gen-modal-callback="setInitVtaNotaDebitoGestion()">
                <img class="icono" src="imgs/btn_refresh.png" width="16" align="absmiddle" title="" />
                <?php Lang::_lang('Reasignar Numero') ?>
            </div>
        <?php } ?>
    <?php } ?>    

    <br />
</div>
<script>
    setInit();
</script>