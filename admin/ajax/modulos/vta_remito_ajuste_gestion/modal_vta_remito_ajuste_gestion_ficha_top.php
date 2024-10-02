<div class="modal-top">

    <div class="col info-remito">
        <div class="fecha">
            <label class="label">Fecha:</label> 
            <?php Gral::_echo(Gral::getFechaToWEB($vta_remito_ajuste->getFecha())) ?>
        </div>
    </div>

    <div class="col codigo">
        <label class="label">Codigo:</label> 
        <?php Gral::_echo($vta_remito_ajuste->getCodigo()) ?>
    </div>

    <div class="col cliente">
        <label class="label">Cliente:</label> 
        <?php Gral::_echo($vta_remito_ajuste->getPersonaDescripcion()) ?>
    </div>

    <div class="col tipo-despacho">
        <label class="label">Tipo Desp:</label> 
        <?php Gral::_echo($vta_remito_ajuste->getVtaRemitoAjusteTipoDespacho()->getDescripcion()) ?>
    </div>
    
</div>