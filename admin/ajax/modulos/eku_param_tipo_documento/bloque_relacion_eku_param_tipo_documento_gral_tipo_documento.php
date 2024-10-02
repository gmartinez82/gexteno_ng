
    <?php if(UsCredencial::getEsAcreditado('EKU_PARAM_TIPO_DOCUMENTO_ALTA_RELACION_GRAL_TIPO_DOCUMENTO')){ ?>
        <?php if($eku_param_tipo_documento->getAltaMostrarBloqueRelacionEkuParamTipoDocumentoGralTipoDocumento()){ ?>
            <div class='relacion gral_tipo_documento' clase='gral_tipo_documento' padre='eku_param_tipo_documento' padre_clase='EkuParamTipoDocumento' relacion='EkuParamTipoDocumentoGralTipoDocumento'>

                <div class='titulo'>
                    <label class="titulo-entidad-vinculada"><?php Lang::_lang('GralTipoDocumentos') ?></label>
                    <label class="titulo-entidad-cantidad">            
                        <?php 
                        $cantidad_gral_tipo_documentos = $eku_param_tipo_documento->getCantidadGralTipoDocumentosXEkuParamTipoDocumentoGralTipoDocumento();
                        echo ($cantidad_gral_tipo_documentos > 0) ? '('.$cantidad_gral_tipo_documentos.')' : '' ;
                        ?>
                    </label>
                    <div class="titulo-entidad-comentarios">
                        <?php Lang::_lang('comentario_eku_param_tipo_documento_alta_relacion_eku_param_tipo_documento_gral_tipo_documento_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
                    </div>
                </div>

                <div class='buscador'>
                    <input name='gral_tipo_documento_txt_buscar' id='gral_tipo_documento_txt_buscar' type='text' />
                    <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

                    <?php if(UsCredencial::getEsAcreditado('EKU_PARAM_TIPO_DOCUMENTO_ALTA_RELACION_GRAL_TIPO_DOCUMENTO_ACCIONES_ALTA')){ ?>
                    <div class="trigger wopenModal boton" archivo="ajax/modulos/gral_tipo_documento/gral_tipo_documento_alta.php" contenedor="div_modal" ancho="900" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'gral_tipo_documento', 'eku_param_tipo_documento', <?php Gral::_echo($eku_param_tipo_documento->getId()) ?>, 'EkuParamTipoDocumento', 'EkuParamTipoDocumentoGralTipoDocumento')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('gral_tipo_documento') ?>'>
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

