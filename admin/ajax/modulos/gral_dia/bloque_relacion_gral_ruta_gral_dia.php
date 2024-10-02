
    <?php if(UsCredencial::getEsAcreditado('GRAL_DIA_ALTA_RELACION_GRAL_RUTA')){ ?>
        <?php if($gral_dia->getAltaMostrarBloqueRelacionGralRutaGralDia()){ ?>
            <div class='relacion gral_ruta' clase='gral_ruta' padre='gral_dia' padre_clase='GralDia' relacion='GralRutaGralDia'>

                <div class='titulo'>
                    <label class="titulo-entidad-vinculada"><?php Lang::_lang('GralRutas') ?></label>
                    <label class="titulo-entidad-cantidad">            
                        <?php 
                        $cantidad_gral_rutas = $gral_dia->getCantidadGralRutasXGralRutaGralDia();
                        echo ($cantidad_gral_rutas > 0) ? '('.$cantidad_gral_rutas.')' : '' ;
                        ?>
                    </label>
                    <div class="titulo-entidad-comentarios">
                        <?php Lang::_lang('comentario_gral_dia_alta_relacion_gral_ruta_gral_dia_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
                    </div>
                </div>

                <div class='buscador'>
                    <input name='gral_ruta_txt_buscar' id='gral_ruta_txt_buscar' type='text' />
                    <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

                    <?php if(UsCredencial::getEsAcreditado('GRAL_DIA_ALTA_RELACION_GRAL_RUTA_ACCIONES_ALTA')){ ?>
                    <div class="trigger wopenModal boton" archivo="ajax/modulos/gral_ruta/gral_ruta_alta.php" contenedor="div_modal" ancho="900" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'gral_ruta', 'gral_dia', <?php Gral::_echo($gral_dia->getId()) ?>, 'GralDia', 'GralRutaGralDia')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('gral_ruta') ?>'>
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

