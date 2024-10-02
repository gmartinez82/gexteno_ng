
<div class="titulo"><?php Lang::_lang('Historial de Emails de la OrdenPago') ?></div>

<div class="bloque-historial-emails">
    <table border="0" class="tabla-modal-ficha-emails">
        <tr>
            <td class="adm_tbl_encabezado" width="80" align='center'><?php Lang::_lang("Fecha"); ?></td>
            <td class="adm_tbl_encabezado" width="450" align='center'><?php Lang::_lang("Asunto"); ?></td>
            <td class="adm_tbl_encabezado" width="50" align='center'><?php Lang::_lang("Estado"); ?></td>
            <td class="adm_tbl_encabezado" width="300" align='center'><?php Lang::_lang("Mensaje de Envio"); ?></td>
            <td class="adm_tbl_encabezado" width="80" align='center'><?php Lang::_lang("Creado por"); ?></td>
            <td class="adm_tbl_encabezado" width="50" align='center'>&nbsp;</td>
        </tr>
        <?php
        $pde_orden_pago_enviados = $pde_orden_pago->getPdeOrdenPagoEnviados();
        $cont = 0;
        foreach ($pde_orden_pago_enviados as $pde_orden_pago_enviado) {
            $cont++;
            $strong = ($cont == 1) ? 'strong' : '';
            ?>
            <tr>
                <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
                    <div class="fecha">
                        <?php Gral::_echo(Gral::getFechaHoraToWEB($pde_orden_pago_enviado->getCreado())); ?>
                    </div>
                </td>	

                <td class="adm_tbl_lineas <?php echo $strong ?>" align="left">
                    <div class="asunto">
                        <?php Gral::_echo($pde_orden_pago_enviado->getAsunto()); ?>
                    </div>
                    <div class="destinatario">
                        <?php Gral::_echo($pde_orden_pago_enviado->getDestinatario()); ?>
                    </div>
                    <div class="observacion">
                        <?php Gral::_echo($pde_orden_pago_enviado->getObservacion()); ?>
                    </div>                 
                </td>

                <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
                    <div class="estado">
                        <img src="imgs/btn_estado_<?php echo $pde_orden_pago_enviado->getEstado(); ?>.gif" width="15" alt="hab" />
                    </div>
                </td>

                <td class="adm_tbl_lineas <?php echo $strong ?>" align="left">
                    <div class="codigo_envio">
                        <?php Gral::_echo($pde_orden_pago_enviado->getCodigoEnvio()); ?>
                    </div>
                </td>

                <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
                    <div class="creado-por-descripcion">
                        <?php Gral::_echo($pde_orden_pago_enviado->getCreadoPorDescripcion()); ?>
                    </div>
                </td>

                <td align='center' class='adm_tbl_lineas <?php echo $strong ?>' align="center">
                    <ul class="adm_botones_acciones_modal_ficha">

                        <?php if (UsCredencial::getEsAcreditado('VTA_FACTURA_GESTION_ACCION_COMPROBANTE')) { ?>
                            <li class='adm_botones_accion pde-orden_pago-comprobante' pde_orden_pago_enviado_id='<?php echo $pde_orden_pago_enviado->getId() ?>'>
                                <img src="imgs/btn_pdf.png" width="15" alt="hab" title="Ver PDF Adjunto"/>
                            </li>
                        <?php } ?>

                        <?php if (UsCredencial::getEsAcreditado('VTA_PRESUPUESTO_GESTION_ACCION_ENVIAR_POR_CORREO')) { ?>
                            <li class='adm_botones_accion pde-orden_pago-ver-cuerpo-correo' pde_orden_pago_enviado_id='<?php echo $pde_orden_pago_enviado->getId() ?>'>
                                <img src="imgs/btn_email.png" width="15" alt="hab" title="Ver Email"/>
                            </li>
                        <?php } ?>

                    </ul>
                </td>

            </tr>
        <?php } ?>
    </table>
</div>
<br />
