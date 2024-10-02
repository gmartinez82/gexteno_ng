<div id="archivos_container" class="masivo-bloque imagenes">

    <?php foreach ($os_orden_servicio_archivos as $os_orden_servicio_archivo) { ?>
        <div class="uno">
            <div class="icono">
                <img src="<?php echo Gral::getPath('path_http') . "archivos/archivos/iconos/btn_" . $os_orden_servicio_archivo->getTipo() ?>.gif" alt="img" />
            </div>
            <div class="archivo-info">
                <div class="descripcion"><?php Gral::_echo($os_orden_servicio_archivo->getDescripcion()) ?></div>
                <div class="observacion"><?php Gral::_echo($os_orden_servicio_archivo->getObservacion()) ?></div>
            </div>
        </div>
    <?php } ?>

</div>
