<?php
include "_autoload.php";
?>

<div class="datos modal-cntb-periodo-gestion-generar" >
    <form id='form_cntb_periodo_gestion_generar' name='form_cntb_periodo_gestion_generar' method='POST' action='' >
        <div class="label-error" id="error_general_error"></div>
        <div id="cntb_periodo_gestion_generar_error" class="error label-error" ><?php Gral::_echo($cntb_periodo_gestion_generar_error) ?></div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Empresa') ?></div>
            <div class="dato">
                <?php Html::html_dib_select(1, 'cmb_gral_empresa_id', Gral::getCmbFiltro(GralEmpresa::getGralEmpresasCmb(true), '...'), $cmb_gral_empresa_id, 'textbox'); ?>
                <?php Html::html_dib_select(1, 'cmb_cntb_ejercicio_id', Gral::getCmbFiltro(array(), '...'), $cmb_cntb_ejercicio_id, 'textbox '. $error_input_css); ?>
                <div id="cmb_gral_empresa_id_error" class="error label-error" ><?php Gral::_echo($cmb_gral_empresa_id_error) ?></div>
                <div id="cmb_cntb_ejercicio_id_error" class="error label-error" ><?php Gral::_echo($cmb_cntb_ejercicio_id_error) ?></div>
            </div>
        </div>
        <div class="par">
            <div class="label"><?php Lang::_lang('Mes') ?></div>
            <div class="dato">
                <?php Html::html_dib_select(1, 'cmb_gral_mes_id', Gral::getCmbFiltro(GralMes::getGralMessCmb(true), '...'), $cmb_gral_empresa_id, 'textbox'); ?>
                <?php Html::html_dib_select(1, 'cmb_anio', Gral::getCmbFiltro(Gral::getAniosCmb(3), '...'), $cmb_anio, 'textbox') ?>
                <div id="cmb_gral_mes_id_error" class="error label-error" ><?php Gral::_echo($cmb_gral_mes_id_error) ?></div>
                <div id="cmb_anio_error" class="error label-error" ><?php Gral::_echo($cmb_anio_error) ?></div>
            </div>
        </div>
        <div class="par">
            <div class="label">
                <?php Lang::_lang('Observacion'); ?>
            </div>
            <div class="dato">
                 <textarea name='txa_observacion' rows='1' cols='50' id='txa_observacion' class='textbox <?php echo $error_input_css ?>'><?php Gral::_echo($txa_observacion) ?></textarea>
                 <div id="txa_observacion_error" class="error label-error" ><?php Gral::_echo($txa_observacion_error) ?></div>
            </div>
        </div>
        <div class="error-comprobantes">
            <p>Existen comprobantes no vinculados que impiden que se genere el periodo correctamente
            <div class="error-comprobantes-col error-comprobantes-ventas">
                <h4 class="titulo-comprobante-venta">Ventas</h4>
                <div class="error-comprobantes-uno"></div>
            </div>
            <div class="error-comprobantes-col error-comprobantes-compras">
                <h4 class="titulo-comprobante-compra">Compras</h4>
                <div class="error-comprobantes-uno"></div>
            </div>
        </div>
        <div class="botonera">
            <button class="boton" id='btn_cntb_periodo_gestion_generar' name='btn_cntb_periodo_gestion_generar' type='button' class='btn_cntb_periodo_gestion_generar'><?php Lang::_lang('Generar Periodo') ?></button>
        </div>
        
    </form>
</div>

<script>
    setInit();
    setInitCntbPeriodoGestion();
</script>