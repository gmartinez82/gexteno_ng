
	<?php if(UsCredencial::getEsAcreditado('WS_FE_PARAM_TIPO_COMPROBANTE_ALTA_RELACION_VTA_TIPO_NOTA_DEBITO')){ ?>
	<div class='relacion vta_tipo_nota_debito' clase='vta_tipo_nota_debito' padre='ws_fe_param_tipo_comprobante' padre_clase='WsFeParamTipoComprobante' relacion='VtaTipoNotaDebitoWsFeParamTipoComprobante'>

	<div class='titulo'>
            <label class="titulo-entidad-vinculada"><?php Lang::_lang('VtaTipoNotaDebitos') ?></label>
            <label class="titulo-entidad-cantidad">            
                <?php 
                $cantidad_vta_tipo_nota_debitos = $ws_fe_param_tipo_comprobante->getCantidadVtaTipoNotaDebitosXVtaTipoNotaDebitoWsFeParamTipoComprobante();
                echo ($cantidad_vta_tipo_nota_debitos > 0) ? '('.$cantidad_vta_tipo_nota_debitos.')' : '' ;
                ?>
            </label>
            <div class="titulo-entidad-comentarios">
                <?php Lang::_lang('comentario_ws_fe_param_tipo_comprobante_alta_relacion_vta_tipo_nota_debito_ws_fe_param_tipo_comprobante_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
            </div>
	</div>

	<div class='buscador'>
            <input name='vta_tipo_nota_debito_txt_buscar' id='vta_tipo_nota_debito_txt_buscar' type='text' />
            <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

            <?php if(UsCredencial::getEsAcreditado('WS_FE_PARAM_TIPO_COMPROBANTE_ALTA_RELACION_VTA_TIPO_NOTA_DEBITO_ACCIONES_ALTA')){ ?>
            <div class="trigger wopenModal boton" archivo="ajax/modulos/vta_tipo_nota_debito/vta_tipo_nota_debito_alta.php" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'vta_tipo_nota_debito', 'ws_fe_param_tipo_comprobante', <?php Gral::_echo($ws_fe_param_tipo_comprobante->getId()) ?>, 'WsFeParamTipoComprobante', 'VtaTipoNotaDebitoWsFeParamTipoComprobante')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('vta_tipo_nota_debito') ?>'>
                <img src='imgs/btn_add.png' border='0' width='18' align='absmiddle' />
            </div>
            <?php } ?>
		
	</div>

	<div class='datos'>
            &nbsp;
	</div>

</div>
<?php } ?>

