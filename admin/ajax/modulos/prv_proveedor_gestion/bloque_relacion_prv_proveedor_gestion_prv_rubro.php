
	<?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_ALTA_RELACION_PRV_RUBRO')){ ?>
	<div class='relacion prv_rubro' clase='prv_rubro' padre='prv_proveedor' padre_clase='PrvProveedor' relacion='PrvProveedorPrvRubro'>

	<div class='titulo'>
            <label class="titulo-entidad-vinculada"><?php Lang::_lang('PrvRubros') ?></label>
            <label class="titulo-entidad-cantidad">            
                <?php 
                $cantidad_prv_rubros = $prv_proveedor->getCantidadPrvRubrosXPrvProveedorPrvRubro();
                echo ($cantidad_prv_rubros > 0) ? '('.$cantidad_prv_rubros.')' : '' ;
                ?>
            </label>
            <div class="titulo-entidad-comentarios">
                <?php Lang::_lang('comentario_prv_proveedor_alta_relacion_prv_proveedor_prv_rubro_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
            </div>
	</div>

	<div class='buscador'>
            <input name='prv_rubro_txt_buscar' id='prv_rubro_txt_buscar' type='text' />
            <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

            <?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_ALTA_RELACION_PRV_RUBRO_ACCIONES_ALTA')){ ?>
            <div class="trigger wopenModal boton" archivo="ajax/modulos/prv_rubro/prv_rubro_alta.php" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'prv_rubro', 'prv_proveedor', <?php Gral::_echo($prv_proveedor->getId()) ?>, 'PrvProveedor', 'PrvProveedorPrvRubro')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('prv_rubro') ?>'>
                <img src='imgs/btn_add.png' border='0' width='18' align='absmiddle' />
            </div>
            <?php } ?>
		
	</div>

	<div class='datos'>
            &nbsp;
	</div>

</div>
<?php } ?>

