<?php
include_once '_autoload.php';
$prv_importacions_restablecer = PrvImportacion::getPrvImportacionsParaRestablecer();
?>

<?php if (count($prv_importacions_restablecer) > 0) { ?>

    <div class="titulo"><?php Gral::_echo("Restablecer Importacion") ?></div>
    <div class="importacions activas">
        <?php
        foreach (PrvImportacion::getPrvImportacionsParaRestablecer() as $prv_importacion) {
            $prv_importacion_tipo_estado_actual = $prv_importacion->getPrvImportacionTipoEstadoActual();
            ?>
            <div class="uno" prv_importacion_id="<?php echo $prv_importacion->getId(); ?>">
                <div class="restablecer_importacion" >
                    <?php Gral::_echo($prv_importacion->getDescripcion()); ?> 
                    - 
                    <?php if($prv_importacion_tipo_estado_actual){ ?>
                    <?php Gral::_echo($prv_importacion->getPrvImportacionTipoEstadoActual()->getDescripcion()); ?>
                    <?php } ?>
                    
                    <div class="creado-por">Creado por <?php Gral::_echo($prv_importacion->getCreadoPorDescripcion()) ?></div>
                </div>
                <div class="cancelar" title="<?php Gral::_echo("Cancelar Importacion Activa") ?> #<?php echo $prv_importacion->getId(); ?>">
                    <img src='imgs/btn_elim.gif' width='20' border='0' />
                </div>
            </div>
            <?php
        }
        ?>
    </div>
<?php } ?>