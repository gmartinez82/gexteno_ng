
	<?php if(UsCredencial::getEsAcreditado('INS_MARCA_ALTA_RELACION_INS_CATEGORIA')){ ?>
	<div class='relacion ins_categoria' clase='ins_categoria' padre='ins_marca' padre_clase='InsMarca' relacion='InsCategoriaInsMarca'>

	<div class='titulo'>
            <label class="titulo-entidad-vinculada"><?php Lang::_lang('InsCategorias') ?></label>
            <label class="titulo-entidad-cantidad">            
                <?php 
                $cantidad_ins_categorias = $ins_marca->getCantidadInsCategoriasXInsCategoriaInsMarca();
                echo ($cantidad_ins_categorias > 0) ? '('.$cantidad_ins_categorias.')' : '' ;
                ?>
            </label>
            <div class="titulo-entidad-comentarios">
                <?php Lang::_lang('comentario_ins_marca_alta_relacion_ins_categoria_ins_marca_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
            </div>
	</div>

	<div class='buscador'>
            <input name='ins_categoria_txt_buscar' id='ins_categoria_txt_buscar' type='text' />
            <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

            <?php if(UsCredencial::getEsAcreditado('INS_MARCA_ALTA_RELACION_INS_CATEGORIA_ACCIONES_ALTA')){ ?>
            <div class="trigger wopenModal boton" archivo="ajax/modulos/ins_categoria/ins_categoria_alta.php" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'ins_categoria', 'ins_marca', <?php Gral::_echo($ins_marca->getId()) ?>, 'InsMarca', 'InsCategoriaInsMarca')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('ins_categoria') ?>'>
                <img src='imgs/btn_add.png' border='0' width='18' align='absmiddle' />
            </div>
            <?php } ?>
		
	</div>

	<div class='datos'>
            &nbsp;
	</div>

</div>
<?php } ?>

