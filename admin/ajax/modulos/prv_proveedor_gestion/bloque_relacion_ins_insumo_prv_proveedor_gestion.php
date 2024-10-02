
	<?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_ALTA_RELACION_INS_INSUMO')){ ?>
	<div class='relacion ins_insumo' clase='ins_insumo' padre='prv_proveedor' padre_clase='PrvProveedor' relacion='InsInsumoPrvProveedor'>

	<div class='titulo'>
            <label class="titulo-entidad-vinculada"><?php Lang::_lang('InsInsumos') ?></label>
            <label class="titulo-entidad-cantidad">            
                <?php 
                $cantidad_ins_insumos = $prv_proveedor->getCantidadInsInsumosXInsInsumoPrvProveedor();
                echo ($cantidad_ins_insumos > 0) ? '('.$cantidad_ins_insumos.')' : '' ;
                ?>
            </label>
            <div class="titulo-entidad-comentarios">
                <?php Lang::_lang('comentario_prv_proveedor_alta_relacion_ins_insumo_prv_proveedor_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
            </div>
	</div>

	<div class='buscador'>
            <input name='ins_insumo_txt_buscar' id='ins_insumo_txt_buscar' type='text' />
            <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

            <?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_ALTA_RELACION_INS_INSUMO_ACCIONES_ALTA')){ ?>
            <div class="trigger wopenModal boton" archivo="ajax/modulos/ins_insumo/ins_insumo_alta.php" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'ins_insumo', 'prv_proveedor', <?php Gral::_echo($prv_proveedor->getId()) ?>, 'PrvProveedor', 'InsInsumoPrvProveedor')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('ins_insumo') ?>'>
                <img src='imgs/btn_add.png' border='0' width='18' align='absmiddle' />
            </div>
            <?php } ?>
		
	</div>

	<div class='datos'>
            &nbsp;
	</div>

</div>
<?php } ?>

