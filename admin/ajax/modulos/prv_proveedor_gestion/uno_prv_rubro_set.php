<?php
$sel = '';
$css_sel = '';
$prv_proveedor_prv_rubro_id = '';
if(in_array($prv_rubro_relacionado->getId(), $o_ids)){
    $sel = "checked = 'checked'";
    $css_sel = 'sel';

    $array = array(
        array('campo' => 'prv_proveedor_id', 'valor' => $o_padre->getId()),
        array('campo' => 'prv_rubro_id', 'valor' => $prv_rubro_relacionado->getId())
    );
    $prv_proveedor_prv_rubro = PrvProveedorPrvRubro::getOxArray($array);
    $prv_proveedor_prv_rubro_id = $prv_proveedor_prv_rubro->getId();
}
?>
<div class='list <?php echo $css_sel ?>'>

    <?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_ALTA_RELACION_PRV_RUBRO_ACCIONES_SELECCION')){ ?>	
    <input type='checkbox' id='chk_prv_rubro_id_<?php echo $prv_rubro_relacionado->getId() ?>' name='chk_prv_rubro[<?php echo $prv_rubro_relacionado->getId() ?>]' <?php echo $sel ?> value='1' identificador='<?php echo $prv_rubro_relacionado->getId() ?>' relacion_id='<?php echo $prv_proveedor_prv_rubro_id ?>' />
    <?php } ?>

    <label class='link'>
        <?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_ALTA_RELACION_PRV_RUBRO_ACCIONES_EDITAR')){ ?>	
        <?php if($prv_proveedor_prv_rubro_id != ''){ ?>
        <div class="trigger wopenModal boton" archivo="ajax/modulos/prv_proveedor_prv_rubro/prv_proveedor_prv_rubro_alta.php?id=<?php Gral::_echo($prv_proveedor_prv_rubro_id) ?>" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="refreshSetUno(<?php Gral::_echo($prv_rubro_relacionado->getId()) ?>, 'prv_rubro', 'prv_proveedor', <?php Gral::_echo($o_padre->getId()) ?>, 'PrvProveedor', 'PrvProveedorPrvRubro')" title="Editar PrvProveedorPrvRubro"><?php Lang::_lang('Editar') ?></div>
        <?php } ?>
        <?php } ?>

        <?php if(UsCredencial::getEsAcreditado('PRV_RUBRO_ALTA')){ ?>	
        <a class='boton' href='prv_rubro_alta.php?id=<?php echo $prv_rubro_relacionado->getId() ?>' title="<?php Lang::_lang('Ver/Editar') ?>: '<?php Gral::_echo($prv_rubro_relacionado->getDescripcion()) ?>' "><?php Lang::_lang('Ver') ?></a>
        <?php } ?>
    </label>
    	
    <label class='descripcion'><?php Gral::_echo($prv_rubro_relacionado->getDescripcionParaRelacion()) ?></label>
        	
    <?php if(trim($prv_rubro_relacionado->getObservacion()) != ''){ ?>
    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" alt="help" title="<?php echo $prv_rubro_relacionado->getObservacion() ?>" width="20" />
    <?php } ?>
        	
    <?php if($prv_proveedor_prv_rubro_id != ''){ ?>
    <div class='segunda'>
        
    </div>
    <?php } ?>
	
</div>
<script>
setInit();
</script>

