
	<?php if(UsCredencial::getEsAcreditado('WS_FE_PARAM_TIPO_TRIBUTO_ALTA_RELACION_VTA_TRIBUTO')){ ?>
	<div class='relacion vta_tributo' clase='vta_tributo' padre='ws_fe_param_tipo_tributo' padre_clase='WsFeParamTipoTributo' relacion='VtaTributoWsFeParamTipoTributo'>

	<div class='titulo'>
            <label class="titulo-entidad-vinculada"><?php Lang::_lang('VtaTributos') ?></label>
            <label class="titulo-entidad-cantidad">            
                <?php 
                $cantidad_vta_tributos = $ws_fe_param_tipo_tributo->getCantidadVtaTributosXVtaTributoWsFeParamTipoTributo();
                echo ($cantidad_vta_tributos > 0) ? '('.$cantidad_vta_tributos.')' : '' ;
                ?>
            </label>
            <div class="titulo-entidad-comentarios">
                <?php Lang::_lang('comentario_ws_fe_param_tipo_tributo_alta_relacion_vta_tributo_ws_fe_param_tipo_tributo_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
            </div>
	</div>

	<div class='buscador'>
            <input name='vta_tributo_txt_buscar' id='vta_tributo_txt_buscar' type='text' />
            <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

            <?php if(UsCredencial::getEsAcreditado('WS_FE_PARAM_TIPO_TRIBUTO_ALTA_RELACION_VTA_TRIBUTO_ACCIONES_ALTA')){ ?>
            <div class="trigger wopenModal boton" archivo="ajax/modulos/vta_tributo/vta_tributo_alta.php" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'vta_tributo', 'ws_fe_param_tipo_tributo', <?php Gral::_echo($ws_fe_param_tipo_tributo->getId()) ?>, 'WsFeParamTipoTributo', 'VtaTributoWsFeParamTipoTributo')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('vta_tributo') ?>'>
                <img src='imgs/btn_add.png' border='0' width='18' align='absmiddle' />
            </div>
            <?php } ?>
		
	</div>

	<div class='datos'>
            &nbsp;
	</div>

</div>
<?php } ?>

