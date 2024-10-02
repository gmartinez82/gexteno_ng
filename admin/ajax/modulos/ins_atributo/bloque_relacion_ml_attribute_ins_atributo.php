
	<?php if(UsCredencial::getEsAcreditado('INS_ATRIBUTO_ALTA_RELACION_ML_ATTRIBUTE')){ ?>
	<div class='relacion ml_attribute' clase='ml_attribute' padre='ins_atributo' padre_clase='InsAtributo' relacion='MlAttributeInsAtributo'>

	<div class='titulo'>
            <label class="titulo-entidad-vinculada"><?php Lang::_lang('MlAttributes') ?></label>
            <label class="titulo-entidad-cantidad">            
                <?php 
                $cantidad_ml_attributes = $ins_atributo->getCantidadMlAttributesXMlAttributeInsAtributo();
                echo ($cantidad_ml_attributes > 0) ? '('.$cantidad_ml_attributes.')' : '' ;
                ?>
            </label>
            <div class="titulo-entidad-comentarios">
                <?php Lang::_lang('comentario_ins_atributo_alta_relacion_ml_attribute_ins_atributo_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
            </div>
	</div>

	<div class='buscador'>
            <input name='ml_attribute_txt_buscar' id='ml_attribute_txt_buscar' type='text' />
            <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

            <?php if(UsCredencial::getEsAcreditado('INS_ATRIBUTO_ALTA_RELACION_ML_ATTRIBUTE_ACCIONES_ALTA')){ ?>
            <div class="trigger wopenModal boton" archivo="ajax/modulos/ml_attribute/ml_attribute_alta.php" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'ml_attribute', 'ins_atributo', <?php Gral::_echo($ins_atributo->getId()) ?>, 'InsAtributo', 'MlAttributeInsAtributo')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('ml_attribute') ?>'>
                <img src='imgs/btn_add.png' border='0' width='18' align='absmiddle' />
            </div>
            <?php } ?>
		
	</div>

	<div class='datos'>
            &nbsp;
	</div>

</div>
<?php } ?>

