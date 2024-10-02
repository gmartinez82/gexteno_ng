<?php
$sel = '';
$css_sel = '';
$prv_proveedor_ins_marca_id = '';
if(in_array($prv_proveedor_relacionado->getId(), $o_ids)){
    $sel = "checked = 'checked'";
    $css_sel = 'sel';

    $array = array(
        array('campo' => 'ins_marca_id', 'valor' => $o_padre->getId()),
        array('campo' => 'prv_proveedor_id', 'valor' => $prv_proveedor_relacionado->getId())
    );
    $prv_proveedor_ins_marca = PrvProveedorInsMarca::getOxArray($array);
    $prv_proveedor_ins_marca_id = $prv_proveedor_ins_marca->getId();
}
?>
<div class='list <?php echo $css_sel ?>'>

    <?php if(UsCredencial::getEsAcreditado('INS_MARCA_ALTA_RELACION_PRV_PROVEEDOR_ACCIONES_SELECCION')){ ?>	
    <input type='checkbox' id='chk_prv_proveedor_id_<?php echo $prv_proveedor_relacionado->getId() ?>' name='chk_prv_proveedor[<?php echo $prv_proveedor_relacionado->getId() ?>]' <?php echo $sel ?> value='1' identificador='<?php echo $prv_proveedor_relacionado->getId() ?>' relacion_id='<?php echo $prv_proveedor_ins_marca_id ?>' />
    <?php } ?>

    <label class='link'>
        <?php if(UsCredencial::getEsAcreditado('INS_MARCA_ALTA_RELACION_PRV_PROVEEDOR_ACCIONES_EDITAR')){ ?>	
        <?php if($prv_proveedor_ins_marca_id != ''){ ?>
        <div class="trigger wopenModal boton" archivo="ajax/modulos/prv_proveedor_ins_marca/prv_proveedor_ins_marca_alta.php?id=<?php Gral::_echo($prv_proveedor_ins_marca_id) ?>" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="refreshSetUno(<?php Gral::_echo($prv_proveedor_relacionado->getId()) ?>, 'prv_proveedor', 'ins_marca', <?php Gral::_echo($o_padre->getId()) ?>, 'InsMarca', 'PrvProveedorInsMarca')" title="Editar PrvProveedorInsMarca"><?php Lang::_lang('Editar') ?></div>
        <?php } ?>
        <?php } ?>

        <?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_ALTA')){ ?>	
        <a class='boton' href='prv_proveedor_alta.php?id=<?php echo $prv_proveedor_relacionado->getId() ?>' title="<?php Lang::_lang('Ver/Editar') ?>: '<?php Gral::_echo($prv_proveedor_relacionado->getDescripcion()) ?>' "><?php Lang::_lang('Ver') ?></a>
        <?php } ?>
    </label>
    	
    <label class='descripcion'><?php Gral::_echo($prv_proveedor_relacionado->getDescripcionParaRelacion()) ?></label>
        	
    <?php if(trim($prv_proveedor_relacionado->getObservacion()) != ''){ ?>
    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" alt="help" title="<?php echo $prv_proveedor_relacionado->getObservacion() ?>" width="20" />
    <?php } ?>
        	
    <?php if($prv_proveedor_ins_marca_id != ''){ ?>
    <div class='segunda'>
        
    </div>
    <?php } ?>
	
</div>
<script>
setInit();
</script>

