
    <?php if(UsCredencial::getEsAcreditado('US_USUARIO_ALTA_RELACION_PLN_JORNADA')){ ?>
        <?php if($us_usuario->getAltaMostrarBloqueRelacionPlnJornadaUsUsuario()){ ?>
            <div class='relacion pln_jornada' clase='pln_jornada' padre='us_usuario' padre_clase='UsUsuario' relacion='PlnJornadaUsUsuario'>

                <div class='titulo'>
                    <label class="titulo-entidad-vinculada"><?php Lang::_lang('PlnJornadas') ?></label>
                    <label class="titulo-entidad-cantidad">            
                        <?php 
                        $cantidad_pln_jornadas = $us_usuario->getCantidadPlnJornadasXPlnJornadaUsUsuario();
                        echo ($cantidad_pln_jornadas > 0) ? '('.$cantidad_pln_jornadas.')' : '' ;
                        ?>
                    </label>
                    <div class="titulo-entidad-comentarios">
                        <?php Lang::_lang('comentario_us_usuario_alta_relacion_pln_jornada_us_usuario_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
                    </div>
                </div>

                <div class='buscador'>
                    <input name='pln_jornada_txt_buscar' id='pln_jornada_txt_buscar' type='text' />
                    <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

                    <?php if(UsCredencial::getEsAcreditado('US_USUARIO_ALTA_RELACION_PLN_JORNADA_ACCIONES_ALTA')){ ?>
                    <div class="trigger wopenModal boton" archivo="ajax/modulos/pln_jornada/pln_jornada_alta.php" contenedor="div_modal" ancho="900" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'pln_jornada', 'us_usuario', <?php Gral::_echo($us_usuario->getId()) ?>, 'UsUsuario', 'PlnJornadaUsUsuario')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('pln_jornada') ?>'>
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

