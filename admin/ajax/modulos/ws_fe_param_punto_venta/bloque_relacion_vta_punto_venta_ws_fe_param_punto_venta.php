
	<?php if(UsCredencial::getEsAcreditado('WS_FE_PARAM_PUNTO_VENTA_ALTA_RELACION_VTA_PUNTO_VENTA')){ ?>
	<div class='relacion vta_punto_venta' clase='vta_punto_venta' padre='ws_fe_param_punto_venta' padre_clase='WsFeParamPuntoVenta' relacion='VtaPuntoVentaWsFeParamPuntoVenta'>

	<div class='titulo'>
            <label class="titulo-entidad-vinculada"><?php Lang::_lang('VtaPuntoVentas') ?></label>
            <label class="titulo-entidad-cantidad">            
                <?php 
                $cantidad_vta_punto_ventas = $ws_fe_param_punto_venta->getCantidadVtaPuntoVentasXVtaPuntoVentaWsFeParamPuntoVenta();
                echo ($cantidad_vta_punto_ventas > 0) ? '('.$cantidad_vta_punto_ventas.')' : '' ;
                ?>
            </label>
            <div class="titulo-entidad-comentarios">
                <?php Lang::_lang('comentario_ws_fe_param_punto_venta_alta_relacion_vta_punto_venta_ws_fe_param_punto_venta_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
            </div>
	</div>

	<div class='buscador'>
            <input name='vta_punto_venta_txt_buscar' id='vta_punto_venta_txt_buscar' type='text' />
            <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

            <?php if(UsCredencial::getEsAcreditado('WS_FE_PARAM_PUNTO_VENTA_ALTA_RELACION_VTA_PUNTO_VENTA_ACCIONES_ALTA')){ ?>
            <div class="trigger wopenModal boton" archivo="ajax/modulos/vta_punto_venta/vta_punto_venta_alta.php" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'vta_punto_venta', 'ws_fe_param_punto_venta', <?php Gral::_echo($ws_fe_param_punto_venta->getId()) ?>, 'WsFeParamPuntoVenta', 'VtaPuntoVentaWsFeParamPuntoVenta')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('vta_punto_venta') ?>'>
                <img src='imgs/btn_add.png' border='0' width='18' align='absmiddle' />
            </div>
            <?php } ?>
		
	</div>

	<div class='datos'>
            &nbsp;
	</div>

</div>
<?php } ?>

