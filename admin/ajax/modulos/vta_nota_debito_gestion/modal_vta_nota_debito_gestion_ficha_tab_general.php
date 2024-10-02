<div class="par">
    <div class="label">
        <?php Lang::_lang("Codigo"); ?>
    </div>
    <div class="dato">
        <?php Gral::_echo($vta_nota_debito->getCodigo()) ?>
    </div>
</div>

<div class="par">
    <div class="label">
        <?php Lang::_lang("Numero de NC"); ?>
    </div>
    <div class="dato">
        <?php Gral::_echo($vta_nota_debito->getNumeroNotaDebito()) ?>
    </div>
</div>

<div class="par">
    <div class="label">
        <?php Lang::_lang("CAE"); ?>
    </div>
    <div class="dato">
        <?php Gral::_echo($vta_nota_debito->getCae()) ?>
    </div>
</div>

<div class="par">
    <div class="label">
        <?php Lang::_lang("Descripcion"); ?>
    </div>
    <div class="dato">
        <?php Gral::_echo($vta_nota_debito->getDescripcion()) ?>
    </div>
</div>

<div class="par">
    <div class="label">
        <?php Lang::_lang("Cliente"); ?>
    </div>
    <div class="dato">
        <?php Gral::_echo($vta_nota_debito->getPersonaDescripcion()) ?>
    </div>
</div>

<div class="par">
    <div class="label">
        <?php Lang::_lang("Fecha"); ?>
    </div>
    <div class="dato">
        <?php Gral::_echo(Gral::getFechaToWEB($vta_nota_debito->getFechaEmision())) ?>
    </div>
</div>

<div class="par">
    <div class="label">
        <?php Lang::_lang("Nota Publica"); ?>
    </div>
    <div class="dato">
        <?php Gral::_echo($vta_nota_debito->getNotaPublica()) ?>
    </div>
</div>

<div class="par">
    <div class="label">
        <?php Lang::_lang("Nota Privada"); ?>
    </div>
    <div class="dato">
        <?php Gral::_echo($vta_nota_debito->getObservacion()) ?>
    </div>
</div>

<div class="par">
    <div class="label">
        <?php Lang::_lang("Preventista"); ?>
    </div>
    <div class="dato">
        <?php Gral::_echo($vta_nota_debito->getVtaPreventista()->getDescripcion()) ?>
    </div>
</div>
