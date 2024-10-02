<?php if ($vta_presupuesto->getVtaPresupuestoTipoDespacho()->getCodigo() == VtaPresupuestoTipoDespacho::TIPO_ENVIO_DOMICILIO) { ?>
    <?php if ($cli_cliente->getId() != '') { ?>
        <?php if (count($cli_cliente->getCliCentroRecepcions()) > 1) { ?>
            <div class="par">
                <div class="label"><?php Gral::_echo("Centro de Recepcion del Cliente") ?>: </div>
                <div class="dato">
                    <div class="readonly">
                        <?php Html::html_dib_select(1, 'cmb_cli_centro_recepcion_id', Gral::getCmbFiltro($cli_cliente->getCliCentroRecepcionsCmb(), '...'), $vta_presupuesto->getCliCentroRecepcionId(), 'textbox ' . $error_input_css); ?>
                    </div>
                    <div id="cmb_cli_centro_recepcion_id_error" class="label-error" ></div>
                </div>
            </div>
        <?php } else { ?>
            <div class="par">
                <div class="label"><?php Gral::_echo("Centro de Recepcion del Cliente") ?>: </div>
                <div class="dato">
                    <div class="readonly">
                        <?php Html::html_dib_select(1, 'cmb_cli_centro_recepcion_id', $cli_cliente->getCliCentroRecepcionsCmb(), $vta_presupuesto->getCliCentroRecepcionId(), 'textbox ' . $error_input_css); ?>
                    </div>
                    <div id="cmb_cli_centro_recepcion_id_error" class="label-error" ></div>
                </div>
            </div>
        <?php } ?>
    <?php } ?>
<?php }elseif ($vta_presupuesto->getVtaPresupuestoTipoDespacho()->getCodigo() == VtaPresupuestoTipoDespacho::TIPO_RETIRO_SUCURSAL){ ?>
    <div class="par">
        <div class="label"><?php Gral::_echo("Sucursal donde retira") ?>: </div>
        <div class="dato">
            <div class="readonly">
                <?php Html::html_dib_select(1, 'cmb_gral_sucursal_retiro', Gral::getCmbFiltro(GralSucursal::getGralSucursalsCmb(true), '...'), $gral_sucursal_retiro, 'textbox ' . $error_input_css); ?>
            </div>
            <div id="cmb_gral_sucursal_retiro_error" class="label-error" ></div>
        </div>
    </div>
<?php } ?>