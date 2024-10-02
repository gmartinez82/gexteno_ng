<?php
$sel = '';
$css_sel = '';
$pde_pedido_prv_proveedor_id = '';
if(in_array($pde_pedido_relacionado->getId(), $o_ids)){
    $sel = "checked = 'checked'";
    $css_sel = 'sel';

    $array = array(
        array('campo' => 'prv_proveedor_id', 'valor' => $o_padre->getId()),
        array('campo' => 'pde_pedido_id', 'valor' => $pde_pedido_relacionado->getId())
    );
    $pde_pedido_prv_proveedor = PdePedidoPrvProveedor::getOxArray($array);
    $pde_pedido_prv_proveedor_id = $pde_pedido_prv_proveedor->getId();
}
?>
<div class='list <?php echo $css_sel ?>'>

    <?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_ALTA_RELACION_PDE_PEDIDO_ACCIONES_SELECCION')){ ?>	
    <input type='checkbox' id='chk_pde_pedido_id_<?php echo $pde_pedido_relacionado->getId() ?>' name='chk_pde_pedido[<?php echo $pde_pedido_relacionado->getId() ?>]' <?php echo $sel ?> value='1' identificador='<?php echo $pde_pedido_relacionado->getId() ?>' relacion_id='<?php echo $pde_pedido_prv_proveedor_id ?>' />
    <?php } ?>

    <label class='link'>
        <?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_ALTA_RELACION_PDE_PEDIDO_ACCIONES_EDITAR')){ ?>	
        <?php if($pde_pedido_prv_proveedor_id != ''){ ?>
        <div class="trigger wopenModal boton" archivo="ajax/modulos/pde_pedido_prv_proveedor_gestion/pde_pedido_prv_proveedor_alta.php?id=<?php Gral::_echo($pde_pedido_prv_proveedor_id) ?>" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="refreshSetUno(<?php Gral::_echo($pde_pedido_relacionado->getId()) ?>, 'pde_pedido', 'prv_proveedor', <?php Gral::_echo($o_padre->getId()) ?>, 'PrvProveedor', 'PdePedidoPrvProveedor')" title="Editar PdePedidoPrvProveedor"><?php Lang::_lang('Editar') ?></div>
        <?php } ?>
        <?php } ?>

        <?php if(UsCredencial::getEsAcreditado('PDE_PEDIDO_ALTA')){ ?>	
        <a class='boton' href='pde_pedido_alta.php?id=<?php echo $pde_pedido_relacionado->getId() ?>' title="<?php Lang::_lang('Ver/Editar') ?>: '<?php Gral::_echo($pde_pedido_relacionado->getDescripcion()) ?>' "><?php Lang::_lang('Ver') ?></a>
        <?php } ?>
    </label>
    	
    <label class='descripcion'><?php Gral::_echo($pde_pedido_relacionado->getDescripcionParaRelacion()) ?></label>
        	
    <?php if(trim($pde_pedido_relacionado->getObservacion()) != ''){ ?>
    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" alt="help" title="<?php echo $pde_pedido_relacionado->getObservacion() ?>" width="20" />
    <?php } ?>
        	
    <?php if($pde_pedido_prv_proveedor_id != ''){ ?>
    <div class='segunda'>
        
    </div>
    <?php } ?>
	
</div>
<script>
setInit();
</script>

