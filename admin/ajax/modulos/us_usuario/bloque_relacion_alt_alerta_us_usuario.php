
    <?php if(UsCredencial::getEsAcreditado('US_USUARIO_ALTA_RELACION_ALT_ALERTA')){ ?>
        <?php if($us_usuario->getAltaMostrarBloqueRelacionAltAlertaUsUsuario()){ ?>
            <div class='relacion alt_alerta' clase='alt_alerta' padre='us_usuario' padre_clase='UsUsuario' relacion='AltAlertaUsUsuario'>

                <div class='titulo'>
                    <label class="titulo-entidad-vinculada"><?php Lang::_lang('AltAlertas') ?></label>
                    <label class="titulo-entidad-cantidad">            
                        <?php 
                        $cantidad_alt_alertas = $us_usuario->getCantidadAltAlertasXAltAlertaUsUsuario();
                        echo ($cantidad_alt_alertas > 0) ? '('.$cantidad_alt_alertas.')' : '' ;
                        ?>
                    </label>
                    <div class="titulo-entidad-comentarios">
                        <?php Lang::_lang('comentario_us_usuario_alta_relacion_alt_alerta_us_usuario_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
                    </div>
                </div>

                <div class='buscador'>
                    <input name='alt_alerta_txt_buscar' id='alt_alerta_txt_buscar' type='text' />
                    <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

                    <?php if(UsCredencial::getEsAcreditado('US_USUARIO_ALTA_RELACION_ALT_ALERTA_ACCIONES_ALTA')){ ?>
                    <div class="trigger wopenModal boton" archivo="ajax/modulos/alt_alerta/alt_alerta_alta.php" contenedor="div_modal" ancho="900" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'alt_alerta', 'us_usuario', <?php Gral::_echo($us_usuario->getId()) ?>, 'UsUsuario', 'AltAlertaUsUsuario')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('alt_alerta') ?>'>
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

