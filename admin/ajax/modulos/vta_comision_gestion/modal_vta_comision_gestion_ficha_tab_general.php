<div class="par">
    <div class="label">
        <?php Lang::_lang("Codigo"); ?>
    </div>
    <div class="dato">
        <?php Gral::_echo($vta_comision->getCodigo()) ?>
    </div>
</div>

<div class="par">
    <div class="label">
        <?php Lang::_lang("Comisionista"); ?>
    </div>
    <div class="dato">
        <?php Gral::_echo($vta_comision->getPersonaDescripcion()) ?>
    </div>
</div>

<div class="par">
    <div class="label">
        <?php Lang::_lang("Fecha"); ?>
    </div>
    <div class="dato">
        <?php Gral::_echo(Gral::getFechaToWEB($vta_comision->getFechaEmision())) ?>
    </div>
</div>

<div class="par">
    <div class="label">
        <?php Lang::_lang("Estado Actual"); ?>
    </div>
    <div class="dato">
        <img src="imgs/vta_comision_tipo_estado/<?php Gral::_echo($vta_comision->getVtaComisionTipoEstado()->getCodigo()) ?>.png" alt="tipo-estado" width="15" />
        <?php Gral::_echo($vta_comision->getVtaComisionTipoEstado()->getDescripcion()) ?>
    </div>
</div>

<div class="par">
    <div class="label">
        <?php Lang::_lang("Observacion"); ?>
    </div>
    <div class="dato">
        <?php Gral::_echo($vta_comision->getObservacion()) ?>
    </div>
</div>
