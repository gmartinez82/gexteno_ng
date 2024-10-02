<?php
$sel = '';
$css_sel = '';
$ctrl_equipo_ctrl_sector_id = '';
if(in_array($ctrl_sector_relacionado->getId(), $o_ids)){
    $sel = "checked = 'checked'";
    $css_sel = 'sel';

    $array = array(
        array('campo' => 'ctrl_equipo_id', 'valor' => $o_padre->getId()),
        array('campo' => 'ctrl_sector_id', 'valor' => $ctrl_sector_relacionado->getId())
    );
    $ctrl_equipo_ctrl_sector = CtrlEquipoCtrlSector::getOxArray($array);
    $ctrl_equipo_ctrl_sector_id = $ctrl_equipo_ctrl_sector->getId();
}
?>
<div class='list <?php echo $css_sel ?>'>

    <?php if(UsCredencial::getEsAcreditado('CTRL_EQUIPO_ALTA_RELACION_CTRL_SECTOR_ACCIONES_SELECCION')){ ?>	
    <input type='checkbox' id='chk_ctrl_sector_id_<?php echo $ctrl_sector_relacionado->getId() ?>' name='chk_ctrl_sector[<?php echo $ctrl_sector_relacionado->getId() ?>]' <?php echo $sel ?> value='1' identificador='<?php echo $ctrl_sector_relacionado->getId() ?>' relacion_id='<?php echo $ctrl_equipo_ctrl_sector_id ?>' />
    <?php } ?>

    <label class='link'>
        <?php if(UsCredencial::getEsAcreditado('CTRL_EQUIPO_ALTA_RELACION_CTRL_SECTOR_ACCIONES_EDITAR')){ ?>	
        <?php if($ctrl_equipo_ctrl_sector_id != ''){ ?>
        <div class="trigger wopenModal boton" archivo="ajax/modulos/ctrl_equipo_ctrl_sector/ctrl_equipo_ctrl_sector_alta.php?id=<?php Gral::_echo($ctrl_equipo_ctrl_sector_id) ?>" contenedor="div_modal" ancho="950" alto="600" tipo="formulario" post="refreshSetUno(<?php Gral::_echo($ctrl_sector_relacionado->getId()) ?>, 'ctrl_sector', 'ctrl_equipo', <?php Gral::_echo($o_padre->getId()) ?>, 'CtrlEquipo', 'CtrlEquipoCtrlSector')" title="Editar CtrlEquipoCtrlSector"><?php Lang::_lang('Editar') ?></div>
        <?php } ?>
        <?php } ?>

        <?php if(UsCredencial::getEsAcreditado('CTRL_SECTOR_ALTA')){ ?>	
        <a class='boton' href='ctrl_sector_alta.php?id=<?php echo $ctrl_sector_relacionado->getId() ?>&hash=<?php echo $ctrl_sector_relacionado->getHash() ?>' title="<?php Lang::_lang('Ver/Editar') ?>: '<?php Gral::_echo($ctrl_sector_relacionado->getDescripcion()) ?>' "><?php Lang::_lang('Ver') ?></a>
        <?php } ?>
    </label>
    	
    <label class='descripcion'><?php Gral::_echo($ctrl_sector_relacionado->getDescripcionParaRelacion()) ?></label>
        	
    <?php if(trim($ctrl_sector_relacionado->getObservacion()) != ''){ ?>
    <img class="gen-help-icon" src="imgs/btn_ayuda_verde.png" alt="help" title="<?php echo $ctrl_sector_relacionado->getObservacion() ?>" width="20" />
    <?php } ?>
        	
    <?php if($ctrl_equipo_ctrl_sector_id != ''){ ?>
    <div class='segunda'>
        
    </div>
    <?php } ?>
	
</div>
<script>
setInit();
</script>

