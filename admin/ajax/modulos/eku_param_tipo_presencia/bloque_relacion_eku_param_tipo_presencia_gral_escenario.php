
    <?php if(UsCredencial::getEsAcreditado('EKU_PARAM_TIPO_PRESENCIA_ALTA_RELACION_GRAL_ESCENARIO')){ ?>
        <?php if($eku_param_tipo_presencia->getAltaMostrarBloqueRelacionEkuParamTipoPresenciaGralEscenario()){ ?>
            <div class='relacion gral_escenario' clase='gral_escenario' padre='eku_param_tipo_presencia' padre_clase='EkuParamTipoPresencia' relacion='EkuParamTipoPresenciaGralEscenario'>

                <div class='titulo'>
                    <label class="titulo-entidad-vinculada"><?php Lang::_lang('GralEscenarios') ?></label>
                    <label class="titulo-entidad-cantidad">            
                        <?php 
                        $cantidad_gral_escenarios = $eku_param_tipo_presencia->getCantidadGralEscenariosXEkuParamTipoPresenciaGralEscenario();
                        echo ($cantidad_gral_escenarios > 0) ? '('.$cantidad_gral_escenarios.')' : '' ;
                        ?>
                    </label>
                    <div class="titulo-entidad-comentarios">
                        <?php Lang::_lang('comentario_eku_param_tipo_presencia_alta_relacion_eku_param_tipo_presencia_gral_escenario_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
                    </div>
                </div>

                <div class='buscador'>
                    <input name='gral_escenario_txt_buscar' id='gral_escenario_txt_buscar' type='text' />
                    <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

                    <?php if(UsCredencial::getEsAcreditado('EKU_PARAM_TIPO_PRESENCIA_ALTA_RELACION_GRAL_ESCENARIO_ACCIONES_ALTA')){ ?>
                    <div class="trigger wopenModal boton" archivo="ajax/modulos/gral_escenario/gral_escenario_alta.php" contenedor="div_modal" ancho="900" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'gral_escenario', 'eku_param_tipo_presencia', <?php Gral::_echo($eku_param_tipo_presencia->getId()) ?>, 'EkuParamTipoPresencia', 'EkuParamTipoPresenciaGralEscenario')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('gral_escenario') ?>'>
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

