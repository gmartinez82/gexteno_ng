<div class="modal-top">

    <div class="col fecha">
        <label class="label">Fecha:</label>             
        <label class="dato"><?php Gral::_echo(Gral::getFechaToWEB($vta_ajuste_debe->getFechaEmision())) ?>:</label> 
    </div>

    <div class="col codigo">
        <label class="label">Codigo Interno:</label> 
        <label class="dato"><?php Gral::_echo($vta_ajuste_debe->getCodigo()) ?></label>         
    </div>

    <div class="col numero-comprobante">
        <label class="label">Nro Comprobante:</label> 
        <label class="dato"><?php Gral::_echo($vta_ajuste_debe->getNumeroComprobanteCompleto()) ?></label>         
    </div>
    
    <div class="col cliente">
        <label class="label">Cliente:</label> 
        <label class="dato"><?php Gral::_echo($vta_ajuste_debe->getPersonaDescripcion()) ?></label>         
    </div>

    <div class="col tipo-comprobante">
        <label class="label">Tipo Comprobante:</label> 
        <label class="dato"><?php Gral::_echo($vta_ajuste_debe->getVtaTipoAjusteDebe()->getDescripcion()) ?></label>         
    </div>
    
</div>