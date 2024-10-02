
    <?php if(UsCredencial::getEsAcreditado('GRAL_CONDICION_IVA_ALTA_RELACION_EKU_PARAM_TIPO_NATURALEZA_RECEPTOR')){ ?>
        <?php if($gral_condicion_iva->getAltaMostrarBloqueRelacionEkuParamTipoNaturalezaReceptorGralCondicionIva()){ ?>
            <div class='relacion eku_param_tipo_naturaleza_receptor' clase='eku_param_tipo_naturaleza_receptor' padre='gral_condicion_iva' padre_clase='GralCondicionIva' relacion='EkuParamTipoNaturalezaReceptorGralCondicionIva'>

                <div class='titulo'>
                    <label class="titulo-entidad-vinculada"><?php Lang::_lang('EkuParamTipoNaturalezaReceptors') ?></label>
                    <label class="titulo-entidad-cantidad">            
                        <?php 
                        $cantidad_eku_param_tipo_naturaleza_receptors = $gral_condicion_iva->getCantidadEkuParamTipoNaturalezaReceptorsXEkuParamTipoNaturalezaReceptorGralCondicionIva();
                        echo ($cantidad_eku_param_tipo_naturaleza_receptors > 0) ? '('.$cantidad_eku_param_tipo_naturaleza_receptors.')' : '' ;
                        ?>
                    </label>
                    <div class="titulo-entidad-comentarios">
                        <?php Lang::_lang('comentario_gral_condicion_iva_alta_relacion_eku_param_tipo_naturaleza_receptor_gral_condicion_iva_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
                    </div>
                </div>

                <div class='buscador'>
                    <input name='eku_param_tipo_naturaleza_receptor_txt_buscar' id='eku_param_tipo_naturaleza_receptor_txt_buscar' type='text' />
                    <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

                    <?php if(UsCredencial::getEsAcreditado('GRAL_CONDICION_IVA_ALTA_RELACION_EKU_PARAM_TIPO_NATURALEZA_RECEPTOR_ACCIONES_ALTA')){ ?>
                    <div class="trigger wopenModal boton" archivo="ajax/modulos/eku_param_tipo_naturaleza_receptor/eku_param_tipo_naturaleza_receptor_alta.php" contenedor="div_modal" ancho="900" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'eku_param_tipo_naturaleza_receptor', 'gral_condicion_iva', <?php Gral::_echo($gral_condicion_iva->getId()) ?>, 'GralCondicionIva', 'EkuParamTipoNaturalezaReceptorGralCondicionIva')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('eku_param_tipo_naturaleza_receptor') ?>'>
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

