<div class="modal-top">

    <div class="col info-recibo">
        <div class="fecha">
            <label class="label">Fecha de Emision:</label> 
            <?php Gral::_echo(Gral::getFechaToWEB($vta_recibo->getFechaEmision())) ?>
        </div>
    </div>

    <div class="col codigo">
        <label class="label">Codigo:</label> 
        <?php Gral::_echo($vta_recibo->getCodigo()) ?>
    </div>

    <div class="col cliente">
        <label class="label">Cliente:</label> 
        <?php Gral::_echo($vta_recibo->getPersonaDescripcion()) ?>
    </div>

</div>