
    <?php if(UsCredencial::getEsAcreditado('PRD_PARAM_OPERACION_ALTA_RELACION_PRD_EQUIPO')){ ?>
        <?php if($prd_param_operacion->getAltaMostrarBloqueRelacionPrdParamOperacionPrdEquipo()){ ?>
            <div class='relacion prd_equipo' clase='prd_equipo' padre='prd_param_operacion' padre_clase='PrdParamOperacion' relacion='PrdParamOperacionPrdEquipo'>

                <div class='titulo'>
                    <label class="titulo-entidad-vinculada"><?php Lang::_lang('PrdEquipos') ?></label>
                    <label class="titulo-entidad-cantidad">            
                        <?php 
                        $cantidad_prd_equipos = $prd_param_operacion->getCantidadPrdEquiposXPrdParamOperacionPrdEquipo();
                        echo ($cantidad_prd_equipos > 0) ? '('.$cantidad_prd_equipos.')' : '' ;
                        ?>
                    </label>
                    <div class="titulo-entidad-comentarios">
                        <?php Lang::_lang('comentario_prd_param_operacion_alta_relacion_prd_param_operacion_prd_equipo_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
                    </div>
                </div>

                <div class='buscador'>
                    <input name='prd_equipo_txt_buscar' id='prd_equipo_txt_buscar' type='text' />
                    <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

                    <?php if(UsCredencial::getEsAcreditado('PRD_PARAM_OPERACION_ALTA_RELACION_PRD_EQUIPO_ACCIONES_ALTA')){ ?>
                    <div class="trigger wopenModal boton" archivo="ajax/modulos/prd_equipo/prd_equipo_alta.php" contenedor="div_modal" ancho="900" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'prd_equipo', 'prd_param_operacion', <?php Gral::_echo($prd_param_operacion->getId()) ?>, 'PrdParamOperacion', 'PrdParamOperacionPrdEquipo')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('prd_equipo') ?>'>
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

