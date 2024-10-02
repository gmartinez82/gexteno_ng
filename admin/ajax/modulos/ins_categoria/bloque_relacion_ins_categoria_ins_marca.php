
	<?php if(UsCredencial::getEsAcreditado('INS_CATEGORIA_ALTA_RELACION_INS_MARCA')){ ?>
	<div class='relacion ins_marca' clase='ins_marca' padre='ins_categoria' padre_clase='InsCategoria' relacion='InsCategoriaInsMarca'>

	<div class='titulo'>
            <label class="titulo-entidad-vinculada"><?php Lang::_lang('InsMarcas') ?></label>
            <label class="titulo-entidad-cantidad">            
                <?php 
                $cantidad_ins_marcas = $ins_categoria->getCantidadInsMarcasXInsCategoriaInsMarca();
                echo ($cantidad_ins_marcas > 0) ? '('.$cantidad_ins_marcas.')' : '' ;
                ?>
            </label>
            <div class="titulo-entidad-comentarios">
                <?php Lang::_lang('comentario_ins_categoria_alta_relacion_ins_categoria_ins_marca_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
            </div>
	</div>

	<div class='buscador'>
            <input name='ins_marca_txt_buscar' id='ins_marca_txt_buscar' type='text' />
            <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

            <?php if(UsCredencial::getEsAcreditado('INS_CATEGORIA_ALTA_RELACION_INS_MARCA_ACCIONES_ALTA')){ ?>
            <div class="trigger wopenModal boton" archivo="ajax/modulos/ins_marca/ins_marca_alta.php" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'ins_marca', 'ins_categoria', <?php Gral::_echo($ins_categoria->getId()) ?>, 'InsCategoria', 'InsCategoriaInsMarca')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('ins_marca') ?>'>
                <img src='imgs/btn_add.png' border='0' width='18' align='absmiddle' />
            </div>
            <?php } ?>
		
	</div>

	<div class='datos'>
            &nbsp;
	</div>

</div>
<?php } ?>

