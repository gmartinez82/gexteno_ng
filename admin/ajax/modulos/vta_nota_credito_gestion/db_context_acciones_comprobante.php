<?php
include '_autoload.php';
$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$vta_nota_credito = VtaNotaCredito::getOxId($id);

$vta_nota_credito_tipo_estado = $vta_nota_credito->getVtaNotaCreditoTipoEstado();
$vta_tipo_origen_nota_credito = $vta_nota_credito->getVtaTipoOrigenNotaCredito();
?>
<div class="datos" vta_nota_credito_id="<?php Gral::_echo($vta_nota_credito->getId()) ?>">

    <div class="titulo">
        <?php Lang::_lang('VtaNotaCredito') ?>: 
        <strong><?php Gral::_echo($vta_nota_credito->getCodigo()) ?></strong>
    </div>

    <?php if ($vta_nota_credito->getCae() != '') { ?>
    
        <?php if (UsCredencial::getEsAcreditado('VTA_NOTA_CREDITO_GESTION_ACCION_COMPROBANTE')) { ?>
            <div class="uno pdf-comprobante">
                <a href="ajax/modulos/vta_nota_credito_gestion/pdf_nota_credito_kude.php?vta_nota_credito_id=<?php echo $vta_nota_credito->getId() ?>&hash=<?php echo $vta_nota_credito->getHash() ?>" target="_blank">
                    <img src='imgs/btn_pdf_A4.png' align="absmiddle" width='24' border='0' title="Ver NotaCredito A4" />
                    <?php Lang::_lang('Ver Nota Credito A4') ?>
                </a>
            </div>
        <?php } ?>
    
        <?php if (UsCredencial::getEsAcreditado('VTA_NOTA_CREDITO_GESTION_ACCION_COMPROBANTE_TICKET')) { ?>
            <div class="uno pdf-comprobante-ticket">
                <a href="ajax/modulos/vta_nota_credito_gestion/pdf_ticket_kude.php?vta_nota_credito_id=<?php echo $vta_nota_credito->getId() ?>&hash=<?php echo $vta_nota_credito->getHash() ?>" target="_blank">
                    <img src='imgs/btn_pdf_ticket.png' align="absmiddle" width='24' border='0' title="Ver NotaCredito Ticket" />
                    <?php Lang::_lang('Ver Nota Credito Ticket') ?>
                </a>
            </div>
        <?php } ?>
    
    <?php } ?>

    <br />
</div>