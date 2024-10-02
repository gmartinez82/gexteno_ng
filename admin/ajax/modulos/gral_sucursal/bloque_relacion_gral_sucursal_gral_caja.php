
    <?php if(UsCredencial::getEsAcreditado('GRAL_SUCURSAL_ALTA_RELACION_GRAL_CAJA')){ ?>
        <?php if($gral_sucursal->getAltaMostrarBloqueRelacionGralSucursalGralCaja()){ ?>
            <div class='relacion gral_caja' clase='gral_caja' padre='gral_sucursal' padre_clase='GralSucursal' relacion='GralSucursalGralCaja'>

                <div class='titulo'>
                    <label class="titulo-entidad-vinculada"><?php Lang::_lang('GralCajas') ?></label>
                    <label class="titulo-entidad-cantidad">            
                        <?php 
                        $cantidad_gral_cajas = $gral_sucursal->getCantidadGralCajasXGralSucursalGralCaja();
                        echo ($cantidad_gral_cajas > 0) ? '('.$cantidad_gral_cajas.')' : '' ;
                        ?>
                    </label>
                    <div class="titulo-entidad-comentarios">
                        <?php Lang::_lang('comentario_gral_sucursal_alta_relacion_gral_sucursal_gral_caja_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
                    </div>
                </div>

                <div class='buscador'>
                    <input name='gral_caja_txt_buscar' id='gral_caja_txt_buscar' type='text' />
                    <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

                    <?php if(UsCredencial::getEsAcreditado('GRAL_SUCURSAL_ALTA_RELACION_GRAL_CAJA_ACCIONES_ALTA')){ ?>
                    <div class="trigger wopenModal boton" archivo="ajax/modulos/gral_caja/gral_caja_alta.php" contenedor="div_modal" ancho="900" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'gral_caja', 'gral_sucursal', <?php Gral::_echo($gral_sucursal->getId()) ?>, 'GralSucursal', 'GralSucursalGralCaja')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('gral_caja') ?>'>
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

