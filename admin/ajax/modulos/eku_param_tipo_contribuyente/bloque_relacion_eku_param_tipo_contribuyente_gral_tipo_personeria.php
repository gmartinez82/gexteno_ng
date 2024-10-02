
    <?php if(UsCredencial::getEsAcreditado('EKU_PARAM_TIPO_CONTRIBUYENTE_ALTA_RELACION_GRAL_TIPO_PERSONERIA')){ ?>
        <?php if($eku_param_tipo_contribuyente->getAltaMostrarBloqueRelacionEkuParamTipoContribuyenteGralTipoPersoneria()){ ?>
            <div class='relacion gral_tipo_personeria' clase='gral_tipo_personeria' padre='eku_param_tipo_contribuyente' padre_clase='EkuParamTipoContribuyente' relacion='EkuParamTipoContribuyenteGralTipoPersoneria'>

                <div class='titulo'>
                    <label class="titulo-entidad-vinculada"><?php Lang::_lang('GralTipoPersonerias') ?></label>
                    <label class="titulo-entidad-cantidad">            
                        <?php 
                        $cantidad_gral_tipo_personerias = $eku_param_tipo_contribuyente->getCantidadGralTipoPersoneriasXEkuParamTipoContribuyenteGralTipoPersoneria();
                        echo ($cantidad_gral_tipo_personerias > 0) ? '('.$cantidad_gral_tipo_personerias.')' : '' ;
                        ?>
                    </label>
                    <div class="titulo-entidad-comentarios">
                        <?php Lang::_lang('comentario_eku_param_tipo_contribuyente_alta_relacion_eku_param_tipo_contribuyente_gral_tipo_personeria_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
                    </div>
                </div>

                <div class='buscador'>
                    <input name='gral_tipo_personeria_txt_buscar' id='gral_tipo_personeria_txt_buscar' type='text' />
                    <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

                    <?php if(UsCredencial::getEsAcreditado('EKU_PARAM_TIPO_CONTRIBUYENTE_ALTA_RELACION_GRAL_TIPO_PERSONERIA_ACCIONES_ALTA')){ ?>
                    <div class="trigger wopenModal boton" archivo="ajax/modulos/gral_tipo_personeria/gral_tipo_personeria_alta.php" contenedor="div_modal" ancho="900" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'gral_tipo_personeria', 'eku_param_tipo_contribuyente', <?php Gral::_echo($eku_param_tipo_contribuyente->getId()) ?>, 'EkuParamTipoContribuyente', 'EkuParamTipoContribuyenteGralTipoPersoneria')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('gral_tipo_personeria') ?>'>
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

