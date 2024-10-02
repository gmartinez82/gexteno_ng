<div class="modal-top">

    <div class="col info-remito">
        <div class="fecha">
            <label class="label">Fecha de Emision:</label> 
            <?php Gral::_echo(Gral::getFechaToWEB($vta_comision->getFechaEmision())) ?>
        </div>
    </div>

    <div class="col codigo">
        <label class="label">Codigo:</label> 
        <?php Gral::_echo($vta_comision->getCodigo()) ?>
    </div>

    <div class="col comisionista">
        <label class="label">Comisionista:</label> 
        <?php Gral::_echo($vta_comision->getPersonaDescripcion()) ?>
    </div>

</div>