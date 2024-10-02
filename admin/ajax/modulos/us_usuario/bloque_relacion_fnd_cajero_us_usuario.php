
    <?php if(UsCredencial::getEsAcreditado('US_USUARIO_ALTA_RELACION_FND_CAJERO')){ ?>
        <?php if($us_usuario->getAltaMostrarBloqueRelacionFndCajeroUsUsuario()){ ?>
            <div class='relacion fnd_cajero' clase='fnd_cajero' padre='us_usuario' padre_clase='UsUsuario' relacion='FndCajeroUsUsuario'>

                <div class='titulo'>
                    <label class="titulo-entidad-vinculada"><?php Lang::_lang('FndCajeros') ?></label>
                    <label class="titulo-entidad-cantidad">            
                        <?php 
                        $cantidad_fnd_cajeros = $us_usuario->getCantidadFndCajerosXFndCajeroUsUsuario();
                        echo ($cantidad_fnd_cajeros > 0) ? '('.$cantidad_fnd_cajeros.')' : '' ;
                        ?>
                    </label>
                    <div class="titulo-entidad-comentarios">
                        <?php Lang::_lang('comentario_us_usuario_alta_relacion_fnd_cajero_us_usuario_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
                    </div>
                </div>

                <div class='buscador'>
                    <input name='fnd_cajero_txt_buscar' id='fnd_cajero_txt_buscar' type='text' />
                    <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

                    <?php if(UsCredencial::getEsAcreditado('US_USUARIO_ALTA_RELACION_FND_CAJERO_ACCIONES_ALTA')){ ?>
                    <div class="trigger wopenModal boton" archivo="ajax/modulos/fnd_cajero/fnd_cajero_alta.php" contenedor="div_modal" ancho="900" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'fnd_cajero', 'us_usuario', <?php Gral::_echo($us_usuario->getId()) ?>, 'UsUsuario', 'FndCajeroUsUsuario')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('fnd_cajero') ?>'>
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

