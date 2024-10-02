
    <?php if(UsCredencial::getEsAcreditado('EKU_PARAM_DENOMINACION_TARJETA_ALTA_RELACION_GRAL_FP_MEDIO_PAGO')){ ?>
        <?php if($eku_param_denominacion_tarjeta->getAltaMostrarBloqueRelacionEkuParamDenominacionTarjetaGralFpMedioPago()){ ?>
            <div class='relacion gral_fp_medio_pago' clase='gral_fp_medio_pago' padre='eku_param_denominacion_tarjeta' padre_clase='EkuParamDenominacionTarjeta' relacion='EkuParamDenominacionTarjetaGralFpMedioPago'>

                <div class='titulo'>
                    <label class="titulo-entidad-vinculada"><?php Lang::_lang('GralFpMedioPagos') ?></label>
                    <label class="titulo-entidad-cantidad">            
                        <?php 
                        $cantidad_gral_fp_medio_pagos = $eku_param_denominacion_tarjeta->getCantidadGralFpMedioPagosXEkuParamDenominacionTarjetaGralFpMedioPago();
                        echo ($cantidad_gral_fp_medio_pagos > 0) ? '('.$cantidad_gral_fp_medio_pagos.')' : '' ;
                        ?>
                    </label>
                    <div class="titulo-entidad-comentarios">
                        <?php Lang::_lang('comentario_eku_param_denominacion_tarjeta_alta_relacion_eku_param_denominacion_tarjeta_gral_fp_medio_pago_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
                    </div>
                </div>

                <div class='buscador'>
                    <input name='gral_fp_medio_pago_txt_buscar' id='gral_fp_medio_pago_txt_buscar' type='text' />
                    <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

                    <?php if(UsCredencial::getEsAcreditado('EKU_PARAM_DENOMINACION_TARJETA_ALTA_RELACION_GRAL_FP_MEDIO_PAGO_ACCIONES_ALTA')){ ?>
                    <div class="trigger wopenModal boton" archivo="ajax/modulos/gral_fp_medio_pago/gral_fp_medio_pago_alta.php" contenedor="div_modal" ancho="900" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'gral_fp_medio_pago', 'eku_param_denominacion_tarjeta', <?php Gral::_echo($eku_param_denominacion_tarjeta->getId()) ?>, 'EkuParamDenominacionTarjeta', 'EkuParamDenominacionTarjetaGralFpMedioPago')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('gral_fp_medio_pago') ?>'>
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

