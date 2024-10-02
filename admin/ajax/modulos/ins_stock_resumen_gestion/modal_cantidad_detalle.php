<?php
include "_autoload.php";

$identificador = Gral::getVars(2, 'identificador', 0);
$ins_stock_resumen = InsStockResumen::getOxId($identificador);
$ins_insumo = $ins_stock_resumen->getInsInsumo();
$pan_panol = $ins_stock_resumen->getPanPanol();

$tipo = Gral::getVars(2, 'tipo', 'ACTIVO');

$ins_insumo_identificados = $ins_insumo->getInsInsumoIdentificadosEnPanol($pan_panol, $tipo);
//Gral::prr($ins_insumo_identificados); exit;
?>

<div class="datos detalle">        
    <div class="titulo"><?php Lang::_lang('Detalle de Stock de Insumos Identificados') ?></div>
    
    <table border="0" class="tabla-modal">
      <tr>
        <td class="adm_tbl_encabezado" width="50" align='center'>&nbsp;</td>
        <td class="adm_tbl_encabezado" width="50" align='center'><?php Lang::_lang('Id') ?></td>
        <td class="adm_tbl_encabezado" width="250" align='center'><?php Lang::_lang('Descripcion') ?></td>
        <td class="adm_tbl_encabezado" width="120" align='center'><?php Lang::_lang('Estado Actual') ?></td>
        <td class="adm_tbl_encabezado" width="120" align='center'><?php Lang::_lang('Actualmente en') ?></td>
        <td class="adm_tbl_encabezado" width="140" align='center'><?php Lang::_lang('Ingreso el') ?></td>
        <td class="adm_tbl_encabezado" width="140" align='center'><?php Lang::_lang('Usuario') ?></td>
        <td class="adm_tbl_encabezado" width="30" align='center'>&nbsp;</td>
      </tr>
      <?php 
      $cont = 0;
      foreach($ins_insumo_identificados as $ins_insumo_identificado){ 
        $ins_insumo_identificado_movimiento_actual = $ins_insumo_identificado->getInsInsumoIdentificadoMovimientoActual();
      $cont++;
      ?>
      <tr class="uno" identificador="<?php Gral::_echo($ins_insumo_identificado->getId()) ?>" movimiento_id="<?php Gral::_echo($ins_insumo_identificado_movimiento_actual->getId()) ?>" >
        <td class="adm_tbl_lineas" align="center">
            <?php Gral::_echo($cont) ?>
        </td>

        <td class="adm_tbl_lineas" align="center">
            <?php Gral::_echo($ins_insumo_identificado->getId()) ?>
        </td>

        <td class="adm_tbl_lineas" align="left">
            <?php Gral::_echo($ins_insumo_identificado->getDescripcionLarga()) ?>
        </td>

        <td class="adm_tbl_lineas" align="center">
        	<img class="icono" src="imgs/ins_<?php Gral::_echo($ins_insumo_identificado_movimiento_actual->getInsInsumoIdentificadoTipoEstado()->getCodigo()) ?>.png" width="18" alt="<?php Gral::_echo($ins_insumo_identificado_movimiento_actual->getInsInsumoIdentificadoTipoEstado()->getCodigo()) ?>" align="absmiddle" title="" />

            <?php Gral::_echo($ins_insumo_identificado_movimiento_actual->getInsInsumoIdentificadoTipoEstado()->getDescripcion()) ?>
        </td>

        <td class="adm_tbl_lineas" align="center">
            <?php Gral::_echo($ins_insumo_identificado_movimiento_actual->getPanPanol()->getDescripcion()) ?>
        </td>

        <td class="adm_tbl_lineas" align="center">
            <?php Gral::_echo(Gral::getFechaHoraToWeb($ins_insumo_identificado_movimiento_actual->getCreado())) ?> hs.
        </td>

        <td class="adm_tbl_lineas" align="center">
            <?php Gral::_echo($ins_insumo_identificado_movimiento_actual->getCreadoPorDescripcion()) ?>
        </td>

        <td class="adm_tbl_lineas" align="center">
            <img class="ver-historial" src="imgs/btn_historial.png" width="16" align="absmiddle" title="<?php Lang::_lang('Ver Historial') ?>">
        </td>

      </tr>
      <?php } ?>
    </table>
        
</div>
<div class="div_modal_modal"></div>