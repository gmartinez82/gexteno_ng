<?php
$sel = '';
$css_sel = '';
$pde_pedido_ins_marca_id = '';
if(in_array($ins_marca->getId(), $o_ids)){
	$sel = "checked = 'checked'";
	$css_sel = 'sel';
	
	$arr_cri = array(
		array('campo' => 'pde_pedido_id', 'valor' => $o_padre->getId()),
		array('campo' => 'ins_marca_id', 'valor' => $ins_marca->getId())
	);
	$pde_pedido_ins_marca = new PdePedidoInsMarca();
	$pde_pedido_ins_marca = PdePedidoInsMarca::getOxArray($arr_cri);
	$pde_pedido_ins_marca_id = $pde_pedido_ins_marca->getId();
}
?>
<div class='list <?php echo $css_sel ?>' title='<?php echo $ins_marca->getObservacion() ?>'>
	
	<input type='checkbox' id='chk_us_credencial_id_<?php echo $ins_marca->getId() ?>' name='chk_ins_marca[<?php echo $ins_marca->getId() ?>]' <?php echo $sel ?> value='1' identificador='<?php echo $ins_marca->getId() ?>' relacion_id='<?php echo $pde_pedido_ins_marca_id ?>' />

	<label class='descripcion' for='chk_ins_marca_id_<?php echo $ins_marca->getId() ?>'><strong><?php Gral::_echo($ins_marca->getDescripcion()) ?></strong></label>
	
	<label class='link'>
		<?php if($pde_pedido_ins_marca_id != ''){ ?>
		<div class="trigger wopenModal boton" archivo="ajax/modulos/pde_pedido_ins_marca/pde_pedido_ins_marca_alta.php?id=<?php Gral::_echo($pde_pedido_ins_marca_id) ?>" contenedor="div_modal" ancho="600" alto="500" tipo="formulario" post="refreshSetUno(<?php Gral::_echo($ins_marca->getId()) ?>, 'ins_marca', 'pde_pedido', <?php Gral::_echo($o_padre->getId()) ?>, 'PdePedido', 'PdePedidoInsMarca')" title="Editar PdePedidoInsMarca"><?php Lang::_lang('Editar') ?></div>
		<?php } ?>
	
		<a class='boton' href='ins_marca_alta.php?id=<?php echo $ins_marca->getId() ?>' title="<?php Lang::_lang('Ver/Editar') ?>: '<?php Gral::_echo($ins_marca->getDescripcion()) ?>' "><?php Lang::_lang('Ver') ?></a>
	</label>
	
    <div class='segunda'>
        <label class='light'><?php Lang::_lang('Cod') ?>:</label> <label class='dato'><?php Gral::_echo($ins_marca->getCodigo()) ?></label><br />
    </div>

    <?php if($pde_pedido_ins_marca_id != ''){ ?>
    <div class='segunda'>
        
    </div>
    <?php } ?>
	
</div>
<script>
setInit();
</script>

