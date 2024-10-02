<div id="div_paginador">
	<?php  $paginador->setRango(4)?>
	<div class="paginas">
	<input name="hdn_pag_actual" type="hidden" id="hdn_pag_actual" size="1" value="<?php echo $paginador->getPagina()?>">
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
	
    <div class="total"><?php Lang::_lang('Resultado') ?>: &nbsp;<?php Gral::_echoInt($paginador->getTotal()) ?> <?php Lang::_lang('Registros') ?> </div>
	<div class="titulo"><?php Lang::_lang('Paginas') ?></div>
</div>

