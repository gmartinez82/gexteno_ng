
    <?php if(UsCredencial::getEsAcreditado('GEO_LOCALIDAD_ALTA_RELACION_EKU_PARAM_GEO_CIUDAD')){ ?>
        <?php if($geo_localidad->getAltaMostrarBloqueRelacionEkuParamGeoCiudadGeoLocalidad()){ ?>
            <div class='relacion eku_param_geo_ciudad' clase='eku_param_geo_ciudad' padre='geo_localidad' padre_clase='GeoLocalidad' relacion='EkuParamGeoCiudadGeoLocalidad'>

                <div class='titulo'>
                    <label class="titulo-entidad-vinculada"><?php Lang::_lang('EkuParamGeoCiudads') ?></label>
                    <label class="titulo-entidad-cantidad">            
                        <?php 
                        $cantidad_eku_param_geo_ciudads = $geo_localidad->getCantidadEkuParamGeoCiudadsXEkuParamGeoCiudadGeoLocalidad();
                        echo ($cantidad_eku_param_geo_ciudads > 0) ? '('.$cantidad_eku_param_geo_ciudads.')' : '' ;
                        ?>
                    </label>
                    <div class="titulo-entidad-comentarios">
                        <?php Lang::_lang('comentario_geo_localidad_alta_relacion_eku_param_geo_ciudad_geo_localidad_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
                    </div>
                </div>

                <div class='buscador'>
                    <input name='eku_param_geo_ciudad_txt_buscar' id='eku_param_geo_ciudad_txt_buscar' type='text' />
                    <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

                    <?php if(UsCredencial::getEsAcreditado('GEO_LOCALIDAD_ALTA_RELACION_EKU_PARAM_GEO_CIUDAD_ACCIONES_ALTA')){ ?>
                    <div class="trigger wopenModal boton" archivo="ajax/modulos/eku_param_geo_ciudad/eku_param_geo_ciudad_alta.php" contenedor="div_modal" ancho="900" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'eku_param_geo_ciudad', 'geo_localidad', <?php Gral::_echo($geo_localidad->getId()) ?>, 'GeoLocalidad', 'EkuParamGeoCiudadGeoLocalidad')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('eku_param_geo_ciudad') ?>'>
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

