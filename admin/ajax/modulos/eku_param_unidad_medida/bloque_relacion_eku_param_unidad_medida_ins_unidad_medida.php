
    <?php if(UsCredencial::getEsAcreditado('EKU_PARAM_UNIDAD_MEDIDA_ALTA_RELACION_INS_UNIDAD_MEDIDA')){ ?>
        <?php if($eku_param_unidad_medida->getAltaMostrarBloqueRelacionEkuParamUnidadMedidaInsUnidadMedida()){ ?>
            <div class='relacion ins_unidad_medida' clase='ins_unidad_medida' padre='eku_param_unidad_medida' padre_clase='EkuParamUnidadMedida' relacion='EkuParamUnidadMedidaInsUnidadMedida'>

                <div class='titulo'>
                    <label class="titulo-entidad-vinculada"><?php Lang::_lang('InsUnidadMedidas') ?></label>
                    <label class="titulo-entidad-cantidad">            
                        <?php 
                        $cantidad_ins_unidad_medidas = $eku_param_unidad_medida->getCantidadInsUnidadMedidasXEkuParamUnidadMedidaInsUnidadMedida();
                        echo ($cantidad_ins_unidad_medidas > 0) ? '('.$cantidad_ins_unidad_medidas.')' : '' ;
                        ?>
                    </label>
                    <div class="titulo-entidad-comentarios">
                        <?php Lang::_lang('comentario_eku_param_unidad_medida_alta_relacion_eku_param_unidad_medida_ins_unidad_medida_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
                    </div>
                </div>

                <div class='buscador'>
                    <input name='ins_unidad_medida_txt_buscar' id='ins_unidad_medida_txt_buscar' type='text' />
                    <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

                    <?php if(UsCredencial::getEsAcreditado('EKU_PARAM_UNIDAD_MEDIDA_ALTA_RELACION_INS_UNIDAD_MEDIDA_ACCIONES_ALTA')){ ?>
                    <div class="trigger wopenModal boton" archivo="ajax/modulos/ins_unidad_medida/ins_unidad_medida_alta.php" contenedor="div_modal" ancho="900" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'ins_unidad_medida', 'eku_param_unidad_medida', <?php Gral::_echo($eku_param_unidad_medida->getId()) ?>, 'EkuParamUnidadMedida', 'EkuParamUnidadMedidaInsUnidadMedida')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('ins_unidad_medida') ?>'>
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

