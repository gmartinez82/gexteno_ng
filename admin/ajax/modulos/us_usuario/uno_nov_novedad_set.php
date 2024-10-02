<?php
$sel = '';
$css_sel = '';
$nov_novedad_destinatario_id = '';
if(in_array($nov_novedad_relacionado->getId(), $o_ids)){
    $sel = "checked = 'checked'";
    $css_sel = 'sel';

    $array = array(
        array('campo' => 'us_usuario_id', 'valor' => $o_padre->getId()),
        array('campo' => 'nov_novedad_id', 'valor' => $nov_novedad_relacionado->getId())
    );
    $nov_novedad_destinatario = NovNovedadDestinatario::getOxArray($array);
    $nov_novedad_destinatario_id = $nov_novedad_destinatario->getId();
}
?>
<div class='list <?php echo $css_sel ?>'>

    <?php if(UsCredencial::getEsAcreditado('US_USUARIO_ALTA_RELACION_NOV_NOVEDAD_ACCIONES_SELECCION')){ ?>	
    <input type='checkbox' id='chk_nov_novedad_id_<?php echo $nov_novedad_relacionado->getId() ?>' name='chk_nov_novedad[<?php echo $nov_novedad_relacionado->getId() ?>]' <?php echo $sel ?> value='1' identificador='<?php echo $nov_novedad_relacionado->getId() ?>' relacion_id='<?php echo $nov_novedad_destinatario_id ?>' />
    <?php } ?>

    <label class='link'>
        <?php if(UsCredencial::getEsAcreditado('US_USUARIO_ALTA_RELACION_NOV_NOVEDAD_ACCIONES_EDITAR')){ ?>	
        <?php if($nov_novedad_destinatario_id != ''){ ?>
        <div class="trigger wopenModal boton" archivo="ajax/modulos/nov_novedad_destinatario/nov_novedad_destinatario_alta.php?id=<?php Gral::_echo($nov_novedad_destinatario_id) ?>" contenedor="div_modal" ancho="950" alto="600" tipo="formulario" post="refreshSetUno(<?php Gral::_echo($nov_novedad_relacionado->getId()) ?>, 'nov_novedad', 'us_usuario', <?php Gral::_echo($o_padre->getId()) ?>, 'UsUsuario', 'NovNovedadDestinatario')" title="Editar NovNovedadDestinatario"><?php Lang::_lang('Editar') ?></div>
        <?php } ?>
        <?php } ?>

        <?php if(UsCredencial::getEsAcreditado('NOV_NOVEDAD_ALTA')){ ?>	
        <a class='boton' href='nov_novedad_alta.php?id=<?php echo $nov_novedad_relacionado->getId() ?>&hash=<?php echo $nov_novedad_relacionado->getHash() ?>' title="<?php Lang::_lang('Ver/Editar') ?>: '<?php Gral::_echo($nov_novedad_relacionado->getDescripcion()) ?>' "><?php Lang::_lang('Ver') ?></a>
        <?php } ?>
    </label>
    
    <label class="avatar">
        <a href="<?php echo $nov_novedad_relacionado->getPathImagenPrincipal() ?>" rel="imagen-nov_novedad-<?php echo $nov_novedad_relacionado->getId() ?>">
            <img src="<?php echo $nov_novedad_relacionado->getPathImagenPrincipal(true) ?>" width="22" title="Imagen del NovNovedad" />
        </a>
    </label>
    	
    <label class='descripcion'><?php Gral::_echo($nov_novedad_relacionado->getDescripcionParaRelacion()) ?></label>
        	
    <?php if(trim($nov_novedad_relacionado->getObservacion()) != ''){ ?>
    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" alt="help" title="<?php echo $nov_novedad_relacionado->getObservacion() ?>" width="20" />
    <?php } ?>
        	
    <?php if($nov_novedad_destinatario_id != ''){ ?>
    <div class='segunda'>
        
    </div>
    <?php } ?>
	
</div>
<script>
setInit();
</script>

