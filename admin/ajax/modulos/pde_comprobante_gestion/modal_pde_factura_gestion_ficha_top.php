<div class="modal-top">

    <div class="col info-remito">
        <div class="fecha">
            <label class="label">Fecha de Emision:</label> 
            <?php Gral::_echo(Gral::getFechaToWEB($pde_factura->getFechaEmision())) ?>
        </div>
    </div>

    <div class="col codigo">
        <label class="label">Codigo:</label> 
        <?php Gral::_echo($pde_factura->getCodigo()) ?>
    </div>

    <div class="col cliente">
        <label class="label">Proveedor:</label> 
        <?php Gral::_echo($pde_factura->getPersonaDescripcion()) ?>
    </div>

</div>