<div class="modal-top">

    <div class="col info-remito">
        <div class="fecha">
            <label class="label">Fecha:</label> 
            <?php Gral::_echo(Gral::getFechaToWEB($vta_remito->getFecha())) ?>
        </div>
    </div>

    <div class="col codigo">
        <label class="label">Codigo:</label> 
        <?php Gral::_echo($vta_remito->getCodigo()) ?>
    </div>

    <div class="col cliente">
        <label class="label">Cliente:</label> 
        <?php Gral::_echo($vta_remito->getPersonaDescripcion()) ?>
    </div>

</div>