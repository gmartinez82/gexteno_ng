<?php
include "_autoload.php";

$identificador = Gral::getVars(2, 'identificador', 0);
$ins_stock_resumen = InsStockResumen::getOxId($identificador);
$ins_insumo = $ins_stock_resumen->getInsInsumo();
$pan_panol = $ins_stock_resumen->getPanPanol();
$pde_centro_pedido = $pan_panol->getPdeCentroPedido();

// ------------------------------------------------------------------------------------------
// detalles de movimientos de stock
$c = new Criterio();
$c->add(InsStockMovimiento::GEN_ATTR_PAN_PANOL_ID, $pan_panol->getId(), Criterio::IGUAL);
$c->add(InsStockMovimiento::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
$c->addTabla(InsStockMovimiento::GEN_TABLA);
$c->addOrden('1', 'desc');
$c->setCriterios();

$p = new Paginador(100, 1);
//$p = null;

$ins_stock_movimientos = $ins_insumo->getInsStockMovimientos($p, $c);
//Gral::prr($ins_stock_movimientos); exit;
// ------------------------------------------------------------------------------------------
// ------------------------------------------------------------------------------------------
// detalles de reservas de stock
$c = new Criterio();
$c->add(InsStockTipoMovimiento::GEN_ATTR_CODIGO, InsStockTipoMovimiento::TIPO_MOV_RESERVA, Criterio::IGUAL);
$c->add(InsStockMovimiento::GEN_ATTR_PAN_PANOL_ID, $pan_panol->getId(), Criterio::IGUAL);
//$c->add(InsStockMovimiento::GEN_ATTR_ESTADO, 0, Criterio::IGUAL);
$c->addTabla(InsStockMovimiento::GEN_TABLA);
$c->addRealJoin(InsStockTipoMovimiento::GEN_TABLA, InsStockTipoMovimiento::GEN_ATTR_ID, InsStockMovimiento::GEN_ATTR_INS_STOCK_TIPO_MOVIMIENTO_ID);
$c->addOrden('1', 'desc');
$c->setCriterios();

$p = new Paginador(100, 1);

$ins_stock_movimientos_reservas = $ins_insumo->getInsStockMovimientos($p, $c);
// ------------------------------------------------------------------------------------------

$cantidad_reservados = $ins_insumo->getInsInsumoReservasActivasCantidadEnPanol($pan_panol);
$arr_puntos = $ins_insumo->getInsInsumoPuntosEnPanol($pan_panol);
?>

<div class="datos detalle">

    <div class="titulo"><?php Lang::_lang('Stock Actual en') ?> <?php Gral::_echo($pan_panol->getDescripcion()) ?></div>

    <table border="0" class="tabla-modal">
        <tr>
            <td class="adm_tbl_encabezado" width="50" align='center'><?php Lang::_lang('Id') ?></td>
            <td class="adm_tbl_encabezado" width="300" align='center'><?php Lang::_lang('Insumo') ?></td>
            <td class="adm_tbl_encabezado" width="160" align='center'><?php Lang::_lang('Ultima Modificacion') ?></td>
            <td class="adm_tbl_encabezado" width="80" align='center' title="<?php Lang::_lang('Cant Real') ?>"><?php Lang::_lang('CR') ?></td>
            <td class="adm_tbl_encabezado" width="80" align='center' title="<?php Lang::_lang('Cant Comprometida') ?>"><?php Lang::_lang('CC') ?></td>
            <td class="adm_tbl_encabezado" width="80" align='center' title="<?php Lang::_lang('Cant Disponible') ?>"><?php Lang::_lang('CD') ?></td>
            <td class="adm_tbl_encabezado" width="80" align='center'><?php Lang::_lang('Pto Min') ?></td>
            <td class="adm_tbl_encabezado" width="80" align='center'><?php Lang::_lang('Pto Ped') ?></td>
            <td class="adm_tbl_encabezado" width="80" align='center'><?php Lang::_lang('Pto Max') ?></td>
        </tr>
        <?php
        if ($ins_stock_resumen) {
            ?>
            <tr>
                <td class="adm_tbl_lineas strong" align="center">
                    <strong title="Res #<?php Gral::_echo($ins_stock_resumen->getId()) ?>"><?php Gral::_echo($ins_insumo->getId()) ?></strong>
                </td>
                <td class="adm_tbl_lineas strong" align="left">
                    <strong><?php Gral::_echo($ins_insumo->getDescripcion()) ?></strong>
                </td>
                <td class="adm_tbl_lineas strong" align="center">
                    <?php Gral::_echo(Gral::getFechaHoraToWeb($ins_stock_resumen->getModificado())) ?> hs.
                </td>
                <td class="adm_tbl_lineas strong" align="center">
                    <strong><?php Gral::_echoFloatDyn($ins_stock_resumen->getCantidadReal()) ?></strong>
                </td>
                <td class="adm_tbl_lineas strong" align="center">
                    <strong><?php Gral::_echoFloatDyn($ins_stock_resumen->getCantidadComprometida()) ?></strong>
                </td>
                <td class="adm_tbl_lineas strong" align="center">
                    <strong><?php Gral::_echoFloatDyn($ins_stock_resumen->getCantidad()) ?></strong>
                </td>
                <td class="adm_tbl_lineas strong" align="center">
                    <?php Gral::_echo($arr_puntos[insinsumo::PUNTO_MINIMO]) ?>
                </td>
                <td class="adm_tbl_lineas strong" align="center">
                    <?php Gral::_echo($arr_puntos[insinsumo::PUNTO_PEDIDO]) ?>
                </td>
                <td class="adm_tbl_lineas strong" align="center">
                    <?php Gral::_echo($arr_puntos[insinsumo::PUNTO_MAXIMO]) ?>
                </td>
            </tr>
        <?php } ?>
    </table>
    <br />

    <div class="tabs">

        <ul>
            <li><a href="#tab_movimientos"><?php Lang::_lang('Movimientos') ?></a></li>
            <li><a href="#tab_reservas"><?php Lang::_lang('Reservas') ?></a></li>
        </ul>

        <div id="tab_movimientos" class="datos">

            <div class="titulo"><?php Lang::_lang('Historial de Movimientos de Insumo') ?></div>
            <table border="0" class="tabla-modal">
                <tr>
                    <td class="adm_tbl_lineas" align='center'></td>
                    <td class="adm_tbl_lineas" align='center'></td>
                    <td class="adm_tbl_lineas" align='center'></td>
                    <td class="adm_tbl_encabezado" align='center' colspan="3"><?php Lang::_lang('Historico') ?></td>
                    <td class="adm_tbl_lineas" align='center'></td>
                    <td class="adm_tbl_lineas" align='center'></td>
                    <td class="adm_tbl_lineas" align='center'></td>
                </tr>
                <tr>
                    <td class="adm_tbl_encabezado" width="40" align='center'>&nbsp;</td>
                    <td class="adm_tbl_encabezado" width="350" align='center'><?php Lang::_lang('Tipo') ?></td>
                    <td class="adm_tbl_encabezado" width="50" align='center' title="<?php Lang::_lang('Cant Activo') ?>"><?php Lang::_lang('Cant') ?></td>
                    <td class="adm_tbl_encabezado" width="50" align='center' title="<?php Lang::_lang('Cant Real') ?>"><?php Lang::_lang('CR') ?></td>
                    <td class="adm_tbl_encabezado" width="50" align='center' title="<?php Lang::_lang('Cant Comprometida') ?>"><?php Lang::_lang('CC') ?></td>
                    <td class="adm_tbl_encabezado" width="50" align='center' title="<?php Lang::_lang('Cant Disponible') ?>"><?php Lang::_lang('CD') ?></td>
                    <td class="adm_tbl_encabezado" width="100" align='center'><?php Lang::_lang('Pedido') ?></td>
                    <td class="adm_tbl_encabezado" width="100" align='center'><?php Lang::_lang('Origen') ?></td>
                    <td class="adm_tbl_encabezado" width="120" align='center'><?php Lang::_lang('Usuario') ?></td>
                    <td class="adm_tbl_encabezado" width="30" align='center'>&nbsp;</td>
                </tr>
                <?php
                $cont = 0;
                foreach ($ins_stock_movimientos as $ins_stock_movimiento) {
                    $cont++;
                    $pdi_pedido_uno = $ins_stock_movimiento->getPdiPedido();
                    $pdi_estado_uno = $pdi_pedido_uno->getPdiEstadoActual();
                    
                    ?>
                    <tr>
                        <td class="adm_tbl_lineas" align="center" title="Res #<?php Gral::_echo($ins_stock_movimiento->getId()) ?>">
                            <?php Gral::_echo($cont) ?>
                        </td>
                        <td class="adm_tbl_lineas" align="left">
                            <strong><?php Gral::_echo($ins_stock_movimiento->getInsStockTipoMovimiento()->getDescripcion()) ?></strong>
                            
                            <div class="comentario">
                                <?php Gral::_echo($ins_stock_movimiento->getObservacion()) ?>
                            </div>
                            <div class="comentario">
                                <?php Gral::_echo($pdi_pedido_uno->getDescripcionRecepcionPDI()) ?>
                            </div>
                        </td>
                        <td class="adm_tbl_lineas cantidad" align="center">
                            <?php Gral::_echoFloatDyn($ins_stock_movimiento->getCantidad()) ?>
                        </td>
                        <td class="adm_tbl_lineas" align="center">
                            <?php Gral::_echoFloatDyn($ins_stock_movimiento->getCantidadReal()) ?>
                        </td>
                        <td class="adm_tbl_lineas" align="center">
                            <?php Gral::_echoFloatDyn($ins_stock_movimiento->getCantidadComprometida()) ?>
                        </td>
                        <td class="adm_tbl_lineas cantidad-disponoble" align="center">
                            <?php Gral::_echoFloatDyn($ins_stock_movimiento->getCantidadDisponible()) ?>
                        </td>
                        <td class="adm_tbl_lineas" align="center" title="<?php Gral::_echo(($pdi_estado_uno) ? $pdi_estado_uno->getObservacion() : '') ?>">
                            <?php Gral::_echo(($pdi_pedido_uno) ? $pdi_pedido_uno->getCodigo() : '') ?><br />
                            <strong><?php Gral::_echo(($pdi_estado_uno) ? $pdi_estado_uno->getPdiTipoEstado()->getDescripcion() : '') ?></strong>
                        </td>
                        <td class="adm_tbl_lineas" align="center">
                            <div class="pdi-tipo-origen">
                                <?php Gral::_echo($ins_stock_movimiento->getPdiPedido()->getPdiTipoOrigen()->getCodigo()) ?>
                            </div>
                        </td>
                        <td class="adm_tbl_lineas" align="center">
                            <div class="creado-por">
                                <?php Gral::_echo($ins_stock_movimiento->getCreadoPorDescripcion()) ?>
                            </div>
                            <div class="creado">
                                <?php Gral::_echo(Gral::getFechaHoraToWeb($ins_stock_movimiento->getCreado())) ?>                            
                            </div>
                        </td>
                        <td class="adm_tbl_lineas" align="center" title="<?php Gral::_echo($ins_stock_movimiento->getCodigo()) ?>">
                            <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/btn_estado_<?php Gral::_echo($ins_stock_movimiento->getEstado()) ?>.gif" width="16" alt="actual">
                        </td>
                    </tr>
                <?php } ?>
            </table>        
        </div>

        <div id="tab_reservas" class="datos">

            <div class="titulo"><?php Lang::_lang('Reservas de Insumo') ?></div>
            <table border="0" class="tabla-modal">
                <tr>
                    <td class="adm_tbl_lineas" width="40" align='center'>&nbsp;</td>
                    <td class="adm_tbl_lineas" width="120" align='center'></td>
                    <td class="adm_tbl_lineas" width="120" align='center'></td>
                    <td class="adm_tbl_lineas" width="200" align='center'></td>
                    <td class="adm_tbl_lineas" width="200" align='center'></td>
                    <td class="adm_tbl_encabezado" align='center' colspan="3"><?php Lang::_lang('Historico') ?></td>
                    <td class="adm_tbl_lineas" width="80" align='center'></td>
                    <td class="adm_tbl_lineas" width="80" align='center'></td>
                    <td class="adm_tbl_lineas" width="100" align='center'></td>
                    <td class="adm_tbl_lineas" width="100" align='center'></td>
                    <td class="adm_tbl_lineas" width="120" align='center'></td>
                    <td class="adm_tbl_lineas" width="50" align='center'>&nbsp;</td>
                </tr>
                <tr>
                    <td class="adm_tbl_encabezado" width="40" align='center'>&nbsp;</td>
                    <td class="adm_tbl_encabezado" width="120" align='center'><?php Lang::_lang('Fecha') ?></td>
                    <td class="adm_tbl_encabezado" width="120" align='center'><?php Lang::_lang('Ult Modificacion') ?></td>
                    <td class="adm_tbl_encabezado" width="200" align='center'><?php Lang::_lang('Tipo') ?></td>
                    <td class="adm_tbl_encabezado" width="50" align='center' title="<?php Lang::_lang('Cant Activo') ?>"><?php Lang::_lang('Cant') ?></td>
                    <td class="adm_tbl_encabezado" width="50" align='center' title="<?php Lang::_lang('Cant Real') ?>"><?php Lang::_lang('CR') ?></td>
                    <td class="adm_tbl_encabezado" width="50" align='center' title="<?php Lang::_lang('Cant Comprometida') ?>"><?php Lang::_lang('CC') ?></td>
                    <td class="adm_tbl_encabezado" width="50" align='center' title="<?php Lang::_lang('Cant Disponible') ?>"><?php Lang::_lang('CD') ?></td>
                    <td class="adm_tbl_encabezado" width="100" align='center'><?php Lang::_lang('Pedido') ?></td>
                    <td class="adm_tbl_encabezado" width="100" align='center'><?php Lang::_lang('Origen') ?></td>
                    <td class="adm_tbl_encabezado" width="120" align='center'><?php Lang::_lang('Usuario') ?></td>
                    <td class="adm_tbl_encabezado" width="30" align='center'>&nbsp;</td>
                </tr>
                <?php
                $cont = 0;
                foreach ($ins_stock_movimientos_reservas as $ins_stock_movimiento) {
                    $cont++;
                    $pdi_pedido_uno = $ins_stock_movimiento->getPdiPedido();
                    $pdi_estado_uno = $pdi_pedido_uno->getPdiEstadoActual();
                    ?>
                    <tr>
                        <td class="adm_tbl_lineas" align="center" title="Res #<?php Gral::_echo($ins_stock_movimiento->getId()) ?>">
                            <?php Gral::_echo($cont) ?>
                        </td>
                        <td class="adm_tbl_lineas" align="center" title="<?php Gral::_echo($ins_stock_movimiento->getId()) ?>">
                            <?php Gral::_echo(Gral::getFechaHoraToWeb($ins_stock_movimiento->getCreado())) ?>
                        </td>
                        <td class="adm_tbl_lineas" align="center">
                            <?php Gral::_echo(Gral::getFechaHoraToWeb($ins_stock_movimiento->getModificado())) ?>
                        </td>
                        <td class="adm_tbl_lineas" align="left">
                            <strong><?php Gral::_echo($ins_stock_movimiento->getInsStockTipoMovimiento()->getDescripcion()) ?></strong>
                            <div class="comentario"><?php Gral::_echo($ins_stock_movimiento->getObservacion()) ?></div>
                        </td>
                        <td class="adm_tbl_lineas cantidad" align="center">
                            <?php Gral::_echo($ins_stock_movimiento->getCantidad()) ?>
                        </td>
                        <td class="adm_tbl_lineas" align="center">
                            <?php Gral::_echo($ins_stock_movimiento->getCantidadReal()) ?>
                        </td>
                        <td class="adm_tbl_lineas" align="center">
                            <?php Gral::_echo($ins_stock_movimiento->getCantidadComprometida()) ?>
                        </td>
                        <td class="adm_tbl_lineas cantidad-disponoble" align="center">
                            <?php Gral::_echo($ins_stock_movimiento->getCantidadDisponible()) ?>
                        </td>
                        <td class="adm_tbl_lineas" align="center" title="<?php Gral::_echo(($pdi_estado_uno) ? $pdi_estado_uno->getObservacion() : '') ?>">
                            <?php Gral::_echo(($pdi_pedido_uno) ? $pdi_pedido_uno->getCodigo() : '') ?><br />
                            <strong><?php Gral::_echo(($pdi_estado_uno) ? $pdi_estado_uno->getPdiTipoEstado()->getDescripcion() : '') ?></strong>
                        </td>
                        <td class="adm_tbl_lineas" align="center">
                            <div class="pdi-tipo-origen">
                                <?php Gral::_echo($ins_stock_movimiento->getPdiPedido()->getPdiTipoOrigen()->getCodigo()) ?>
                            </div>
                        </td>
                        <td class="adm_tbl_lineas" align="center">
                            <div class="creado-por">
                                <?php Gral::_echo($ins_stock_movimiento->getCreadoPorDescripcion()) ?>
                            </div>
                            <div class="creado">
                                <?php Gral::_echo(Gral::getFechaHoraToWeb($ins_stock_movimiento->getCreado())) ?>                            
                            </div>
                        </td>
                        <td class="adm_tbl_lineas" align="center" title="<?php Gral::_echo($ins_stock_movimiento->getCodigo()) ?>">
                            <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/btn_estado_<?php Gral::_echo($ins_stock_movimiento->getEstado()) ?>.gif" width="16" alt="actual">
                        </td>
                    </tr>
                <?php } ?>
            </table>        
        </div>

    </div>

</div>
