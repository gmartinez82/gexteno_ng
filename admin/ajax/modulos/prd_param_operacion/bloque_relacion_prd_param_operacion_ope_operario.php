
    <?php if(UsCredencial::getEsAcreditado('PRD_PARAM_OPERACION_ALTA_RELACION_OPE_OPERARIO')){ ?>
        <?php if($prd_param_operacion->getAltaMostrarBloqueRelacionPrdParamOperacionOpeOperario()){ ?>
            <div class='relacion ope_operario' clase='ope_operario' padre='prd_param_operacion' padre_clase='PrdParamOperacion' relacion='PrdParamOperacionOpeOperario'>

                <div class='titulo'>
                    <label class="titulo-entidad-vinculada"><?php Lang::_lang('OpeOperarios') ?></label>
                    <label class="titulo-entidad-cantidad">            
                        <?php 
                        $cantidad_ope_operarios = $prd_param_operacion->getCantidadOpeOperariosXPrdParamOperacionOpeOperario();
                        echo ($cantidad_ope_operarios > 0) ? '('.$cantidad_ope_operarios.')' : '' ;
                        ?>
                    </label>
                    <div class="titulo-entidad-comentarios">
                        <?php Lang::_lang('comentario_prd_param_operacion_alta_relacion_prd_param_operacion_ope_operario_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
                    </div>
                </div>

                <div class='buscador'>
                    <input name='ope_operario_txt_buscar' id='ope_operario_txt_buscar' type='text' />
                    <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

                    <?php if(UsCredencial::getEsAcreditado('PRD_PARAM_OPERACION_ALTA_RELACION_OPE_OPERARIO_ACCIONES_ALTA')){ ?>
                    <div class="trigger wopenModal boton" archivo="ajax/modulos/ope_operario/ope_operario_alta.php" contenedor="div_modal" ancho="900" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'ope_operario', 'prd_param_operacion', <?php Gral::_echo($prd_param_operacion->getId()) ?>, 'PrdParamOperacion', 'PrdParamOperacionOpeOperario')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('ope_operario') ?>'>
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

