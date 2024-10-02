
    <?php if(UsCredencial::getEsAcreditado('OPE_OPERARIO_ALTA_RELACION_PRD_PARAM_OPERACION')){ ?>
        <?php if($ope_operario->getAltaMostrarBloqueRelacionPrdParamOperacionOpeOperario()){ ?>
            <div class='relacion prd_param_operacion' clase='prd_param_operacion' padre='ope_operario' padre_clase='OpeOperario' relacion='PrdParamOperacionOpeOperario'>

                <div class='titulo'>
                    <label class="titulo-entidad-vinculada"><?php Lang::_lang('PrdParamOperacions') ?></label>
                    <label class="titulo-entidad-cantidad">            
                        <?php 
                        $cantidad_prd_param_operacions = $ope_operario->getCantidadPrdParamOperacionsXPrdParamOperacionOpeOperario();
                        echo ($cantidad_prd_param_operacions > 0) ? '('.$cantidad_prd_param_operacions.')' : '' ;
                        ?>
                    </label>
                    <div class="titulo-entidad-comentarios">
                        <?php Lang::_lang('comentario_ope_operario_alta_relacion_prd_param_operacion_ope_operario_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
                    </div>
                </div>

                <div class='buscador'>
                    <input name='prd_param_operacion_txt_buscar' id='prd_param_operacion_txt_buscar' type='text' />
                    <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

                    <?php if(UsCredencial::getEsAcreditado('OPE_OPERARIO_ALTA_RELACION_PRD_PARAM_OPERACION_ACCIONES_ALTA')){ ?>
                    <div class="trigger wopenModal boton" archivo="ajax/modulos/prd_param_operacion/prd_param_operacion_alta.php" contenedor="div_modal" ancho="900" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'prd_param_operacion', 'ope_operario', <?php Gral::_echo($ope_operario->getId()) ?>, 'OpeOperario', 'PrdParamOperacionOpeOperario')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('prd_param_operacion') ?>'>
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

