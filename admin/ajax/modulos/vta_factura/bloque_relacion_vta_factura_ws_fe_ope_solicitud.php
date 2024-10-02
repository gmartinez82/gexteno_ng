
	<?php if(UsCredencial::getEsAcreditado('VTA_FACTURA_ALTA_RELACION_WS_FE_OPE_SOLICITUD')){ ?>
	<div class='relacion ws_fe_ope_solicitud' clase='ws_fe_ope_solicitud' padre='vta_factura' padre_clase='VtaFactura' relacion='VtaFacturaWsFeOpeSolicitud'>

	<div class='titulo'>
            <label class="titulo-entidad-vinculada"><?php Lang::_lang('WsFeOpeSolicituds') ?></label>
            <label class="titulo-entidad-cantidad">            
                <?php 
                $cantidad_ws_fe_ope_solicituds = $vta_factura->getCantidadWsFeOpeSolicitudsXVtaFacturaWsFeOpeSolicitud();
                echo ($cantidad_ws_fe_ope_solicituds > 0) ? '('.$cantidad_ws_fe_ope_solicituds.')' : '' ;
                ?>
            </label>
            <div class="titulo-entidad-comentarios">
                <?php Lang::_lang('comentario_vta_factura_alta_relacion_vta_factura_ws_fe_ope_solicitud_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
            </div>
	</div>

	<div class='buscador'>
            <input name='ws_fe_ope_solicitud_txt_buscar' id='ws_fe_ope_solicitud_txt_buscar' type='text' />
            <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

            <?php if(UsCredencial::getEsAcreditado('VTA_FACTURA_ALTA_RELACION_WS_FE_OPE_SOLICITUD_ACCIONES_ALTA')){ ?>
            <div class="trigger wopenModal boton" archivo="ajax/modulos/ws_fe_ope_solicitud/ws_fe_ope_solicitud_alta.php" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'ws_fe_ope_solicitud', 'vta_factura', <?php Gral::_echo($vta_factura->getId()) ?>, 'VtaFactura', 'VtaFacturaWsFeOpeSolicitud')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('ws_fe_ope_solicitud') ?>'>
                <img src='imgs/btn_add.png' border='0' width='18' align='absmiddle' />
            </div>
            <?php } ?>
		
	</div>

	<div class='datos'>
            &nbsp;
	</div>

</div>
<?php } ?>

