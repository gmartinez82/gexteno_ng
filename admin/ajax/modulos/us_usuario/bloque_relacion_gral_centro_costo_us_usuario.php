
    <?php if(UsCredencial::getEsAcreditado('US_USUARIO_ALTA_RELACION_GRAL_CENTRO_COSTO')){ ?>
        <?php if($us_usuario->getAltaMostrarBloqueRelacionGralCentroCostoUsUsuario()){ ?>
            <div class='relacion gral_centro_costo' clase='gral_centro_costo' padre='us_usuario' padre_clase='UsUsuario' relacion='GralCentroCostoUsUsuario'>

                <div class='titulo'>
                    <label class="titulo-entidad-vinculada"><?php Lang::_lang('GralCentroCostos') ?></label>
                    <label class="titulo-entidad-cantidad">            
                        <?php 
                        $cantidad_gral_centro_costos = $us_usuario->getCantidadGralCentroCostosXGralCentroCostoUsUsuario();
                        echo ($cantidad_gral_centro_costos > 0) ? '('.$cantidad_gral_centro_costos.')' : '' ;
                        ?>
                    </label>
                    <div class="titulo-entidad-comentarios">
                        <?php Lang::_lang('comentario_us_usuario_alta_relacion_gral_centro_costo_us_usuario_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
                    </div>
                </div>

                <div class='buscador'>
                    <input name='gral_centro_costo_txt_buscar' id='gral_centro_costo_txt_buscar' type='text' />
                    <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

                    <?php if(UsCredencial::getEsAcreditado('US_USUARIO_ALTA_RELACION_GRAL_CENTRO_COSTO_ACCIONES_ALTA')){ ?>
                    <div class="trigger wopenModal boton" archivo="ajax/modulos/gral_centro_costo/gral_centro_costo_alta.php" contenedor="div_modal" ancho="900" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'gral_centro_costo', 'us_usuario', <?php Gral::_echo($us_usuario->getId()) ?>, 'UsUsuario', 'GralCentroCostoUsUsuario')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('gral_centro_costo') ?>'>
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

