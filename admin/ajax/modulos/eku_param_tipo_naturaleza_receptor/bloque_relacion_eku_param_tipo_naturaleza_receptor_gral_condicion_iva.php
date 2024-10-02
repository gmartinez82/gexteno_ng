
    <?php if(UsCredencial::getEsAcreditado('EKU_PARAM_TIPO_NATURALEZA_RECEPTOR_ALTA_RELACION_GRAL_CONDICION_IVA')){ ?>
        <?php if($eku_param_tipo_naturaleza_receptor->getAltaMostrarBloqueRelacionEkuParamTipoNaturalezaReceptorGralCondicionIva()){ ?>
            <div class='relacion gral_condicion_iva' clase='gral_condicion_iva' padre='eku_param_tipo_naturaleza_receptor' padre_clase='EkuParamTipoNaturalezaReceptor' relacion='EkuParamTipoNaturalezaReceptorGralCondicionIva'>

                <div class='titulo'>
                    <label class="titulo-entidad-vinculada"><?php Lang::_lang('GralCondicionIvas') ?></label>
                    <label class="titulo-entidad-cantidad">            
                        <?php 
                        $cantidad_gral_condicion_ivas = $eku_param_tipo_naturaleza_receptor->getCantidadGralCondicionIvasXEkuParamTipoNaturalezaReceptorGralCondicionIva();
                        echo ($cantidad_gral_condicion_ivas > 0) ? '('.$cantidad_gral_condicion_ivas.')' : '' ;
                        ?>
                    </label>
                    <div class="titulo-entidad-comentarios">
                        <?php Lang::_lang('comentario_eku_param_tipo_naturaleza_receptor_alta_relacion_eku_param_tipo_naturaleza_receptor_gral_condicion_iva_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
                    </div>
                </div>

                <div class='buscador'>
                    <input name='gral_condicion_iva_txt_buscar' id='gral_condicion_iva_txt_buscar' type='text' />
                    <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

                    <?php if(UsCredencial::getEsAcreditado('EKU_PARAM_TIPO_NATURALEZA_RECEPTOR_ALTA_RELACION_GRAL_CONDICION_IVA_ACCIONES_ALTA')){ ?>
                    <div class="trigger wopenModal boton" archivo="ajax/modulos/gral_condicion_iva/gral_condicion_iva_alta.php" contenedor="div_modal" ancho="900" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'gral_condicion_iva', 'eku_param_tipo_naturaleza_receptor', <?php Gral::_echo($eku_param_tipo_naturaleza_receptor->getId()) ?>, 'EkuParamTipoNaturalezaReceptor', 'EkuParamTipoNaturalezaReceptorGralCondicionIva')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('gral_condicion_iva') ?>'>
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

