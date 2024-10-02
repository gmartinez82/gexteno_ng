
    <?php if(UsCredencial::getEsAcreditado('GRAL_FP_FORMA_PAGO_ALTA_RELACION_EKU_PARAM_TIPO_CONDICION_OPERACION')){ ?>
        <?php if($gral_fp_forma_pago->getAltaMostrarBloqueRelacionEkuParamTipoCondicionOperacionGralFpFormaPago()){ ?>
            <div class='relacion eku_param_tipo_condicion_operacion' clase='eku_param_tipo_condicion_operacion' padre='gral_fp_forma_pago' padre_clase='GralFpFormaPago' relacion='EkuParamTipoCondicionOperacionGralFpFormaPago'>

                <div class='titulo'>
                    <label class="titulo-entidad-vinculada"><?php Lang::_lang('EkuParamTipoCondicionOperacions') ?></label>
                    <label class="titulo-entidad-cantidad">            
                        <?php 
                        $cantidad_eku_param_tipo_condicion_operacions = $gral_fp_forma_pago->getCantidadEkuParamTipoCondicionOperacionsXEkuParamTipoCondicionOperacionGralFpFormaPago();
                        echo ($cantidad_eku_param_tipo_condicion_operacions > 0) ? '('.$cantidad_eku_param_tipo_condicion_operacions.')' : '' ;
                        ?>
                    </label>
                    <div class="titulo-entidad-comentarios">
                        <?php Lang::_lang('comentario_gral_fp_forma_pago_alta_relacion_eku_param_tipo_condicion_operacion_gral_fp_forma_pago_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
                    </div>
                </div>

                <div class='buscador'>
                    <input name='eku_param_tipo_condicion_operacion_txt_buscar' id='eku_param_tipo_condicion_operacion_txt_buscar' type='text' />
                    <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

                    <?php if(UsCredencial::getEsAcreditado('GRAL_FP_FORMA_PAGO_ALTA_RELACION_EKU_PARAM_TIPO_CONDICION_OPERACION_ACCIONES_ALTA')){ ?>
                    <div class="trigger wopenModal boton" archivo="ajax/modulos/eku_param_tipo_condicion_operacion/eku_param_tipo_condicion_operacion_alta.php" contenedor="div_modal" ancho="900" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'eku_param_tipo_condicion_operacion', 'gral_fp_forma_pago', <?php Gral::_echo($gral_fp_forma_pago->getId()) ?>, 'GralFpFormaPago', 'EkuParamTipoCondicionOperacionGralFpFormaPago')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('eku_param_tipo_condicion_operacion') ?>'>
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

