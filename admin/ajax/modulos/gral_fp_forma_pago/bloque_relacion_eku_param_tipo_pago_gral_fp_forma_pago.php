
    <?php if(UsCredencial::getEsAcreditado('GRAL_FP_FORMA_PAGO_ALTA_RELACION_EKU_PARAM_TIPO_PAGO')){ ?>
        <?php if($gral_fp_forma_pago->getAltaMostrarBloqueRelacionEkuParamTipoPagoGralFpFormaPago()){ ?>
            <div class='relacion eku_param_tipo_pago' clase='eku_param_tipo_pago' padre='gral_fp_forma_pago' padre_clase='GralFpFormaPago' relacion='EkuParamTipoPagoGralFpFormaPago'>

                <div class='titulo'>
                    <label class="titulo-entidad-vinculada"><?php Lang::_lang('EkuParamTipoPagos') ?></label>
                    <label class="titulo-entidad-cantidad">            
                        <?php 
                        $cantidad_eku_param_tipo_pagos = $gral_fp_forma_pago->getCantidadEkuParamTipoPagosXEkuParamTipoPagoGralFpFormaPago();
                        echo ($cantidad_eku_param_tipo_pagos > 0) ? '('.$cantidad_eku_param_tipo_pagos.')' : '' ;
                        ?>
                    </label>
                    <div class="titulo-entidad-comentarios">
                        <?php Lang::_lang('comentario_gral_fp_forma_pago_alta_relacion_eku_param_tipo_pago_gral_fp_forma_pago_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
                    </div>
                </div>

                <div class='buscador'>
                    <input name='eku_param_tipo_pago_txt_buscar' id='eku_param_tipo_pago_txt_buscar' type='text' />
                    <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

                    <?php if(UsCredencial::getEsAcreditado('GRAL_FP_FORMA_PAGO_ALTA_RELACION_EKU_PARAM_TIPO_PAGO_ACCIONES_ALTA')){ ?>
                    <div class="trigger wopenModal boton" archivo="ajax/modulos/eku_param_tipo_pago/eku_param_tipo_pago_alta.php" contenedor="div_modal" ancho="900" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'eku_param_tipo_pago', 'gral_fp_forma_pago', <?php Gral::_echo($gral_fp_forma_pago->getId()) ?>, 'GralFpFormaPago', 'EkuParamTipoPagoGralFpFormaPago')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('eku_param_tipo_pago') ?>'>
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

