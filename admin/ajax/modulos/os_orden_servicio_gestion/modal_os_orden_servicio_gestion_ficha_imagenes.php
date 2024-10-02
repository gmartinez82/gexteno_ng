<div id="imagenes_container" class="masivo-bloque imagenes">

    <?php foreach ($os_orden_servicio_imagens as $os_orden_servicio_imagen) { ?>
        <div class="uno">
            <div class="foto avatar">
                <a href="<?php echo $os_orden_servicio_imagen->getPathImagen() ?>">
                    <img src="<?php echo $os_orden_servicio_imagen->getPathImagen(true) ?>" alt="img" />
                </a>
            </div>
            <div class="imagen-info">
                <div class="descripcion"><?php Gral::_echo($os_orden_servicio_imagen->getDescripcion()) ?></div>
                <div class="observacion"><?php Gral::_echo($os_orden_servicio_imagen->getObservacion()) ?></div>
            </div>
        </div>
    <?php } ?>

</div>
