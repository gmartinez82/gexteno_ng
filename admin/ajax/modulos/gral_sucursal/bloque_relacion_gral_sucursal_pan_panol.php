
    <?php if(UsCredencial::getEsAcreditado('GRAL_SUCURSAL_ALTA_RELACION_PAN_PANOL')){ ?>
        <?php if($gral_sucursal->getAltaMostrarBloqueRelacionGralSucursalPanPanol()){ ?>
            <div class='relacion pan_panol' clase='pan_panol' padre='gral_sucursal' padre_clase='GralSucursal' relacion='GralSucursalPanPanol'>

                <div class='titulo'>
                    <label class="titulo-entidad-vinculada"><?php Lang::_lang('PanPanols') ?></label>
                    <label class="titulo-entidad-cantidad">            
                        <?php 
                        $cantidad_pan_panols = $gral_sucursal->getCantidadPanPanolsXGralSucursalPanPanol();
                        echo ($cantidad_pan_panols > 0) ? '('.$cantidad_pan_panols.')' : '' ;
                        ?>
                    </label>
                    <div class="titulo-entidad-comentarios">
                        <?php Lang::_lang('comentario_gral_sucursal_alta_relacion_gral_sucursal_pan_panol_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
                    </div>
                </div>

                <div class='buscador'>
                    <input name='pan_panol_txt_buscar' id='pan_panol_txt_buscar' type='text' />
                    <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

                    <?php if(UsCredencial::getEsAcreditado('GRAL_SUCURSAL_ALTA_RELACION_PAN_PANOL_ACCIONES_ALTA')){ ?>
                    <div class="trigger wopenModal boton" archivo="ajax/modulos/pan_panol/pan_panol_alta.php" contenedor="div_modal" ancho="900" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'pan_panol', 'gral_sucursal', <?php Gral::_echo($gral_sucursal->getId()) ?>, 'GralSucursal', 'GralSucursalPanPanol')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('pan_panol') ?>'>
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

