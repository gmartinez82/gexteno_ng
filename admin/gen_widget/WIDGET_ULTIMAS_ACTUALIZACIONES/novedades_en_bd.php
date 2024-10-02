<?php
$arr_nov_novedads_ultimas = NovNovedad::getUltimasNovedadesParaWidget();
//Gral::prr($arr_nov_novedads_ultimas);
?>

<?php
foreach ($arr_nov_novedads_ultimas as $fecha => $arr_nov_novedad_ultima) {
    $diferencia_dias = Date::getDiferenciaTiempo('d', $fecha, date('Y-m-d'));
    if ($diferencia_dias == 0) {
        $diferencia_dias_texto = "(Hoy)";
    }
    elseif ($diferencia_dias == 1) {
        $diferencia_dias_texto = "(Ayer)";
    }
    elseif ($diferencia_dias <= 7) {
        $diferencia_dias_texto = "(hace pocos dias)";
    }
    elseif ($diferencia_dias > 7 && $diferencia_dias <= 30) {
        $diferencia_dias_texto = "(hace mas de una semana)";
    }
    elseif ($diferencia_dias > 30 && $diferencia_dias <= 60) {
        $diferencia_dias_texto = "(hace mas de una mes)";
    }
    elseif ($diferencia_dias > 60) {
        $diferencia_dias_texto = "(hace varios meses)";
    }
    ?>
    <div class="div-ultima-actualizacion">
        <div class="fecha-actualizacion">el <?php echo Gral::getFechaToWEB($fecha) ?> <?php echo $diferencia_dias_texto ?>:</div>

        <ul class="ultimas-actualizaciones">

            <?php
            foreach ($arr_nov_novedad_ultima as $nov_novedad_ultima) {
                $nov_novedad_imagens = $nov_novedad_ultima->getNovNovedadImagens(null, null, true);
                $nov_novedad_archivos = $nov_novedad_ultima->getNovNovedadArchivos(null, null, true);

                // se consulta si esta leido
                $es_novedad_leido = $nov_novedad_ultima->getNovedadLeido();

                // se marca como observado
                $nov_novedad_ultima->setNovedadObservado();
                ?>

                <li class="uno" novedad_id="<?php Gral::_echo($nov_novedad_ultima->getId()) ?>" leido="<?php echo ($es_novedad_leido) ? 1 : 0 ?>">

                    <?php if (!$es_novedad_leido) { ?>
                        <label class="icon-no-leido">¡NUEVO!</label>
                    <?php } ?>

                    <label class="info-titulo"><?php Gral::_echo($nov_novedad_ultima->getDescripcion()) ?>:</label>

                    <label class="info-preview"><?php Gral::_echo($nov_novedad_ultima->getDescripcionBreve()) ?></label>
                    <label class="link-info-extendida-ver">+ Mas Info</label>

                    <div class="info-extendida">
                        <?php Gral::_echoTxt(html_entity_decode($nov_novedad_ultima->getDescripcionExtendida())) ?>

                        <?php if (count($nov_novedad_imagens) > 0) { ?>
                            <div class="fotos">
                                <?php foreach ($nov_novedad_imagens as $nov_novedad_imagen) { ?>
                                    <div class="foto avatar">
                                        <a href="<?php echo $nov_novedad_imagen->getPathImagen() ?>" rel="<?php Gral::_echo($nov_novedad_ultima->getId()) ?>" title="<?php Gral::_echo($nov_novedad_imagen->getDescripcion()) ?> - <?php Gral::_echo($nov_novedad_imagen->getObservacion()) ?>">
                                            <img src="<?php echo $nov_novedad_imagen->getPathImagen(true) ?>" title="Ver imagen mas grande" />
                                        </a>
                                        <div class="descripcion"><?php Gral::_echo($nov_novedad_imagen->getDescripcion()) ?></div>
                                        <div class="observacion"><?php Gral::_echo($nov_novedad_imagen->getObservacion()) ?></div>
                                    </div>
                                <?php } ?>
                            </div>
                        <?php } ?>

                        <?php if (count($nov_novedad_archivos) > 0) { ?>
                            <div class="archivos">
                                <?php foreach ($nov_novedad_archivos as $nov_novedad_archivo) { ?>
                                    <div class="archivo">
                                        <a href="<?php echo $nov_novedad_archivo->getPathArchivo() ?>" rel="<?php Gral::_echo($nov_novedad_ultima->getId()) ?>" target="_blank">
                                            <img src="<?php echo Gral::getPath('path_http') ?>archivos/archivos/iconos/btn_<?php echo $nov_novedad_archivo->getTipo() ?>.gif" width="30" title="Ver archivo" />
                                        </a>
                                        <div class="descripcion"><?php Gral::_echo($nov_novedad_archivo->getDescripcion()) ?></div>
                                        <div class="observacion"><?php Gral::_echo($nov_novedad_archivo->getObservacion()) ?></div>
                                    </div>
                                <?php } ?>
                            </div>
                        <?php } ?>

                        <div class="link-info-extendida-ocultar">Ocultar info extendida</div>
                    </div>

                </li>

            <?php } ?>        
        </ul>
    </div>
<?php } ?>