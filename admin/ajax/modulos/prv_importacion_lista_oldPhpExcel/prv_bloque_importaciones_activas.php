<?php
include_once '_autoload.php';
?>

<div class="titulo"><?php Gral::_echo("Restablecer Importacion") ?></div>
<div class="importacions activas">
    <?php
    foreach (PrvImportacion::getPrvImportacionsParaRestablecer() as $prv_importacion) {
        ?>
        <div class="uno" prv_importacion_id="<?php echo $prv_importacion->getId(); ?>">
            <div class="restablecer_importacion" >
                <?php Gral::_echo($prv_importacion->getDescripcion()); ?>
                <?php Gral::_echo($prv_importacion->getPrvImportacionTipoEstadoActual()->getDescripcion()); ?>
            </div>
            <div class="cancelar">
                <img src='imgs/btn_elim.gif' width='20' border='0' />
            </div>
        </div>
        <?php
    }
    ?>
</div>
