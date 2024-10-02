<?php
$sel = '';
$css_sel = '';
$nov_novedad_destinatario_id = '';
if(in_array($us_usuario->getId(), $o_ids)){
	$sel = "checked = 'checked'";
	$css_sel = 'sel';
	
	$arr_cri = array(
		array('campo' => 'nov_novedad_id', 'valor' => $o_padre->getId()),
		array('campo' => 'us_usuario_id', 'valor' => $us_usuario->getId())
	);
	$nov_novedad_destinatario = new NovNovedadDestinatario();
	$nov_novedad_destinatario = NovNovedadDestinatario::getOxArray($arr_cri);
	$nov_novedad_destinatario_id = $nov_novedad_destinatario->getId();
}
?>
<div class='list <?php echo $css_sel ?>' title='<?php echo $us_usuario->getObservacion() ?>'>

    <?php if(UsCredencial::getEsAcreditado('NOV_NOVEDAD_ALTA_RELACION_US_USUARIO_ACCIONES_SELECCION')){ ?>	
    <input type='checkbox' id='chk_us_usuario_id_<?php echo $us_usuario->getId() ?>' name='chk_us_usuario[<?php echo $us_usuario->getId() ?>]' <?php echo $sel ?> value='1' identificador='<?php echo $us_usuario->getId() ?>' relacion_id='<?php echo $nov_novedad_destinatario_id ?>' />
    <?php } ?>

    <label class='link'>
        <?php if(UsCredencial::getEsAcreditado('NOV_NOVEDAD_ALTA_RELACION_US_USUARIO_ACCIONES_EDITAR')){ ?>	
        <?php if($nov_novedad_destinatario_id != ''){ ?>
        <div class="trigger wopenModal boton" archivo="ajax/modulos/nov_novedad_destinatario/nov_novedad_destinatario_alta.php?id=<?php Gral::_echo($nov_novedad_destinatario_id) ?>" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="refreshSetUno(<?php Gral::_echo($us_usuario->getId()) ?>, 'us_usuario', 'nov_novedad', <?php Gral::_echo($o_padre->getId()) ?>, 'NovNovedad', 'NovNovedadDestinatario')" title="Editar NovNovedadDestinatario"><?php Lang::_lang('Editar') ?></div>
        <?php } ?>
        <?php } ?>

        <?php if(UsCredencial::getEsAcreditado('US_USUARIO_ALTA')){ ?>	
        <a class='boton' href='us_usuario_alta.php?id=<?php echo $us_usuario->getId() ?>' title="<?php Lang::_lang('Ver/Editar') ?>: '<?php Gral::_echo($us_usuario->getDescripcion()) ?>' "><?php Lang::_lang('Ver') ?></a>
        <?php } ?>
    </label>
    	
    <label class='descripcion' for='chk_us_usuario_id_<?php echo $us_usuario->getId() ?>'><strong><?php Gral::_echo($us_usuario->getDescripcion()) ?></strong></label>

    <?php if($nov_novedad_destinatario_id != ''){ ?>
    <div class='segunda'>
        
    </div>
    <?php } ?>
	
</div>
<script>
setInit();
</script>

