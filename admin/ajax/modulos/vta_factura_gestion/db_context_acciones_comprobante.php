<?php
include '_autoload.php';
$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$vta_factura = VtaFactura::getOxId($id);

$vta_factura_tipo_estado = $vta_factura->getVtaFacturaTipoEstado();
$vta_tipo_origen_factura = $vta_factura->getVtaTipoOrigenFactura();
?>
<div class="datos" vta_factura_id="<?php Gral::_echo($vta_factura->getId()) ?>">

    <div class="titulo">
        <?php Lang::_lang('VtaFactura') ?>: 
        <strong><?php Gral::_echo($vta_factura->getCodigo()) ?></strong>
    </div>

    <?php if ($vta_factura->getCae() != '') { ?>
    
        <?php if (UsCredencial::getEsAcreditado('VTA_FACTURA_GESTION_ACCION_COMPROBANTE')) { ?>
            <div class="uno pdf-comprobante">
                <a href="ajax/modulos/vta_factura_gestion/pdf_factura_kude.php?vta_factura_id=<?php echo $vta_factura->getId() ?>&hash=<?php echo $vta_factura->getHash() ?>" target="_blank">
                    <img src='imgs/btn_pdf_A4.png' align="absmiddle" width='24' border='0' title="Ver Factura A4" />
                    <?php Lang::_lang('Ver Factura A4') ?>
                </a>
            </div>
        <?php } ?>
    
        <?php if (UsCredencial::getEsAcreditado('VTA_FACTURA_GESTION_ACCION_COMPROBANTE_TICKET')) { ?>
            <div class="uno pdf-comprobante-ticket">
                <a href="ajax/modulos/vta_factura_gestion/pdf_ticket_kude.php?vta_factura_id=<?php echo $vta_factura->getId() ?>&hash=<?php echo $vta_factura->getHash() ?>" target="_blank">
                    <img src='imgs/btn_pdf_ticket.png' align="absmiddle" width='24' border='0' title="Ver Factura Ticket" />
                    <?php Lang::_lang('Ver Factura Ticket') ?>
                </a>
            </div>
        <?php } ?>
    
    <?php } ?>

    <br />
</div>