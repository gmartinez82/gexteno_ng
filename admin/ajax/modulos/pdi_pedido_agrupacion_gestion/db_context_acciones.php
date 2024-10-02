<?php
include '_autoload.php';
$user = UsUsuario::autenticado();

$id = Gral::getVars(Gral::VARS_GET, 'id', 0, Gral::TIPO_INTEGER);

$pdi_pedido_agrupacion = PdiPedidoAgrupacion::getOxId($id);

$pan_panol_origen = $pdi_pedido_agrupacion->getPanPanolOrigenObj();
$pan_panol_destino = $pdi_pedido_agrupacion->getPanPanolDestinoObj();
$pdi_pedido_agrupacion_tipo_estado = $pdi_pedido_agrupacion->getPdiPedidoAgrupacionTipoEstado();

//armar un metodo para estos
$cantidad_disponible_para_aceptar = $pdi_pedido_agrupacion->getCantidadDisponibleParaAceptar();
$cantidad_disponible_para_despachar = $pdi_pedido_agrupacion->getCantidadDisponibleParaDespachar();
$cantidad_disponible_para_recibir = $pdi_pedido_agrupacion->getCantidadDisponibleParaRecibir();
$cantidad_disponible_para_rechazar = $pdi_pedido_agrupacion->getCantidadDisponibleParaRechazar();

// panoles habilitados para el usuario por credencial
$panol_ids_habilitados_array = PanPanol::getArrayPanPanolIdsXCredencial();
?>

<div class="datos" pdi_pedido_agrupacion_id="<?php Gral::_echo($pdi_pedido_agrupacion->getId()) ?>">
    <div class="titulo">
        <?php Lang::_lang('PdiPedidoAgrupacion') ?>: <strong><?php Gral::_echo($pdi_pedido_agrupacion->getCodigo()) ?> </strong><br/>
        <strong><?php Gral::_echo($pan_panol_origen->getDescripcion()) ?> -> <?php Gral::_echo($pan_panol_destino->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('PDI_PEDIDO_AGRUPACION_GESTION_ACCION_ACCIONES_ANULAR')) { ?>
        <?php if ($pdi_pedido_agrupacion_tipo_estado->getActivo()) { ?>
            <?php if ($cantidad_disponible_para_rechazar > 0) { ?>
                <div class="uno anular">
                    <img class="icono" src="imgs/btn_anular.png" width="16" align="absmiddle" title="" />
                    <?php Lang::_lang('Anular') ?>  (<?php echo $cantidad_disponible_para_rechazar; ?>)
                </div>
            <?php } ?>
        <?php } else { ?>
            <div class="uno anular">
                <img class="icono" src="imgs/btn_anular.png" width="16" align="absmiddle" title="" />
                <?php Lang::_lang('Anular') ?> 
            </div>
        <?php } ?>
    <?php } ?>

    <?php if (UsCredencial::getEsAcreditado('PDI_PEDIDO_AGRUPACION_GESTION_ACCION_ACCIONES_EDITAR')) { ?>
        <?php if ($pdi_pedido_agrupacion_tipo_estado->getCodigo() == PdiPedidoAgrupacionTipoEstado::TIPO_ESTADO_GENERADO) { ?>
            <div class="uno editar">
                <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
                <?php Lang::_lang('Editar') ?>
            </div>
        <?php } ?>
    <?php } ?>

    <?php if (UsCredencial::getEsAcreditado('PDI_PEDIDO_AGRUPACION_GESTION_ACCION_ACCIONES_ACEPTAR')) { ?>
        <?php if ($pdi_pedido_agrupacion_tipo_estado->getCodigo() == PdiPedidoAgrupacionTipoEstado::TIPO_ESTADO_APROBADO) { ?>
            <?php if (in_array($pdi_pedido_agrupacion->getPanPanolDestino(), $panol_ids_habilitados_array)) { ?>
                <?php if ($cantidad_disponible_para_aceptar > 0) { ?>
                    <div class="uno aceptar-masivo">
                        <img class="icono" src="imgs/btn_aprobar.png" width="16" align="absmiddle" title="" />
                        <?php Lang::_lang('Aceptar') ?> (<?php echo $cantidad_disponible_para_aceptar; ?>)
                    </div>
                <?php } ?>
            <?php } ?>
        <?php } ?>
    <?php } ?>

    <?php if (UsCredencial::getEsAcreditado('PDI_PEDIDO_AGRUPACION_GESTION_ACCION_ACCIONES_DESPACHAR')) { ?>
        <?php if ($pdi_pedido_agrupacion_tipo_estado->getCodigo() == PdiPedidoAgrupacionTipoEstado::TIPO_ESTADO_APROBADO) { ?>
            <?php if (in_array($pdi_pedido_agrupacion->getPanPanolDestino(), $panol_ids_habilitados_array)) { ?>
                <?php if ($cantidad_disponible_para_despachar > 0) { ?>
                    <div class="uno despachar-masivo">
                        <img class="icono" src="imgs/btn_despachar.png" width="16" align="absmiddle" title="" />
                        <?php Lang::_lang('Despachar') ?> (<?php echo $cantidad_disponible_para_despachar; ?>)
                    </div>
                <?php } ?>
            <?php } ?>
        <?php } ?>
    <?php } ?>

    <?php if (UsCredencial::getEsAcreditado('PDI_PEDIDO_AGRUPACION_GESTION_ACCION_ACCIONES_RECIBIR')) { ?>
        <?php if ($pdi_pedido_agrupacion_tipo_estado->getCodigo() == PdiPedidoAgrupacionTipoEstado::TIPO_ESTADO_APROBADO) { ?>
            <?php if (in_array($pdi_pedido_agrupacion->getPanPanolOrigen(), $panol_ids_habilitados_array)) { ?>
                <?php if ($cantidad_disponible_para_recibir > 0) { ?>
                    <div class="uno recibir-masivo">
                        <img class="icono" src="imgs/btn_recibir.png" width="16" align="absmiddle" title="" />
                        <?php Lang::_lang('Recibir') ?> (<?php echo $cantidad_disponible_para_recibir; ?>)
                    </div>
                <?php } ?>
            <?php } ?>
        <?php } ?>
    <?php } ?>

    <br />

</div>