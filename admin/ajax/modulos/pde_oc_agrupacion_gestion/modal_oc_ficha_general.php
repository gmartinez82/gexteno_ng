        
        <div class="par">
            <div class="label"><?php Lang::_lang('Cantidad de Items') ?></div>
            <div class="dato">
                <?php Gral::_echo(count($pde_ocs)) ?>        	
            </div>
        </div>
    
        <div class="par">
            <div class="label"><?php Lang::_lang('Vencimiento') ?></div>
            <div class="dato">
                <?php Gral::_echo(Gral::getFechaToWeb($pde_oc_agrupacion->getVencimiento())) ?>        	
            </div>
        </div>
    
        <div class="par">
            <div class="label"><?php Lang::_lang('Estado Actual') ?></div>
            <div class="dato">
                <img src='imgs/pde_oc_agrupacion_estado/<?php Gral::_echo($pde_oc_agrupacion->getPdeOcAgrupacionTipoEstado()->getCodigo()) ?>.png' width="10" align='absmiddle' />
                <?php Gral::_echo($pde_oc_agrupacion->getPdeOcAgrupacionTipoEstado()->getDescripcion()) ?>        	
            </div>
        </div>
    
        <div class="par">
            <div class="label"><?php Lang::_lang('Usuario') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_oc_agrupacion->getCreadoPorDescripcion()) ?>        	
            </div>
        </div>
        
        <div class="par">
            <div class="label"><?php Lang::_lang('Proveedor') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_oc_agrupacion->getPrvProveedor()->getDescripcion()) ?><br />
            </div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Centro de Recepcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_oc_agrupacion->getPdeCentroRecepcion()->getDescripcion()) ?><br />
            </div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_oc_agrupacion->getObservacion()) ?>        	
            </div>
        </div>
