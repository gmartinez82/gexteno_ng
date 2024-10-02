
    <?php if(UsCredencial::getEsAcreditado('GRAL_ESCENARIO_ALTA_RELACION_EKU_PARAM_TIPO_PRESENCIA')){ ?>
        <?php if($gral_escenario->getAltaMostrarBloqueRelacionEkuParamTipoPresenciaGralEscenario()){ ?>
            <div class='relacion eku_param_tipo_presencia' clase='eku_param_tipo_presencia' padre='gral_escenario' padre_clase='GralEscenario' relacion='EkuParamTipoPresenciaGralEscenario'>

                <div class='titulo'>
                    <label class="titulo-entidad-vinculada"><?php Lang::_lang('EkuParamTipoPresencias') ?></label>
                    <label class="titulo-entidad-cantidad">            
                        <?php 
                        $cantidad_eku_param_tipo_presencias = $gral_escenario->getCantidadEkuParamTipoPresenciasXEkuParamTipoPresenciaGralEscenario();
                        echo ($cantidad_eku_param_tipo_presencias > 0) ? '('.$cantidad_eku_param_tipo_presencias.')' : '' ;
                        ?>
                    </label>
                    <div class="titulo-entidad-comentarios">
                        <?php Lang::_lang('comentario_gral_escenario_alta_relacion_eku_param_tipo_presencia_gral_escenario_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
                    </div>
                </div>

                <div class='buscador'>
                    <input name='eku_param_tipo_presencia_txt_buscar' id='eku_param_tipo_presencia_txt_buscar' type='text' />
                    <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

                    <?php if(UsCredencial::getEsAcreditado('GRAL_ESCENARIO_ALTA_RELACION_EKU_PARAM_TIPO_PRESENCIA_ACCIONES_ALTA')){ ?>
                    <div class="trigger wopenModal boton" archivo="ajax/modulos/eku_param_tipo_presencia/eku_param_tipo_presencia_alta.php" contenedor="div_modal" ancho="900" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'eku_param_tipo_presencia', 'gral_escenario', <?php Gral::_echo($gral_escenario->getId()) ?>, 'GralEscenario', 'EkuParamTipoPresenciaGralEscenario')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('eku_param_tipo_presencia') ?>'>
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

