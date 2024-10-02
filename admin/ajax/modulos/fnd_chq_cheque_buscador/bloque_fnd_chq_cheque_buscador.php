<div class='col cruzado'>
    <div class='label' title="En Cartera">
        <?php Lang::_lang('Cartera'); ?>
    </div>
    <div class='dato'>
        <?php
        Html::html_dib_select(1, 'cmb_fnd_chq_en_cartera', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(true), '...'), $cmb_fnd_chq_en_cartera, 'textbox');
        ?>
    </div>
</div>
<div class='col cobro-desde'>
    <div class='label'>
        <?php Lang::_lang('Cobro Desde'); ?>
    </div>
    <div class='dato'>
        <input id='txt_fecha_cobro_desde' name='txt_fecha_cobro_desde' type='text' class='textbox date' size='7' value=''  title='<?php Lang::_lang('fecha de cobro desde') ?>' />
    </div>    
</div>
<div class='col cobro-desde'>
    <div class='label'>
        <?php Lang::_lang('Cobro Hasta'); ?>
    </div>
    <div class='dato'>
        <input id='txt_fecha_cobro_hasta' name='txt_fecha_cobro_hasta' type='text' class='textbox date' size='7' value=''  title='<?php Lang::_lang('fecha de cobro hasta') ?>' />
    </div>    
</div>
<div class='col importe-desde'>
    <div class='label'>
        <?php Lang::_lang('Importe Desde'); ?>
    </div>
    <div class='dato'>
        <input id='txt_importe_desde' name='txt_importe_desde' type='text' class='textbox moneda' size='8'  title='<?php Lang::_lang('Ingrese un importe desde') ?>' />
    </div>
</div>
<div class='col importe-hasta'>
    <div class='label'>
        <?php Lang::_lang('Importe Hasta'); ?>
    </div>
    <div class='dato'>
        <input id='txt_importe_hasta' name='txt_importe_hasta' type='text' class='textbox moneda' size='8'  title='<?php Lang::_lang('Ingrese un importe hasta') ?>' />
    </div>
</div>
<div class='col texto'>
    <div class='label'>
        <?php Lang::_lang('Busqueda'); ?>
    </div>
    <input id='txt_buscador_cheque' name='txt_buscador_cheque' type='text' class='textbox' size='18' placeholder='<?php Lang::_lang('Ingrese palabra a buscar') ?>' title='<?php Lang::_lang('Ingrese la palabra que desea buscar') ?>' />
    <img class='txt_buscador_cheque_boton' src='imgs/lupa.png' width='20'>
</div>