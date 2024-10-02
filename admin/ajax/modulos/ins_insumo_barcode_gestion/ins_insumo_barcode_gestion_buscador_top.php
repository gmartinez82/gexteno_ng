<form id="form_buscador_top" name="form_buscador_top" method="post" action="ajax/modulos/ins_insumo/set_ins_insumo_buscador_top.php">

<div class="col">
	<div class="label"><?php Lang::_lang('Codigo Barra Seleccionado') ?></div>
    <input id="txt_codigo_barra" name="txt_codigo_barra" type="text" class="textbox" size="30" title="<?php Lang::_lang('Codigo de Barra que ha sido seleccionado') ?>" />
</div>

<div class="col">
	<div class="label"><?php Lang::_lang('Busqueda rapida (2 letras min)') ?></div>
    <input id="txt_buscador" name="txt_buscador" type="text" class="textbox" size="30" title="<?php Lang::_lang('Ingrese la palabra que desea buscar') ?>" />
    <img class="txt_buscador_boton" src="imgs/lupa.png" width="20">
</div>

<div class="col">
	<div class="label"><?php Lang::_lang('Cant por Pag') ?></div>
    <input id="txt_cantidad_paginas" name="txt_cantidad_paginas" type="text" class="textboxx" size="5" value="<?php echo InsInsumo::getSesPagCantidad() ?>" title="<?php Lang::_lang('Actualmente se visualizan') ?> <?php echo InsInsumo::getSesPagCantidad() ?> <?php Lang::_lang('InsInsumo') ?> <?php Lang::_lang('por Pagina') ?>" />
</div>

<div class="col">
    <label class="boton refresh-all" title="<?php Lang::_lang('Actualizar Listado') ?>"><img src="imgs/refresh.gif" width="25"></label>
</div>
</form>

