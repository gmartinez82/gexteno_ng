<?php
include "_autoload.php";

$pedido_id = Gral::getVars(2, 'pedido_id', 0);
$pdi_pedido = new PdiPedido();
if ($pedido_id != 0) {
    $pdi_pedido = PdiPedido::getOxId($pedido_id);
}
$pdi_pedido->setPdiPedidoLeido();

$pdi_estados = $pdi_pedido->getPdiEstados();

$ins_insumo = $pdi_pedido->getInsInsumo();

$pdi_comentarios = $pdi_pedido->getPdiComentarios();

$pan_panol_origen = PanPanol::getOxId($pdi_pedido->getPanPanolOrigen());
$ins_stock_resumen_origen = $ins_insumo->getInsStockResumenEnPanol($pan_panol_origen);
$arr_puntos_origen = $ins_insumo->getInsInsumoPuntosEnPanol($pan_panol_origen);

$pan_panol_destino = PanPanol::getOxId($pdi_pedido->getPanPanolDestino());
if ($pan_panol_destino) {
    $ins_stock_resumen_destino = $ins_insumo->getInsStockResumenEnPanol($pan_panol_destino);
    $arr_puntos_destino = $ins_insumo->getInsInsumoPuntosEnPanol($pan_panol_destino);
}

// detalles de movimientos de stock
$c = new Criterio();
$c->add(InsStockMovimiento::GEN_ATTR_PAN_PANOL_ID, $pan_panol_origen->getId(), Criterio::IGUAL);
$c->add(InsStockMovimiento::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
$c->addTabla(InsStockMovimiento::GEN_TABLA);
$c->addOrden('1', 'desc');
$c->setCriterios();
$p = new Paginador(10, 1);
//$p = null;
$ins_stock_movimientos_origen = $ins_insumo->getInsStockMovimientos($p, $c);

if ($pan_panol_destino) {
    $c = new Criterio();
    $c->add(InsStockMovimiento::GEN_ATTR_PAN_PANOL_ID, $pan_panol_destino->getId(), Criterio::IGUAL);
    $c->add(InsStockMovimiento::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
    $c->addTabla(InsStockMovimiento::GEN_TABLA);
    $c->addOrden('1', 'desc');
    $c->setCriterios();
    $p = new Paginador(10, 1);
    //$p = null;
    $ins_stock_movimientos_destino = $ins_insumo->getInsStockMovimientos($p, $c);
}

$cantidad_reservados_origen = $ins_insumo->getInsInsumoReservasActivasCantidadEnPanol($pan_panol_origen);
$cantidad_reservados_destino = $ins_insumo->getInsInsumoReservasActivasCantidadEnPanol($pan_panol_destino);
?>

<div class="tabs">
    <?php include "pdi_pedido_gestion_modal_top.php" ?>   
    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>
        <li><a href="#tab_comentarios"><?php Lang::_lang('Comentarios') ?></a></li>
        <li><a href="#tab_stock_origen"><?php Lang::_lang('Stock en') ?> <?php Gral::_echo($pan_panol_origen->getDescripcion()) ?></a></li>

        <?php if ($pan_panol_destino) { ?>
            <?php if ($pan_panol_origen->getId() != $pan_panol_destino->getId()) { ?>
                <li><a href="#tab_stock_destino"><?php Lang::_lang('Stock en') ?> <?php Gral::_echo($pan_panol_destino->getDescripcion()) ?></a></li>
            <?php } ?>
        <?php } ?>

        <?php if (count($pdi_pedido->getInsInsumoIdentificadosVinculados()) > 0) { ?>
            <li><a href="#tab_insumo_identificados"><?php Lang::_lang('Movs de Insumos Identificados') ?></a></li>
        <?php } ?>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par">
            <div class="label"><?php Lang::_lang('PdiUrgencia') ?></div>
            <div class="dato">
                <img src="imgs/icn_alerta_<?php Gral::_echo($pdi_pedido->getPdiUrgencia()->getCodigo()) ?>.png" width="13" title="<?php Lang::_lang('Urgencia: ') ?>" alt="urgencia" />       
                <?php Gral::_echo($pdi_pedido->getPdiUrgencia()->getDescripcion()) ?>
            </div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('PdiTipoOrigen') ?></div>
            <div class="dato">
                <img src='imgs/icn_<?php echo $pdi_pedido->getPdiTipoOrigen()->getCodigo() ?>.png' width='16' alt="<?php echo $pdi_pedido->getPdiTipoOrigen()->getCodigo() ?>" align='absmiddle' title="<?php Gral::_echo($pdi_pedido->getPdiOrigenTooltip()) ?>" />
                <?php Gral::_echo($pdi_pedido->getPdiTipoOrigen()->getDescripcion()) ?>
            </div>
        </div>

        <?php /* if ($pdi_pedido->getOpeOperarioId() != 'null') { ?>
          <div class="par">
          <div class="label"><?php Lang::_lang('Operario') ?></div>
          <div class="dato">
          <?php Gral::_echo($pdi_pedido->getOpeOperario()->getDescripcion()) ?>
          </div>
          </div>
          <?php } */ ?>

        <?php /* if ($pdi_pedido->getTalInsumoSolicitado()) { ?>
          <div class="par">
          <div class="label"><?php Lang::_lang('Coche') ?></div>
          <div class="dato">
          <?php Gral::_echo(($pdi_pedido->getTalInsumoSolicitado()) ? $pdi_pedido->getTalInsumoSolicitado()->getTalTareaResuelta()->getTalTareaAsignada()->getTalOrdenTrabajo()->getVehCoche()->getDescripcion() : '') ?>
          </div>
          </div>
          <?php } */ ?>

        <?php /* if ($pdi_pedido->getTalInsumoSolicitado()) { ?>
          <div class="par">
          <div class="label"><?php Lang::_lang('OT') ?></div>
          <div class="dato">
          <?php Gral::_echo(($pdi_pedido->getTalInsumoSolicitado()) ? $pdi_pedido->getTalInsumoSolicitado()->getTalTareaResuelta()->getTalTareaAsignada()->getTalOrdenTrabajo()->getCodigo() : '') ?>
          </div>
          </div>
          <?php } */ ?>

        <?php /* if ($pdi_pedido->getTalInsumoSolicitado()) { ?>
          <div class="par">
          <div class="label"><?php Lang::_lang('Accion') ?></div>
          <div class="dato">
          <?php Gral::_echo(($pdi_pedido->getTalInsumoSolicitado()) ? $pdi_pedido->getTalInsumoSolicitado()->getTalTareaResuelta()->getTalTareaAccion()->getDescripcion() : '') ?>
          </div>
          </div>
          <?php } */ ?>

        <?php /* if ($pdi_pedido->getTalInsumoSolicitado()) { ?>
          <div class="par">
          <div class="label"><?php Lang::_lang('Ubicacion') ?></div>
          <div class="dato">
          <?php Gral::_echo(($pdi_pedido->getTalInsumoSolicitado()) ? $pdi_pedido->getTalInsumoSolicitado()->getTalTareaResuelta()->getTalTareaBase()->getCodigo() : '') ?>
          </div>
          </div>
          <?php } */ ?>


        <div class="par">
            <div class="label"><?php Lang::_lang('Estado Actual') ?></div>
            <div class="dato">
                <img src='imgs/pdi_estado/<?php Gral::_echo($pdi_pedido->getPdiEstadoActual()->getPdiTipoEstado()->getCodigo()) ?>.png' width="13" align='absmiddle' />
                <?php Gral::_echo($pdi_pedido->getPdiEstadoActual()->getPdiTipoEstado()->getDescripcion()) ?>        	
            </div>
        </div>

        <?php /* if ($ins_insumo->getIdentificable()) { ?>
          <div class="par">
          <div class="label"><?php Lang::_lang('Insumos Identificados Vinculados') ?></div>
          <div class="dato">
          <?php foreach ($pdi_pedido->getInsInsumoIdentificadosVinculados() as $ins_insumo_identificado) { ?>
          <?php Gral::_echo($ins_insumo_identificado->getDescripcionLarga()) ?><br />
          <?php } ?>
          </div>
          </div>
          <?php } */ ?>

        <br /><br />
        <div class="titulo">
            <?php Lang::_lang('Historico de Estados del Pedido') ?></div>

        <table border="0" class="tabla-modal">
            <tr>
                <td class="adm_tbl_encabezado" width="50" align='center'><?php Lang::_lang('Actual') ?></td>
                <td class="adm_tbl_encabezado" width="140" align='center'><?php Lang::_lang('Fecha') ?></td>
                <td class="adm_tbl_encabezado" width="150" align='center'><?php Lang::_lang('Estado') ?></td>
                <td class="adm_tbl_encabezado" width="70" align='center'><?php Lang::_lang('Cantidad') ?></td>
                <td class="adm_tbl_encabezado" width="300" align='center'><?php Lang::_lang('Comentarios') ?></td>
                <td class="adm_tbl_encabezado" width="120" align='center'>&nbsp;</td>
            </tr>
            <?php
            $cont = 0;
            foreach ($pdi_estados as $pdi_estado) {
                $cont++;
                $strong = ($cont == 1) ? 'strong' : '';
                ?>
                <tr>
                    <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
                        <?php if ($pdi_estado->getActual()) { ?> 
                            <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/btn_estado_1.gif" width="16" alt="actual">
                        <?php } ?>
                    </td>
                    <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
                        <?php Gral::_echo(Gral::getFechaHoraToWeb($pdi_estado->getFechahora())) ?> hs.
                    </td>
                    <td class="adm_tbl_lineas <?php echo $strong ?>" align="left">
                        &nbsp;&nbsp;
                        <img src='imgs/pdi_estado/<?php Gral::_echo($pdi_estado->getPdiTipoEstado()->getCodigo()) ?>.png' width="10" align='absmiddle' />
                        &nbsp;
                        <?php Gral::_echo($pdi_estado->getPdiTipoEstado()->getDescripcion()) ?>
                    </td>
                    <td class="adm_tbl_lineas <?php echo $strong ?>" align='center'>
                        <?php Gral::_echo($pdi_estado->getCantidad()) ?>
                    </td>
                    <td class="adm_tbl_lineas <?php echo $strong ?>">
                        <span title="<?php Gral::_echo($pdi_estado->getObservacion()) ?>">
                            <?php Gral::_echo(substr($pdi_estado->getObservacion(), 0, 150)) ?> ...
                        </span>
                    </td>
                    <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
                        <?php if ($pdi_estado->getCreadoPor() != 'null') { ?>
                            <img src='imgs/icn_usuario.gif' width="15" align='absmiddle' alt="usuario" title="<?php Gral::_echo($pdi_estado->getCreadoPorDescripcion()) ?>" /> <?php Gral::_echo($pdi_estado->getCreadoPorDescripcion()) ?>
                        <?php } ?>
                    </td>
                </tr>
            <?php } ?>
        </table>
        <br />
    </div>

    <!-- Tab comentarios -->

    <div id="tab_comentarios" class="datos">
        <div class="titulo">
            <?php Lang::_lang('Comentarios del Pedido') ?>
        </div>    

        <table border="0" class="tabla-modal">
            <tr>
                <td class="adm_tbl_encabezado" width="140" align='center'><?php Lang::_lang('Fecha') ?></td>
                <td class="adm_tbl_encabezado" width="150" align='center'><?php Lang::_lang('Usuario') ?></td>
                <td class="adm_tbl_encabezado" width="500" align='center'><?php Lang::_lang('Comentarios') ?></td>
            </tr>
            <?php
            foreach ($pdi_comentarios as $pdi_comentario) {
                ?>
                <tr>
                    <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
                        <?php Gral::_echo(Gral::getFechaHoraToWeb($pdi_comentario->getCreado())) ?> hs.
                    </td>
                    <td class="adm_tbl_lineas <?php echo $strong ?>" align='center'>
                        <?php Gral::_echo($pdi_comentario->getCreadoPorDescripcion()) ?>
                    </td>
                    <td class="adm_tbl_lineas <?php echo $strong ?>">
                        <?php Gral::_echo(substr($pdi_comentario->getObservacion(), 0, 150)) ?> ...
                    </td>
                </tr>
            <?php } ?>
        </table>

    </div>	



    <!-- Tab Stock Actual en Origen -->
    <div id="tab_stock_origen" class="datos">

        <div class="titulo"><?php Lang::_lang('Stock Actual en') ?> <?php Gral::_echo($pan_panol_origen->getDescripcion()) ?></div>

        <table border="0" class="tabla-modal">
            <tr>
                <td class="adm_tbl_encabezado" width="160" align='center'><?php Lang::_lang('Insumo') ?></td>
                <td class="adm_tbl_encabezado" width="160" align='center'><?php Lang::_lang('Ultima Modificacion') ?></td>
                <td class="adm_tbl_encabezado" width="80" align='center'><?php Lang::_lang('Cantidad Real') ?></td>
                <td class="adm_tbl_encabezado" width="80" align='center'><?php Lang::_lang('Cantidad Comprometida') ?></td>
                <td class="adm_tbl_encabezado" width="80" align='center'><?php Lang::_lang('Cantidad Disponible') ?></td>
                <td class="adm_tbl_encabezado" width="80" align='center'><?php Lang::_lang('Stock Pasivo') ?></td>
                <td class="adm_tbl_encabezado" width="80" align='center'><?php Lang::_lang('Pto Min') ?></td>
                <td class="adm_tbl_encabezado" width="80" align='center'><?php Lang::_lang('Pto Ped') ?></td>
                <td class="adm_tbl_encabezado" width="80" align='center'><?php Lang::_lang('Pto Max') ?></td>
            </tr>
            <?php
            if ($ins_stock_resumen_origen) {
                ?>
                <tr>
                    <td class="adm_tbl_lineas strong" align="left">
                        <?php Gral::_echo($ins_insumo->getDescripcion()) ?>
                    </td>
                    <td class="adm_tbl_lineas strong" align="center">
                        <?php Gral::_echo(Gral::getFechaHoraToWeb($ins_stock_resumen_origen->getModificado())) ?> hs.
                    </td>
                    <td class="adm_tbl_lineas strong" align="center">
                        <?php Gral::_echo($ins_stock_resumen_origen->getCantidadReal()); ?>
                    </td>
                    <td class="adm_tbl_lineas strong" align="center">
                        <?php Gral::_echo($ins_stock_resumen_origen->getCantidadComprometida()); ?>
                    </td>
                    <td class="adm_tbl_lineas strong" align="center">
                        <?php Gral::_echo($ins_stock_resumen_origen->getCantidad()); ?>
                    </td>
                    <td class="adm_tbl_lineas strong" align="center">
                        <?php Gral::_echo($ins_stock_resumen_origen->getCantidadPasivo()) ?>
                    </td>
                    <td class="adm_tbl_lineas strong" align="center">
                        <?php Gral::_echo($arr_puntos_origen[insinsumo::PUNTO_MINIMO]) ?>
                    </td>
                    <td class="adm_tbl_lineas strong" align="center">
                        <?php Gral::_echo($arr_puntos_origen[insinsumo::PUNTO_PEDIDO]) ?>
                    </td>
                    <td class="adm_tbl_lineas strong" align="center">
                        <?php Gral::_echo($arr_puntos_origen[insinsumo::PUNTO_MAXIMO]) ?>
                    </td>
                </tr>
            <?php } ?>
        </table>
        <br />


        <div class="titulo"><?php Lang::_lang('Ultimos Movimientos') ?></div>

        <table border="0" class="tabla-modal">
            <tr>
                <td class="adm_tbl_lineas" width="40" align='center'></td>
                <td class="adm_tbl_lineas" width="150" align='center'></td>
                <td class="adm_tbl_encabezado" width="120" align='center' colspan="2"><?php Lang::_lang('Info del Movimiento') ?></td>
                <td class="adm_tbl_encabezado" width="120" align='center' colspan="3"><?php Lang::_lang('Historico al momento del Movimiento') ?></td>
                <td class="adm_tbl_lineas" width="120" align='center'></td>
                <td class="adm_tbl_lineas" width="200" align='center'></td>
                <td class="adm_tbl_lineas" width="80" align='center'></td>
                <td class="adm_tbl_lineas" width="80" align='center'></td>
            </tr>
            <tr>
                <td class="adm_tbl_encabezado" width="120" align='center'><?php Lang::_lang('Fecha') ?></td>
                <td class="adm_tbl_encabezado" width="200" align='center'><?php Lang::_lang('Tipo') ?></td>
                <td class="adm_tbl_encabezado" width="100" align='center' title="<?php Lang::_lang('Cant Activo') ?>"><?php Lang::_lang('Cant Act') ?></td>
                <td class="adm_tbl_encabezado" width="120" align='center' title="<?php Lang::_lang('Cant Pasivo') ?>"><?php Lang::_lang('Cant Pas') ?></td>
                <td class="adm_tbl_encabezado" width="120" align='center' title="<?php Lang::_lang('Cant Real') ?>"><?php Lang::_lang('Cant Real') ?></td>
                <td class="adm_tbl_encabezado" width="150" align='center' title="<?php Lang::_lang('Cant Comprometida') ?>"><?php Lang::_lang('Cant Comprometida') ?></td>
                <td class="adm_tbl_encabezado" width="120" align='center' title="<?php Lang::_lang('Cant Disponible') ?>"><?php Lang::_lang('Cant Disponible') ?></td>

                <td class="adm_tbl_encabezado" width="100" align='center'><?php Lang::_lang('Pedido') ?></td>
                <td class="adm_tbl_encabezado" width="100" align='center'><?php Lang::_lang('Origen') ?></td>
                <td class="adm_tbl_encabezado" width="120" align='center'><?php Lang::_lang('Usuario') ?></td>
                <td class="adm_tbl_encabezado" width="50" align='center'>&nbsp;</td>
            </tr>
            <?php
            foreach ($ins_stock_movimientos_origen as $ins_stock_movimiento) {
                $pdi_pedido_uno = $ins_stock_movimiento->getPdiPedido();
                $pdi_estado_uno = $pdi_pedido_uno->getPdiEstadoActual();
                ?>
                <tr>
                    <td class="adm_tbl_lineas" align="center" title="<?php Gral::_echo($ins_stock_movimiento->getId()) ?>">
                        &nbsp;
                        <?php Gral::_echo(Gral::getFechaHoraToWeb($ins_stock_movimiento->getCreado())) ?>
                    </td>
                    <td class="adm_tbl_lineas" align="left">
                        <strong><?php Gral::_echo($ins_stock_movimiento->getInsStockTipoMovimiento()->getDescripcion()) ?></strong>
                        <div class="comentario"><?php //Gral::_echo($ins_stock_movimiento->getObservacion())  ?></div>
                    </td>
                    <td class="adm_tbl_lineas" align="center">
                        <?php Gral::_echo($ins_stock_movimiento->getCantidad()) ?>
                    </td>
                    <td class="adm_tbl_lineas" align="center">
                        <?php Gral::_echo($ins_stock_movimiento->getCantidadPasivo()) ?>
                    </td>
                    <td class="adm_tbl_lineas" align="center">
                        <?php Gral::_echo($ins_stock_movimiento->getCantidadReal()); ?>
                    </td>
                    <td class="adm_tbl_lineas" align="center">
                        <?php Gral::_echo($ins_stock_movimiento->getCantidadComprometida()); ?>
                    </td>
                    <td class="adm_tbl_lineas" align="center">
                        <?php Gral::_echo($ins_stock_movimiento->getCantidadDisponible()); ?>
                    </td>
                    <td class="adm_tbl_lineas" align="center" title="<?php Gral::_echo(($pdi_estado_uno) ? $pdi_estado_uno->getObservacion() : '') ?>">
                        <?php Gral::_echo(($pdi_pedido_uno) ? $pdi_pedido_uno->getCodigo() : '') ?><br />
                        <strong><?php Gral::_echo(($pdi_estado_uno) ? $pdi_estado_uno->getPdiTipoEstado()->getDescripcion() : '') ?></strong>
                    </td>
                    <td class="adm_tbl_lineas" align="center">
                        <?php Gral::_echo($ins_stock_movimiento->getPdiPedido()->getPdiTipoOrigen()->getCodigo()) ?>
                    </td>
                    <td class="adm_tbl_lineas" align="center">
                        <?php Gral::_echo($ins_stock_movimiento->getCreadoPorDescripcion()) ?>
                    </td>
                    <td class="adm_tbl_lineas" align="center" title="<?php Gral::_echo($ins_stock_movimiento->getCodigo()) ?>">
                        <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/btn_estado_<?php Gral::_echo($ins_stock_movimiento->getEstado()) ?>.gif" width="16" alt="actual">
                    </td>
                </tr>
            <?php } ?>
        </table>
        <br />

    </div>    

    <?php if ($pan_panol_destino) { ?>
        <?php if ($pan_panol_origen->getId() != $pan_panol_destino->getId()) { ?>
            <!-- Tab Stock Actual en Destino -->
            <div id="tab_stock_destino" class="datos">

                <div class="titulo"><?php Lang::_lang('Stock Actual en') ?> <?php Gral::_echo($pan_panol_destino->getDescripcion()) ?></div>

                <table border="0" class="tabla-modal">
                    <tr>
                        <td class="adm_tbl_encabezado" width="160" align='center'><?php Lang::_lang('Insumo') ?></td>
                        <td class="adm_tbl_encabezado" width="160" align='center'><?php Lang::_lang('Ultima Modificacion') ?></td>
                        <td class="adm_tbl_encabezado" width="80" align='center'><?php Lang::_lang('Cantidad Real') ?></td>
                        <td class="adm_tbl_encabezado" width="80" align='center'><?php Lang::_lang('Cantidad Comprometida') ?></td>
                        <td class="adm_tbl_encabezado" width="80" align='center'><?php Lang::_lang('Cantidad Disponible') ?></td>
                        <td class="adm_tbl_encabezado" width="80" align='center'><?php Lang::_lang('Stock Pasivo') ?></td>
                        <td class="adm_tbl_encabezado" width="80" align='center'><?php Lang::_lang('Pto Min') ?></td>
                        <td class="adm_tbl_encabezado" width="80" align='center'><?php Lang::_lang('Pto Ped') ?></td>
                        <td class="adm_tbl_encabezado" width="80" align='center'><?php Lang::_lang('Pto Max') ?></td>
                    </tr>
                    <?php
                    if ($ins_stock_resumen_destino) {
                        ?>
                        <tr>
                            <td class="adm_tbl_lineas strong" align="left">
                                <?php Gral::_echo($ins_insumo->getDescripcion()) ?>
                            </td>
                            <td class="adm_tbl_lineas strong" align="center">
                                <?php Gral::_echo(Gral::getFechaHoraToWeb($ins_stock_resumen_destino->getModificado())) ?> hs.
                            </td>
                            <td class="adm_tbl_lineas strong" align="center">
                                <?php Gral::_echo($ins_stock_resumen_destino->getCantidadReal()); ?>
                            </td>
                            <td class="adm_tbl_lineas strong" align="center">
                                <?php Gral::_echo($ins_stock_resumen_destino->getCantidadComprometida()); ?>
                            </td>
                            <td class="adm_tbl_lineas strong" align="center">
                                <?php Gral::_echo($ins_stock_resumen_destino->getCantidad()); ?>
                            </td>
                            <td class="adm_tbl_lineas strong" align="center">
                                <?php Gral::_echo($ins_stock_resumen_destino->getCantidadPasivo()) ?>
                            </td>
                            <td class="adm_tbl_lineas strong" align="center">
                                <?php Gral::_echo($arr_puntos_destino[InsInsumo::PUNTO_MINIMO]) ?>
                            </td>
                            <td class="adm_tbl_lineas strong" align="center">
                                <?php Gral::_echo($arr_puntos_destino[InsInsumo::PUNTO_PEDIDO]) ?>
                            </td>
                            <td class="adm_tbl_lineas strong" align="center">
                                <?php Gral::_echo($arr_puntos_destino[InsInsumo::PUNTO_MAXIMO]) ?>
                            </td>
                        </tr>
                    <?php } ?>
                </table>
                <br />


                <div class="titulo"><?php Lang::_lang('Ultimos Movimientos') ?></div>

                <table border="0" class="tabla-modal">
                    <tr>
                        <td class="adm_tbl_lineas" width="40" align='center'></td>
                        <td class="adm_tbl_lineas" width="120" align='center'></td>
                        <td class="adm_tbl_encabezado" width="120" align='center' colspan="2"><?php Lang::_lang('Info del Movimiento') ?></td>
                        <td class="adm_tbl_encabezado" width="120" align='center' colspan="3"><?php Lang::_lang('Historico al momento del Movimiento') ?></td>
                        <td class="adm_tbl_lineas" width="120" align='center'></td>
                        <td class="adm_tbl_lineas" width="200" align='center'></td>
                        <td class="adm_tbl_lineas" width="80" align='center'></td>
                        <td class="adm_tbl_lineas" width="80" align='center'></td>
                    </tr>
                    <tr>
                        <td class="adm_tbl_encabezado" width="160" align='center'><?php Lang::_lang('Fecha') ?></td>
                        <td class="adm_tbl_encabezado" width="100" align='center'><?php Lang::_lang('Tipo') ?></td>
                        <td class="adm_tbl_encabezado" width="110" align='center'><?php Lang::_lang('Cant Activo') ?></td>
                        <td class="adm_tbl_encabezado" width="120" align='center'><?php Lang::_lang('Cant Pasivo') ?></td>
                        <td class="adm_tbl_encabezado" width="120" align='center'><?php Lang::_lang('Cant Real') ?></td>
                        <td class="adm_tbl_encabezado" width="150" align='center'><?php Lang::_lang('Cant Comprometida') ?></td>
                        <td class="adm_tbl_encabezado" width="120" align='center'><?php Lang::_lang('Cant Disponible') ?></td>
                        <td class="adm_tbl_encabezado" width="100" align='center'><?php Lang::_lang('Pedido') ?></td>
                        <td class="adm_tbl_encabezado" width="100" align='center'><?php Lang::_lang('Origen') ?></td>
                        <td class="adm_tbl_encabezado" width="120" align='center'><?php Lang::_lang('Usuario') ?></td>
                        <td class="adm_tbl_encabezado" width="50" align='center'>&nbsp;</td>
                    </tr>
                    <?php
                    foreach ($ins_stock_movimientos_destino as $ins_stock_movimiento) {
                        $pdi_pedido_uno = $ins_stock_movimiento->getPdiPedido();
                        $pdi_estado_uno = $pdi_pedido_uno->getPdiEstadoActual();
                        ?>
                        <tr>
                            <td class="adm_tbl_lineas" align="left">
                                &nbsp;
                                <?php Gral::_echo(Gral::getFechaHoraToWeb($ins_stock_movimiento->getCreado())) ?>
                            </td>
                            <td class="adm_tbl_lineas" align="center">
                                <strong><?php Gral::_echo($ins_stock_movimiento->getInsStockTipoMovimiento()->getDescripcion()) ?></strong>
                                <div class="comentario"><?php //Gral::_echo($ins_stock_movimiento->getObservacion())  ?></div>
                            </td>
                            <td class="adm_tbl_lineas" align="center">
                                <?php Gral::_echo($ins_stock_movimiento->getCantidad()) ?>
                            </td>
                            <td class="adm_tbl_lineas" align="center">
                                <?php Gral::_echo($ins_stock_movimiento->getCantidadPasivo()) ?>
                            </td>
                            <td class="adm_tbl_lineas" align="center">
                                <?php Gral::_echo($ins_stock_movimiento->getCantidadReal()); ?>
                            </td>
                            <td class="adm_tbl_lineas" align="center">
                                <?php Gral::_echo($ins_stock_movimiento->getCantidadComprometida()); ?>
                            </td>
                            <td class="adm_tbl_lineas" align="center">
                                <?php Gral::_echo($ins_stock_movimiento->getCantidadDisponible()); ?>
                            </td>
                            <td class="adm_tbl_lineas" align="center">
                                <?php Gral::_echo(($pdi_pedido_uno) ? $pdi_pedido_uno->getCodigo() : '') ?><br />
                                <strong><?php Gral::_echo(($pdi_estado_uno) ? $pdi_estado_uno->getPdiTipoEstado()->getDescripcion() : '') ?></strong>
                            </td>
                            <td class="adm_tbl_lineas" align="center">
                                <?php Gral::_echo($ins_stock_movimiento->getPdiPedido()->getPdiTipoOrigen()->getCodigo()) ?>
                            </td>
                            <td class="adm_tbl_lineas" align="center">
                                <?php Gral::_echo($ins_stock_movimiento->getCreadoPorDescripcion()) ?>
                            </td>
                            <td class="adm_tbl_lineas" align="center">
                                <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/btn_estado_<?php Gral::_echo($ins_stock_movimiento->getEstado()) ?>.gif" width="16" alt="actual">
                            </td>
                        </tr>
                    <?php } ?>
                </table>
                <br />

            </div>
        <?php } ?>   
    <?php } ?>   

    <?php if (count($pdi_pedido->getInsInsumoIdentificadosVinculados()) > 0) { ?>
        <!-- Tab de Insumos Identificados Vinculados -->
        <div id="tab_insumo_identificados" class="datos">

            <div class="titulo"><?php Lang::_lang('Insumos Identificados Vinculados') ?></div>

            <table border="0" class="tabla-modal">
                <tr>
                    <td class="adm_tbl_encabezado" width="120" align='center'><?php Lang::_lang('Fecha Hora') ?></td>
                    <td class="adm_tbl_encabezado" width="180" align='center'><?php Lang::_lang('Insumo') ?></td>
                    <td class="adm_tbl_encabezado" width="80" align='center'><?php Lang::_lang('Estado') ?></td>
                    <td class="adm_tbl_encabezado" width="80" align='center'><?php Lang::_lang('Tipo') ?></td>
                    <td class="adm_tbl_encabezado" width="200" align='center'><?php Lang::_lang('Movimiento') ?></td>
                    <td class="adm_tbl_encabezado" width="120" align='center'><?php Lang::_lang('Usuario') ?></td>
                </tr>
                <?php
                foreach ($pdi_pedido->getInsInsumoIdentificadoMovimientos() as $ins_insumo_identificado_movimiento) {
                    ?>
                    <tr>
                        <td class="adm_tbl_lineas" align="left">
                            <?php Gral::_echo(Gral::getFechaHoraToWeb($ins_insumo_identificado_movimiento->getCreado())) ?> hs.
                        </td>
                        <td class="adm_tbl_lineas" align="center">
                            <?php Gral::_echo($ins_insumo_identificado_movimiento->getInsInsumoIdentificado()->getDescripcionLarga()) ?>
                        </td>
                        <td class="adm_tbl_lineas" align="center">
                            <?php Gral::_echo($ins_insumo_identificado_movimiento->getInsInsumoIdentificadoTipoEstado()->getDescripcion()) ?>
                        </td>
                        <td class="adm_tbl_lineas" align="center">
                            <?php Gral::_echo($ins_insumo_identificado_movimiento->getInsTipoMovimiento()->getDescripcion()) ?>
                        </td>
                        <td class="adm_tbl_lineas" align="center">
                            <?php Gral::_echo($ins_insumo_identificado_movimiento->getDescripcion()) ?>
                        </td>
                        <td class="adm_tbl_lineas" align="center">
                            <?php Gral::_echo($ins_insumo_identificado_movimiento->getCreadoPorDescripcion()) ?>
                        </td>
                    </tr>
                <?php } ?>
            </table>

        </div>

    <?php } ?>   

</div>




