
	<?php if(UsCredencial::getEsAcreditado('ML_ATTRIBUTE_ALTA_RELACION_ML_VALUE')){ ?>
	<div class='relacion ml_value' clase='ml_value' padre='ml_attribute' padre_clase='MlAttribute' relacion='MlAttributeMlValue'>

	<div class='titulo'>
            <label class="titulo-entidad-vinculada"><?php Lang::_lang('MlValues') ?></label>
            <label class="titulo-entidad-cantidad">            
                <?php 
                $cantidad_ml_values = $ml_attribute->getCantidadMlValuesXMlAttributeMlValue();
                echo ($cantidad_ml_values > 0) ? '('.$cantidad_ml_values.')' : '' ;
                ?>
            </label>
            <div class="titulo-entidad-comentarios">
                <?php Lang::_lang('comentario_ml_attribute_alta_relacion_ml_attribute_ml_value_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
            </div>
	</div>

	<div class='buscador'>
            <input name='ml_value_txt_buscar' id='ml_value_txt_buscar' type='text' />
            <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

            <?php if(UsCredencial::getEsAcreditado('ML_ATTRIBUTE_ALTA_RELACION_ML_VALUE_ACCIONES_ALTA')){ ?>
            <div class="trigger wopenModal boton" archivo="ajax/modulos/ml_value/ml_value_alta.php" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'ml_value', 'ml_attribute', <?php Gral::_echo($ml_attribute->getId()) ?>, 'MlAttribute', 'MlAttributeMlValue')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('ml_value') ?>'>
                <img src='imgs/btn_add.png' border='0' width='18' align='absmiddle' />
            </div>
            <?php } ?>
		
	</div>

	<div class='datos'>
            &nbsp;
	</div>

</div>
<?php } ?>

