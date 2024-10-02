
	<?php if(UsCredencial::getEsAcreditado('ML_ATTRIBUTE_ALTA_RELACION_INS_ATRIBUTO')){ ?>
	<div class='relacion ins_atributo' clase='ins_atributo' padre='ml_attribute' padre_clase='MlAttribute' relacion='MlAttributeInsAtributo'>

	<div class='titulo'>
            <label class="titulo-entidad-vinculada"><?php Lang::_lang('InsAtributos') ?></label>
            <label class="titulo-entidad-cantidad">            
                <?php 
                $cantidad_ins_atributos = $ml_attribute->getCantidadInsAtributosXMlAttributeInsAtributo();
                echo ($cantidad_ins_atributos > 0) ? '('.$cantidad_ins_atributos.')' : '' ;
                ?>
            </label>
            <div class="titulo-entidad-comentarios">
                <?php Lang::_lang('comentario_ml_attribute_alta_relacion_ml_attribute_ins_atributo_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
            </div>
	</div>

	<div class='buscador'>
            <input name='ins_atributo_txt_buscar' id='ins_atributo_txt_buscar' type='text' />
            <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

            <?php if(UsCredencial::getEsAcreditado('ML_ATTRIBUTE_ALTA_RELACION_INS_ATRIBUTO_ACCIONES_ALTA')){ ?>
            <div class="trigger wopenModal boton" archivo="ajax/modulos/ins_atributo/ins_atributo_alta.php" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'ins_atributo', 'ml_attribute', <?php Gral::_echo($ml_attribute->getId()) ?>, 'MlAttribute', 'MlAttributeInsAtributo')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('ins_atributo') ?>'>
                <img src='imgs/btn_add.png' border='0' width='18' align='absmiddle' />
            </div>
            <?php } ?>
		
	</div>

	<div class='datos'>
            &nbsp;
	</div>

</div>
<?php } ?>

