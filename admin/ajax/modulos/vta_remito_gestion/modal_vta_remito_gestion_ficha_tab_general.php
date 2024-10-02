<div class="par">
    <div class="label">
        <?php Lang::_lang("Codigo"); ?>
    </div>
    <div class="dato">
        <?php Gral::_echo($vta_remito->getCodigo()) ?>
    </div>
</div>

<div class="par">
    <div class="label">
        <?php Lang::_lang("Descripcion"); ?>
    </div>
    <div class="dato">
        <?php Gral::_echo($vta_remito->getDescripcion()) ?>
    </div>
</div>

<div class="par">
    <div class="label">
        <?php Lang::_lang("Cliente"); ?>
    </div>
    <div class="dato">
        <?php Gral::_echo($vta_remito->getPersonaDescripcion()) ?>
    </div>
</div>

<div class="par">
    <div class="label">
        <?php Lang::_lang("Fecha"); ?>
    </div>
    <div class="dato">
        <?php Gral::_echo(Gral::getFechaToWEB($vta_remito->getFecha())) ?>
    </div>
</div>

<div class="par">
    <div class="label">
        <?php Lang::_lang("Estado Actual"); ?>
    </div>
    <div class="dato">
        <img src="imgs/vta_remito_tipo_estado/<?php Gral::_echo($vta_remito->getVtaRemitoTipoEstado()->getCodigo()) ?>.png" alt="tipo-estado" width="15" />
        <?php Gral::_echo($vta_remito->getVtaRemitoTipoEstadoActual()->getDescripcion()) ?>
    </div>
</div>

<div class="par">
    <div class="label">
        <?php Lang::_lang("Observacion"); ?>
    </div>
    <div class="dato">
        <?php Gral::_echo($vta_remito->getObservacion()) ?>
    </div>
</div>
