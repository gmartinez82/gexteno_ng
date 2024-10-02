
    <?php if(UsCredencial::getEsAcreditado('EKU_PARAM_TIPO_CONDICION_OPERACION_ALTA_RELACION_GRAL_FP_FORMA_PAGO')){ ?>
        <?php if($eku_param_tipo_condicion_operacion->getAltaMostrarBloqueRelacionEkuParamTipoCondicionOperacionGralFpFormaPago()){ ?>
            <div class='relacion gral_fp_forma_pago' clase='gral_fp_forma_pago' padre='eku_param_tipo_condicion_operacion' padre_clase='EkuParamTipoCondicionOperacion' relacion='EkuParamTipoCondicionOperacionGralFpFormaPago'>

                <div class='titulo'>
                    <label class="titulo-entidad-vinculada"><?php Lang::_lang('GralFpFormaPagos') ?></label>
                    <label class="titulo-entidad-cantidad">            
                        <?php 
                        $cantidad_gral_fp_forma_pagos = $eku_param_tipo_condicion_operacion->getCantidadGralFpFormaPagosXEkuParamTipoCondicionOperacionGralFpFormaPago();
                        echo ($cantidad_gral_fp_forma_pagos > 0) ? '('.$cantidad_gral_fp_forma_pagos.')' : '' ;
                        ?>
                    </label>
                    <div class="titulo-entidad-comentarios">
                        <?php Lang::_lang('comentario_eku_param_tipo_condicion_operacion_alta_relacion_eku_param_tipo_condicion_operacion_gral_fp_forma_pago_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
                    </div>
                </div>

                <div class='buscador'>
                    <input name='gral_fp_forma_pago_txt_buscar' id='gral_fp_forma_pago_txt_buscar' type='text' />
                    <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

                    <?php if(UsCredencial::getEsAcreditado('EKU_PARAM_TIPO_CONDICION_OPERACION_ALTA_RELACION_GRAL_FP_FORMA_PAGO_ACCIONES_ALTA')){ ?>
                    <div class="trigger wopenModal boton" archivo="ajax/modulos/gral_fp_forma_pago/gral_fp_forma_pago_alta.php" contenedor="div_modal" ancho="900" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'gral_fp_forma_pago', 'eku_param_tipo_condicion_operacion', <?php Gral::_echo($eku_param_tipo_condicion_operacion->getId()) ?>, 'EkuParamTipoCondicionOperacion', 'EkuParamTipoCondicionOperacionGralFpFormaPago')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('gral_fp_forma_pago') ?>'>
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

