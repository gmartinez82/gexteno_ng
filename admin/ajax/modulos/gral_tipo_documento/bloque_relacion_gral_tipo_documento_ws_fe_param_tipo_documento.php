
    <?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_DOCUMENTO_ALTA_RELACION_WS_FE_PARAM_TIPO_DOCUMENTO')){ ?>
        <?php if($gral_tipo_documento->getAltaMostrarBloqueRelacionGralTipoDocumentoWsFeParamTipoDocumento()){ ?>
            <div class='relacion ws_fe_param_tipo_documento' clase='ws_fe_param_tipo_documento' padre='gral_tipo_documento' padre_clase='GralTipoDocumento' relacion='GralTipoDocumentoWsFeParamTipoDocumento'>

                <div class='titulo'>
                    <label class="titulo-entidad-vinculada"><?php Lang::_lang('WsFeParamTipoDocumentos') ?></label>
                    <label class="titulo-entidad-cantidad">            
                        <?php 
                        $cantidad_ws_fe_param_tipo_documentos = $gral_tipo_documento->getCantidadWsFeParamTipoDocumentosXGralTipoDocumentoWsFeParamTipoDocumento();
                        echo ($cantidad_ws_fe_param_tipo_documentos > 0) ? '('.$cantidad_ws_fe_param_tipo_documentos.')' : '' ;
                        ?>
                    </label>
                    <div class="titulo-entidad-comentarios">
                        <?php Lang::_lang('comentario_gral_tipo_documento_alta_relacion_gral_tipo_documento_ws_fe_param_tipo_documento_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
                    </div>
                </div>

                <div class='buscador'>
                    <input name='ws_fe_param_tipo_documento_txt_buscar' id='ws_fe_param_tipo_documento_txt_buscar' type='text' />
                    <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

                    <?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_DOCUMENTO_ALTA_RELACION_WS_FE_PARAM_TIPO_DOCUMENTO_ACCIONES_ALTA')){ ?>
                    <div class="trigger wopenModal boton" archivo="ajax/modulos/ws_fe_param_tipo_documento/ws_fe_param_tipo_documento_alta.php" contenedor="div_modal" ancho="900" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'ws_fe_param_tipo_documento', 'gral_tipo_documento', <?php Gral::_echo($gral_tipo_documento->getId()) ?>, 'GralTipoDocumento', 'GralTipoDocumentoWsFeParamTipoDocumento')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('ws_fe_param_tipo_documento') ?>'>
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

