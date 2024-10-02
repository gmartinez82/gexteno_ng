<?php
include '_autoload.php';
$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$fnd_caja = FndCaja::getOxId($id);
$fnd_caja_tipo_estado = $fnd_caja->getFndCajaTipoEstado();
?>
<div class="datos" fnd_caja_origen_id="<?php Gral::_echo($fnd_caja->getId()) ?>" caja_id="<?php Gral::_echo($fnd_caja->getId()) ?>" >
    
    <div class="titulo">
        <?php Lang::_lang('FndCaja') ?>: 
        <strong><?php Gral::_echo($fnd_caja->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('FND_CAJA_GESTION_ACCION_CONFIG_CERRAR')) { ?>
        <?php if ($fnd_caja_tipo_estado->getCodigo() == FndCajaTipoEstado::TIPO_ABIERTA) { ?>
            <div class="uno estado cerrar">
                <img class="icono" src="imgs/fnd_caja_tipo_estado/CERRADA.png" width="16" align="absmiddle" title="" />
                <?php Lang::_lang('Cerrar Caja') ?>
            </div>
        <?php } ?>
    <?php } ?>

    <?php if (UsCredencial::getEsAcreditado('FND_CAJA_GESTION_ACCION_CONFIG_RENDIR')) { ?>
        <?php if ($fnd_caja_tipo_estado->getCodigo() == FndCajaTipoEstado::TIPO_CERRADA) { ?>
            <div class="uno rendir">
                <img class="icono" src="imgs/fnd_caja_tipo_estado/RENDIDA.png" width="16" align="absmiddle" title="" />
                <?php Lang::_lang('Registrar Rendicion') ?>
            </div>
        <?php } ?>
    <?php } ?>

    <?php if (UsCredencial::getEsAcreditado('FND_CAJA_GESTION_ACCION_CONFIG_REABRIR')) { ?>
        <?php if ($fnd_caja_tipo_estado->getCodigo() == FndCajaTipoEstado::TIPO_CERRADA) { ?>
            <div class="uno reabrir">
                <img class="icono" src="imgs/fnd_caja_tipo_estado/ABIERTA.png" width="16" align="absmiddle" title="" />
                <?php Lang::_lang('Reabrir Caja') ?>
            </div>
        <?php } ?>
    <?php } ?>
    
    <?php if ($fnd_caja_tipo_estado->getActivo()): ?>
        <?php if (UsCredencial::getEsAcreditado('FND_CAJA_GESTION_ACCION_MOVIMIENTO') && false): ?>
            <div class="uno movimiento">
                <img class="icono" src="imgs/icn_AJUSTE.png" width="20" align="absmiddle" title="" />
                <?php Lang::_lang('Registrar Movimiento') ?>
            </div>
        <?php endif; ?>
    <?php endif; ?>

</div>