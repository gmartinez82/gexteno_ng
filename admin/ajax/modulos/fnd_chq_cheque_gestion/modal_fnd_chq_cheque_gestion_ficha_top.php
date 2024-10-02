<div class="modal-top">

    <div class="col info-cheque">
        <div class="fecha">
            <label class="label">Fecha de Emision:</label> 
            <?php Gral::_echo(Gral::getFechaToWEB($fnd_chq_cheque->getFechaEmision())) ?>
        </div>
    </div>

    <div class="col codigo">
        <label class="label">Nro Cheque:</label> 
         <?php Gral::_echo($fnd_chq_cheque->getNumero()); ?>
    </div>

    <div class="col banco">
        <label class="label">Banco:</label> 
        <?php Gral::_echo($fnd_chq_cheque->getGralBanco()->getDescripcion()); ?>
    </div>

</div>