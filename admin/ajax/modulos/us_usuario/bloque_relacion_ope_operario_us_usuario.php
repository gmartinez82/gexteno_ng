
    <?php if(UsCredencial::getEsAcreditado('US_USUARIO_ALTA_RELACION_OPE_OPERARIO')){ ?>
        <?php if($us_usuario->getAltaMostrarBloqueRelacionOpeOperarioUsUsuario()){ ?>
            <div class='relacion ope_operario' clase='ope_operario' padre='us_usuario' padre_clase='UsUsuario' relacion='OpeOperarioUsUsuario'>

                <div class='titulo'>
                    <label class="titulo-entidad-vinculada"><?php Lang::_lang('OpeOperarios') ?></label>
                    <label class="titulo-entidad-cantidad">            
                        <?php 
                        $cantidad_ope_operarios = $us_usuario->getCantidadOpeOperariosXOpeOperarioUsUsuario();
                        echo ($cantidad_ope_operarios > 0) ? '('.$cantidad_ope_operarios.')' : '' ;
                        ?>
                    </label>
                    <div class="titulo-entidad-comentarios">
                        <?php Lang::_lang('comentario_us_usuario_alta_relacion_ope_operario_us_usuario_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
                    </div>
                </div>

                <div class='buscador'>
                    <input name='ope_operario_txt_buscar' id='ope_operario_txt_buscar' type='text' />
                    <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

                    <?php if(UsCredencial::getEsAcreditado('US_USUARIO_ALTA_RELACION_OPE_OPERARIO_ACCIONES_ALTA')){ ?>
                    <div class="trigger wopenModal boton" archivo="ajax/modulos/ope_operario/ope_operario_alta.php" contenedor="div_modal" ancho="900" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'ope_operario', 'us_usuario', <?php Gral::_echo($us_usuario->getId()) ?>, 'UsUsuario', 'OpeOperarioUsUsuario')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('ope_operario') ?>'>
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

