<?php
include "_autoload.php";
?>

<div class="datos modal-afip-citi-generar-prc" >
    <form id='form_afip_citi_generar_prc' name='form_afip_citi_generar_prc' method='POST' action='' >
        <div class="label-error" id="error_general_error"></div>
        <div id="prc_afip_citi_error" class="error label-error" ><?php Gral::_echo($prc_afip_citi_error) ?></div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Empresa') ?></div>
            <div class="dato">
                <?php Html::html_dib_select(1, 'cmb_gral_empresa_id', Gral::getCmbFiltro(GralEmpresa::getGralEmpresasCmb(true), '...'), $cmb_gral_empresa_id, 'textbox'); ?>
                <div id="cmb_gral_empresa_id_error" class="error label-error" ><?php Gral::_echo($cmb_gral_empresa_id_error) ?></div>
            </div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Mes') ?></div>
            <div class="dato">
                <?php Html::html_dib_select(1, 'cmb_gral_mes_id', Gral::getCmbFiltro(GralMes::getGralMessCmb(true), '...'), $cmb_gral_empresa_id, 'textbox'); ?>
                <div id="cmb_gral_mes_id_error" class="error label-error" ><?php Gral::_echo($cmb_gral_mes_id_error) ?></div>
            </div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Anio') ?></div>
            <div class="dato">
                <?php Html::html_dib_select(1, 'cmb_anio', Gral::getCmbFiltro(Gral::getAniosCmb(3), '...'), $cmb_anio, 'textbox') ?>
                <div id="cmb_anio_error" class="error label-error" ><?php Gral::_echo($cmb_anio_error) ?></div>
            </div>
        </div>

        <div class="botonera">
            <button class="boton" id='btn_afip_citi_generar_prc' name='btn_afip_citi_generar_prc' type='button' class='btn_afip_citi_generar_prc'><?php Lang::_lang('Generar Proceso AFIP') ?></button>
        </div>
        
    </form>
</div>

<script>
    setInit();
    setInitAfipCitiPrc();
</script>