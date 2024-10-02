<?php
include '_autoload.php';
$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$pde_pedido = PdePedido::getOxId($id);
$pde_tipo_estado = $pde_pedido->getPdeTipoEstadoActual();
?>
<div class="datos" pedido_id="<?php Gral::_echo($pde_pedido->getId()) ?>">
    <div class="titulo">
        <?php Lang::_lang('PdePedido') ?>: 
        <strong><?php Gral::_echo($pde_pedido->getId()) ?> - <?php Gral::_echo($pde_pedido->getInsInsumo()->getDescripcion()) ?></strong>
    </div>

    <?php if ($pde_tipo_estado->getActivo()) { ?>
        <?php if ($pde_tipo_estado->getCodigo() == PdeTipoEstado::TIPO_ESTADO_SOLICITADO) { ?>
            <div class="uno publicar">
                <img class="icono" src="imgs/btn_publicar.png" width="16" align="absmiddle" title="" />
                <?php Lang::_lang('Publicar') ?> <?php Lang::_lang('PdePedido') ?>
            </div>
        <?php } ?>
    <?php } ?>

    <?php if ($pde_tipo_estado->getActivo() or $pde_tipo_estado->getCodigo() == PdeTipoEstado::TIPO_ESTADO_VENCIDO) { ?>
        <div class="uno anular">
            <img class="icono" src="imgs/btn_anular.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Anular') ?> <?php Lang::_lang('PdePedido') ?>
        </div>
    <?php } ?>

    <?php if ($pde_tipo_estado->getActivo() or $pde_tipo_estado->getCodigo() == PdeTipoEstado::TIPO_ESTADO_VENCIDO) { ?>
        <?php if ($pde_tipo_estado->getCodigo() != PdeTipoEstado::TIPO_ESTADO_SOLICITADO) { ?>
            <div class="uno extender">
                <img class="icono" src="imgs/btn_extender.png" width="18" align="absmiddle" />
                <?php Lang::_lang('Extender Vencimiento') ?> <?php Lang::_lang('PdePedido') ?>
            </div>
        <?php } ?>
    <?php } ?>
</div>