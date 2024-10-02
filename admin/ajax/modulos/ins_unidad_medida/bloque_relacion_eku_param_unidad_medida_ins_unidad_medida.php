
    <?php if(UsCredencial::getEsAcreditado('INS_UNIDAD_MEDIDA_ALTA_RELACION_EKU_PARAM_UNIDAD_MEDIDA')){ ?>
        <?php if($ins_unidad_medida->getAltaMostrarBloqueRelacionEkuParamUnidadMedidaInsUnidadMedida()){ ?>
            <div class='relacion eku_param_unidad_medida' clase='eku_param_unidad_medida' padre='ins_unidad_medida' padre_clase='InsUnidadMedida' relacion='EkuParamUnidadMedidaInsUnidadMedida'>

                <div class='titulo'>
                    <label class="titulo-entidad-vinculada"><?php Lang::_lang('EkuParamUnidadMedidas') ?></label>
                    <label class="titulo-entidad-cantidad">            
                        <?php 
                        $cantidad_eku_param_unidad_medidas = $ins_unidad_medida->getCantidadEkuParamUnidadMedidasXEkuParamUnidadMedidaInsUnidadMedida();
                        echo ($cantidad_eku_param_unidad_medidas > 0) ? '('.$cantidad_eku_param_unidad_medidas.')' : '' ;
                        ?>
                    </label>
                    <div class="titulo-entidad-comentarios">
                        <?php Lang::_lang('comentario_ins_unidad_medida_alta_relacion_eku_param_unidad_medida_ins_unidad_medida_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
                    </div>
                </div>

                <div class='buscador'>
                    <input name='eku_param_unidad_medida_txt_buscar' id='eku_param_unidad_medida_txt_buscar' type='text' />
                    <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

                    <?php if(UsCredencial::getEsAcreditado('INS_UNIDAD_MEDIDA_ALTA_RELACION_EKU_PARAM_UNIDAD_MEDIDA_ACCIONES_ALTA')){ ?>
                    <div class="trigger wopenModal boton" archivo="ajax/modulos/eku_param_unidad_medida/eku_param_unidad_medida_alta.php" contenedor="div_modal" ancho="900" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'eku_param_unidad_medida', 'ins_unidad_medida', <?php Gral::_echo($ins_unidad_medida->getId()) ?>, 'InsUnidadMedida', 'EkuParamUnidadMedidaInsUnidadMedida')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('eku_param_unidad_medida') ?>'>
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

