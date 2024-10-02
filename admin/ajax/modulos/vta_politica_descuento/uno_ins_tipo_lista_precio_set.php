<?php
$sel = '';
$css_sel = '';
$vta_politica_descuento_ins_tipo_lista_precio_id = '';
if(in_array($ins_tipo_lista_precio_relacionado->getId(), $o_ids)){
    $sel = "checked = 'checked'";
    $css_sel = 'sel';

    $array = array(
        array('campo' => 'vta_politica_descuento_id', 'valor' => $o_padre->getId()),
        array('campo' => 'ins_tipo_lista_precio_id', 'valor' => $ins_tipo_lista_precio_relacionado->getId())
    );
    $vta_politica_descuento_ins_tipo_lista_precio = VtaPoliticaDescuentoInsTipoListaPrecio::getOxArray($array);
    $vta_politica_descuento_ins_tipo_lista_precio_id = $vta_politica_descuento_ins_tipo_lista_precio->getId();
}
?>
<div class='list <?php echo $css_sel ?>'>

    <?php if(UsCredencial::getEsAcreditado('VTA_POLITICA_DESCUENTO_ALTA_RELACION_INS_TIPO_LISTA_PRECIO_ACCIONES_SELECCION')){ ?>	
    <input type='checkbox' id='chk_ins_tipo_lista_precio_id_<?php echo $ins_tipo_lista_precio_relacionado->getId() ?>' name='chk_ins_tipo_lista_precio[<?php echo $ins_tipo_lista_precio_relacionado->getId() ?>]' <?php echo $sel ?> value='1' identificador='<?php echo $ins_tipo_lista_precio_relacionado->getId() ?>' relacion_id='<?php echo $vta_politica_descuento_ins_tipo_lista_precio_id ?>' />
    <?php } ?>

    <label class='link'>
        <?php if(UsCredencial::getEsAcreditado('VTA_POLITICA_DESCUENTO_ALTA_RELACION_INS_TIPO_LISTA_PRECIO_ACCIONES_EDITAR')){ ?>	
        <?php if($vta_politica_descuento_ins_tipo_lista_precio_id != ''){ ?>
        <div class="trigger wopenModal boton" archivo="ajax/modulos/vta_politica_descuento_ins_tipo_lista_precio/vta_politica_descuento_ins_tipo_lista_precio_alta.php?id=<?php Gral::_echo($vta_politica_descuento_ins_tipo_lista_precio_id) ?>" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="refreshSetUno(<?php Gral::_echo($ins_tipo_lista_precio_relacionado->getId()) ?>, 'ins_tipo_lista_precio', 'vta_politica_descuento', <?php Gral::_echo($o_padre->getId()) ?>, 'VtaPoliticaDescuento', 'VtaPoliticaDescuentoInsTipoListaPrecio')" title="Editar VtaPoliticaDescuentoInsTipoListaPrecio"><?php Lang::_lang('Editar') ?></div>
        <?php } ?>
        <?php } ?>

        <?php if(UsCredencial::getEsAcreditado('INS_TIPO_LISTA_PRECIO_ALTA')){ ?>	
        <a class='boton' href='ins_tipo_lista_precio_alta.php?id=<?php echo $ins_tipo_lista_precio_relacionado->getId() ?>' title="<?php Lang::_lang('Ver/Editar') ?>: '<?php Gral::_echo($ins_tipo_lista_precio_relacionado->getDescripcion()) ?>' "><?php Lang::_lang('Ver') ?></a>
        <?php } ?>
    </label>
    	
    <label class='descripcion'><?php Gral::_echo($ins_tipo_lista_precio_relacionado->getDescripcionParaRelacion()) ?></label>
        	
    <?php if(trim($ins_tipo_lista_precio_relacionado->getObservacion()) != ''){ ?>
    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" alt="help" title="<?php echo $ins_tipo_lista_precio_relacionado->getObservacion() ?>" width="20" />
    <?php } ?>
        	
    <?php if($vta_politica_descuento_ins_tipo_lista_precio_id != ''){ ?>
    <div class='segunda'>
        
    </div>
    <?php } ?>
	
</div>
<script>
setInit();
</script>

