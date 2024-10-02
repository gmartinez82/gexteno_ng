
    <?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_ALTA_RELACION_INS_MARCA')){ ?>
        <?php if($prv_proveedor->getAltaMostrarBloqueRelacionPrvProveedorInsMarca()){ ?>
            <div class='relacion ins_marca' clase='ins_marca' padre='prv_proveedor' padre_clase='PrvProveedor' relacion='PrvProveedorInsMarca'>

                <div class='titulo'>
                    <label class="titulo-entidad-vinculada"><?php Lang::_lang('InsMarcas') ?></label>
                    <label class="titulo-entidad-cantidad">            
                        <?php 
                        $cantidad_ins_marcas = $prv_proveedor->getCantidadInsMarcasXPrvProveedorInsMarca();
                        echo ($cantidad_ins_marcas > 0) ? '('.$cantidad_ins_marcas.')' : '' ;
                        ?>
                    </label>
                    <div class="titulo-entidad-comentarios">
                        <?php Lang::_lang('comentario_prv_proveedor_alta_relacion_prv_proveedor_ins_marca_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
                    </div>
                </div>

                <div class='buscador'>
                    <input name='ins_marca_txt_buscar' id='ins_marca_txt_buscar' type='text' />
                    <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

                    <?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_ALTA_RELACION_INS_MARCA_ACCIONES_ALTA')){ ?>
                    <div class="trigger wopenModal boton" archivo="ajax/modulos/ins_marca/ins_marca_alta.php" contenedor="div_modal" ancho="900" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'ins_marca', 'prv_proveedor', <?php Gral::_echo($prv_proveedor->getId()) ?>, 'PrvProveedor', 'PrvProveedorInsMarca')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('ins_marca') ?>'>
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

