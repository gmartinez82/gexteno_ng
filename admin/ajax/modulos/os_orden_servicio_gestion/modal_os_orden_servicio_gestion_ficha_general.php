<div class="par">
    <div class="label"><?php Lang::_lang("Orden Servicio") ?></div>
    <div class="dato">
        <?php Gral::_echo($os_orden_servicio->getCodigo()) ?>        	
    </div>
</div>
<div class="par">
    <div class="label"><?php Lang::_lang("Tipo Orden Servicio") ?></div>
    <div class="dato">
        <?php Gral::_echo(($os_orden_servicio->getOsTipo()) ? $os_orden_servicio->getOsTipo()->getDescripcion() : "") ?>        	
    </div>
</div>
<div class="par">
    <div class="label"><?php Lang::_lang("Persona") ?></div>
    <div class="dato">
        <?php Gral::_echo($os_orden_servicio->getPerPersona()->getDescripcion()) ?>        	
    </div>
</div>
<div class="par">
    <div class="label"><?php Lang::_lang("Fecha") ?></div>
    <div class="dato">
        <?php Gral::_echo(Gral::getFechaToWeb($os_orden_servicio->getFecha())) ?>        	
    </div>
</div>
<div class="par">
    <div class="label"><?php Lang::_lang("Fecha Hecho") ?></div>
    <div class="dato">
        <?php Gral::_echo(Gral::getFechaToWeb($os_orden_servicio->getFechaHecho())) ?>        	
    </div>
</div>
<div class="par">
    <div class="label"><?php Lang::_lang("Fecha Notificacion") ?></div>
    <div class="dato">
        <?php Gral::_echo(($os_orden_servicio->getFueNotificada()) ? Gral::getFechaToWeb($os_orden_servicio->getFechaNotificacion()) : '-') ?>        	
    </div>
</div>
<div class="par">
    <div class="label"><?php Lang::_lang("Dias para descargo") ?></div>
    <div class="dato">
        <?php Gral::_echo($os_orden_servicio->getDiasParaDescargo()) ?>        	
    </div>
</div>
<div class="par">
    <div class="label"><?php Lang::_lang("Fecha Descargo") ?></div>
    <div class="dato">
        <?php Gral::_echo(($os_orden_servicio->getFueDescargada()) ? Gral::getFechaToWeb($os_orden_servicio->getFechaDescargo()) : '-') ?>        	
    </div>
</div>
<div class="par">
    <div class="label"><?php Lang::_lang("Fecha Limite Descargo") ?></div>
    <div class="dato">
        <?php Gral::_echo(Gral::getFechaToWeb($os_orden_servicio->getFechaLimiteDescargo())) ?>        	
    </div>
</div>
<div class="par">
    <div class="label"><?php Lang::_lang("Fecha Resolucion") ?></div>
    <div class="dato">
        <?php Gral::_echo(($os_orden_servicio->getFueResuelta()) ? Gral::getFechaToWeb($os_orden_servicio->getFechaResolucion()) : '-') ?>        	
    </div>
</div>
<div class="par">
    <div class="label"><?php Lang::_lang("Fecha Limite Resolucion") ?></div>
    <div class="dato">
        <?php Gral::_echo(Gral::getFechaToWeb($os_orden_servicio->getFechaLimiteResolucion())) ?>        	
    </div>
</div>
<div class="par">
    <div class="label"><?php Lang::_lang("Estado Actual") ?></div>
    <div class="dato">
        <?php Gral::_echo($os_orden_servicio->getOsTipoEstado()->getDescripcion()) ?>        	
    </div>
</div>
<div class="par">
    <div class="label"><?php Lang::_lang("Notificacion") ?></div>
    <div class="dato">
        <?php Gral::_echo($os_orden_servicio->getNotificacion()) ?>        	
    </div>
</div>
<div class="par">
    <div class="label"><?php Lang::_lang("Observaciones") ?></div>
    <div class="dato">
        <?php Gral::_echo($os_orden_servicio->getObservacion()) ?>        	
    </div>
</div>