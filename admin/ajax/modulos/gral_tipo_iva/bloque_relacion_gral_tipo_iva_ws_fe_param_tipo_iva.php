
    <?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_IVA_ALTA_RELACION_WS_FE_PARAM_TIPO_IVA')){ ?>
        <?php if($gral_tipo_iva->getAltaMostrarBloqueRelacionGralTipoIvaWsFeParamTipoIva()){ ?>
            <div class='relacion ws_fe_param_tipo_iva' clase='ws_fe_param_tipo_iva' padre='gral_tipo_iva' padre_clase='GralTipoIva' relacion='GralTipoIvaWsFeParamTipoIva'>

                <div class='titulo'>
                    <label class="titulo-entidad-vinculada"><?php Lang::_lang('WsFeParamTipoIvas') ?></label>
                    <label class="titulo-entidad-cantidad">            
                        <?php 
                        $cantidad_ws_fe_param_tipo_ivas = $gral_tipo_iva->getCantidadWsFeParamTipoIvasXGralTipoIvaWsFeParamTipoIva();
                        echo ($cantidad_ws_fe_param_tipo_ivas > 0) ? '('.$cantidad_ws_fe_param_tipo_ivas.')' : '' ;
                        ?>
                    </label>
                    <div class="titulo-entidad-comentarios">
                        <?php Lang::_lang('comentario_gral_tipo_iva_alta_relacion_gral_tipo_iva_ws_fe_param_tipo_iva_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
                    </div>
                </div>

                <div class='buscador'>
                    <input name='ws_fe_param_tipo_iva_txt_buscar' id='ws_fe_param_tipo_iva_txt_buscar' type='text' />
                    <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

                    <?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_IVA_ALTA_RELACION_WS_FE_PARAM_TIPO_IVA_ACCIONES_ALTA')){ ?>
                    <div class="trigger wopenModal boton" archivo="ajax/modulos/ws_fe_param_tipo_iva/ws_fe_param_tipo_iva_alta.php" contenedor="div_modal" ancho="900" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'ws_fe_param_tipo_iva', 'gral_tipo_iva', <?php Gral::_echo($gral_tipo_iva->getId()) ?>, 'GralTipoIva', 'GralTipoIvaWsFeParamTipoIva')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('ws_fe_param_tipo_iva') ?>'>
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

