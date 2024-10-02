<div class="modal-top">
    <?php //$vta_presupuesto=new VtaPresupuesto() ?>

    <div class="col info-presupuesto">
        <div class="codigo-presupuesto-top">
            <label class="label">Codigo:</label> 
            <?php Gral::_echo($vta_presupuesto->getCodigo()) ?>
        </div>
    </div>

    <div class="col fecha">
        <label class="label">Fecha:</label> 
        <?php Gral::_echo(Gral::getFechaToWEB($vta_presupuesto->getFecha())) ?>
    </div>
    
    <div class="col cliente">
        <label class="label">Cliente:</label> 
        <?php Gral::_echo($vta_presupuesto->getPersonaDescripcion()) ?>
    </div>

</div>