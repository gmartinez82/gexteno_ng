
    <?php if(UsCredencial::getEsAcreditado('VTA_PUNTO_VENTA_ALTA_RELACION_VTA_PRESUPUESTO_TIPO_VENTA')){ ?>
        <?php if($vta_punto_venta->getAltaMostrarBloqueRelacionVtaPuntoVentaVtaPresupuestoTipoVenta()){ ?>
            <div class='relacion vta_presupuesto_tipo_venta' clase='vta_presupuesto_tipo_venta' padre='vta_punto_venta' padre_clase='VtaPuntoVenta' relacion='VtaPuntoVentaVtaPresupuestoTipoVenta'>

                <div class='titulo'>
                    <label class="titulo-entidad-vinculada"><?php Lang::_lang('VtaPresupuestoTipoVentas') ?></label>
                    <label class="titulo-entidad-cantidad">            
                        <?php 
                        $cantidad_vta_presupuesto_tipo_ventas = $vta_punto_venta->getCantidadVtaPresupuestoTipoVentasXVtaPuntoVentaVtaPresupuestoTipoVenta();
                        echo ($cantidad_vta_presupuesto_tipo_ventas > 0) ? '('.$cantidad_vta_presupuesto_tipo_ventas.')' : '' ;
                        ?>
                    </label>
                    <div class="titulo-entidad-comentarios">
                        <?php Lang::_lang('comentario_vta_punto_venta_alta_relacion_vta_punto_venta_vta_presupuesto_tipo_venta_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
                    </div>
                </div>

                <div class='buscador'>
                    <input name='vta_presupuesto_tipo_venta_txt_buscar' id='vta_presupuesto_tipo_venta_txt_buscar' type='text' />
                    <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

                    <?php if(UsCredencial::getEsAcreditado('VTA_PUNTO_VENTA_ALTA_RELACION_VTA_PRESUPUESTO_TIPO_VENTA_ACCIONES_ALTA')){ ?>
                    <div class="trigger wopenModal boton" archivo="ajax/modulos/vta_presupuesto_tipo_venta/vta_presupuesto_tipo_venta_alta.php" contenedor="div_modal" ancho="900" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'vta_presupuesto_tipo_venta', 'vta_punto_venta', <?php Gral::_echo($vta_punto_venta->getId()) ?>, 'VtaPuntoVenta', 'VtaPuntoVentaVtaPresupuestoTipoVenta')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('vta_presupuesto_tipo_venta') ?>'>
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

