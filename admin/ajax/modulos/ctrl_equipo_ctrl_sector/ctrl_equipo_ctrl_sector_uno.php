
<?php

?>
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class="vermasinfo" identificador="<?php echo $ctrl_equipo_ctrl_sector->getId() ?>" modulo="ctrl_equipo_ctrl_sector">+</div>
</td>

        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <div class=" id">
        <?php Gral::_echo($ctrl_equipo_ctrl_sector->getId()) ?>
    </div>
        </td>	
        
        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class=" ctrl_equipo_id <?php Gral::_echo($ctrl_equipo_ctrl_sector->getCtrlEquipo()->getCodigo()) ?> ">	
    
        <?php Gral::_echo($ctrl_equipo_ctrl_sector->getCtrlEquipo()->getDescripcion()) ?>
    </div>
    
        </td>	
        
        <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
	
    <div class=" ctrl_sector_id <?php Gral::_echo($ctrl_equipo_ctrl_sector->getCtrlSector()->getCodigo()) ?> ">	
    
        <?php Gral::_echo($ctrl_equipo_ctrl_sector->getCtrlSector()->getDescripcion()) ?>
    </div>
    
        </td>	
        
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?> <?php echo $destacado ?> <?php echo $principal ?>'>
    <ul class="adm_botones_acciones">
	
	<?php if(UsCredencial::getEsAcreditado('CTRL_EQUIPO_CTRL_SECTOR_ADM_ACCION_MODIFICAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='ctrl_equipo_ctrl_sector_alta.php?id=<?php Gral::_echo($ctrl_equipo_ctrl_sector->getId()) ?>&hash=<?php Gral::_echo($ctrl_equipo_ctrl_sector->getHash()) ?>' title='<?php Lang::_lang('Modificar') ?>'><img src='imgs/btn_modi.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('CTRL_EQUIPO_CTRL_SECTOR_ADM_ACCION_ELIMINAR')){ ?>
	<li class='adm_botones_accion'>
            <a href='Javascript:eliminar(<?php Gral::_echo($ctrl_equipo_ctrl_sector->getId()) ?>)' title='<?php Lang::_lang('Eliminar') ?>'><img src='imgs/btn_elim.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>

        <?php if (UsCredencial::getEsAcreditado('CTRL_EQUIPO_CTRL_SECTOR_ADM_ACCION_CONFIG')) { ?>
        <li class='adm_botones_accion db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/modulos/ctrl_equipo_ctrl_sector/ctrl_equipo_ctrl_sector_db_context_acciones.php?id=<?php Gral::_echo($ctrl_equipo_ctrl_sector->getId()) ?>' modulo_metodo_init="setInitCtrlEquipoCtrlSector()">
            <img src='imgs/btn_config.png' width='20' />       
        </li>
        <?php } ?>

    </ul>
</td>


