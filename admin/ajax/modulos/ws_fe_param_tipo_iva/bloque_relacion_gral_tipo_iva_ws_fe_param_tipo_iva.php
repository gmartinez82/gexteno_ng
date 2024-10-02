
	<?php if(UsCredencial::getEsAcreditado('WS_FE_PARAM_TIPO_IVA_ALTA_RELACION_GRAL_TIPO_IVA')){ ?>
	<div class='relacion gral_tipo_iva' clase='gral_tipo_iva' padre='ws_fe_param_tipo_iva' padre_clase='WsFeParamTipoIva' relacion='GralTipoIvaWsFeParamTipoIva'>

	<div class='titulo'>
            <label class="titulo-entidad-vinculada"><?php Lang::_lang('GralTipoIvas') ?></label>
            <label class="titulo-entidad-cantidad">            
                <?php 
                $cantidad_gral_tipo_ivas = $ws_fe_param_tipo_iva->getCantidadGralTipoIvasXGralTipoIvaWsFeParamTipoIva();
                echo ($cantidad_gral_tipo_ivas > 0) ? '('.$cantidad_gral_tipo_ivas.')' : '' ;
                ?>
            </label>
            <div class="titulo-entidad-comentarios">
                <?php Lang::_lang('comentario_ws_fe_param_tipo_iva_alta_relacion_gral_tipo_iva_ws_fe_param_tipo_iva_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
            </div>
	</div>

	<div class='buscador'>
            <input name='gral_tipo_iva_txt_buscar' id='gral_tipo_iva_txt_buscar' type='text' />
            <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

            <?php if(UsCredencial::getEsAcreditado('WS_FE_PARAM_TIPO_IVA_ALTA_RELACION_GRAL_TIPO_IVA_ACCIONES_ALTA')){ ?>
            <div class="trigger wopenModal boton" archivo="ajax/modulos/gral_tipo_iva/gral_tipo_iva_alta.php" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'gral_tipo_iva', 'ws_fe_param_tipo_iva', <?php Gral::_echo($ws_fe_param_tipo_iva->getId()) ?>, 'WsFeParamTipoIva', 'GralTipoIvaWsFeParamTipoIva')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('gral_tipo_iva') ?>'>
                <img src='imgs/btn_add.png' border='0' width='18' align='absmiddle' />
            </div>
            <?php } ?>
		
	</div>

	<div class='datos'>
            &nbsp;
	</div>

</div>
<?php } ?>

