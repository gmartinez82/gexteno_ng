<form id="form_buscador_top" name="form_buscador_top" method="post" action="ajax/modulos/pde_factura_gestion/set_pde_factura_gestion_buscador_top.php">

    <div class="col fecha-desde">
        <div class="label"><?php Lang::_lang('Desde') ?></div>
        <div class="dato">
            <input id="txt_filtro_desde" name="txt_filtro_desde" type="text" class="textbox date" size="4" title="<?php Lang::_lang('Ingrese la fecha DESDE') ?>" />
            <input type="button" id="cal_txt_filtro_desde" value=" ... ">
            <script type='text/javascript'>
                Calendar.setup({
                    inputField: 'txt_filtro_desde', ifFormat: '%d/%m/%Y', button: 'cal_txt_filtro_desde',onUpdate: function(){setAdmBuscadorTop('pde_factura_gestion')}
                });
            </script>
        </div>
    </div>

    <div class="col fecha-hasta">
        <div class="label"><?php Lang::_lang('Hasta') ?></div>
        <div class="dato">
            <input id="txt_filtro_hasta" name="txt_filtro_hasta" type="text" class="textbox date" size="4" title="<?php Lang::_lang('Ingrese la fecha HASTA') ?>" />
            <input type="button" id="cal_txt_filtro_hasta" value=" ... ">
            <script type='text/javascript'>
                Calendar.setup({
                    inputField: 'txt_filtro_hasta', ifFormat: '%d/%m/%Y', button: 'cal_txt_filtro_hasta',onUpdate: function(){setAdmBuscadorTop('pde_factura_gestion')}
                });
            </script>
        </div>
    </div>
    
    <div class="col gral-centro-costo">
        <div class="label"><?php Lang::_lang('Centro Costo') ?></div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'cmb_filtro_gral_centro_costo_id', Gral::getCmbFiltro(GralCentroCosto::getGralCentroCostosCmb(true), '...'), $cmb_filtro_gral_centro_costo_id, 'textbox') ?>
        </div>
    </div>
    
    <div class="col prv_proveedor">
        <div class="label"><?php Lang::_lang('Proveedor') ?></div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'cmb_filtro_prv_proveedor_id', Gral::getCmbFiltro(PrvProveedor::getPrvProveedorsCmb(true), '...'), $cmb_filtro_prv_proveedor_id, 'textbox selective-input-filtro') ?>
        </div>
    </div>

    <div class="col pde_tipo_factura">
        <div class="label"><?php Lang::_lang('Tipo de Factura') ?></div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'cmb_filtro_pde_tipo_factura_id', Gral::getCmbFiltro(PdeTipoFactura::getPdeTipoFacturasCmb(true), '...'), $cmb_filtro_pde_tipo_factura_id, 'textbox') ?>
        </div>
    </div>
    
    <div class="col pde_tipo_origen_factura">
        <div class="label"><?php Lang::_lang('Origen de Factura') ?></div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'cmb_filtro_pde_tipo_origen_factura_id', Gral::getCmbFiltro(PdeTipoOrigenFactura::getPdeTipoOrigenFacturasCmb(true), '...'), $cmb_filtro_pde_tipo_origen_factura_id, 'textbox') ?>
        </div>
    </div>

    <div class="col numero_nota_debito">
        <div class="label"><?php Lang::_lang('Nro de Factura') ?></div>
        <input id="txt_buscador_numero_factura" name="txt_buscador_numero_factura" type="text" class="textbox" size="7" placeholder="0000-00000000" title="<?php Lang::_lang('Ingrese el Nro de Factura que desea buscar') ?>" />
    </div>

    <div class="col">
        <div class="label"><?php Lang::_lang('Busq rapida') ?></div>
        <input id="txt_buscador" name="txt_buscador" type="text" class="textbox" size="15" placeholder="<?php Lang::_lang('Ingrese palabra a buscar') ?>" title="<?php Lang::_lang('Ingrese la palabra que desea buscar') ?>" />
        <img class="txt_buscador_boton" src="imgs/lupa.png" width="20">
    </div>

    <div class="col">
        <div class="label"><?php Lang::_lang('Cant por Pag') ?></div>
        <input id="txt_cantidad_paginas" name="txt_cantidad_paginas" type="text" class="textboxx" size="2" value="<?php echo PdeFactura::getSesPagCantidad() ?>" title="<?php Lang::_lang('Actualmente se visualizan') ?> <?php echo PdeFactura::getSesPagCantidad() ?> <?php Lang::_lang('PdeFactura') ?> <?php Lang::_lang('por Pagina') ?>" />
    </div>

    <div class="col">
        
        <?php if (UsCredencial::getEsAcreditado('PDE_FACTURA_GESTION_GENERAR_FACTURA')) { ?>
            <label class="boton generar_factura" title="<?php Lang::_lang('Generar Fatura') ?>" modulo='pde_factura_gestion'><img src="imgs/btn_add.gif" width="25"></label>
        <?php } ?>

        <?php if (UsCredencial::getEsAcreditado('PDE_FACTURA_GESTION_GENERAR_FACTURA_ITEM')) { ?>
            <label class="boton generar_factura_item" title="<?php Lang::_lang('Generar Fatura por Item') ?>" modulo='pde_factura_gestion'><img src="imgs/btn_add.gif" width="25"></label>
        <?php } ?>
            
        <label class="boton refresh-all" title="<?php Lang::_lang('Actualizar Listado') ?>"><img src="imgs/btn_refresh.png" width="22"></label>
    </div>

    <div class="">
        
        <div class="col pde_factura_concepto">
            <div class="label"><?php Lang::_lang('Concepto') ?></div>
            <div class="dato">
                <?php Html::html_dib_select(1, 'cmb_filtro_pde_factura_concepto_id', Gral::getCmbFiltro(PdeFacturaConcepto::getPdeFacturaConceptosCmb(true), '...'), $cmb_filtro_pde_factura_concepto_id, 'textbox') ?>
            </div>
        </div>

        <div class="col pde_factura_tipo_estado">
            <div class="label"><?php Lang::_lang('Tipo Estado') ?></div>
            <div class="dato">
                <?php Html::html_dib_select(1, 'cmb_filtro_pde_factura_tipo_estado_id', Gral::getCmbFiltro(PdeFacturaTipoEstado::getPdeFacturaTipoEstadosCmb(true), '...'), $cmb_filtro_pde_factura_tipo_estado_id, 'textbox') ?>
            </div>
        </div>
        
        <div class="col fecha-vencimiento-desde">
            <div class="label"><?php Lang::_lang('Vencim Desde') ?></div>
            <div class="dato">
                <input id="txt_filtro_vencimiento_desde" name="txt_filtro_vencimiento_desde" type="text" class="textbox date" size="4" title="<?php Lang::_lang('Ingrese la fecha DESDE') ?>" />
                <input type="button" id="cal_txt_filtro_vencimiento_desde" value=" ... ">
                <script type='text/javascript'>
                    Calendar.setup({
                        inputField: 'txt_filtro_vencimiento_desde', ifFormat: '%d/%m/%Y', button: 'cal_txt_filtro_vencimiento_desde',onUpdate: function(){setAdmBuscadorTop('pde_factura_gestion')}
                    });
                </script>
            </div>
        </div>

        <div class="col fecha-vencimiento-hasta">
            <div class="label"><?php Lang::_lang('Vencim Hasta') ?></div>
            <div class="dato">
                <input id="txt_filtro_vencimiento_hasta" name="txt_filtro_vencimiento_hasta" type="text" class="textbox date" size="4" title="<?php Lang::_lang('Ingrese la fecha HASTA') ?>" />
                <input type="button" id="cal_txt_filtro_vencimiento_hasta" value=" ... ">
                <script type='text/javascript'>
                    Calendar.setup({
                        inputField: 'txt_filtro_vencimiento_hasta', ifFormat: '%d/%m/%Y', button: 'cal_txt_filtro_vencimiento_hasta',onUpdate: function(){setAdmBuscadorTop('pde_factura_gestion')}
                    });
                </script>
            </div>
        </div>  
        
    </div>
    
</form>

