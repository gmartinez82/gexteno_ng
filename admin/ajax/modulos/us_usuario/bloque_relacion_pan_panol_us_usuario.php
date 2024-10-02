
    <?php if(UsCredencial::getEsAcreditado('US_USUARIO_ALTA_RELACION_PAN_PANOL')){ ?>
        <?php if($us_usuario->getAltaMostrarBloqueRelacionPanPanolUsUsuario()){ ?>
            <div class='relacion pan_panol' clase='pan_panol' padre='us_usuario' padre_clase='UsUsuario' relacion='PanPanolUsUsuario'>

                <div class='titulo'>
                    <label class="titulo-entidad-vinculada"><?php Lang::_lang('PanPanols') ?></label>
                    <label class="titulo-entidad-cantidad">            
                        <?php 
                        $cantidad_pan_panols = $us_usuario->getCantidadPanPanolsXPanPanolUsUsuario();
                        echo ($cantidad_pan_panols > 0) ? '('.$cantidad_pan_panols.')' : '' ;
                        ?>
                    </label>
                    <div class="titulo-entidad-comentarios">
                        <?php Lang::_lang('comentario_us_usuario_alta_relacion_pan_panol_us_usuario_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
                    </div>
                </div>

                <div class='buscador'>
                    <input name='pan_panol_txt_buscar' id='pan_panol_txt_buscar' type='text' />
                    <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

                    <?php if(UsCredencial::getEsAcreditado('US_USUARIO_ALTA_RELACION_PAN_PANOL_ACCIONES_ALTA')){ ?>
                    <div class="trigger wopenModal boton" archivo="ajax/modulos/pan_panol/pan_panol_alta.php" contenedor="div_modal" ancho="900" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'pan_panol', 'us_usuario', <?php Gral::_echo($us_usuario->getId()) ?>, 'UsUsuario', 'PanPanolUsUsuario')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('pan_panol') ?>'>
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

