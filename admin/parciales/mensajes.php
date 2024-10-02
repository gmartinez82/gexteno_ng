<div class="mensajes">
    <?php foreach($user->getUsMensajesNoLeidos() as $us_mensaje_noleido){ ?>
    <div id="mensaje_<?php echo $us_mensaje_noleido->getId() ?>" class="mensaje" mensaje_id="<?php echo $us_mensaje_noleido->getId() ?>">
    	<div class="fecha">Creado el <?php echo Gral::getFechaHoraToWeb($us_mensaje_noleido->getCreado()) ?> hs</div>
    	<div class="acciones">
	    	<div class="ocultar"><?php Lang::_lang('No mostrar') ?></div>
	    	<div class="cerrar"><?php Lang::_lang('Cerrar') ?></div>
        </div>
    	<div class="descripcion"><?php echo $us_mensaje_noleido->getDescripcion() ?></div>
    	<div class="observacion"><?php echo nl2br($us_mensaje_noleido->getObservacion()) ?></div>
    </div>
    <?php } ?>
</div>