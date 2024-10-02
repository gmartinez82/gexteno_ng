<?php
include "_autoload.php";
include Gral::getPathAbs().'admin/control/seguridad_modulo.php';

$prd_orden_trabajo_id = Gral::getVars(Gral::VARS_GET, 'identificador', 0, Gral::TIPO_INTEGER);
$prd_orden_trabajo = PrdOrdenTrabajo::getOxId($prd_orden_trabajo_id);

if ( $prd_orden_trabajo )
{
    $cmb_ins_insumo_id = $prd_orden_trabajo->getInsInsumoId();
    $txt_cantidad = $prd_orden_trabajo->getCantidad();
    $cmb_prd_prioridad_id = $prd_orden_trabajo->getPrdPrioridadId();
    $cmb_cli_cliente_id = $prd_orden_trabajo->getCliClienteId();
    $txt_observacion = $prd_orden_trabajo->getObservacion();
}
?>

<form id='form_orden_trabajo' name='form_orden_trabajo' method='post' action='' >
    <div class="datos hoja_ruta" >                
        <div class="label-error" id="error_general_error"></div>
        
        <?php if ( $prd_orden_trabajo ): ?>
        <div class="par">
            <div class="label">
                <?php Lang::_lang('Codigo') ?>
            </div>
            <div class="dato">
                <div class="label"><?php Gral::_echo($prd_orden_trabajo->getCodigo()) ?></div>
            </div>
        </div>
        <?php endif; ?>

        <div class="par">
            <div class="label">
                <?php Lang::_lang('Producto') ?>
            </div>
            <div class="dato">
                <?php Html::html_dib_select(1, 'cmb_ins_insumo_id', Gral::getCmbFiltro(InsInsumo::getInsInsumosConPrdProcesoProductivoCmb(), '...'), $cmb_ins_insumo_id, 'textbox selective-input-filtro') ?>
                <div class="label-error" id="cmb_ins_insumo_id_error"></div>
            </div>
        </div>
        
        <div class="par">
            <div class="label">
                <?php Lang::_lang('Cantidad') ?>
            </div>
            <div class="dato">
                <input id='txt_cantidad' name='txt_cantidad' type='text' class='textbox spinner' value='<?php Gral::_echoTxt($txt_cantidad) ?>' size='10' />
                <div class="label-error" id="txt_cantidad_error"></div>
            </div>
        </div>
        
        <div class="par">
            <div class="label">
                <?php Lang::_lang('Prioridad') ?>
            </div>
            <div class="dato">
                <?php Html::html_dib_select(1, 'cmb_prd_prioridad_id', Gral::getCmbFiltro(PrdPrioridad::getPrdPrioridadsCmb(), '...'), $cmb_prd_prioridad_id, 'textbox') ?>
                <div class="label-error" id="cmb_prd_prioridad_id_error"></div>
            </div>
        </div>
        
        <div class="par">
            <div class="label">
                <?php Lang::_lang('Cliente') ?>
            </div>
            <div class="dato">
                <?php Html::html_dib_select(1, 'cmb_cli_cliente_id', Gral::getCmbFiltro(CliCliente::getCliClientesCmb(), '...'), $cmb_cli_cliente_id, 'textbox selective-input-filtro') ?>
                <div class="label-error" id="cmb_cli_cliente_id_error"></div>
            </div>
        </div>
        
        <div class="par">
            <div class="label"><?php Lang::_lang('Observacion') ?></div>
            <div class="dato">
                <textarea name='txa_observacion' rows='4' cols='60' id='txa_observacion' class='textbox'><?php echo $txt_observacion;?></textarea>
                <div class="label-error" id="txa_observacion_error"></div>
            </div>
        </div>
        
        <div class="botonera">
            <button class="boton gen-modal-btn-confirmar" id='btn_registrar' name='btn_registrar' type='button' gen-modal-file-post="ajax/modulos/prd_orden_trabajo_gestion/set_modal_orden_trabajo.php?prd_orden_trabajo_id=<?php echo $prd_orden_trabajo_id; ?>" gen-modal-content=".div_modal" gen-modal-callback="setInitPrdOrdenTrabajoGestion(); refreshAdmAll('prd_orden_trabajo_gestion', 1);"><?php Lang::_lang('Guardar') ?></button>
        </div>
    </div>
</form>
<script>
    setInit();
    setInitPrdOrdenTrabajoGestion();
</script>