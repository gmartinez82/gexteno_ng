<?php
$sel = '';
$css_sel = '';
$ins_insumo_bulto_ins_tipo_lista_precio_id = '';
if(in_array($ins_insumo_bulto_relacionado->getId(), $o_ids)){
    $sel = "checked = 'checked'";
    $css_sel = 'sel';

    $array = array(
        array('campo' => 'ins_tipo_lista_precio_id', 'valor' => $o_padre->getId()),
        array('campo' => 'ins_insumo_bulto_id', 'valor' => $ins_insumo_bulto_relacionado->getId())
    );
    $ins_insumo_bulto_ins_tipo_lista_precio = InsInsumoBultoInsTipoListaPrecio::getOxArray($array);
    $ins_insumo_bulto_ins_tipo_lista_precio_id = $ins_insumo_bulto_ins_tipo_lista_precio->getId();
}
?>
<div class='list <?php echo $css_sel ?>'>

    <?php if(UsCredencial::getEsAcreditado('INS_TIPO_LISTA_PRECIO_ALTA_RELACION_INS_INSUMO_BULTO_ACCIONES_SELECCION')){ ?>	
    <input type='checkbox' id='chk_ins_insumo_bulto_id_<?php echo $ins_insumo_bulto_relacionado->getId() ?>' name='chk_ins_insumo_bulto[<?php echo $ins_insumo_bulto_relacionado->getId() ?>]' <?php echo $sel ?> value='1' identificador='<?php echo $ins_insumo_bulto_relacionado->getId() ?>' relacion_id='<?php echo $ins_insumo_bulto_ins_tipo_lista_precio_id ?>' />
    <?php } ?>

    <label class='link'>
        <?php if(UsCredencial::getEsAcreditado('INS_TIPO_LISTA_PRECIO_ALTA_RELACION_INS_INSUMO_BULTO_ACCIONES_EDITAR')){ ?>	
        <?php if($ins_insumo_bulto_ins_tipo_lista_precio_id != ''){ ?>
        <div class="trigger wopenModal boton" archivo="ajax/modulos/ins_insumo_bulto_ins_tipo_lista_precio/ins_insumo_bulto_ins_tipo_lista_precio_alta.php?id=<?php Gral::_echo($ins_insumo_bulto_ins_tipo_lista_precio_id) ?>" contenedor="div_modal" ancho="950" alto="600" tipo="formulario" post="refreshSetUno(<?php Gral::_echo($ins_insumo_bulto_relacionado->getId()) ?>, 'ins_insumo_bulto', 'ins_tipo_lista_precio', <?php Gral::_echo($o_padre->getId()) ?>, 'InsTipoListaPrecio', 'InsInsumoBultoInsTipoListaPrecio')" title="Editar InsInsumoBultoInsTipoListaPrecio"><?php Lang::_lang('Editar') ?></div>
        <?php } ?>
        <?php } ?>

        <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_BULTO_ALTA')){ ?>	
        <a class='boton' href='ins_insumo_bulto_alta.php?id=<?php echo $ins_insumo_bulto_relacionado->getId() ?>&hash=<?php echo $ins_insumo_bulto_relacionado->getHash() ?>' title="<?php Lang::_lang('Ver/Editar') ?>: '<?php Gral::_echo($ins_insumo_bulto_relacionado->getDescripcion()) ?>' "><?php Lang::_lang('Ver') ?></a>
        <?php } ?>
    </label>
    	
    <label class='descripcion'><?php Gral::_echo($ins_insumo_bulto_relacionado->getDescripcionParaRelacion()) ?></label>
        	
    <?php if(trim($ins_insumo_bulto_relacionado->getObservacion()) != ''){ ?>
    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" alt="help" title="<?php echo $ins_insumo_bulto_relacionado->getObservacion() ?>" width="20" />
    <?php } ?>
        	
    <?php if($ins_insumo_bulto_ins_tipo_lista_precio_id != ''){ ?>
    <div class='segunda'>
        
    </div>
    <?php } ?>
	
</div>
<script>
setInit();
</script>

