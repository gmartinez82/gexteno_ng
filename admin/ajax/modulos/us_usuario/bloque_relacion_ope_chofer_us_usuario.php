
    <?php if(UsCredencial::getEsAcreditado('US_USUARIO_ALTA_RELACION_OPE_CHOFER')){ ?>
        <?php if($us_usuario->getAltaMostrarBloqueRelacionOpeChoferUsUsuario()){ ?>
            <div class='relacion ope_chofer' clase='ope_chofer' padre='us_usuario' padre_clase='UsUsuario' relacion='OpeChoferUsUsuario'>

                <div class='titulo'>
                    <label class="titulo-entidad-vinculada"><?php Lang::_lang('OpeChofers') ?></label>
                    <label class="titulo-entidad-cantidad">            
                        <?php 
                        $cantidad_ope_chofers = $us_usuario->getCantidadOpeChofersXOpeChoferUsUsuario();
                        echo ($cantidad_ope_chofers > 0) ? '('.$cantidad_ope_chofers.')' : '' ;
                        ?>
                    </label>
                    <div class="titulo-entidad-comentarios">
                        <?php Lang::_lang('comentario_us_usuario_alta_relacion_ope_chofer_us_usuario_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
                    </div>
                </div>

                <div class='buscador'>
                    <input name='ope_chofer_txt_buscar' id='ope_chofer_txt_buscar' type='text' />
                    <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

                    <?php if(UsCredencial::getEsAcreditado('US_USUARIO_ALTA_RELACION_OPE_CHOFER_ACCIONES_ALTA')){ ?>
                    <div class="trigger wopenModal boton" archivo="ajax/modulos/ope_chofer/ope_chofer_alta.php" contenedor="div_modal" ancho="900" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'ope_chofer', 'us_usuario', <?php Gral::_echo($us_usuario->getId()) ?>, 'UsUsuario', 'OpeChoferUsUsuario')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('ope_chofer') ?>'>
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

