<div class="par">
    <div class="label">
        <?php Lang::_lang("Codigo"); ?>
    </div>
    <div class="dato">
        <?php Gral::_echo($vta_nota_credito->getCodigo()) ?>
    </div>
</div>

<div class="par">
    <div class="label">
        <?php Lang::_lang("Numero de NotaCredito"); ?>
    </div>
    <div class="dato">
        <?php Gral::_echo($vta_nota_credito->getNumeroNotaCredito()) ?>
    </div>
</div>

<div class="par">
    <div class="label">
        <?php Lang::_lang("CAE"); ?>
    </div>
    <div class="dato">
        <?php Gral::_echo($vta_nota_credito->getCae()) ?>
    </div>
</div>

<div class="par">
    <div class="label">
        <?php Lang::_lang("Descripcion"); ?>
    </div>
    <div class="dato">
        <?php Gral::_echo($vta_nota_credito->getDescripcion()) ?>
    </div>
</div>

<div class="par">
    <div class="label">
        <?php Lang::_lang("Cliente"); ?>
    </div>
    <div class="dato">
        <?php Gral::_echo($vta_nota_credito->getPersonaDescripcion()) ?>
    </div>
</div>

<div class="par">
    <div class="label">
        <?php Lang::_lang("Fecha"); ?>
    </div>
    <div class="dato">
        <?php Gral::_echo(Gral::getFechaToWEB($vta_nota_credito->getFechaEmision())) ?>
    </div>
</div>

<div class="par">
    <div class="label">
        <?php Lang::_lang("Observacion"); ?>
    </div>
    <div class="dato">
        <?php Gral::_echo($vta_nota_credito->getObservacion()) ?>
    </div>
</div>
