<?php
$sel = '';
$css_sel = '';
$eku_de_vta_nota_debito_id = '';
if(in_array($vta_nota_debito_relacionado->getId(), $o_ids)){
    $sel = "checked = 'checked'";
    $css_sel = 'sel';

    $array = array(
        array('campo' => 'eku_de_id', 'valor' => $o_padre->getId()),
        array('campo' => 'vta_nota_debito_id', 'valor' => $vta_nota_debito_relacionado->getId())
    );
    $eku_de_vta_nota_debito = EkuDeVtaNotaDebito::getOxArray($array);
    $eku_de_vta_nota_debito_id = $eku_de_vta_nota_debito->getId();
}
?>
<div class='list <?php echo $css_sel ?>'>

    <?php if(UsCredencial::getEsAcreditado('EKU_DE_ALTA_RELACION_VTA_NOTA_DEBITO_ACCIONES_SELECCION')){ ?>	
    <input type='checkbox' id='chk_vta_nota_debito_id_<?php echo $vta_nota_debito_relacionado->getId() ?>' name='chk_vta_nota_debito[<?php echo $vta_nota_debito_relacionado->getId() ?>]' <?php echo $sel ?> value='1' identificador='<?php echo $vta_nota_debito_relacionado->getId() ?>' relacion_id='<?php echo $eku_de_vta_nota_debito_id ?>' />
    <?php } ?>

    <label class='link'>
        <?php if(UsCredencial::getEsAcreditado('EKU_DE_ALTA_RELACION_VTA_NOTA_DEBITO_ACCIONES_EDITAR')){ ?>	
        <?php if($eku_de_vta_nota_debito_id != ''){ ?>
        <div class="trigger wopenModal boton" archivo="ajax/modulos/eku_de_vta_nota_debito/eku_de_vta_nota_debito_alta.php?id=<?php Gral::_echo($eku_de_vta_nota_debito_id) ?>" contenedor="div_modal" ancho="950" alto="600" tipo="formulario" post="refreshSetUno(<?php Gral::_echo($vta_nota_debito_relacionado->getId()) ?>, 'vta_nota_debito', 'eku_de', <?php Gral::_echo($o_padre->getId()) ?>, 'EkuDe', 'EkuDeVtaNotaDebito')" title="Editar EkuDeVtaNotaDebito"><?php Lang::_lang('Editar') ?></div>
        <?php } ?>
        <?php } ?>

        <?php if(UsCredencial::getEsAcreditado('VTA_NOTA_DEBITO_ALTA')){ ?>	
        <a class='boton' href='vta_nota_debito_alta.php?id=<?php echo $vta_nota_debito_relacionado->getId() ?>&hash=<?php echo $vta_nota_debito_relacionado->getHash() ?>' title="<?php Lang::_lang('Ver/Editar') ?>: '<?php Gral::_echo($vta_nota_debito_relacionado->getDescripcion()) ?>' "><?php Lang::_lang('Ver') ?></a>
        <?php } ?>
    </label>
    	
    <label class='descripcion'><?php Gral::_echo($vta_nota_debito_relacionado->getDescripcionParaRelacion()) ?></label>
        	
    <?php if(trim($vta_nota_debito_relacionado->getObservacion()) != ''){ ?>
    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" alt="help" title="<?php echo $vta_nota_debito_relacionado->getObservacion() ?>" width="20" />
    <?php } ?>
        	
    <?php if($eku_de_vta_nota_debito_id != ''){ ?>
    <div class='segunda'>
        
    </div>
    <?php } ?>
	
</div>
<script>
setInit();
</script>

