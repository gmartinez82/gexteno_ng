<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$padre = Gral::getVars(1, 'padre');
$padre_id = Gral::getVars(1, 'padre_id');
$padre_clase = Gral::getVars(1, 'padre_clase');
$relacion = Gral::getVars(1, 'relacion');
$palabra = Gral::getVars(1, 'palabra');
$pagina = Gral::getVars(1, 'pagina', 1);

$o_padre = eval('return '.$padre_clase.'::getOxId('.$padre_id.');');
$o_ids = eval('return $o_padre->getCliClienteGralFpCuotasId();');


// elementos seleccionados
$c = new Criterio();
$c->addDistinct(false);
$c->setAmbiguo(true);


	$c->add(GralFpCuota::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                    
        $c->addInicioSubconsulta();
        $c->add('', 'false', Criterio::SINCOMPARADOR);
	$c->add(GralFpCuota::GEN_ATTR_DESCRIPCION, '%' . $palabra . '%', Criterio::LIKE, false, Criterio::_OR);
	$c->add(GralFpCuota::GEN_ATTR_CODIGO, '%' . $palabra . '%', Criterio::LIKE, false, Criterio::_OR);
	$c->add(GralFpCuota::GEN_ATTR_OBSERVACION, '%' . $palabra . '%', Criterio::LIKE, false, Criterio::_OR);
	$c->add(GralFpMedioPago::GEN_ATTR_DESCRIPCION, '%' . $palabra . '%', Criterio::LIKE, false, Criterio::_OR);
	$c->add(GralFpMedioPago::GEN_ATTR_OBSERVACION, '%' . $palabra . '%', Criterio::LIKE, false, Criterio::_OR);
        $c->addFinSubconsulta();
	

$c->addTabla(GralFpCuota::GEN_TABLA);
$c->addRealJoin(GralFpMedioPago::GEN_TABLA, GralFpMedioPago::GEN_ATTR_ID, GralFpCuota::GEN_ATTR_GRAL_FP_MEDIO_PAGO_ID);
$c->addOrden(GralFpMedioPago::GEN_ATTR_DESCRIPCION, $relacion::GEN_FRTN_VINCULO_CRITERIO_ORDEN);
$c->addOrden(GralFpCuota::GEN_ATTR_DESCRIPCION, $relacion::GEN_FRTN_VINCULO_CRITERIO_ORDEN);
$c->setCriterios();

$paginador = new Paginador($relacion::GEN_FRTN_VINCULO_PAGINADOR_CANTIDAD, $pagina);

$ids_seleccionados = '';
$gral_fp_cuotas = GralFpCuota::getGralFpCuotas($paginador, $c);

$array_relacion_arbols = array();
foreach ($gral_fp_cuotas as $gral_fp_cuota) {
    $gral_fp_medio_pago = $gral_fp_cuota->getGralFpMedioPago();
    if ($gral_fp_medio_pago) {
        $array_relacion_arbols[$gral_fp_medio_pago->getId()][$gral_fp_cuota->getId()] = $gral_fp_cuota;
    }
}
?>
<div class="relacion-arbol">
    <?php
    $cli_cliente_gral_fp_cuota_seleccionados = $o_padre->getCliClienteGralFpCuotas();
    foreach ($array_relacion_arbols as $gral_fp_medio_pago_id => $array_relacion_arbol_gral_fp_medio_pagos) {
        $gral_fp_medio_pago = GralFpMedioPago::getOxId($gral_fp_medio_pago_id);

        $arr_cli_cliente_gral_fp_cuota_seleccionados_ids = array();

        foreach ($cli_cliente_gral_fp_cuota_seleccionados as $cli_cliente_gral_fp_cuota_seleccionado) {
            $arr_cli_cliente_gral_fp_cuota_seleccionados_ids[$cli_cliente_gral_fp_cuota_seleccionado->getGralFpCuotaId()] = $cli_cliente_gral_fp_cuota_seleccionado->getGralFpCuotaId();
            $arr_cli_cliente_gral_fp_cuota_seleccionados[$cli_cliente_gral_fp_cuota_seleccionado->getGralFpCuotaId()] = $cli_cliente_gral_fp_cuota_seleccionado;
        }
        //Gral::prr($arr_cli_cliente_gral_fp_cuota_seleccionados_ids);
        //Gral::prr($arr_cli_cliente_gral_fp_cuota_seleccionados);
        ?>
        <div class="uno item n0 gral_fp_medio_pago">
            <div class="n0-titulo">
                <input type="checkbox" 
                       id="chk_gral_fp_medio_pago_<?php echo $gral_fp_medio_pago->getId() ?>" 
                       name="chk_gral_fp_medio_pago[<?php echo $gral_fp_medio_pago->getId() ?>]" 
                       class="textbox n0" 
                       value="<?php echo $gral_fp_medio_pago->getId() ?>" 
                       />
                <label class="descripcion"><?php Gral::_echo($gral_fp_medio_pago->getDescripcion()) ?></label>
            </div>

            <div class="gral_fp_cuotas">
                <?php
                foreach ($array_relacion_arbol_gral_fp_medio_pagos as $gral_fp_cuota_id => $array_relacion_arbol_gral_fp_cuotas) {
                    $gral_fp_cuota = GralFpCuota::getOxId($gral_fp_cuota_id);
                    $gral_fp_cuota_relacionado = $gral_fp_cuota;

                    $checked = (in_array($gral_fp_cuota->getId(), $arr_cli_cliente_gral_fp_cuota_seleccionados_ids)) ? 'checked="checked"' : '';
                    $sel = (in_array($gral_fp_cuota->getId(), $arr_cli_cliente_gral_fp_cuota_seleccionados_ids)) ? 'sel' : '';
                    $cli_cliente_gral_fp_cuota = (in_array($gral_fp_cuota->getId(), $arr_cli_cliente_gral_fp_cuota_seleccionados_ids)) ? $arr_cli_cliente_gral_fp_cuota_seleccionados[$gral_fp_cuota->getId()] : false;
                    if ($cli_cliente_gral_fp_cuota) {
                        $cli_cliente_gral_fp_cuota_id = (in_array($gral_fp_cuota->getId(), $arr_cli_cliente_gral_fp_cuota_seleccionados_ids)) ? $cli_cliente_gral_fp_cuota->getId() : '';
                    }
                    ?>
                    <div class="uno item n1" id='uno_gral_fp_cuota_<?php echo $gral_fp_cuota->getId() ?>' >
                        <?php
                        include 'uno_gral_fp_cuota_set.php';
                        ?>
                    </div>
                <?php } ?>
            </div>

        </div>
    <?php } ?>
    <?php include Gral::getPathAbs()."admin/parciales/paginador_set.php"; ?>
</div>

