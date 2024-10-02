<?php

?>
<div class="modal-top">
    
    <div class="col par fecha">
        <div class="label"><?php Lang::_lang('Fecha') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaToWEB($fecha)) ?></div>
    </div>
    
    <div class="col par persona">
        <div class="label"><?php Lang::_lang('Persona') ?></div>
        <div class="dato"><?php Gral::_echo($per_persona->getDescripcion()) ?></div>
    </div>

    <div class="col par empresa">
        <div class="label"><?php Lang::_lang('Empresa') ?></div>
        <div class="dato"><?php Gral::_echo($gral_empresa->getDescripcion()) ?></div>
    </div>
    
    <div class="col par centro-operativo">
        <div class="label"><?php //Lang::_lang('Centro Operativo') ?></div>
        <div class="dato"><?php //Gral::_echo($co_centro_operativo->getDescripcion()) ?></div>
    </div>

    <div class="col par area">
        <div class="label"><?php //Lang::_lang('Area') ?></div>
        <div class="dato"><?php //Gral::_echo($gral_area->getDescripcion()) ?></div>
    </div>

    <div class="col par sector">
        <div class="label"><?php //Lang::_lang('Sector') ?></div>
        <div class="dato"><?php //Gral::_echo($gral_sector->getDescripcion()) ?></div>
    </div>
    
</div>