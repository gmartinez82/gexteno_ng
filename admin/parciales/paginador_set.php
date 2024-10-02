<div id="div_paginador">
	<?php  $paginador->setRango(4)?>
	<div class="paginas">
	<a class="paginar" pagina="<?php echo $paginador->getInicio() ?>" title="Ir a la Primer P&aacute;gina"><span class="nosel"> << </span></a> &nbsp;
	<?php for($i=$paginador->getInicio(true); $i<=$paginador->getFin(true); $i++){ ?>
		<?php if($paginador->getPagina() == $i){ ?>
			<span class="sel"><?php echo $i?></span>
		<?php }else{?>
			<a class="paginar" pagina="<?php echo $i ?>" title="Ir a P&aacute;gina <?php echo $i?>"><span class="nosel"><?php echo $i?></span></a>
		<?php }?>
	<?php }?>
	&nbsp;<a class="paginar" pagina="<?php echo $paginador->getFin() ?>" title="Ir a &Uacute;ltima P&aacute;gina"><span class="nosel"> >> </span></a>
	</div>
	
    <div class="comentario"><?php Lang::_lang('Total') ?>: &nbsp;<strong><?php echo $paginador->getTotal()?></strong> <?php Lang::_lang('Registros') ?> </div>

</div>

