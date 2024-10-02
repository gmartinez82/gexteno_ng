
    <?php if(UsCredencial::getEsAcreditado('GRAL_CONDICION_IVA_ALTA_RELACION_VTA_TIPO_AJUSTE_HABER')){ ?>
        <?php if($gral_condicion_iva->getAltaMostrarBloqueRelacionGralCondicionIvaVtaTipoAjusteHaber()){ ?>
            <div class='relacion vta_tipo_ajuste_haber' clase='vta_tipo_ajuste_haber' padre='gral_condicion_iva' padre_clase='GralCondicionIva' relacion='GralCondicionIvaVtaTipoAjusteHaber'>

                <div class='titulo'>
                    <label class="titulo-entidad-vinculada"><?php Lang::_lang('VtaTipoAjusteHabers') ?></label>
                    <label class="titulo-entidad-cantidad">            
                        <?php 
                        $cantidad_vta_tipo_ajuste_habers = $gral_condicion_iva->getCantidadVtaTipoAjusteHabersXGralCondicionIvaVtaTipoAjusteHaber();
                        echo ($cantidad_vta_tipo_ajuste_habers > 0) ? '('.$cantidad_vta_tipo_ajuste_habers.')' : '' ;
                        ?>
                    </label>
                    <div class="titulo-entidad-comentarios">
                        <?php Lang::_lang('comentario_gral_condicion_iva_alta_relacion_gral_condicion_iva_vta_tipo_ajuste_haber_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
                    </div>
                </div>

                <div class='buscador'>
                    <input name='vta_tipo_ajuste_haber_txt_buscar' id='vta_tipo_ajuste_haber_txt_buscar' type='text' />
                    <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

                    <?php if(UsCredencial::getEsAcreditado('GRAL_CONDICION_IVA_ALTA_RELACION_VTA_TIPO_AJUSTE_HABER_ACCIONES_ALTA')){ ?>
                    <div class="trigger wopenModal boton" archivo="ajax/modulos/vta_tipo_ajuste_haber/vta_tipo_ajuste_haber_alta.php" contenedor="div_modal" ancho="900" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'vta_tipo_ajuste_haber', 'gral_condicion_iva', <?php Gral::_echo($gral_condicion_iva->getId()) ?>, 'GralCondicionIva', 'GralCondicionIvaVtaTipoAjusteHaber')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('vta_tipo_ajuste_haber') ?>'>
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

