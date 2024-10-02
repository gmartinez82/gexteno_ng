
    <?php if(UsCredencial::getEsAcreditado('GEO_PAIS_ALTA_RELACION_EKU_PARAM_GEO_PAIS')){ ?>
        <?php if($geo_pais->getAltaMostrarBloqueRelacionEkuParamGeoPaisGeoPais()){ ?>
            <div class='relacion eku_param_geo_pais' clase='eku_param_geo_pais' padre='geo_pais' padre_clase='GeoPais' relacion='EkuParamGeoPaisGeoPais'>

                <div class='titulo'>
                    <label class="titulo-entidad-vinculada"><?php Lang::_lang('EkuParamGeoPaiss') ?></label>
                    <label class="titulo-entidad-cantidad">            
                        <?php 
                        $cantidad_eku_param_geo_paiss = $geo_pais->getCantidadEkuParamGeoPaissXEkuParamGeoPaisGeoPais();
                        echo ($cantidad_eku_param_geo_paiss > 0) ? '('.$cantidad_eku_param_geo_paiss.')' : '' ;
                        ?>
                    </label>
                    <div class="titulo-entidad-comentarios">
                        <?php Lang::_lang('comentario_geo_pais_alta_relacion_eku_param_geo_pais_geo_pais_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
                    </div>
                </div>

                <div class='buscador'>
                    <input name='eku_param_geo_pais_txt_buscar' id='eku_param_geo_pais_txt_buscar' type='text' />
                    <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

                    <?php if(UsCredencial::getEsAcreditado('GEO_PAIS_ALTA_RELACION_EKU_PARAM_GEO_PAIS_ACCIONES_ALTA')){ ?>
                    <div class="trigger wopenModal boton" archivo="ajax/modulos/eku_param_geo_pais/eku_param_geo_pais_alta.php" contenedor="div_modal" ancho="900" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'eku_param_geo_pais', 'geo_pais', <?php Gral::_echo($geo_pais->getId()) ?>, 'GeoPais', 'EkuParamGeoPaisGeoPais')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('eku_param_geo_pais') ?>'>
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

