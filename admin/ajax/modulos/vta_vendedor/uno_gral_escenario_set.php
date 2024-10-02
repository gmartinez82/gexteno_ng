<?php
$sel = '';
$css_sel = '';
$vta_vendedor_gral_escenario_id = '';
if(in_array($gral_escenario_relacionado->getId(), $o_ids)){
    $sel = "checked = 'checked'";
    $css_sel = 'sel';

    $array = array(
        array('campo' => 'vta_vendedor_id', 'valor' => $o_padre->getId()),
        array('campo' => 'gral_escenario_id', 'valor' => $gral_escenario_relacionado->getId())
    );
    $vta_vendedor_gral_escenario = VtaVendedorGralEscenario::getOxArray($array);
    $vta_vendedor_gral_escenario_id = $vta_vendedor_gral_escenario->getId();
}
?>
<div class='list <?php echo $css_sel ?>'>

    <?php if(UsCredencial::getEsAcreditado('VTA_VENDEDOR_ALTA_RELACION_GRAL_ESCENARIO_ACCIONES_SELECCION')){ ?>	
    <input type='checkbox' id='chk_gral_escenario_id_<?php echo $gral_escenario_relacionado->getId() ?>' name='chk_gral_escenario[<?php echo $gral_escenario_relacionado->getId() ?>]' <?php echo $sel ?> value='1' identificador='<?php echo $gral_escenario_relacionado->getId() ?>' relacion_id='<?php echo $vta_vendedor_gral_escenario_id ?>' />
    <?php } ?>

    <label class='link'>
        <?php if(UsCredencial::getEsAcreditado('VTA_VENDEDOR_ALTA_RELACION_GRAL_ESCENARIO_ACCIONES_EDITAR')){ ?>	
        <?php if($vta_vendedor_gral_escenario_id != ''){ ?>
        <div class="trigger wopenModal boton" archivo="ajax/modulos/vta_vendedor_gral_escenario/vta_vendedor_gral_escenario_alta.php?id=<?php Gral::_echo($vta_vendedor_gral_escenario_id) ?>" contenedor="div_modal" ancho="950" alto="600" tipo="formulario" post="refreshSetUno(<?php Gral::_echo($gral_escenario_relacionado->getId()) ?>, 'gral_escenario', 'vta_vendedor', <?php Gral::_echo($o_padre->getId()) ?>, 'VtaVendedor', 'VtaVendedorGralEscenario')" title="Editar VtaVendedorGralEscenario"><?php Lang::_lang('Editar') ?></div>
        <?php } ?>
        <?php } ?>

        <?php if(UsCredencial::getEsAcreditado('GRAL_ESCENARIO_ALTA')){ ?>	
        <a class='boton' href='gral_escenario_alta.php?id=<?php echo $gral_escenario_relacionado->getId() ?>&hash=<?php echo $gral_escenario_relacionado->getHash() ?>' title="<?php Lang::_lang('Ver/Editar') ?>: '<?php Gral::_echo($gral_escenario_relacionado->getDescripcion()) ?>' "><?php Lang::_lang('Ver') ?></a>
        <?php } ?>
    </label>
    	
    <label class='descripcion'><?php Gral::_echo($gral_escenario_relacionado->getDescripcionParaRelacion()) ?></label>
        	
    <?php if(trim($gral_escenario_relacionado->getObservacion()) != ''){ ?>
    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" alt="help" title="<?php echo $gral_escenario_relacionado->getObservacion() ?>" width="20" />
    <?php } ?>
        	
    <?php if($vta_vendedor_gral_escenario_id != ''){ ?>
    <div class='segunda'>
        
    </div>
    <?php } ?>
	
</div>
<script>
setInit();
</script>

