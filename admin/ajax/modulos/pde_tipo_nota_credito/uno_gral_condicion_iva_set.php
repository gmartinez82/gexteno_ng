<?php
$sel = '';
$css_sel = '';
$gral_condicion_iva_pde_tipo_nota_credito_id = '';
if(in_array($gral_condicion_iva_relacionado->getId(), $o_ids)){
    $sel = "checked = 'checked'";
    $css_sel = 'sel';

    $array = array(
        array('campo' => 'pde_tipo_nota_credito_id', 'valor' => $o_padre->getId()),
        array('campo' => 'gral_condicion_iva_id', 'valor' => $gral_condicion_iva_relacionado->getId())
    );
    $gral_condicion_iva_pde_tipo_nota_credito = GralCondicionIvaPdeTipoNotaCredito::getOxArray($array);
    $gral_condicion_iva_pde_tipo_nota_credito_id = $gral_condicion_iva_pde_tipo_nota_credito->getId();
}
?>
<div class='list <?php echo $css_sel ?>'>

    <?php if(UsCredencial::getEsAcreditado('PDE_TIPO_NOTA_CREDITO_ALTA_RELACION_GRAL_CONDICION_IVA_ACCIONES_SELECCION')){ ?>	
    <input type='checkbox' id='chk_gral_condicion_iva_id_<?php echo $gral_condicion_iva_relacionado->getId() ?>' name='chk_gral_condicion_iva[<?php echo $gral_condicion_iva_relacionado->getId() ?>]' <?php echo $sel ?> value='1' identificador='<?php echo $gral_condicion_iva_relacionado->getId() ?>' relacion_id='<?php echo $gral_condicion_iva_pde_tipo_nota_credito_id ?>' />
    <?php } ?>

    <label class='link'>
        <?php if(UsCredencial::getEsAcreditado('PDE_TIPO_NOTA_CREDITO_ALTA_RELACION_GRAL_CONDICION_IVA_ACCIONES_EDITAR')){ ?>	
        <?php if($gral_condicion_iva_pde_tipo_nota_credito_id != ''){ ?>
        <div class="trigger wopenModal boton" archivo="ajax/modulos/gral_condicion_iva_pde_tipo_nota_credito/gral_condicion_iva_pde_tipo_nota_credito_alta.php?id=<?php Gral::_echo($gral_condicion_iva_pde_tipo_nota_credito_id) ?>" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="refreshSetUno(<?php Gral::_echo($gral_condicion_iva_relacionado->getId()) ?>, 'gral_condicion_iva', 'pde_tipo_nota_credito', <?php Gral::_echo($o_padre->getId()) ?>, 'PdeTipoNotaCredito', 'GralCondicionIvaPdeTipoNotaCredito')" title="Editar GralCondicionIvaPdeTipoNotaCredito"><?php Lang::_lang('Editar') ?></div>
        <?php } ?>
        <?php } ?>

        <?php if(UsCredencial::getEsAcreditado('GRAL_CONDICION_IVA_ALTA')){ ?>	
        <a class='boton' href='gral_condicion_iva_alta.php?id=<?php echo $gral_condicion_iva_relacionado->getId() ?>' title="<?php Lang::_lang('Ver/Editar') ?>: '<?php Gral::_echo($gral_condicion_iva_relacionado->getDescripcion()) ?>' "><?php Lang::_lang('Ver') ?></a>
        <?php } ?>
    </label>
    	
    <label class='descripcion'><?php Gral::_echo($gral_condicion_iva_relacionado->getDescripcionParaRelacion()) ?></label>
        	
    <?php if(trim($gral_condicion_iva_relacionado->getObservacion()) != ''){ ?>
    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" alt="help" title="<?php echo $gral_condicion_iva_relacionado->getObservacion() ?>" width="20" />
    <?php } ?>
        	
    <?php if($gral_condicion_iva_pde_tipo_nota_credito_id != ''){ ?>
    <div class='segunda'>
        
    </div>
    <?php } ?>
	
</div>
<script>
setInit();
</script>

