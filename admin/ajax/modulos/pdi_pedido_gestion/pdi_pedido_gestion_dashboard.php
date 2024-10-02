<?php
$cantidad_dias_desde = -5;

$cantidad_pedido_solicitado_al_usuario  = count(PdiPedido::getPdiPedidoConEstadoSolicitado("destino"));
$cantidad_pedido_solicitado_del_usuario = count(PdiPedido::getPdiPedidoConEstadoSolicitado("origen"));

$cantidad_pedido_aceptado_al_usuario    = count(PdiPedido::getPdiPedidoConEstadoAceptado("origen"));
$cantidad_pedido_aceptado_del_usuario   = count(PdiPedido::getPdiPedidoConEstadoAceptado("destino"));

$cantidad_pedido_despachado_al_usuario  = count(PdiPedido::getPdiPedidoConEstadoDespachado("origen"));
$cantidad_pedido_despachado_del_usuario = count(PdiPedido::getPdiPedidoConEstadoDespachado("destino"));

$cantidad_pedido_rechazado_al_usuario   = count(PdiPedido::getPdiPedidoConEstadoRechazado("origen", $cantidad_dias_desde));
$cantidad_pedido_rechazado_del_usuario  = count(PdiPedido::getPdiPedidoConEstadoRechazado("destino", $cantidad_dias_desde));

$cantidad_pedido_recibido_al_usuario    = count(PdiPedido::getPdiPedidoConEstadoRecibido("destino", $cantidad_dias_desde));
$cantidad_pedido_recibido_del_usuario   = count(PdiPedido::getPdiPedidoConEstadoRecibido("origen", $cantidad_dias_desde));


//$cantidad_de_ventas_perdidas = 0;
?>

<div class="dashboard-top-gestion pdi_pedido">
    
    <div class="dashboard-top-titulo">Dashboard - Estado General de Pedidos Internos</div>
    <div class="dashboard-top-subtitulo">A continuación se puede observar un resumen de información sobre el estado actual y reciente de los pedidos de interés</div>
    
    <!-- Columna Col 1 -->
    <div class="dashboard-top-col c1 pdi_pedido_<?php echo PdiTipoEstado::TIPO_ESTADO_SOLICITADO; ?> celeste">

        <div class="dashboard-top-titulo">
            Solicitados
        </div>
        
        <!-- Bloque Blq 1 -->
        <div class="dashboard-top-bloque blq1 pdi_pedido_<?php echo PdiTipoEstado::TIPO_ESTADO_SOLICITADO; ?>_al_usuario">
            <div class="dashboard-top-label">
                A mí:
            </div>
            <div class="dashboard-top-dato <?php echo ($cantidad_pedido_solicitado_al_usuario > 0) ? 'mayorcero' : 'cero' ?>">
                <?php Gral::_echo(($cantidad_pedido_solicitado_al_usuario > 0) ? $cantidad_pedido_solicitado_al_usuario : '-'); ?>
            </div>        
        </div>
        
        <!-- Bloque Blq 2 -->
        <div class="dashboard-top-bloque blq2 pdi_pedido_<?php echo PdiTipoEstado::TIPO_ESTADO_SOLICITADO; ?>_del_usuario">
            <div class="dashboard-top-label">
                Solicité:
            </div>
            <div class="dashboard-top-dato <?php echo ($cantidad_pedido_solicitado_del_usuario > 0) ? 'mayorcero' : 'cero' ?>">
                <?php Gral::_echo(($cantidad_pedido_solicitado_del_usuario > 0) ? $cantidad_pedido_solicitado_del_usuario : '-'); ?>
            </div>        
        </div>
        
    </div>
    
    <!-- Columna Col 2 -->
    <div class="dashboard-top-col c2 pdi_pedido_<?php echo PdiTipoEstado::TIPO_ESTADO_ACEPTADO; ?> verde-agua">
        <div class="dashboard-top-titulo">
            Aceptados
        </div>
        <!-- Bloque Blq 1 -->
        <div class="dashboard-top-bloque blq1 pdi_pedido_<?php echo PdiTipoEstado::TIPO_ESTADO_ACEPTADO; ?>_al_usuario">
            <div class="dashboard-top-label">
                A mí:
            </div>
            <div class="dashboard-top-dato <?php echo ($cantidad_pedido_aceptado_al_usuario > 0) ? 'mayorcero' : 'cero' ?>">
                <?php Gral::_echo(($cantidad_pedido_aceptado_al_usuario > 0) ? $cantidad_pedido_aceptado_al_usuario : '-'); ?>
            </div>        
        </div>
        <!-- Bloque Blq 2 -->
        <div class="dashboard-top-bloque blq2 pdi_pedido_<?php echo PdiTipoEstado::TIPO_ESTADO_ACEPTADO; ?>_del_usuario">
            <div class="dashboard-top-label">
                Acepté:
            </div>
            <div class="dashboard-top-dato <?php echo ($cantidad_pedido_aceptado_del_usuario > 0) ? 'mayorcero' : 'cero' ?>">
                <?php Gral::_echo(($cantidad_pedido_aceptado_del_usuario > 0) ? $cantidad_pedido_aceptado_del_usuario : '-'); ?>
            </div>        
        </div>
    </div>
    
    <!-- Columna Col 3 -->
    <div class="dashboard-top-col c3 pdi_pedido_<?php echo PdiTipoEstado::TIPO_ESTADO_DESPACHADO; ?> amarillo">

        <div class="dashboard-top-titulo">
            Despachados
        </div>
        <!-- Bloque Blq 1 -->
        <div class="dashboard-top-bloque blq1 pdi_pedido_<?php echo PdiTipoEstado::TIPO_ESTADO_DESPACHADO; ?>_al_usuario">
            <div class="dashboard-top-label">
                A mí:
            </div>
            <div class="dashboard-top-dato <?php echo ($cantidad_pedido_despachado_al_usuario > 0) ? 'mayorcero' : 'cero' ?>">
                <?php Gral::_echo(($cantidad_pedido_despachado_al_usuario > 0) ? $cantidad_pedido_despachado_al_usuario : '-'); ?>
            </div>        
        </div>
        <!-- Bloque Blq 2 -->
        <div class="dashboard-top-bloque blq1 pdi_pedido_<?php echo PdiTipoEstado::TIPO_ESTADO_DESPACHADO; ?>_al_usuario">
            <div class="dashboard-top-label">
                Despaché:
            </div>
            <div class="dashboard-top-dato <?php echo ($cantidad_pedido_despachado_del_usuario > 0) ? 'mayorcero' : 'cero' ?>">
                <?php Gral::_echo(($cantidad_pedido_despachado_del_usuario > 0) ? $cantidad_pedido_despachado_del_usuario : '-'); ?>
            </div>        
        </div>

    </div>
    
    
    <!-- Columna Col 4 -->
    <div class="dashboard-top-col c4 pdi_pedido_<?php echo PdiTipoEstado::TIPO_ESTADO_RECHAZADO; ?> rojo">

        <div class="dashboard-top-titulo">
            Rechazados (ult <?php Gral::_echo(abs($cantidad_dias_desde)); ?> dias)
        </div>
        <!-- Bloque Blq 1 -->
        <div class="dashboard-top-bloque blq1 pdi_pedido_<?php echo PdiTipoEstado::TIPO_ESTADO_RECHAZADO; ?>_al_usuario">
            <div class="dashboard-top-label">
                A mí:
            </div>
            <div class="dashboard-top-dato <?php echo ($cantidad_pedido_rechazado_al_usuario > 0) ? 'mayorcero' : 'cero' ?>">
                <?php Gral::_echo(($cantidad_pedido_rechazado_al_usuario > 0) ? $cantidad_pedido_rechazado_al_usuario : '-'); ?>
            </div>        
        </div>
        <!-- Bloque Blq 2 -->
        <div class="dashboard-top-bloque blq1 pdi_pedido_<?php echo PdiTipoEstado::TIPO_ESTADO_RECHAZADO; ?>_al_usuario">
            <div class="dashboard-top-label">
                Rechacé:
            </div>
            <div class="dashboard-top-dato <?php echo ($cantidad_pedido_rechazado_del_usuario > 0) ? 'mayorcero' : 'cero' ?>">
                <?php Gral::_echo(($cantidad_pedido_rechazado_del_usuario > 0) ? $cantidad_pedido_rechazado_del_usuario : '-'); ?>
            </div>        
        </div>

    </div>


    <!-- Columna Col 5 -->
    <div class="dashboard-top-col c5 pdi_pedido_<?php echo PdiTipoEstado::TIPO_ESTADO_RECIBIDO; ?> verde">

        <div class="dashboard-top-titulo">
            Recibidos (ult <?php Gral::_echo(abs($cantidad_dias_desde)); ?> dias)
        </div>
        <!-- Bloque Blq 1 -->
        <div class="dashboard-top-bloque blq1 pdi_pedido_<?php echo PdiTipoEstado::TIPO_ESTADO_RECIBIDO; ?>_al_usuario">
            <div class="dashboard-top-label">
                De mí:
            </div>
            <div class="dashboard-top-dato <?php echo ($cantidad_pedido_recibido_al_usuario > 0) ? 'mayorcero' : 'cero' ?>">
                <?php Gral::_echo(($cantidad_pedido_recibido_al_usuario > 0) ? $cantidad_pedido_recibido_al_usuario : '-'); ?>
            </div>        
        </div>
        <!-- Bloque Blq 2 -->
        <div class="dashboard-top-bloque blq1 pdi_pedido_<?php echo PdiTipoEstado::TIPO_ESTADO_RECIBIDO; ?>_al_usuario">
            <div class="dashboard-top-label">
                Recibí:
            </div>
            <div class="dashboard-top-dato <?php echo ($cantidad_pedido_recibido_del_usuario > 0) ? 'mayorcero' : 'cero' ?>">
                <?php Gral::_echo(($cantidad_pedido_recibido_del_usuario > 0) ? $cantidad_pedido_recibido_del_usuario : '-'); ?>
            </div>
        </div>
    
    </div>
    
</div>