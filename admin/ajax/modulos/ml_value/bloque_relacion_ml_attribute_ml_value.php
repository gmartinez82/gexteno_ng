
	<?php if(UsCredencial::getEsAcreditado('ML_VALUE_ALTA_RELACION_ML_ATTRIBUTE')){ ?>
	<div class='relacion ml_attribute' clase='ml_attribute' padre='ml_value' padre_clase='MlValue' relacion='MlAttributeMlValue'>

	<div class='titulo'>
            <label class="titulo-entidad-vinculada"><?php Lang::_lang('MlAttributes') ?></label>
            <label class="titulo-entidad-cantidad">            
                <?php 
                $cantidad_ml_attributes = $ml_value->getCantidadMlAttributesXMlAttributeMlValue();
                echo ($cantidad_ml_attributes > 0) ? '('.$cantidad_ml_attributes.')' : '' ;
                ?>
            </label>
            <div class="titulo-entidad-comentarios">
                <?php Lang::_lang('comentario_ml_value_alta_relacion_ml_attribute_ml_value_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
            </div>
	</div>

	<div class='buscador'>
            <input name='ml_attribute_txt_buscar' id='ml_attribute_txt_buscar' type='text' />
            <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

            <?php if(UsCredencial::getEsAcreditado('ML_VALUE_ALTA_RELACION_ML_ATTRIBUTE_ACCIONES_ALTA')){ ?>
            <div class="trigger wopenModal boton" archivo="ajax/modulos/ml_attribute/ml_attribute_alta.php" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'ml_attribute', 'ml_value', <?php Gral::_echo($ml_value->getId()) ?>, 'MlValue', 'MlAttributeMlValue')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('ml_attribute') ?>'>
                <img src='imgs/btn_add.png' border='0' width='18' align='absmiddle' />
            </div>
            <?php } ?>
		
	</div>

	<div class='datos'>
            &nbsp;
	</div>

</div>
<?php } ?>

