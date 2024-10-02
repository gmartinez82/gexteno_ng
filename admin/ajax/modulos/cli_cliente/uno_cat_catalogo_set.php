<?php
$sel = '';
$css_sel = '';
$cat_catalogo_cli_cliente_id = '';
if(in_array($cat_catalogo_relacionado->getId(), $o_ids)){
    $sel = "checked = 'checked'";
    $css_sel = 'sel';

    $array = array(
        array('campo' => 'cli_cliente_id', 'valor' => $o_padre->getId()),
        array('campo' => 'cat_catalogo_id', 'valor' => $cat_catalogo_relacionado->getId())
    );
    $cat_catalogo_cli_cliente = CatCatalogoCliCliente::getOxArray($array);
    $cat_catalogo_cli_cliente_id = $cat_catalogo_cli_cliente->getId();
}
?>
<div class='list <?php echo $css_sel ?>'>

    <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_ALTA_RELACION_CAT_CATALOGO_ACCIONES_SELECCION')){ ?>	
    <input type='checkbox' id='chk_cat_catalogo_id_<?php echo $cat_catalogo_relacionado->getId() ?>' name='chk_cat_catalogo[<?php echo $cat_catalogo_relacionado->getId() ?>]' <?php echo $sel ?> value='1' identificador='<?php echo $cat_catalogo_relacionado->getId() ?>' relacion_id='<?php echo $cat_catalogo_cli_cliente_id ?>' />
    <?php } ?>

    <label class='link'>
        <?php if(UsCredencial::getEsAcreditado('CLI_CLIENTE_ALTA_RELACION_CAT_CATALOGO_ACCIONES_EDITAR')){ ?>	
        <?php if($cat_catalogo_cli_cliente_id != ''){ ?>
        <div class="trigger wopenModal boton" archivo="ajax/modulos/cat_catalogo_cli_cliente/cat_catalogo_cli_cliente_alta.php?id=<?php Gral::_echo($cat_catalogo_cli_cliente_id) ?>" contenedor="div_modal" ancho="950" alto="600" tipo="formulario" post="refreshSetUno(<?php Gral::_echo($cat_catalogo_relacionado->getId()) ?>, 'cat_catalogo', 'cli_cliente', <?php Gral::_echo($o_padre->getId()) ?>, 'CliCliente', 'CatCatalogoCliCliente')" title="Editar CatCatalogoCliCliente"><?php Lang::_lang('Editar') ?></div>
        <?php } ?>
        <?php } ?>

        <?php if(UsCredencial::getEsAcreditado('CAT_CATALOGO_ALTA')){ ?>	
        <a class='boton' href='cat_catalogo_alta.php?id=<?php echo $cat_catalogo_relacionado->getId() ?>&hash=<?php echo $cat_catalogo_relacionado->getHash() ?>' title="<?php Lang::_lang('Ver/Editar') ?>: '<?php Gral::_echo($cat_catalogo_relacionado->getDescripcion()) ?>' "><?php Lang::_lang('Ver') ?></a>
        <?php } ?>
    </label>
    	
    <label class='descripcion'><?php Gral::_echo($cat_catalogo_relacionado->getDescripcionParaRelacion()) ?></label>
        	
    <?php if(trim($cat_catalogo_relacionado->getObservacion()) != ''){ ?>
    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" alt="help" title="<?php echo $cat_catalogo_relacionado->getObservacion() ?>" width="20" />
    <?php } ?>
        	
    <?php if($cat_catalogo_cli_cliente_id != ''){ ?>
    <div class='segunda'>
        
    </div>
    <?php } ?>
	
</div>
<script>
setInit();
</script>

