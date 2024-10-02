
<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
	<div class="vermasinfo" identificador="<?php echo $vta_comisionista->getId() ?>" modulo="vta_comisionista">+</div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
	<div class="id">
		<?php Gral::_echo($vta_comisionista->getId()) ?>
	</div>
</td>	

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
	<div class="descripcion">
		<?php Gral::_echo($vta_comisionista->getDescripcion()) ?>
	</div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
	<div class="apellido">
		<?php Gral::_echo($vta_comisionista->getApellido()) ?>
	</div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
	<div class="nombre">
		<?php Gral::_echo($vta_comisionista->getNombre()) ?>
	</div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
	<div class="codigo">
		<?php Gral::_echo($vta_comisionista->getCodigo()) ?>
	</div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
 <ul class="adm_botones_acciones">
	
	<?php if(UsCredencial::getEsAcreditado('VTA_COMISIONISTA_ADM_ACCION_MODIFICAR')){ ?>
	<li class='adm_botones_accion'>
		<a href='vta_comisionista_alta.php?id=<?php Gral::_echo($vta_comisionista->getId()) ?>' title='<?php Lang::_lang('Modificar') ?>'><img src='imgs/btn_modi.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('VTA_COMISIONISTA_ADM_ACCION_ELIMINAR')){ ?>
	<li class='adm_botones_accion'>
		<a href='Javascript:eliminar(<?php Gral::_echo($vta_comisionista->getId()) ?>)' title='<?php Lang::_lang('Eliminar') ?>'><img src='imgs/btn_elim.gif' width='20' border='0' /></a>
	</li>
	<?php } ?>

	<?php if(UsCredencial::getEsAcreditado('VTA_COMISIONISTA_ADM_ACCION_ESTADO')){ ?>
	<li class='adm_botones_accion estado' title='<?php Lang::_lang('Habilitar/Deshabilitar') ?>'>
		<img src='imgs/btn_estado_<?php Gral::_echo($vta_comisionista->getEstado())  ?>.gif' width='20' border='0' />
	</li>
	<?php } ?>

 </ul>
</td>


