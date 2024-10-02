<?php
include "_autoload.php";

$vta_presupuesto_id = Gral::getVars(Gral::VARS_POST, "vta_presupuesto_id", 0);
$chk_vta_presupuesto_ins_insumo = Gral::getVars(Gral::VARS_POST, 'chk_vta_presupuesto_ins_insumo');

$vta_presupuesto = VtaPresupuesto::getOxId($vta_presupuesto_id);
$arr_vta_presupuesto_ins_insumos_seleccionados = $vta_presupuesto->getEsVentaParcial($chk_vta_presupuesto_ins_insumo);

$cli_cliente = $vta_presupuesto->getCliCliente();

$vta_presupuesto_importe_total_con_iva = $vta_presupuesto->getImporteTotalPresupuestoConIva();

// se inicializa variable de configuracion 
$cv_importe_minimo_exigencia_info_comprador_consumidor_final = ConfVariable::getVtaComprobanteMinimoExigenciaInfoCompradorConsumidorFinal();
?>

<div class="datos confirmacion">
    
    <div class="mensaje alerta">Una vez preaprobado el presupuesto el vendedor no podrá volver a modificarlo.</div>
    
    <div class="botonera preaprobacion">
        <button type="button" class="boton" id="btn_presupuesto_generar_preaprobacion_confirmar" name="btn_presupuesto_generar_preaprobacion_confirmar">
            <div class="titulo">Registrar como Preaprobado</div>
                <div class="comentario">Confirma que el presupuesto ya puede ser revisado para su aprobación</div>
        </button>
    </div>

</div>