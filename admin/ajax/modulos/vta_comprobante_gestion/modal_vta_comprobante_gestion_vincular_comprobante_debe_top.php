<div class="tabs">
    <div class="modal-top">

        <div class="col info-remito">
            <div class="fecha">
                <label class="label">Fecha de Emision:</label> 
                <label class="dato">
                    <?php Gral::_echo(Gral::getFechaToWEB($vta_comprobante_seleccionado->getFechaEmision())) ?>
                </label> 
            </div>
        </div>

        <div class="col codigo">
            <label class="label">Codigo:</label> 
            <label class="dato">
                <?php Gral::_echo($vta_comprobante_seleccionado->getCodigo()) ?>
            </label> 
        </div>

        <div class="col cliente">
            <label class="label">Cliente:</label> 
            <label class="dato">
                <?php Gral::_echo($vta_comprobante_seleccionado->getPersonaDescripcion()) ?>
            </label> 
        </div>

        <div class="col gral_condicion_iva">
            <label class="label">Condicion de IVA:</label> 
            <label class="dato">
                <?php Gral::_echo($vta_comprobante_seleccionado->getGralCondicionIva()->getDescripcion()) ?>
            </label> 
        </div>

        <div class="col importe">
            <label class="label">Importe:</label> 	
            <label class="dato">
                <?php Gral::_echoImp($vta_comprobante_seleccionado->getImporteTotalComprobante()) ?>
            </label> 
        </div>
        <div class="col importe_imputable">
            <label class="label">Saldo:</label> 	
            <label class="dato">
                <?php Gral::_echoImp($vta_comprobante_seleccionado->getSaldoImputable()) ?>
            </label> 
        </div>
    </div>
</div>