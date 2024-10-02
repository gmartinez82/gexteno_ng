<?php
$sel = '';
$css_sel = '';
$pde_centro_pedido_us_usuario_id = '';
if(in_array($pde_centro_pedido_relacionado->getId(), $o_ids)){
    $sel = "checked = 'checked'";
    $css_sel = 'sel';

    $array = array(
        array('campo' => 'us_usuario_id', 'valor' => $o_padre->getId()),
        array('campo' => 'pde_centro_pedido_id', 'valor' => $pde_centro_pedido_relacionado->getId())
    );
    $pde_centro_pedido_us_usuario = PdeCentroPedidoUsUsuario::getOxArray($array);
    $pde_centro_pedido_us_usuario_id = $pde_centro_pedido_us_usuario->getId();
}
?>
<div class='list <?php echo $css_sel ?>'>

    <?php if(UsCredencial::getEsAcreditado('US_USUARIO_ALTA_RELACION_PDE_CENTRO_PEDIDO_ACCIONES_SELECCION')){ ?>	
    <input type='checkbox' id='chk_pde_centro_pedido_id_<?php echo $pde_centro_pedido_relacionado->getId() ?>' name='chk_pde_centro_pedido[<?php echo $pde_centro_pedido_relacionado->getId() ?>]' <?php echo $sel ?> value='1' identificador='<?php echo $pde_centro_pedido_relacionado->getId() ?>' relacion_id='<?php echo $pde_centro_pedido_us_usuario_id ?>' />
    <?php } ?>

    <label class='link'>
        <?php if(UsCredencial::getEsAcreditado('US_USUARIO_ALTA_RELACION_PDE_CENTRO_PEDIDO_ACCIONES_EDITAR')){ ?>	
        <?php if($pde_centro_pedido_us_usuario_id != ''){ ?>
        <div class="trigger wopenModal boton" archivo="ajax/modulos/pde_centro_pedido_us_usuario/pde_centro_pedido_us_usuario_alta.php?id=<?php Gral::_echo($pde_centro_pedido_us_usuario_id) ?>" contenedor="div_modal" ancho="950" alto="600" tipo="formulario" post="refreshSetUno(<?php Gral::_echo($pde_centro_pedido_relacionado->getId()) ?>, 'pde_centro_pedido', 'us_usuario', <?php Gral::_echo($o_padre->getId()) ?>, 'UsUsuario', 'PdeCentroPedidoUsUsuario')" title="Editar PdeCentroPedidoUsUsuario"><?php Lang::_lang('Editar') ?></div>
        <?php } ?>
        <?php } ?>

        <?php if(UsCredencial::getEsAcreditado('PDE_CENTRO_PEDIDO_ALTA')){ ?>	
        <a class='boton' href='pde_centro_pedido_alta.php?id=<?php echo $pde_centro_pedido_relacionado->getId() ?>&hash=<?php echo $pde_centro_pedido_relacionado->getHash() ?>' title="<?php Lang::_lang('Ver/Editar') ?>: '<?php Gral::_echo($pde_centro_pedido_relacionado->getDescripcion()) ?>' "><?php Lang::_lang('Ver') ?></a>
        <?php } ?>
    </label>
    	
    <label class='descripcion'><?php Gral::_echo($pde_centro_pedido_relacionado->getDescripcionParaRelacion()) ?></label>
        	
    <?php if(trim($pde_centro_pedido_relacionado->getObservacion()) != ''){ ?>
    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" alt="help" title="<?php echo $pde_centro_pedido_relacionado->getObservacion() ?>" width="20" />
    <?php } ?>
        	
    <?php if($pde_centro_pedido_us_usuario_id != ''){ ?>
    <div class='segunda'>
        
		<label class='light'><?php Lang::_lang('UsUsuario') ?>:</label> <label class='dato'><?php Gral::_echoConBr($pde_centro_pedido_us_usuario->getUsUsuario()->getDescripcion()) ?></label>
        
    </div>
    <?php } ?>
	
</div>
<script>
setInit();
</script>

