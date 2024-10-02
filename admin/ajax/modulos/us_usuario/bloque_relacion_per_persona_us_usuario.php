
    <?php if(UsCredencial::getEsAcreditado('US_USUARIO_ALTA_RELACION_PER_PERSONA')){ ?>
        <?php if($us_usuario->getAltaMostrarBloqueRelacionPerPersonaUsUsuario()){ ?>
            <div class='relacion per_persona' clase='per_persona' padre='us_usuario' padre_clase='UsUsuario' relacion='PerPersonaUsUsuario'>

                <div class='titulo'>
                    <label class="titulo-entidad-vinculada"><?php Lang::_lang('PerPersonas') ?></label>
                    <label class="titulo-entidad-cantidad">            
                        <?php 
                        $cantidad_per_personas = $us_usuario->getCantidadPerPersonasXPerPersonaUsUsuario();
                        echo ($cantidad_per_personas > 0) ? '('.$cantidad_per_personas.')' : '' ;
                        ?>
                    </label>
                    <div class="titulo-entidad-comentarios">
                        <?php Lang::_lang('comentario_us_usuario_alta_relacion_per_persona_us_usuario_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
                    </div>
                </div>

                <div class='buscador'>
                    <input name='per_persona_txt_buscar' id='per_persona_txt_buscar' type='text' />
                    <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

                    <?php if(UsCredencial::getEsAcreditado('US_USUARIO_ALTA_RELACION_PER_PERSONA_ACCIONES_ALTA')){ ?>
                    <div class="trigger wopenModal boton" archivo="ajax/modulos/per_persona/per_persona_alta.php" contenedor="div_modal" ancho="900" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'per_persona', 'us_usuario', <?php Gral::_echo($us_usuario->getId()) ?>, 'UsUsuario', 'PerPersonaUsUsuario')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('per_persona') ?>'>
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

