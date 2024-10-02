
    <?php if(UsCredencial::getEsAcreditado('EKU_PARAM_GEO_PAIS_ALTA_RELACION_GEO_PAIS')){ ?>
        <?php if($eku_param_geo_pais->getAltaMostrarBloqueRelacionEkuParamGeoPaisGeoPais()){ ?>
            <div class='relacion geo_pais' clase='geo_pais' padre='eku_param_geo_pais' padre_clase='EkuParamGeoPais' relacion='EkuParamGeoPaisGeoPais'>

                <div class='titulo'>
                    <label class="titulo-entidad-vinculada"><?php Lang::_lang('GeoPaiss') ?></label>
                    <label class="titulo-entidad-cantidad">            
                        <?php 
                        $cantidad_geo_paiss = $eku_param_geo_pais->getCantidadGeoPaissXEkuParamGeoPaisGeoPais();
                        echo ($cantidad_geo_paiss > 0) ? '('.$cantidad_geo_paiss.')' : '' ;
                        ?>
                    </label>
                    <div class="titulo-entidad-comentarios">
                        <?php Lang::_lang('comentario_eku_param_geo_pais_alta_relacion_eku_param_geo_pais_geo_pais_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
                    </div>
                </div>

                <div class='buscador'>
                    <input name='geo_pais_txt_buscar' id='geo_pais_txt_buscar' type='text' />
                    <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

                    <?php if(UsCredencial::getEsAcreditado('EKU_PARAM_GEO_PAIS_ALTA_RELACION_GEO_PAIS_ACCIONES_ALTA')){ ?>
                    <div class="trigger wopenModal boton" archivo="ajax/modulos/geo_pais/geo_pais_alta.php" contenedor="div_modal" ancho="900" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'geo_pais', 'eku_param_geo_pais', <?php Gral::_echo($eku_param_geo_pais->getId()) ?>, 'EkuParamGeoPais', 'EkuParamGeoPaisGeoPais')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('geo_pais') ?>'>
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

