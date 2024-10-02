
    <?php if(UsCredencial::getEsAcreditado('GRAL_ESCENARIO_ALTA_RELACION_VTA_VENDEDOR')){ ?>
        <?php if($gral_escenario->getAltaMostrarBloqueRelacionVtaVendedorGralEscenario()){ ?>
            <div class='relacion vta_vendedor' clase='vta_vendedor' padre='gral_escenario' padre_clase='GralEscenario' relacion='VtaVendedorGralEscenario'>

                <div class='titulo'>
                    <label class="titulo-entidad-vinculada"><?php Lang::_lang('VtaVendedors') ?></label>
                    <label class="titulo-entidad-cantidad">            
                        <?php 
                        $cantidad_vta_vendedors = $gral_escenario->getCantidadVtaVendedorsXVtaVendedorGralEscenario();
                        echo ($cantidad_vta_vendedors > 0) ? '('.$cantidad_vta_vendedors.')' : '' ;
                        ?>
                    </label>
                    <div class="titulo-entidad-comentarios">
                        <?php Lang::_lang('comentario_gral_escenario_alta_relacion_vta_vendedor_gral_escenario_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
                    </div>
                </div>

                <div class='buscador'>
                    <input name='vta_vendedor_txt_buscar' id='vta_vendedor_txt_buscar' type='text' />
                    <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

                    <?php if(UsCredencial::getEsAcreditado('GRAL_ESCENARIO_ALTA_RELACION_VTA_VENDEDOR_ACCIONES_ALTA')){ ?>
                    <div class="trigger wopenModal boton" archivo="ajax/modulos/vta_vendedor/vta_vendedor_alta.php" contenedor="div_modal" ancho="900" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'vta_vendedor', 'gral_escenario', <?php Gral::_echo($gral_escenario->getId()) ?>, 'GralEscenario', 'VtaVendedorGralEscenario')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('vta_vendedor') ?>'>
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

