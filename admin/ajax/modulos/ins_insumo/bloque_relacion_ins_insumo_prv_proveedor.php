
    <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_ALTA_RELACION_PRV_PROVEEDOR')){ ?>
        <?php if($ins_insumo->getAltaMostrarBloqueRelacionInsInsumoPrvProveedor()){ ?>
            <div class='relacion prv_proveedor' clase='prv_proveedor' padre='ins_insumo' padre_clase='InsInsumo' relacion='InsInsumoPrvProveedor'>

                <div class='titulo'>
                    <label class="titulo-entidad-vinculada"><?php Lang::_lang('PrvProveedors') ?></label>
                    <label class="titulo-entidad-cantidad">            
                        <?php 
                        $cantidad_prv_proveedors = $ins_insumo->getCantidadPrvProveedorsXInsInsumoPrvProveedor();
                        echo ($cantidad_prv_proveedors > 0) ? '('.$cantidad_prv_proveedors.')' : '' ;
                        ?>
                    </label>
                    <div class="titulo-entidad-comentarios">
                        <?php Lang::_lang('comentario_ins_insumo_alta_relacion_ins_insumo_prv_proveedor_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
                    </div>
                </div>

                <div class='buscador'>
                    <input name='prv_proveedor_txt_buscar' id='prv_proveedor_txt_buscar' type='text' />
                    <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

                    <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_ALTA_RELACION_PRV_PROVEEDOR_ACCIONES_ALTA')){ ?>
                    <div class="trigger wopenModal boton" archivo="ajax/modulos/prv_proveedor/prv_proveedor_alta.php" contenedor="div_modal" ancho="900" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'prv_proveedor', 'ins_insumo', <?php Gral::_echo($ins_insumo->getId()) ?>, 'InsInsumo', 'InsInsumoPrvProveedor')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('prv_proveedor') ?>'>
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

