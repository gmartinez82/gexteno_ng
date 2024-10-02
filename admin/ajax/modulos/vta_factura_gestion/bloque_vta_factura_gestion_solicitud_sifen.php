<?php

//$eku_de = $vta_factura->getEkuDeActualDelComprobante();
//Gral::prr($eku_de);

/*
$eku_de = EkuDe::setInicializarDEDesdeVtaFactura($vta_factura);
$xml_de = $eku_de->setGenerarXmlDE();
//Gral::prr($xml_de);
//echo $xml_de;

$xml_de_firmado = $eku_de->setFirmarXmlDERobRichards($xml_de);
//echo($xml_de_firmado);

$eku_de->setInicializarDEGrupoJ001(); // Campos Fuera de la Firma

$xml_de_firmado_con_qr = $eku_de->setAgregarQrAlXmlDEFirmado($xml_de_firmado);
//$xml = simplexml_load_string($xml_de_firmado_con_qr);

//EkuDeAsch01Req::setEkuatiaRecibeDe($eku_de->getId(), $xml_de_firmado_con_qr);
*/

//$vta_factura->setAutorizarDE_SIFEN();

// $vta_factura->setVtaFacturaEstado(VtaFacturaTipoEstado::TIPO_PENDIENTE);
?>
<div style="font-family: monospace; font-size: 10px; border: #ccc solid 1px; background-color: white; padding: 5px 15px;">
    <textarea id="txa_xml" cols="150" rows="30" style=""><?php echo(htmlspecialchars($xml_de_firmado_con_qr)); ?></textarea>

    <pre style="white-space: pre;">
        <?php //echo(htmlspecialchars($xml_de_firmado_con_qr));  ?>
    </pre>
</div>
<script>
    // Seleccionar el textarea
    var textarea = $("#txa_xml");

    // Evento click en el textarea
    textarea.click(function() {
        
        // Seleccionar el texto del textarea
        textarea.select();

        // Copiar el texto al portapapeles
        document.execCommand("copy");

        // Mostrar un mensaje de confirmación (opcional)
        alert("Texto copiado al portapapeles!");
    });
</script>