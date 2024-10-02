<div class="par">
    <div class="label">
        <?php Lang::_lang("Codigo"); ?>
    </div>
    <div class="dato">
        <?php Gral::_echo($vta_ajuste_debe->getCodigo()) ?>
    </div>
</div>

<div class="par">
    <div class="label">
        <?php Lang::_lang("Numero"); ?>
    </div>
    <div class="dato">
        <?php Gral::_echo($vta_ajuste_debe->getNumeroComprobanteCompleto()) ?>
    </div>
</div>

<div class="par">
    <div class="label">
        <?php Lang::_lang("Descripcion"); ?>
    </div>
    <div class="dato">
        <?php Gral::_echo($vta_ajuste_debe->getDescripcion()) ?>
    </div>
</div>

<div class="par">
    <div class="label">
        <?php Lang::_lang("Cliente"); ?>
    </div>
    <div class="dato">
        <?php Gral::_echo($vta_ajuste_debe->getPersonaDescripcion()) ?>
    </div>
</div>

<div class="par">
    <div class="label">
        <?php Lang::_lang("Fecha"); ?>
    </div>
    <div class="dato">
        <?php Gral::_echo(Gral::getFechaToWEB($vta_ajuste_debe->getFechaEmision())) ?>
    </div>
</div>

<div class="par">
    <div class="label">
        <?php Lang::_lang("Estado Actual"); ?>
    </div>
    <div class="dato">
        <img src="imgs/vta_ajuste_debe_tipo_estado/<?php Gral::_echo($vta_ajuste_debe->getVtaAjusteDebeTipoEstado()->getCodigo()) ?>.png" alt="tipo-estado" width="15" />
        <?php Gral::_echo($vta_ajuste_debe->getVtaAjusteDebeTipoEstado()->getDescripcion()) ?>
    </div>
</div>

<div class="par">
    <div class="label">
        <?php Lang::_lang("Nota Publica"); ?>
    </div>
    <div class="dato">
        <?php Gral::_echo($vta_ajuste_debe->getNotaPublica()) ?>
    </div>
</div>

<div class="par">
    <div class="label">
        <?php Lang::_lang("Nota Privada"); ?>
    </div>
    <div class="dato">
        <?php Gral::_echo($vta_ajuste_debe->getObservacion()) ?>
    </div>
</div>

<div class="par">
    <div class="label">
        <?php Lang::_lang("Preventista"); ?>
    </div>
    <div class="dato">
        <?php Gral::_echo($vta_ajuste_debe->getVtaPreventista()->getDescripcion()) ?>
    </div>
</div>
