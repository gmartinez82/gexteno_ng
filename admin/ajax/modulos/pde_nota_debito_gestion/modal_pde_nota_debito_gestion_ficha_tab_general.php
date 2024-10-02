<div class="par">
    <div class="label">
        <?php Lang::_lang("Codigo"); ?>
    </div>
    <div class="dato">
        <?php Gral::_echo($pde_nota_debito->getCodigo()) ?>
    </div>
</div>

<div class="par">
    <div class="label">
        <?php Lang::_lang("Numero de NC"); ?>
    </div>
    <div class="dato">
        <?php Gral::_echo($pde_nota_debito->getNumeroNotaDebito()) ?>
    </div>
</div>

<div class="par">
    <div class="label">
        <?php Lang::_lang("CAE"); ?>
    </div>
    <div class="dato">
        <?php Gral::_echo($pde_nota_debito->getCae()) ?>
    </div>
</div>

<div class="par">
    <div class="label">
        <?php Lang::_lang("Descripcion"); ?>
    </div>
    <div class="dato">
        <?php Gral::_echo($pde_nota_debito->getDescripcion()) ?>
    </div>
</div>

<div class="par">
    <div class="label">
        <?php Lang::_lang("Proveedor"); ?>
    </div>
    <div class="dato">
        <?php Gral::_echo($pde_nota_debito->getPersonaDescripcion()) ?>
    </div>
</div>

<div class="par">
    <div class="label">
        <?php Lang::_lang("Fecha"); ?>
    </div>
    <div class="dato">
        <?php Gral::_echo(Gral::getFechaToWEB($pde_nota_debito->getFechaEmision())) ?>
    </div>
</div>

<div class="par">
    <div class="label">
        <?php Lang::_lang("Observacion"); ?>
    </div>
    <div class="dato">
        <?php Gral::_echo($pde_nota_debito->getObservacion()) ?>
    </div>
</div>
