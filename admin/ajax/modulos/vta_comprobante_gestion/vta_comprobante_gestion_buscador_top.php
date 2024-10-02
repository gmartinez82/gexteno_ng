<?php
$cli_cliente_id = Gral::getSes(VtaComprobante::SES_CLIENTE_SELECCIONADO);
if ($cli_cliente_id != '') {
    $cmb_filtro_cli_cliente_id = $cli_cliente_id;
}
?>
<form id="form_buscador_top" name="form_buscador_top" method="post" action="ajax/modulos/vta_comprobante_gestion/set_vta_comprobante_gestion_buscador_top.php">

    <div class="col cli_cliente">
        <div class="label"><?php Lang::_lang('Cliente') ?></div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'cmb_filtro_cli_cliente_id', Gral::getCmbFiltro(CliCliente::getCliClientesCmbXAlcance(), '...'), $cmb_filtro_cli_cliente_id, 'textbox selective-input-filtro') ?>
        </div>
    </div>

    <div class="col imputable">
        <div class="label"><?php Lang::_lang('Imputable') ?></div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'cmb_filtro_imputable', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(true), '...'), $cmb_filtro_imputable, 'textbox') ?>
        </div>
    </div>

    <?php if (UsCredencial::getEsAcreditado('VTA_COMPROBANTE_GESTION_INCLUIR_AJUSTES')) { ?>
        <div class="col incluir-ajustes">
            <div class="label"><?php Lang::_lang('Otros') ?></div>
            <div class="dato">
                <?php Html::html_dib_select(1, 'cmb_filtro_incluir_ajustes', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(true), '...'), $cmb_filtro_incluir_ajustes, 'textbox') ?>
            </div>
        </div>
    <?php } ?>

    <div class="col fecha-desde">
        <div class="label"><?php Lang::_lang('Desde') ?></div>
        <div class="dato">
            <input id="txt_filtro_desde" name="txt_filtro_desde" type="text" class="textbox date" size="4" value="<?php Gral::_echoTxt(Gral::getFechaToWeb($criterio_factura->getValorDeCampoXPos('fecha_desde'))) ?>" title="<?php Lang::_lang('Ingrese la fecha DESDE') ?>" />
            <input type="button" id="cal_txt_filtro_desde" value=" ... ">
            <script type='text/javascript'>
                Calendar.setup({
                    inputField: 'txt_filtro_desde', ifFormat: '%d/%m/%Y', button: 'cal_txt_filtro_desde', onUpdate: function () {
                        //setAdmBuscadorTop('vta_comprobante_gestion')
                    }
                });
            </script>
        </div>
    </div>

    <div class="col fecha-hasta">
        <div class="label"><?php Lang::_lang('Hasta') ?></div>
        <div class="dato">
            <input id="txt_filtro_hasta" name="txt_filtro_hasta" type="text" class="textbox date" size="4" value="<?php Gral::_echoTxt(Gral::getFechaToWeb($criterio_factura->getValorDeCampoXPos('fecha_hasta'))) ?>" title="<?php Lang::_lang('Ingrese la fecha HASTA') ?>" />
            <input type="button" id="cal_txt_filtro_hasta" value=" ... ">
            <script type='text/javascript'>
                Calendar.setup({
                    inputField: 'txt_filtro_hasta', ifFormat: '%d/%m/%Y', button: 'cal_txt_filtro_hasta', onUpdate: function () {
                        //setAdmBuscadorTop('vta_comprobante_gestion')
                    }
                });
            </script>
        </div>
    </div>

    <div class="col">
        <div class="label"><?php Lang::_lang('Busqueda rapida (2 letras min)') ?></div>
        <input id="txt_buscador" name="txt_buscador" type="text" class="textbox" size="20" placeholder="<?php Lang::_lang('Ingrese palabra a buscar') ?>" title="<?php Lang::_lang('Ingrese la palabra que desea buscar') ?>" />
        <img class="txt_buscador_boton" src="imgs/lupa.png" width="20">
    </div>


    <div class="col">

    </div>

</form>

