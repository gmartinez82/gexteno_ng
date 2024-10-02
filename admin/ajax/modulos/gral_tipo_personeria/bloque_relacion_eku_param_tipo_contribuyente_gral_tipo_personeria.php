
    <?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_PERSONERIA_ALTA_RELACION_EKU_PARAM_TIPO_CONTRIBUYENTE')){ ?>
        <?php if($gral_tipo_personeria->getAltaMostrarBloqueRelacionEkuParamTipoContribuyenteGralTipoPersoneria()){ ?>
            <div class='relacion eku_param_tipo_contribuyente' clase='eku_param_tipo_contribuyente' padre='gral_tipo_personeria' padre_clase='GralTipoPersoneria' relacion='EkuParamTipoContribuyenteGralTipoPersoneria'>

                <div class='titulo'>
                    <label class="titulo-entidad-vinculada"><?php Lang::_lang('EkuParamTipoContribuyentes') ?></label>
                    <label class="titulo-entidad-cantidad">            
                        <?php 
                        $cantidad_eku_param_tipo_contribuyentes = $gral_tipo_personeria->getCantidadEkuParamTipoContribuyentesXEkuParamTipoContribuyenteGralTipoPersoneria();
                        echo ($cantidad_eku_param_tipo_contribuyentes > 0) ? '('.$cantidad_eku_param_tipo_contribuyentes.')' : '' ;
                        ?>
                    </label>
                    <div class="titulo-entidad-comentarios">
                        <?php Lang::_lang('comentario_gral_tipo_personeria_alta_relacion_eku_param_tipo_contribuyente_gral_tipo_personeria_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
                    </div>
                </div>

                <div class='buscador'>
                    <input name='eku_param_tipo_contribuyente_txt_buscar' id='eku_param_tipo_contribuyente_txt_buscar' type='text' />
                    <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

                    <?php if(UsCredencial::getEsAcreditado('GRAL_TIPO_PERSONERIA_ALTA_RELACION_EKU_PARAM_TIPO_CONTRIBUYENTE_ACCIONES_ALTA')){ ?>
                    <div class="trigger wopenModal boton" archivo="ajax/modulos/eku_param_tipo_contribuyente/eku_param_tipo_contribuyente_alta.php" contenedor="div_modal" ancho="900" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'eku_param_tipo_contribuyente', 'gral_tipo_personeria', <?php Gral::_echo($gral_tipo_personeria->getId()) ?>, 'GralTipoPersoneria', 'EkuParamTipoContribuyenteGralTipoPersoneria')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('eku_param_tipo_contribuyente') ?>'>
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

