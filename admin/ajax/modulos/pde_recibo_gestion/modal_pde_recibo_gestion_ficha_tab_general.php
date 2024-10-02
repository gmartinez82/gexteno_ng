<div class="par">
    <div class="label">
        <?php Lang::_lang("Codigo"); ?>
    </div>
    <div class="dato">
        <?php Gral::_echo($pde_recibo->getCodigo()) ?>
    </div>
</div>

<div class="par">
    <div class="label">
        <?php Lang::_lang("Numero de Recibo"); ?>
    </div>
    <div class="dato">
        <?php Gral::_echo($pde_recibo->getNumeroRecibo()) ?>
    </div>
</div>

<div class="par">
    <div class="label">
        <?php Lang::_lang("CAE"); ?>
    </div>
    <div class="dato">
        <?php Gral::_echo($pde_recibo->getCae()) ?>
    </div>
</div>

<div class="par">
    <div class="label">
        <?php Lang::_lang("Descripcion"); ?>
    </div>
    <div class="dato">
        <?php Gral::_echo($pde_recibo->getDescripcion()) ?>
    </div>
</div>

<div class="par">
    <div class="label">
        <?php Lang::_lang("Proveedor"); ?>
    </div>
    <div class="dato">
        <?php Gral::_echo($pde_recibo->getPersonaDescripcion()) ?>
    </div>
</div>

<div class="par">
    <div class="label">
        <?php Lang::_lang("Fecha"); ?>
    </div>
    <div class="dato">
        <?php Gral::_echo(Gral::getFechaToWEB($pde_recibo->getFechaEmision())) ?>
    </div>
</div>

<div class="par">
    <div class="label">
        <?php Lang::_lang("Observacion"); ?>
    </div>
    <div class="dato">
        <?php Gral::_echo($pde_recibo->getObservacion()) ?>
    </div>
</div>
