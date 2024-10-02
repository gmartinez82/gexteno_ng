
    <?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_IVA_ALTA_RELACION_EKU_PARAM_TIPO_AFECTACION_TRIBUTARIA')){ ?>
        <?php if($gral_tipo_iva->getAltaMostrarBloqueRelacionEkuParamTipoAfectacionTributariaGralTipoIva()){ ?>
            <div class='relacion eku_param_tipo_afectacion_tributaria' clase='eku_param_tipo_afectacion_tributaria' padre='gral_tipo_iva' padre_clase='GralTipoIva' relacion='EkuParamTipoAfectacionTributariaGralTipoIva'>

                <div class='titulo'>
                    <label class="titulo-entidad-vinculada"><?php Lang::_lang('EkuParamTipoAfectacionTributarias') ?></label>
                    <label class="titulo-entidad-cantidad">            
                        <?php 
                        $cantidad_eku_param_tipo_afectacion_tributarias = $gral_tipo_iva->getCantidadEkuParamTipoAfectacionTributariasXEkuParamTipoAfectacionTributariaGralTipoIva();
                        echo ($cantidad_eku_param_tipo_afectacion_tributarias > 0) ? '('.$cantidad_eku_param_tipo_afectacion_tributarias.')' : '' ;
                        ?>
                    </label>
                    <div class="titulo-entidad-comentarios">
                        <?php Lang::_lang('comentario_gral_tipo_iva_alta_relacion_eku_param_tipo_afectacion_tributaria_gral_tipo_iva_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
                    </div>
                </div>

                <div class='buscador'>
                    <input name='eku_param_tipo_afectacion_tributaria_txt_buscar' id='eku_param_tipo_afectacion_tributaria_txt_buscar' type='text' />
                    <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

                    <?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_IVA_ALTA_RELACION_EKU_PARAM_TIPO_AFECTACION_TRIBUTARIA_ACCIONES_ALTA')){ ?>
                    <div class="trigger wopenModal boton" archivo="ajax/modulos/eku_param_tipo_afectacion_tributaria/eku_param_tipo_afectacion_tributaria_alta.php" contenedor="div_modal" ancho="900" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'eku_param_tipo_afectacion_tributaria', 'gral_tipo_iva', <?php Gral::_echo($gral_tipo_iva->getId()) ?>, 'GralTipoIva', 'EkuParamTipoAfectacionTributariaGralTipoIva')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('eku_param_tipo_afectacion_tributaria') ?>'>
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

