<?php
/**
 * @modificado_por Esteban Martinez
 * @modificado 27/05/2017
 * @modificado 22/06/2017
 */
include '_autoload.php';
$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$clase = Gral::getVars(2, 'clase');
$pdi_pedido = PdiPedido::getOxId($id);
$pdi_estado_actual = $pdi_pedido->getPdiEstadoActual();
$pdi_tipo_origen = $pdi_pedido->getPdiTipoOrigen();

$pdi_tipo_estado = $pdi_estado_actual->getPdiTipoEstado();
$pdi_tipo_estado_codigo = $pdi_tipo_estado->getCodigo();

$ver_boton_aceptar = false;
$ver_boton_redirigir = false;
$ver_boton_despachar = false;
$ver_boton_recibir = false;
$ver_boton_rechazar = false;
$ver_boton_rechazar_por_erroneo = false;
$ver_boton_entregar = false;
$ver_boton_generar_pde = false;

// panoles habilitados para el usuario por credencial
$panol_ids_habilitados_array = PanPanol::getArrayPanPanolIdsXCredencial();
//Gral::prr($panol_ids_habilitados_array);
//Gral::prr($pdi_estado_actual->getPdiTipoEstado()->getCodigo());
//echo "el sistema se está actualizando, en breve volverán a visualizarse las opciones. Disculpe las molestias ocasionadas.";
//exit;

if (!$pdi_tipo_estado->getTerminal()) {
    switch ($pdi_tipo_origen->getCodigo()) {
        case PdiTipoOrigen::TIPO_ORIGEN_PANOL:

            if (in_array($pdi_pedido->getPanPanolDestino(), $panol_ids_habilitados_array)) {
                // SOLICITADO
                //if($pdi_estado_actual->getPdiTipoEstado()->getCodigo() == PdiTipoEstado::TIPO_ESTADO_SOLICITADO)
                if ($pdi_tipo_estado_codigo == PdiTipoEstado::TIPO_ESTADO_SOLICITADO) {
                    $ver_boton_aceptar = true;
                    $ver_boton_redirigir = true;
                    $ver_boton_rechazar = true;
                    $ver_boton_rechazar_por_erroneo = true;
                }

                // REDIRIGIDO
                if ($pdi_tipo_estado_codigo == PdiTipoEstado::TIPO_ESTADO_REDIRIGIDO) {
                    $ver_boton_aceptar = true;
                    $ver_boton_redirigir = true;
                    $ver_boton_rechazar = true;
                    $ver_boton_rechazar_por_erroneo = true;
                }

                if ($pdi_tipo_estado_codigo == PdiTipoEstado::TIPO_ESTADO_ACEPTADO) {
                    $ver_boton_despachar = true;
                    $ver_boton_rechazar = true;
                    $ver_boton_rechazar_por_erroneo = true;
                    $ver_boton_redirigir = false;
                }

                // RECHAZADO
                if ($pdi_tipo_estado_codigo == PdiTipoEstado::TIPO_ESTADO_RECHAZADO) {
                    
                }

                if ($pdi_tipo_estado_codigo == PdiTipoEstado::TIPO_ESTADO_RECHAZADO_ERRONEO) {
                    //$ver_boton_redirigir = true;
                }
            }

            //el q genera
            if (in_array($pdi_pedido->getPanPanolOrigen(), $panol_ids_habilitados_array)) {
                // DESPACHADO
                if ($pdi_tipo_estado_codigo == PdiTipoEstado::TIPO_ESTADO_DESPACHADO) {
                    $ver_boton_recibir = true;
                }
                // RECHAZADO
                if ($pdi_tipo_estado_codigo == PdiTipoEstado::TIPO_ESTADO_RECHAZADO) {
                    //$ver_boton_redirigir = true;
                }
            }
            break;
        case PdiTipoOrigen::TIPO_ORIGEN_OPERARIO:
            // SOLICITADO
            if ($pdi_estado_actual->getPdiTipoEstado()->getCodigo() == PdiTipoEstado::TIPO_ESTADO_SOLICITADO) {
                $ver_boton_entregar = true;
                $ver_boton_rechazar = true;
            }
            break;
        case PdiTipoOrigen::TIPO_ORIGEN_PROCESO:
            $ver_boton_redirigir = true;
            //$ver_boton_rechazar = true;
            $ver_boton_generar_pde = true;
            $ver_boton_recibir = true;
            break;
    }
} else {
    switch ($pdi_tipo_origen->getCodigo()) {
        case PdiTipoOrigen::TIPO_ORIGEN_ENTREGA_OPERARIO:
            // CONSUMIDO
            if ($pdi_estado_actual->getPdiTipoEstado()->getCodigo() == PdiTipoEstado::TIPO_ESTADO_CONSUMIDO) {
                $ver_boton_cancelar_consumo = true;
            }
            break;
    }
}
?>

<div class="datos" pedido_id="<?php Gral::_echo($pdi_pedido->getId()) ?>">
    <div class="titulo">
        <div class="par">
            <?php Lang::_lang('Solicita') ?>: 
            <strong><?php Gral::_echo($pdi_pedido->getPanPanolOrigenObj()->getDescripcion()) ?></strong>
        </div>
        <div class="par">
            <?php Lang::_lang('Solicita a') ?>: 
            <strong><?php Gral::_echo($pdi_pedido->getPanPanolDestinoObj()->getDescripcion()) ?></strong>
        </div>
        <div class="par">
            <?php Lang::_lang('PdiPedido') ?>: 
            <strong>#<?php Gral::_echo($pdi_pedido->getId()) ?></strong>
        </div>
        <div class="par">
            <?php Lang::_lang('InsInsumo') ?>: 
            <strong><?php Gral::_echo($pdi_pedido->getInsInsumo()->getDescripcion()) ?></strong>
        </div>
    </div>

    <?php if ($ver_boton_aceptar): ?>
        <div class="uno aceptar">
            <img class="icono" src="imgs/btn_aprobar.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Aceptar') ?> <?php Lang::_lang('PdiPedido') ?>
        </div>
    <?php endif; ?>

    <?php if ($ver_boton_redirigir && false): ?>
        <div class="uno redirigir">
            <img class="icono" src="imgs/btn_redireccionar.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Redirigir') ?> <?php Lang::_lang('PdiPedido') ?>
        </div>
    <?php endif; ?>

    <?php if ($ver_boton_despachar): ?>
        <div class="uno despachar">
            <img class="icono" src="imgs/btn_despachar.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Despachar') ?> <?php Lang::_lang('PdiPedido') ?>
        </div>
    <?php endif; ?>

    <?php if ($ver_boton_recibir): ?>
        <div class="uno recibir">
            <img class="icono" src="imgs/btn_recibir.png" width="16" align="absmiddle" />
            <?php Lang::_lang('Recibir') ?> <?php Lang::_lang('PdiPedido') ?>
        </div>
    <?php endif; ?>

    <?php if ($ver_boton_rechazar): ?>
        <div class="uno rechazar">
            <img class="icono" src="imgs/btn_rechazar.png" width="16" align="absmiddle" />
            <?php Lang::_lang('Rechazar') ?> <?php Lang::_lang('PdiPedido') ?>
        </div>
    <?php endif; ?>

    <?php if ($ver_boton_rechazar_por_erroneo && false): ?>
        <div class="uno rechazar-por-erroneo">
            <img class="icono" src="imgs/btn_publicado_0.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Rechazar por Erroneo') ?> <?php Lang::_lang('PdiPedido') ?>
        </div>
    <?php endif; ?>

    <?php if ($ver_boton_entregar): ?>
        <div class="uno entregar">
            <img class="icono" src="imgs/btn_operario.gif" width="16" align="absmiddle" />
            <?php Lang::_lang('Entregar a Operario') ?>
        </div>
    <?php endif; ?>

    <?php if ($ver_boton_generar_pde): ?>
        <div class="uno generar-pde">
            <img class="icono" src="imgs/btn_despachar.png" width="16" align="absmiddle" />
            <?php Lang::_lang('Generar Solicitud de Compra') ?>
        </div>
    <?php endif; ?>

    <?php if (UsCredencial::getEsAcreditado('PDI_PEDIDO_GESTION_ACCIONES_CANCELAR')): ?>
        <?php if ($ver_boton_cancelar_consumo): ?>
            <?php if ($pdi_pedido->getEsInsumoActualmenteImputado()): ?>
                <div class="uno cancelar-consumo">
                    <img class="icono" src="imgs/btn_rechazar.png" width="16" align="absmiddle" />
                    <?php Lang::_lang('Cancelar Consumo') ?>
                </div>
            <?php else: ?>
                <div class="uno">
                    <img class="icono" src="imgs/btn_rechazar.png" width="16" align="absmiddle" />
                    <?php Lang::_lang('No se puede cancelar ya que existe otro insumo imputado actualmente') ?>
                </div>
            <?php endif; ?>
        <?php endif; ?>
    <?php endif; ?>


    <div class="uno agregar-comentario">
        <img class="icono" src="imgs/btn_nota.gif" width="16" align="absmiddle" />
        <?php Lang::_lang('Agregar Comentario') ?>
    </div>

</div>