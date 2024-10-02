        <div class="par">
            <div class="label"><?php Lang::_lang('Categoria') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_oc->getInsInsumo()->getInsCategoria()->getDescripcion()) ?>        	
            </div>
        </div>
    
        <div class="par">
            <div class="label"><?php Lang::_lang('Insumo') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_oc->getInsInsumo()->getDescripcion()) ?>        	
            </div>
        </div>
    
        <div class="par">
            <div class="label"><?php Lang::_lang('Cantidad') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_oc->getCantidad()) ?>        	
            </div>
        </div>
    
        <div class="par">
            <div class="label"><?php Lang::_lang('Vencimiento') ?></div>
            <div class="dato">
                <?php Gral::_echo(Gral::getFechaToWeb($pde_oc->getVencimiento())) ?>        	
            </div>
        </div>
    
        <div class="par">
            <div class="label"><?php Lang::_lang('Estado Actual') ?></div>
            <div class="dato">
                <img src='imgs/pde_oc_estado/<?php Gral::_echo($pde_oc->getPdeOcEstadoActual()->getPdeOcTipoEstado()->getCodigo()) ?>.png' width="10" align='absmiddle' />
                <?php Gral::_echo($pde_oc->getPdeOcEstadoActual()->getPdeOcTipoEstado()->getDescripcion()) ?>        	
            </div>
        </div>
    
        <div class="par">
            <div class="label"><?php Lang::_lang('Usuario') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_oc->getCreadoPorDescripcion()) ?>        	
            </div>
        </div>
        
        <div class="par">
            <div class="label"><?php Lang::_lang('Proveedores') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_oc->getPrvProveedor()->getDescripcion()) ?><br />
            </div>
        </div>
        
        <div class="par">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_oc->getObservacion()) ?>        	
            </div>
        </div>
