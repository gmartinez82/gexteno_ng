
    <?php if(UsCredencial::getEsAcreditado('US_USUARIO_ALTA_RELACION_US_CREDENCIAL')){ ?>
        <?php if($us_usuario->getAltaMostrarBloqueRelacionUsAcreditado()){ ?>
            <div class='relacion us_credencial' clase='us_credencial' padre='us_usuario' padre_clase='UsUsuario' relacion='UsAcreditado'>

                <div class='titulo'>
                    <label class="titulo-entidad-vinculada"><?php Lang::_lang('UsCredencials') ?></label>
                    <label class="titulo-entidad-cantidad">            
                        <?php 
                        $cantidad_us_credencials = $us_usuario->getCantidadUsCredencialsXUsAcreditado();
                        echo ($cantidad_us_credencials > 0) ? '('.$cantidad_us_credencials.')' : '' ;
                        ?>
                    </label>
                    <div class="titulo-entidad-comentarios">
                        <?php Lang::_lang('comentario_us_usuario_alta_relacion_us_acreditado_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
                    </div>
                </div>

                <div class='buscador'>
                    <input name='us_credencial_txt_buscar' id='us_credencial_txt_buscar' type='text' />
                    <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

                    <?php if(UsCredencial::getEsAcreditado('US_USUARIO_ALTA_RELACION_US_CREDENCIAL_ACCIONES_ALTA')){ ?>
                    <div class="trigger wopenModal boton" archivo="ajax/modulos/us_credencial/us_credencial_alta.php" contenedor="div_modal" ancho="900" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'us_credencial', 'us_usuario', <?php Gral::_echo($us_usuario->getId()) ?>, 'UsUsuario', 'UsAcreditado')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('us_credencial') ?>'>
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

