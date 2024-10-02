
	<?php if(UsCredencial::getEsAcreditado('VTA_TRIBUTO_ALTA_RELACION_WS_FE_PARAM_TIPO_TRIBUTO')){ ?>
	<div class='relacion ws_fe_param_tipo_tributo' clase='ws_fe_param_tipo_tributo' padre='vta_tributo' padre_clase='VtaTributo' relacion='VtaTributoWsFeParamTipoTributo'>

	<div class='titulo'>
            <label class="titulo-entidad-vinculada"><?php Lang::_lang('WsFeParamTipoTributos') ?></label>
            <label class="titulo-entidad-cantidad">            
                <?php 
                $cantidad_ws_fe_param_tipo_tributos = $vta_tributo->getCantidadWsFeParamTipoTributosXVtaTributoWsFeParamTipoTributo();
                echo ($cantidad_ws_fe_param_tipo_tributos > 0) ? '('.$cantidad_ws_fe_param_tipo_tributos.')' : '' ;
                ?>
            </label>
            <div class="titulo-entidad-comentarios">
                <?php Lang::_lang('comentario_vta_tributo_alta_relacion_vta_tributo_ws_fe_param_tipo_tributo_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
            </div>
	</div>

	<div class='buscador'>
            <input name='ws_fe_param_tipo_tributo_txt_buscar' id='ws_fe_param_tipo_tributo_txt_buscar' type='text' />
            <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

            <?php if(UsCredencial::getEsAcreditado('VTA_TRIBUTO_ALTA_RELACION_WS_FE_PARAM_TIPO_TRIBUTO_ACCIONES_ALTA')){ ?>
            <div class="trigger wopenModal boton" archivo="ajax/modulos/ws_fe_param_tipo_tributo/ws_fe_param_tipo_tributo_alta.php" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'ws_fe_param_tipo_tributo', 'vta_tributo', <?php Gral::_echo($vta_tributo->getId()) ?>, 'VtaTributo', 'VtaTributoWsFeParamTipoTributo')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('ws_fe_param_tipo_tributo') ?>'>
                <img src='imgs/btn_add.png' border='0' width='18' align='absmiddle' />
            </div>
            <?php } ?>
		
	</div>

	<div class='datos'>
            &nbsp;
	</div>

</div>
<?php } ?>

