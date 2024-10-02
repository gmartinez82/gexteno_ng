<table border="0" class="tabla-modal ingresos">
    <tr>
        <td class="adm_tbl_encabezado" width="25" align="center">
            #
        </td>
        <td class="adm_tbl_encabezado" width="100" align="center">
            Emision
        </td>

        <td class="adm_tbl_encabezado" width="120" align="center">
            Tipo
        </td>

        <td class="adm_tbl_encabezado" width="250" align="center">
            Descripcion
        </td>

        <td class="adm_tbl_encabezado" width="100" align="center">
            Referencia
        </td>

        <td class="adm_tbl_encabezado" width="120" align="center">
            Forma de Pago
        </td>

        <td class="adm_tbl_encabezado" width="120" align="center">
            Importe
        </td>

        <td class="adm_tbl_encabezado" width="150" align="center">
            Creado
        </td>

        <td class="adm_tbl_encabezado" width="150" align="center">
            Creado Por
        </td>

        <td class="adm_tbl_encabezado" width="" align="center">
            &nbsp;
        </td>

    </tr>
    <?php
    $cont = 0;
    foreach ($fnd_caja_ingresos as $fnd_caja_ingreso) {
        $cont++;

        $fnd_caja_tipo_ingreso = $fnd_caja_ingreso->getFndCajaTipoIngreso();
        $gral_fp_forma_pago = $fnd_caja_ingreso->getGralFpFormaPago();
        ?>
        <tr id="tr_pde_orden_pago_pde_comprobante_gestion_uno_<?php echo $fnd_caja_ingreso->getId() ?>" class="uno" identificador="<?php echo $fnd_caja_ingreso->getId() ?>">
            <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="center">
                <label class="id">
                    <?php Gral::_echo($fnd_caja_ingreso->getId()) ?>
                </label>    
            </td>   
            <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="center">
                <label class="fecha-emision">
                    <?php Gral::_echo(Gral::getFechaToWEB($fnd_caja_ingreso->getCreado())) ?>
                </label>
            </td>
            <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="center">
                <label class="tipo">
                    <?php Gral::_echo($fnd_caja_tipo_ingreso->getDescripcion()) ?>
                </label>
            </td>   

            <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="left">
                <label class="descripcion">
                    <?php Gral::_echo($fnd_caja_ingreso->getDescripcion()) ?>
                </label>
                <label class="comentario">
                    <?php Gral::_echo($fnd_caja_ingreso->getObservacion()) ?>
                </label>
            </td>   

            <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="center">
                <label class="nro-comprobante">
                    <?php Gral::_echo($fnd_caja_ingreso->getCodigoReferencia()) ?>
                </label>
            </td>   

            <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="center">
                <label class="forma-pago">
                    <?php Gral::_echo($gral_fp_forma_pago->getDescripcion()) ?>
                </label>
            </td>   

            <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="right">
                <label class="importe">
                    <?php Gral::_echoImp($fnd_caja_ingreso->getImporte()) ?>
                </label>
            </td>   

            <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="center">
                <label class="creado">
                    <?php Gral::_echo(Gral::getFechaHoraToWEB($fnd_caja_ingreso->getCreado())) ?>
                </label>
            </td>   

            <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="center">
                <label class="creado-por">
                    <?php Gral::_echo($fnd_caja_ingreso->getCreadoPorDescripcion()) ?>
                </label>
            </td>   

            <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="center">
                <?php if (UsCredencial::getEsAcreditado('FND_CAJA_GESTION_ACCION_FICHA_INGRESOS_MODIFICAR')) { ?>
                    <?php if ($fnd_caja_tipo_estado->getCodigo() == FndCajaTipoEstado::TIPO_ABIERTA) { ?>
                        <?php if($gral_fp_forma_pago->getCodigo() != GralFpFormaPago::TIPO_CHEQUE){ ?>
                        <img class="adm_botones_accion modificar" src='imgs/btn_modi.gif' width='20' border='0' />
                         <?php } ?>
                    <?php } ?>
                <?php } ?>
            </td>   

        </tr>
    <?php } ?>
</table>