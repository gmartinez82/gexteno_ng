<div class="modal-top">

    <div class="col info-remito">
        <div class="fecha">
            <label class="label">Fecha de Emision:</label> 
            <?php Gral::_echo(Gral::getFechaToWEB($vta_factura->getFechaEmision())) ?>
        </div>
    </div>

    <div class="col codigo">
        <label class="label">Codigo:</label> 
        <?php Gral::_echo($vta_factura->getCodigo()) ?>
    </div>

    <div class="col cliente">
        <label class="label">Cliente:</label> 
        <?php Gral::_echo($vta_factura->getPersonaDescripcion()) ?>
    </div>

</div>