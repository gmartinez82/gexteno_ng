<?php include "prv_importacion_info_top.php" ?>

<div class="resultados">

    <?php foreach ($prv_importacion_resultados as $prv_importacion_resultado) { ?>
        <div class="uno resultado">

            <div class="creado">
                <?php Gral::_echo(Gral::getFechaHoraToWEB($prv_importacion_resultado->getCreado())) ?>
            </div>
            <div class="descripcion">
                <?php Gral::_echo($prv_importacion_resultado->getDescripcion()) ?>
            </div>
            <div class="observacion">
                <?php Gral::_echo($prv_importacion_resultado->getObservacion()) ?>
            </div>
            <div class="observacion-tecnica">
                <?php Gral::_echo($prv_importacion_resultado->getObservacionTecnica()) ?>
            </div>

        </div>
    <?php } ?>

</div>
