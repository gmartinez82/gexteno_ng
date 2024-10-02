<div class="modal-top">

    <div class="col info-remito">
        <div class="fecha">
            <label class="label">Fecha de Emision:</label> 
            <?php Gral::_echo(Gral::getFechaToWEB($pde_orden_pago->getFechaEmision())) ?>
        </div>
    </div>

    <div class="col codigo">
        <label class="label">Codigo:</label> 
        <?php Gral::_echo($pde_orden_pago->getCodigo()) ?>
    </div>

    <div class="col proveedor">
        <label class="label">Proveedor:</label> 
        <?php Gral::_echo($pde_orden_pago->getPersonaDescripcion()) ?>
    </div>

</div>