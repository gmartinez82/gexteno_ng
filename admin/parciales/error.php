<?php if($error->getExisteError()){ ?>
	<div class="errores">
		<div class="titulo"><?php Lang::_lang('Control de Errores') ?></div>
		<?php foreach($error->getErrores() as $err){ ?>
		<div class="campo"><?php echo $err->getCampo()?></div>
		<div class="mensaje"><?php echo $err->getMensaje()?></div>
		<?php }?>
	</div>
<?php }?>
