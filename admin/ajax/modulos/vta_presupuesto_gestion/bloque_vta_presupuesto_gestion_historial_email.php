<table border="0" class="tabla-modal-ficha-emails">
    <tr>
        <td class="adm_tbl_encabezado" width="80" align='center'><?php Lang::_lang("Fecha"); ?></td>
        <td class="adm_tbl_encabezado" width="400" align='center'><?php Lang::_lang("Asunto"); ?></td>
        <td class="adm_tbl_encabezado" width="50" align='center'><?php Lang::_lang("Estado"); ?></td>
        <td class="adm_tbl_encabezado" width="180" align='center'><?php Lang::_lang("Estado de Envio"); ?></td>
        <td class="adm_tbl_encabezado" width="120" align='center'><?php Lang::_lang("Creado por"); ?></td>
        <td class="adm_tbl_encabezado" width="70" align='center'>&nbsp;</td>
    </tr>
    <?php
    $vta_presupuesto_enviados = $vta_presupuesto->getVtaPresupuestoEnviados();
    
    $cont = 0;
    foreach ($vta_presupuesto_enviados as $vta_presupuesto_enviado) {
        $cont++;
        $strong = ($cont == 1) ? 'strong' : '';
        ?>
        <tr>
            <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
                <div class="fecha">
                    <?php Gral::_echo(Gral::getFechaHoraToWEB($vta_presupuesto_enviado->getCreado())); ?>
                </div>
            </td>

            <td class="adm_tbl_lineas <?php echo $strong ?>" align="left">
                <div class="asunto">
                    <?php Gral::_echo($vta_presupuesto_enviado->getAsunto()); ?>
                </div>
                <div class="destinatario">
                    <?php Gral::_echo($vta_presupuesto_enviado->getDestinatario()); ?>
                </div>
                <div class="observacion">
                    <?php Gral::_echo($vta_presupuesto_enviado->getObservacion()); ?>
                </div>                
            </td>

            <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
                <div class="estado">
                    <img src="imgs/btn_estado_<?php echo $vta_presupuesto_enviado->getEstado(); ?>.gif" width="15" alt="hab" />
                </div>
            </td>

            <td class="adm_tbl_lineas <?php echo $strong ?>" align="left">
                <div class="codigo_envio">
                    <?php Gral::_echo($vta_presupuesto_enviado->getCodigoEnvio()); ?>
                </div>
            </td>

            <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
                <div class="creado-por-descripcion">
                    <?php Gral::_echo($vta_presupuesto_enviado->getCreadoPorDescripcion()); ?>
                </div>
            </td>

            <td align='center' class='adm_tbl_lineas <?php echo $strong ?>' align="center">
                <ul class="adm_botones_acciones_modal_ficha">

                    <?php if (UsCredencial::getEsAcreditado('VTA_PRESUPUESTO_GESTION_ACCION_COMPROBANTE')) { ?>
                        <li class='adm_botones_accion vta-presupuesto-comprobante' vta_presupuesto_enviado_id='<?php echo $vta_presupuesto_enviado->getId() ?>'>
                            <img src="imgs/btn_pdf.png" width="15" alt="hab" title="Ver PDF Adjunto"/>
                        </li>
                    <?php } ?>

                    <?php if (UsCredencial::getEsAcreditado('VTA_PRESUPUESTO_GESTION_ACCION_ENVIAR_POR_CORREO')) { ?>
                        <li class='adm_botones_accion vta-presupuesto-ver-cuerpo-correo' vta_presupuesto_enviado_id='<?php echo $vta_presupuesto_enviado->getId() ?>'>
                            <img src="imgs/btn_email.png" width="15" alt="hab" title="Ver Email"/>
                        </li>
                    <?php } ?>

                </ul>
            </td>

        </tr>
    <?php } ?>
</table>