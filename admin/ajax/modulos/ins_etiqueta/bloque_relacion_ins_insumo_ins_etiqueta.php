
	<?php if(UsCredencial::getEsAcreditado('INS_ETIQUETA_ALTA_RELACION_INS_INSUMO')){ ?>
	<div class='relacion ins_insumo' clase='ins_insumo' padre='ins_etiqueta' padre_clase='InsEtiqueta' relacion='InsInsumoInsEtiqueta'>

	<div class='titulo'>
            <label class="titulo-entidad-vinculada"><?php Lang::_lang('InsInsumos') ?></label>
            <label class="titulo-entidad-cantidad">            
                <?php 
                $cantidad_ins_insumos = $ins_etiqueta->getCantidadInsInsumosXInsInsumoInsEtiqueta();
                echo ($cantidad_ins_insumos > 0) ? '('.$cantidad_ins_insumos.')' : '' ;
                ?>
            </label>
            <div class="titulo-entidad-comentarios">
                <?php Lang::_lang('comentario_ins_etiqueta_alta_relacion_ins_insumo_ins_etiqueta_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
            </div>
	</div>

	<div class='buscador'>
            <input name='ins_insumo_txt_buscar' id='ins_insumo_txt_buscar' type='text' />
            <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

            <?php if(UsCredencial::getEsAcreditado('INS_ETIQUETA_ALTA_RELACION_INS_INSUMO_ACCIONES_ALTA')){ ?>
            <div class="trigger wopenModal boton" archivo="ajax/modulos/ins_insumo/ins_insumo_alta.php" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'ins_insumo', 'ins_etiqueta', <?php Gral::_echo($ins_etiqueta->getId()) ?>, 'InsEtiqueta', 'InsInsumoInsEtiqueta')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('ins_insumo') ?>'>
                <img src='imgs/btn_add.png' border='0' width='18' align='absmiddle' />
            </div>
            <?php } ?>
		
	</div>

	<div class='datos'>
            &nbsp;
	</div>

</div>
<?php } ?>

