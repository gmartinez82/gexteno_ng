<div class="par">
    <div class="label">
        <?php Lang::_lang("Codigo"); ?>
    </div>
    <div class="dato">
        <?php Gral::_echo($fnd_caja->getCodigo()) ?>
    </div>
</div>

<div class="par">
    <div class="label">
        <?php Lang::_lang("Descripcion"); ?>
    </div>
    <div class="dato">
        <?php Gral::_echo($fnd_caja->getDescripcion()) ?>
    </div>
</div>

<div class="par">
    <div class="label">
        <?php Lang::_lang("Cajero"); ?>
    </div>
    <div class="dato">
        <?php Gral::_echo($fnd_caja->getFndCajero()->getDescripcion()) ?>
    </div>
</div>

<div class="par">
    <div class="label">
        <?php Lang::_lang("Fecha Apertura"); ?>
    </div>
    <div class="dato">
        <?php Gral::_echo(Gral::getFechaToWEB($fnd_caja->getFechaApertura())) ?>
    </div>
</div>

<div class="par">
    <div class="label">
        <?php Lang::_lang("Fecha Cierre"); ?>
    </div>
    <div class="dato">
        <?php Gral::_echo(Gral::getFechaToWEB($fnd_caja->getFechaCierre())) ?>
    </div>
</div>

<div class="par">
    <div class="label">
        <?php Lang::_lang("Fecha Rendicion"); ?>
    </div>
    <div class="dato">
        <?php Gral::_echo(Gral::getFechaToWEB($fnd_caja->getFechaRendicion())) ?>
    </div>
</div>

<div class="par">
    <div class="label">
        <?php Lang::_lang("Estado Actual"); ?>
    </div>
    <div class="dato">
        <img src="imgs/fnd_caja_tipo_estado/<?php Gral::_echo($fnd_caja->getFndCajaTipoEstado()->getCodigo()) ?>.png" alt="tipo-estado" width="15" />
        <?php Gral::_echo($fnd_caja->getFndCajaTipoEstado()->getDescripcion()) ?>
    </div>
</div>

<div class="par">
    <div class="label">
        <?php Lang::_lang("Observacion"); ?>
    </div>
    <div class="dato">
        <?php Gral::_echo($fnd_caja->getObservacion()) ?>
    </div>
</div>
