
    <?php if(UsCredencial::getEsAcreditado('VTA_PUNTO_VENTA_ALTA_RELACION_WS_FE_PARAM_PUNTO_VENTA')){ ?>
        <?php if($vta_punto_venta->getAltaMostrarBloqueRelacionVtaPuntoVentaWsFeParamPuntoVenta()){ ?>
            <div class='relacion ws_fe_param_punto_venta' clase='ws_fe_param_punto_venta' padre='vta_punto_venta' padre_clase='VtaPuntoVenta' relacion='VtaPuntoVentaWsFeParamPuntoVenta'>

                <div class='titulo'>
                    <label class="titulo-entidad-vinculada"><?php Lang::_lang('WsFeParamPuntoVentas') ?></label>
                    <label class="titulo-entidad-cantidad">            
                        <?php 
                        $cantidad_ws_fe_param_punto_ventas = $vta_punto_venta->getCantidadWsFeParamPuntoVentasXVtaPuntoVentaWsFeParamPuntoVenta();
                        echo ($cantidad_ws_fe_param_punto_ventas > 0) ? '('.$cantidad_ws_fe_param_punto_ventas.')' : '' ;
                        ?>
                    </label>
                    <div class="titulo-entidad-comentarios">
                        <?php Lang::_lang('comentario_vta_punto_venta_alta_relacion_vta_punto_venta_ws_fe_param_punto_venta_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
                    </div>
                </div>

                <div class='buscador'>
                    <input name='ws_fe_param_punto_venta_txt_buscar' id='ws_fe_param_punto_venta_txt_buscar' type='text' />
                    <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

                    <?php if(UsCredencial::getEsAcreditado('VTA_PUNTO_VENTA_ALTA_RELACION_WS_FE_PARAM_PUNTO_VENTA_ACCIONES_ALTA')){ ?>
                    <div class="trigger wopenModal boton" archivo="ajax/modulos/ws_fe_param_punto_venta/ws_fe_param_punto_venta_alta.php" contenedor="div_modal" ancho="900" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'ws_fe_param_punto_venta', 'vta_punto_venta', <?php Gral::_echo($vta_punto_venta->getId()) ?>, 'VtaPuntoVenta', 'VtaPuntoVentaWsFeParamPuntoVenta')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('ws_fe_param_punto_venta') ?>'>
                        <img src='imgs/btn_add.png' border='0' width='18' align='absmiddle' />
                    </div>
                    <?php } ?>

                </div>

                <div class='datos'>
                    &nbsp;
                </div>

            </div>
        <?php } ?>
    <?php } ?>

