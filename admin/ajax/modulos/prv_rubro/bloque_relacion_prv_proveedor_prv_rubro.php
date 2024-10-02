
	<?php if(UsCredencial::getEsAcreditado('PRV_RUBRO_ALTA_RELACION_PRV_PROVEEDOR')){ ?>
	<div class='relacion prv_proveedor' clase='prv_proveedor' padre='prv_rubro' padre_clase='PrvRubro' relacion='PrvProveedorPrvRubro'>

	<div class='titulo'>
            <label class="titulo-entidad-vinculada"><?php Lang::_lang('PrvProveedors') ?></label>
            <label class="titulo-entidad-cantidad">            
                <?php 
                $cantidad_prv_proveedors = $prv_rubro->getCantidadPrvProveedorsXPrvProveedorPrvRubro();
                echo ($cantidad_prv_proveedors > 0) ? '('.$cantidad_prv_proveedors.')' : '' ;
                ?>
            </label>
            <div class="titulo-entidad-comentarios">
                <?php Lang::_lang('comentario_prv_rubro_alta_relacion_prv_proveedor_prv_rubro_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
            </div>
	</div>

	<div class='buscador'>
            <input name='prv_proveedor_txt_buscar' id='prv_proveedor_txt_buscar' type='text' />
            <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

            <?php if(UsCredencial::getEsAcreditado('PRV_RUBRO_ALTA_RELACION_PRV_PROVEEDOR_ACCIONES_ALTA')){ ?>
            <div class="trigger wopenModal boton" archivo="ajax/modulos/prv_proveedor/prv_proveedor_alta.php" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'prv_proveedor', 'prv_rubro', <?php Gral::_echo($prv_rubro->getId()) ?>, 'PrvRubro', 'PrvProveedorPrvRubro')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('prv_proveedor') ?>'>
                <img src='imgs/btn_add.png' border='0' width='18' align='absmiddle' />
            </div>
            <?php } ?>
		
	</div>

	<div class='datos'>
            &nbsp;
	</div>

</div>
<?php } ?>

