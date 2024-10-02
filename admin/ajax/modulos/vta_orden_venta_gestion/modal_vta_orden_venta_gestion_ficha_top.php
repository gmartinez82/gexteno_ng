<div class="modal-top">

    <div class="col info-orden-venta">
        <div class="fecha">
            <label class="label">Fecha:</label> 
            <?php Gral::_echo(Gral::getFechaToWeb($vta_orden_venta->getCreado())) ?>
        </div>
    </div>

    <div class="col codigo">
        <label class="label">Codigo:</label> 
        <?php Gral::_echo($vta_orden_venta->getCodigo()) ?>
    </div>

    <div class="col cliente">
        <label class="label">Cliente:</label> 
        <?php Gral::_echo($vta_orden_venta->getPersonaDescripcion()) ?>
    </div>

</div>