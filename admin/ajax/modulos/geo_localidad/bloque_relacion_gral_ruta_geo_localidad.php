
    <?php if(UsCredencial::getEsAcreditado('GEO_LOCALIDAD_ALTA_RELACION_GRAL_RUTA')){ ?>
        <?php if($geo_localidad->getAltaMostrarBloqueRelacionGralRutaGeoLocalidad()){ ?>
            <div class='relacion gral_ruta' clase='gral_ruta' padre='geo_localidad' padre_clase='GeoLocalidad' relacion='GralRutaGeoLocalidad'>

                <div class='titulo'>
                    <label class="titulo-entidad-vinculada"><?php Lang::_lang('GralRutas') ?></label>
                    <label class="titulo-entidad-cantidad">            
                        <?php 
                        $cantidad_gral_rutas = $geo_localidad->getCantidadGralRutasXGralRutaGeoLocalidad();
                        echo ($cantidad_gral_rutas > 0) ? '('.$cantidad_gral_rutas.')' : '' ;
                        ?>
                    </label>
                    <div class="titulo-entidad-comentarios">
                        <?php Lang::_lang('comentario_geo_localidad_alta_relacion_gral_ruta_geo_localidad_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
                    </div>
                </div>

                <div class='buscador'>
                    <input name='gral_ruta_txt_buscar' id='gral_ruta_txt_buscar' type='text' />
                    <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

                    <?php if(UsCredencial::getEsAcreditado('GEO_LOCALIDAD_ALTA_RELACION_GRAL_RUTA_ACCIONES_ALTA')){ ?>
                    <div class="trigger wopenModal boton" archivo="ajax/modulos/gral_ruta/gral_ruta_alta.php" contenedor="div_modal" ancho="900" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'gral_ruta', 'geo_localidad', <?php Gral::_echo($geo_localidad->getId()) ?>, 'GeoLocalidad', 'GralRutaGeoLocalidad')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('gral_ruta') ?>'>
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

