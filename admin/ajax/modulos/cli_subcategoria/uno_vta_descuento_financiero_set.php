<?php
$sel = '';
$css_sel = '';
$cli_subcategoria_vta_descuento_financiero_id = '';
if(in_array($vta_descuento_financiero_relacionado->getId(), $o_ids)){
    $sel = "checked = 'checked'";
    $css_sel = 'sel';

    $array = array(
        array('campo' => 'cli_subcategoria_id', 'valor' => $o_padre->getId()),
        array('campo' => 'vta_descuento_financiero_id', 'valor' => $vta_descuento_financiero_relacionado->getId())
    );
    $cli_subcategoria_vta_descuento_financiero = CliSubcategoriaVtaDescuentoFinanciero::getOxArray($array);
    $cli_subcategoria_vta_descuento_financiero_id = $cli_subcategoria_vta_descuento_financiero->getId();
}
?>
<div class='list <?php echo $css_sel ?>'>

    <?php if(UsCredencial::getEsAcreditado('CLI_SUBCATEGORIA_ALTA_RELACION_VTA_DESCUENTO_FINANCIERO_ACCIONES_SELECCION')){ ?>	
    <input type='checkbox' id='chk_vta_descuento_financiero_id_<?php echo $vta_descuento_financiero_relacionado->getId() ?>' name='chk_vta_descuento_financiero[<?php echo $vta_descuento_financiero_relacionado->getId() ?>]' <?php echo $sel ?> value='1' identificador='<?php echo $vta_descuento_financiero_relacionado->getId() ?>' relacion_id='<?php echo $cli_subcategoria_vta_descuento_financiero_id ?>' />
    <?php } ?>

    <label class='link'>
        <?php if(UsCredencial::getEsAcreditado('CLI_SUBCATEGORIA_ALTA_RELACION_VTA_DESCUENTO_FINANCIERO_ACCIONES_EDITAR')){ ?>	
        <?php if($cli_subcategoria_vta_descuento_financiero_id != ''){ ?>
        <div class="trigger wopenModal boton" archivo="ajax/modulos/cli_subcategoria_vta_descuento_financiero/cli_subcategoria_vta_descuento_financiero_alta.php?id=<?php Gral::_echo($cli_subcategoria_vta_descuento_financiero_id) ?>" contenedor="div_modal" ancho="950" alto="600" tipo="formulario" post="refreshSetUno(<?php Gral::_echo($vta_descuento_financiero_relacionado->getId()) ?>, 'vta_descuento_financiero', 'cli_subcategoria', <?php Gral::_echo($o_padre->getId()) ?>, 'CliSubcategoria', 'CliSubcategoriaVtaDescuentoFinanciero')" title="Editar CliSubcategoriaVtaDescuentoFinanciero"><?php Lang::_lang('Editar') ?></div>
        <?php } ?>
        <?php } ?>

        <?php if(UsCredencial::getEsAcreditado('VTA_DESCUENTO_FINANCIERO_ALTA')){ ?>	
        <a class='boton' href='vta_descuento_financiero_alta.php?id=<?php echo $vta_descuento_financiero_relacionado->getId() ?>' title="<?php Lang::_lang('Ver/Editar') ?>: '<?php Gral::_echo($vta_descuento_financiero_relacionado->getDescripcion()) ?>' "><?php Lang::_lang('Ver') ?></a>
        <?php } ?>
    </label>
    	
    <label class='descripcion'><?php Gral::_echo($vta_descuento_financiero_relacionado->getDescripcionParaRelacion()) ?></label>
        	
    <?php if(trim($vta_descuento_financiero_relacionado->getObservacion()) != ''){ ?>
    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" alt="help" title="<?php echo $vta_descuento_financiero_relacionado->getObservacion() ?>" width="20" />
    <?php } ?>
        	
    <?php if($cli_subcategoria_vta_descuento_financiero_id != ''){ ?>
    <div class='segunda'>
        
    </div>
    <?php } ?>
	
</div>
<script>
setInit();
</script>

