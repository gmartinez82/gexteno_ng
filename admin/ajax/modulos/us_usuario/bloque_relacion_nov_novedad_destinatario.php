
    <?php if(UsCredencial::getEsAcreditado('US_USUARIO_ALTA_RELACION_NOV_NOVEDAD')){ ?>
        <?php if($us_usuario->getAltaMostrarBloqueRelacionNovNovedadDestinatario()){ ?>
            <div class='relacion nov_novedad' clase='nov_novedad' padre='us_usuario' padre_clase='UsUsuario' relacion='NovNovedadDestinatario'>

                <div class='titulo'>
                    <label class="titulo-entidad-vinculada"><?php Lang::_lang('NovNovedads') ?></label>
                    <label class="titulo-entidad-cantidad">            
                        <?php 
                        $cantidad_nov_novedads = $us_usuario->getCantidadNovNovedadsXNovNovedadDestinatario();
                        echo ($cantidad_nov_novedads > 0) ? '('.$cantidad_nov_novedads.')' : '' ;
                        ?>
                    </label>
                    <div class="titulo-entidad-comentarios">
                        <?php Lang::_lang('comentario_us_usuario_alta_relacion_nov_novedad_destinatario_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
                    </div>
                </div>

                <div class='buscador'>
                    <input name='nov_novedad_txt_buscar' id='nov_novedad_txt_buscar' type='text' />
                    <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

                    <?php if(UsCredencial::getEsAcreditado('US_USUARIO_ALTA_RELACION_NOV_NOVEDAD_ACCIONES_ALTA')){ ?>
                    <div class="trigger wopenModal boton" archivo="ajax/modulos/nov_novedad/nov_novedad_alta.php" contenedor="div_modal" ancho="900" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'nov_novedad', 'us_usuario', <?php Gral::_echo($us_usuario->getId()) ?>, 'UsUsuario', 'NovNovedadDestinatario')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('nov_novedad') ?>'>
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

