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
    
    $ins_insumo = $prd_orden_trabajo->getInsInsumo();
    $prd_proceso_productivo_id = $prd_orden_trabajo->getPrdProcesoProductivoId();
    
    $prd_proceso_productivos = $ins_insumo->getPrdProcesoProductivos();
    $prd_proceso_productivos_cmb = $ins_insumo->getPrdProcesoProductivosCmb();
    
    $prd_proceso_productivo = PrdProcesoProductivo::getOxId($prd_proceso_productivo_id);
}
?>

<form id='form_orden_trabajo_configuracion' name='form_orden_trabajo_configuracion' method='post' action='' prd_orden_trabajo_id="<?php echo $prd_orden_trabajo_id?>"  >
    <div class="datos configuracion-ot" >                
        <div class="label-error" id="error_general_error"></div>
        <div class="par">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($prd_orden_trabajo->getCodigo()); ?>
            </div>
        </div>
        <div class="par">
            <div class="label">
                <?php Lang::_lang('Producto') ?>
            </div>
            <div class="dato">
                <?php Gral::_echo($prd_orden_trabajo->getInsInsumo()->getDescripcion()); ?>
                <div class="label-error" id="cmb_ins_insumo_id_error"></div>
            </div>
        </div>
        
        <div class="par">
            <div class="label">
                <?php Lang::_lang('Cantidad') ?>
            </div>
            <div class="dato">
                <?php Gral::_echo($prd_orden_trabajo->getCantidad()); ?> Un.
                <div class="label-error" id="txt_cantidad_error"></div>
            </div>
        </div>
        
        <div class="par">
            <div class="label">
                <?php Lang::_lang('Proceso Productivo') ?>
            </div>
            <div class="dato">
                <?php Html::html_dib_select(1, 'cmb_prd_proceso_productivo_id', Gral::getCmbFiltro($prd_proceso_productivos_cmb, '...'), $prd_proceso_productivo_id, 'textbox') ?>
                <div class="label-error" id="cmb_prd_proceso_productivo_id_error"></div>
            </div>
        </div>
        
        <!-- Ciclos de Produccion -->
        <div class="ciclos-proceso-productivo">
            <?php include 'bloque_ciclos_proceso_productivo_datos.php';?>
        </div>
        
        <?php
        //if ( $prd_proceso_productivo && $prd_proceso_productivo->getConfigurado() == 1 ) :
        ?>
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
            <div class="label">
                <?php Lang::_lang('Operario') ?>
            </div>
            <div class="dato">
                <?php Html::html_dib_select(1, 'cmb_ope_operario_id', Gral::getCmbFiltro(OpeOperario::getOpeOperariosCmb(), '...'), $cmb_ope_operario_id, 'textbox') ?>
                <div class="label-error" id="cmb_ope_operario_id_error"></div>
            </div>
        </div>
        
        <div class="botonera">
            <button class="boton gen-modal-btn-confirmar" id='btn_registrar' name='btn_registrar' type='button' gen-modal-file-post="ajax/modulos/prd_orden_trabajo_gestion/set_modal_orden_trabajo_configuracion.php?prd_orden_trabajo_id=<?php echo $prd_orden_trabajo_id; ?>" gen-modal-content=".div_modal" gen-modal-callback="setInitPrdOrdenTrabajoGestion(); refreshAdmAll('prd_orden_trabajo_gestion', 1);"><?php Lang::_lang('Guardar') ?></button>
        </div>
        <?php
        //endif;
        ?>
    </div>
</form>
<script>
    setInit();
    setInitPrdOrdenTrabajoGestion();
</script>