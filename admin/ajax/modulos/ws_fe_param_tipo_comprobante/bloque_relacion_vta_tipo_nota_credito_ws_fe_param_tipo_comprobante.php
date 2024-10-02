
	<?php if(UsCredencial::getEsAcreditado('WS_FE_PARAM_TIPO_COMPROBANTE_ALTA_RELACION_VTA_TIPO_NOTA_CREDITO')){ ?>
	<div class='relacion vta_tipo_nota_credito' clase='vta_tipo_nota_credito' padre='ws_fe_param_tipo_comprobante' padre_clase='WsFeParamTipoComprobante' relacion='VtaTipoNotaCreditoWsFeParamTipoComprobante'>

	<div class='titulo'>
            <label class="titulo-entidad-vinculada"><?php Lang::_lang('VtaTipoNotaCreditos') ?></label>
            <label class="titulo-entidad-cantidad">            
                <?php 
                $cantidad_vta_tipo_nota_creditos = $ws_fe_param_tipo_comprobante->getCantidadVtaTipoNotaCreditosXVtaTipoNotaCreditoWsFeParamTipoComprobante();
                echo ($cantidad_vta_tipo_nota_creditos > 0) ? '('.$cantidad_vta_tipo_nota_creditos.')' : '' ;
                ?>
            </label>
            <div class="titulo-entidad-comentarios">
                <?php Lang::_lang('comentario_ws_fe_param_tipo_comprobante_alta_relacion_vta_tipo_nota_credito_ws_fe_param_tipo_comprobante_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
            </div>
	</div>

	<div class='buscador'>
            <input name='vta_tipo_nota_credito_txt_buscar' id='vta_tipo_nota_credito_txt_buscar' type='text' />
            <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

            <?php if(UsCredencial::getEsAcreditado('WS_FE_PARAM_TIPO_COMPROBANTE_ALTA_RELACION_VTA_TIPO_NOTA_CREDITO_ACCIONES_ALTA')){ ?>
            <div class="trigger wopenModal boton" archivo="ajax/modulos/vta_tipo_nota_credito/vta_tipo_nota_credito_alta.php" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'vta_tipo_nota_credito', 'ws_fe_param_tipo_comprobante', <?php Gral::_echo($ws_fe_param_tipo_comprobante->getId()) ?>, 'WsFeParamTipoComprobante', 'VtaTipoNotaCreditoWsFeParamTipoComprobante')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('vta_tipo_nota_credito') ?>'>
                <img src='imgs/btn_add.png' border='0' width='18' align='absmiddle' />
            </div>
            <?php } ?>
		
	</div>

	<div class='datos'>
            &nbsp;
	</div>

</div>
<?php } ?>

