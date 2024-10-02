<?php
$sel = '';
$css_sel = '';
$ins_matriz_id = '';
if(in_array($ins_matriz->getId(), $o_ids)){
	$sel = "checked = 'checked'";
	$css_sel = 'sel';
	
	$arr_cri = array(
		array('campo' => 'ins_marca_id', 'valor' => $o_padre->getId()),
		array('campo' => 'ins_matriz_id', 'valor' => $ins_matriz->getId())
	);
	$ins_matriz = new InsMatriz();
	$ins_matriz = InsMatriz::getOxArray($arr_cri);
	$ins_matriz_id = $ins_matriz->getId();
}
?>
<div class='list <?php echo $css_sel ?>' title='<?php echo $ins_matriz->getObservacion() ?>'>

<?php if(UsCredencial::getEsAcreditado('INS_MARCA_ALTA_RELACION_INS_MATRIZ_ACCIONES')){ ?>	
	<input type='checkbox' id='chk_us_credencial_id_<?php echo $ins_matriz->getId() ?>' name='chk_ins_matriz[<?php echo $ins_matriz->getId() ?>]' <?php echo $sel ?> value='1' identificador='<?php echo $ins_matriz->getId() ?>' relacion_id='<?php echo $ins_matriz_id ?>' />
<?php } ?>

	<label class='descripcion' for='chk_ins_matriz_id_<?php echo $ins_matriz->getId() ?>'><strong><?php Gral::_echo($ins_matriz->getDescripcion()) ?></strong></label>
	
	<label class='link'>
		<?php if($ins_matriz_id != ''){ ?>
		<div class="trigger wopenModal boton" archivo="ajax/modulos/ins_matriz/ins_matriz_alta.php?id=<?php Gral::_echo($ins_matriz_id) ?>" contenedor="div_modal" ancho="600" alto="500" tipo="formulario" post="refreshSetUno(<?php Gral::_echo($ins_matriz->getId()) ?>, 'ins_matriz', 'ins_marca', <?php Gral::_echo($o_padre->getId()) ?>, 'InsMarca', 'InsMatriz')" title="Editar InsMatriz"><?php Lang::_lang('Editar') ?></div>
		<?php } ?>
	
		<a class='boton' href='ins_matriz_alta.php?id=<?php echo $ins_matriz->getId() ?>' title="<?php Lang::_lang('Ver/Editar') ?>: '<?php Gral::_echo($ins_matriz->getDescripcion()) ?>' "><?php Lang::_lang('Ver') ?></a>
	</label>
	
    <div class='segunda'>
        <label class='light'><?php Lang::_lang('Cod') ?>:</label> <label class='dato'><?php Gral::_echo($ins_matriz->getCodigo()) ?></label><br />
    </div>

    <?php if($ins_matriz_id != ''){ ?>
    <div class='segunda'>
        
		<label class='light'><?php Lang::_lang('Cod Pieza en Matriz') ?>:</label> <label class='dato'><?php echo $ins_matriz->getCodigoPieza() ?></label><br />
        
		<label class='light'><?php Lang::_lang('Obs') ?>:</label> <label class='dato'><?php echo $ins_matriz->getObservacion() ?></label><br />
        
    </div>
    <?php } ?>
	
</div>
<script>
setInit();
</script>

