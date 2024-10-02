<div class="modal-top">

    <div class="col fecha">
        <label class="label">Fecha:</label>             
        <label class="dato"><?php Gral::_echo(Gral::getFechaToWEB($vta_factura->getFechaEmision())) ?>:</label> 
    </div>

    <div class="col codigo">
        <label class="label">Codigo Interno:</label> 
        <label class="dato"><?php Gral::_echo($vta_factura->getCodigo()) ?></label>         
    </div>

    <div class="col numero-comprobante">
        <label class="label">Nro Comprobante:</label> 
        <label class="dato"><?php Gral::_echo($vta_factura->getNumeroComprobanteCompleto()) ?></label>         
    </div>
    
    <div class="col cliente">
        <label class="label">Cliente:</label> 
        <label class="dato"><?php Gral::_echo($vta_factura->getPersonaDescripcion()) ?></label>         
    </div>

    <div class="col tipo-comprobante">
        <label class="label">Tipo Comprobante:</label> 
        <label class="dato"><?php Gral::_echo($vta_factura->getVtaTipoFactura()->getDescripcion()) ?></label>         
    </div>
    
</div>