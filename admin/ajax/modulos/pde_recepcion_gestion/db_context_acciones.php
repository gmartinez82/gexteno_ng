<?php
include '_autoload.php';
$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$pde_recepcion = PdeRecepcion::getOxId($id);
$pde_recepcion_tipo_estado = $pde_recepcion->getPdeRecepcionTipoEstadoActual();
?>
<div class="datos" recepcion_id="<?php Gral::_echo($pde_recepcion->getId()) ?>">
    <div class="titulo">
        <?php Lang::_lang('PdeRecepcion') ?>: 
        <strong><?php Gral::_echo($pde_recepcion->getId()) ?> - <?php Gral::_echo($pde_recepcion->getInsInsumo()->getDescripcion()) ?></strong>
    </div>


    <?php if ($pde_recepcion_tipo_estado->getCodigo() == PdeRecepcionTipoEstado::TIPO_RECIBIDO_DE_PROVEEDOR) { ?>
        <?php if (UsCredencial::getEsAcreditado('PDE_RECEPCION_GESTION_ACCION_ACCIONES_DESPACHAR')) { ?>
            <div class="uno despachar">
                <img class="icono" src="imgs/btn_despachar.png" width="16" align="absmiddle" title="" />
                <?php Lang::_lang('Despachar a Panol') ?>
            </div>
        <?php } ?>
    <?php } ?>

    <?php if ($pde_recepcion_tipo_estado->getCodigo() == PdeRecepcionTipoEstado::TIPO_DESPACHADO_A_PANOL) { ?>
        <?php if (UsCredencial::getEsAcreditado('PDE_RECEPCION_GESTION_ACCION_ACCIONES_RECIBIR')) { ?>
            <div class="uno recibir">
                <img class="icono" src="imgs/btn_recibir.png" width="16" align="absmiddle" />
                <?php Lang::_lang('Recibir en Panol') ?>
            </div>
        <?php } ?>
    <?php } ?>

    <?php if (false) { ?>
        <?php if ($pde_recepcion_tipo_estado->getCodigo() == PdeRecepcionTipoEstado::TIPO_RECIBIDO_POR_PANOL) { ?>
            <?php if (UsCredencial::getEsAcreditado('PDE_RECEPCION_GESTION_ACCION_ACCIONES_REGISTRAR_PAGO')) { ?>
                <div class="uno registrar-pago">
                    <img class="icono" src="imgs/btn_finalizar.png" width="16" align="absmiddle" />
                    <?php Lang::_lang('Registrar Pago') ?>
                </div>
            <?php } ?>
        <?php } ?>
    <?php } ?>


    <br />
</div>