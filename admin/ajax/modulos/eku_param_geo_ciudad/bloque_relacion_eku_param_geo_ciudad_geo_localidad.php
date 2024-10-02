
    <?php if(UsCredencial::getEsAcreditado('EKU_PARAM_GEO_CIUDAD_ALTA_RELACION_GEO_LOCALIDAD')){ ?>
        <?php if($eku_param_geo_ciudad->getAltaMostrarBloqueRelacionEkuParamGeoCiudadGeoLocalidad()){ ?>
            <div class='relacion geo_localidad' clase='geo_localidad' padre='eku_param_geo_ciudad' padre_clase='EkuParamGeoCiudad' relacion='EkuParamGeoCiudadGeoLocalidad'>

                <div class='titulo'>
                    <label class="titulo-entidad-vinculada"><?php Lang::_lang('GeoLocalidads') ?></label>
                    <label class="titulo-entidad-cantidad">            
                        <?php 
                        $cantidad_geo_localidads = $eku_param_geo_ciudad->getCantidadGeoLocalidadsXEkuParamGeoCiudadGeoLocalidad();
                        echo ($cantidad_geo_localidads > 0) ? '('.$cantidad_geo_localidads.')' : '' ;
                        ?>
                    </label>
                    <div class="titulo-entidad-comentarios">
                        <?php Lang::_lang('comentario_eku_param_geo_ciudad_alta_relacion_eku_param_geo_ciudad_geo_localidad_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
                    </div>
                </div>

                <div class='buscador'>
                    <input name='geo_localidad_txt_buscar' id='geo_localidad_txt_buscar' type='text' />
                    <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

                    <?php if(UsCredencial::getEsAcreditado('EKU_PARAM_GEO_CIUDAD_ALTA_RELACION_GEO_LOCALIDAD_ACCIONES_ALTA')){ ?>
                    <div class="trigger wopenModal boton" archivo="ajax/modulos/geo_localidad/geo_localidad_alta.php" contenedor="div_modal" ancho="900" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'geo_localidad', 'eku_param_geo_ciudad', <?php Gral::_echo($eku_param_geo_ciudad->getId()) ?>, 'EkuParamGeoCiudad', 'EkuParamGeoCiudadGeoLocalidad')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('geo_localidad') ?>'>
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

