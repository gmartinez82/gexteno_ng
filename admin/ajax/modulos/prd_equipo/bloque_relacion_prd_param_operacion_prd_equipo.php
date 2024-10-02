
    <?php if(UsCredencial::getEsAcreditado('PRD_EQUIPO_ALTA_RELACION_PRD_PARAM_OPERACION')){ ?>
        <?php if($prd_equipo->getAltaMostrarBloqueRelacionPrdParamOperacionPrdEquipo()){ ?>
            <div class='relacion prd_param_operacion' clase='prd_param_operacion' padre='prd_equipo' padre_clase='PrdEquipo' relacion='PrdParamOperacionPrdEquipo'>

                <div class='titulo'>
                    <label class="titulo-entidad-vinculada"><?php Lang::_lang('PrdParamOperacions') ?></label>
                    <label class="titulo-entidad-cantidad">            
                        <?php 
                        $cantidad_prd_param_operacions = $prd_equipo->getCantidadPrdParamOperacionsXPrdParamOperacionPrdEquipo();
                        echo ($cantidad_prd_param_operacions > 0) ? '('.$cantidad_prd_param_operacions.')' : '' ;
                        ?>
                    </label>
                    <div class="titulo-entidad-comentarios">
                        <?php Lang::_lang('comentario_prd_equipo_alta_relacion_prd_param_operacion_prd_equipo_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
                    </div>
                </div>

                <div class='buscador'>
                    <input name='prd_param_operacion_txt_buscar' id='prd_param_operacion_txt_buscar' type='text' />
                    <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

                    <?php if(UsCredencial::getEsAcreditado('PRD_EQUIPO_ALTA_RELACION_PRD_PARAM_OPERACION_ACCIONES_ALTA')){ ?>
                    <div class="trigger wopenModal boton" archivo="ajax/modulos/prd_param_operacion/prd_param_operacion_alta.php" contenedor="div_modal" ancho="900" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'prd_param_operacion', 'prd_equipo', <?php Gral::_echo($prd_equipo->getId()) ?>, 'PrdEquipo', 'PrdParamOperacionPrdEquipo')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('prd_param_operacion') ?>'>
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

