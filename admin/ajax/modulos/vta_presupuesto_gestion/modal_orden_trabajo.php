<?php
include "_autoload.php";
include Gral::getPathAbs().'admin/control/seguridad_modulo.php';

$vta_presupuesto_ins_insumo_id = Gral::getVars(Gral::VARS_GET, 'vta_presupuesto_ins_insumo_id', 0, Gral::TIPO_INTEGER);
$vta_presupuesto_ins_insumo = VtaPresupuestoInsInsumo::getOxId($vta_presupuesto_ins_insumo_id);

$ins_insumo_descripcion = '';
$txt_cantidad = '';
$cli_cliente_descripcion = '';
$txt_observacion = '';

if ( $vta_presupuesto_ins_insumo )
{
    $cmb_ins_insumo_id = $vta_presupuesto_ins_insumo->getInsInsumoId();
    $ins_insumo = $vta_presupuesto_ins_insumo->getInsInsumo();
    if ( $ins_insumo )
    {
        $cmb_ins_insumo_id = $ins_insumo->getId();
        $ins_insumo_descripcion = $ins_insumo->getDescripcion();
        $ins_insumo_descripcion = $vta_presupuesto_ins_insumo->getDescripcion();
    }
    
    //$txt_cantidad = $vta_presupuesto_ins_insumo->getCantidad();
    $txt_cantidad = $vta_presupuesto_ins_insumo->getCantidadTotalCalculada();
        
    $vta_presupuesto = $vta_presupuesto_ins_insumo->getVtaPresupuesto();
    if ( $vta_presupuesto )
    {
        $cmb_cli_cliente_id = $vta_presupuesto->getCliClienteId();
        $cli_cliente = $vta_presupuesto->getCliCliente();
        if ( $cli_cliente )
        {
            $cmb_cli_cliente_id = $cli_cliente->getId();
            $cli_cliente_descripcion = $cli_cliente->getDescripcion();
        }
        $txt_observacion = $vta_presupuesto->getNotaInterna();
    }

}
?>

<form id='form_orden_trabajo' name='form_orden_trabajo' method='post' action='' >
    <div class="datos hoja_ruta" >                
        <div class="label-error" id="error_general_error"></div>
        
        <div class="par">
            <div class="label">
                <?php Lang::_lang('Producto') ?>
            </div>
            <div class="dato">
                <?php Gral::_echo($ins_insumo_descripcion); ?>
                <div class="label-error" id="cmb_ins_insumo_id_error"></div>
            </div>
        </div>
        
        <div class="par">
            <div class="label">
                <?php Lang::_lang('Cantidad') ?>
            </div>
            <div class="dato">
                <?php Gral::_echo($txt_cantidad); ?>
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
                <?php //Html::html_dib_select(1, 'cmb_cli_cliente_id', Gral::getCmbFiltro(CliCliente::getCliClientesCmb(), '...'), $cmb_cli_cliente_id, 'textbox selective-input-filtro') ?>
                <?php Gral::_echo($cli_cliente_descripcion); ?>
                <div class="label-error" id="cmb_cli_cliente_id_error"></div>
            </div>
        </div>
        
        <div class="par">
            <div class="label"><?php Lang::_lang('Observacion') ?></div>
            <div class="dato">
                <textarea name='txa_observacion' rows='3' cols='50' id='txa_observacion' class='textbox'><?php Gral::_echo($txt_observacion) ?></textarea>
                <div class="label-error" id="txa_observacion_error"></div>
            </div>
        </div>
        <div class="botonera">
            <button class="boton gen-modal-btn-confirmar" id='btn_registrar' name='btn_registrar' type='button' gen-modal-file-post="ajax/modulos/vta_presupuesto_gestion/set_modal_orden_trabajo.php?vta_presupuesto_ins_insumo_id=<?php echo $vta_presupuesto_ins_insumo_id; ?>" gen-modal-content=".div_modal" gen-modal-callback="setInitVtaPresupuestoGestion(); refreshVtaPresupuestoGestionEdicionAdmDatos();"><?php Lang::_lang('Guardar') ?></button>
        </div>
    </div>
</form>
<script>
    setInit();
    setInitVtaPresupuestoGestion();
</script>