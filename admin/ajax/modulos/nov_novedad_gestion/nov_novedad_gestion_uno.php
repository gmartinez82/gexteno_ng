
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="vermasinfo" identificador="<?php echo $nov_novedad->getId() ?>" modulo="nov_novedad">+</div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="avatar">
        <a href="<?php Gral::_echo($nov_novedad->getPathImagenPrincipal()) ?>" rel="img-nov_novedad-$nov_novedad->getId()">
            <img src='<?php Gral::_echo($nov_novedad->getPathImagenPrincipal()) ?>' width='50' border='0' />
        </a>
    </div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="id">
        <?php Gral::_echo($nov_novedad->getId()) ?>
    </div>
    <div class="creado">
        <?php Gral::_echo(Gral::getFechaHoraToWEB($nov_novedad->getCreado())) ?>
    </div>
    <div class="creado-por">
        <?php Gral::_echo($nov_novedad->getCreadoPorDescripcion()) ?>
    </div>
</td>

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="descripcion">
        <?php Gral::_echo($nov_novedad->getDescripcion()) ?>
    </div>
    <div class="descripcion_breve">
        <?php Gral::_echo($nov_novedad->getDescripcionBreve()) ?>
    </div>
    
<div class="usuarios-destinatarios">

        <?php
        foreach ($nov_novedad->getNovNovedadDestinatariosTodos() as $us_usuario_novedad_destinatario):
            $nov_novedad_observado = $nov_novedad->getNovedadObservado($us_usuario_novedad_destinatario);
            $nov_novedad_leido = $nov_novedad->getNovedadLeido($us_usuario_novedad_destinatario);

            $icon_user = "icon_user_";
            $tooltip_icon_user = "";
            if ($nov_novedad_leido) {
                $icon_user .= "verde";
                $css_user = "verde";
                //$tooltip_icon_user = "Novedad Leida";
                $tooltip_icon_user = $nov_novedad_leido->getDescripcion();
            } elseif ($nov_novedad_observado) {
                $icon_user .= "amarillo";
                $css_user = "amarillo";
                //$tooltip_icon_user = "Novedad Observada";
                $tooltip_icon_user = $nov_novedad_observado->getDescripcion();
            } else {
                $icon_user .= "gris";
                $css_user = "gris";
                $tooltip_icon_user = "Novedad No leida ni observada";
            }
            ?>
            <div class="usuario-destinatario <?php echo $css_user ?>">

                <div class="usuario-destinatario-info">
                    <div class="usuario-destinatario-icono" title='<?php Gral::_echo($tooltip_icon_user); ?>'>
                        <img src='imgs/<?php Gral::_echo($icon_user); ?>.png' width='16' border='0' />
                    </div>

                    <div class="usuario-destinatario-descripcion">
                        <?php Gral::_echo($us_usuario_novedad_destinatario->getDescripcion()); ?>
                    </div>            
                </div>            

                <?php if ($nov_novedad_observado): ?>
                    <div class="usuario-destinatario-fecha-observado">
                        Obs: <?php Gral::_echo(Gral::getFechaHoraToWeb($nov_novedad_observado->getCreado())); ?>
                    </div>
                <?php endif; ?>

                <?php if ($nov_novedad_leido): ?>
                    <div class="usuario-destinatario-fecha-leido">
                        Lei: <?php Gral::_echo(Gral::getFechaHoraToWeb($nov_novedad_leido->getCreado())); ?>
                    </div>
                <?php endif; ?>

            </div>
            <?php
        endforeach;
        ?>
    </div>    
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <ul class="adm_botones_acciones">

        <?php if (UsCredencial::getEsAcreditado('NOV_NOVEDAD_ADM_ACCION_MODIFICAR')) { ?>
            <li class='adm_botones_accion'>
                <a href='nov_novedad_alta.php?id=<?php Gral::_echo($nov_novedad->getId()) ?>' title='<?php Lang::_lang('Modificar') ?>'><img src='imgs/btn_modi.gif' width='20' border='0' /></a>
            </li>
        <?php } ?>

        <?php if (UsCredencial::getEsAcreditado('NOV_NOVEDAD_ADM_ACCION_ELIMINAR')) { ?>
            <li class='adm_botones_accion'>
                <a href='Javascript:eliminar(<?php Gral::_echo($nov_novedad->getId()) ?>)' title='<?php Lang::_lang('Eliminar') ?>'><img src='imgs/btn_elim.gif' width='20' border='0' /></a>
            </li>
        <?php } ?>

        <?php if (UsCredencial::getEsAcreditado('NOV_NOVEDAD_ADM_ACCION_ESTADO')) { ?>
            <li class='adm_botones_accion estado' title='<?php Lang::_lang('Habilitar/Deshabilitar') ?>'>
                <img src='imgs/btn_estado_<?php Gral::_echo($nov_novedad->getEstado()) ?>.gif' width='20' border='0' />
            </li>
        <?php } ?>

        <?php if (UsCredencial::getEsAcreditado('NOV_NOVEDAD_ADM_ACCION_GIMAGEN')) { ?>
            <li class='adm_botones_accion'><a href='nov_novedad_imagen_gestor.php?id=<?php Gral::_echo($nov_novedad->getId()) ?>' title='<?php Lang::_lang('Ver Gestor de Imagenes') ?>'><img src='imgs/btn_album_imagenes.png' width='22' border='0' /></a></li>
        <?php } ?>

        <?php if (UsCredencial::getEsAcreditado('NOV_NOVEDAD_ADM_ACCION_GARCHIVO')) { ?>
            <li class='adm_botones_accion'><a href='nov_novedad_archivo_gestor.php?id=<?php Gral::_echo($nov_novedad->getId()) ?>' title='<?php Lang::_lang('Ver Gestor de Archivos') ?>'><img src='imgs/btn_album_archivos.png' width='19' border='0' /></a></li>
                <?php } ?>

    </ul>
</td>


