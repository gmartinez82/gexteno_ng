<?php
include '_autoload.php';
$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$pde_oc = PdeOc::getOxId($id);

$pde_centro_recepcion = $pde_oc->getPdeCentroRecepcion();
$pde_oc_tipo_estado = $pde_oc->getPdeOcTipoEstado();
?>
<div class="datos" oc_id="<?php Gral::_echo($pde_oc->getId()) ?>">
    <div class="titulo">
        <?php Lang::_lang('PdeOc') ?>: 
        <strong><?php Gral::_echo($pde_oc->getId()) ?> - <?php Gral::_echo($pde_oc->getInsInsumo()->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('PDE_OC_GESTION_ACCION_ACCIONES_PUBLICAR')) { ?>
        <?php if ($pde_oc_tipo_estado->getCodigo() == PdeOcTipoEstado::TIPO_ESTADO_SOLICITADO) { ?>
            <div class="uno publicar">
                <img class="icono" src="imgs/btn_publicar.png" width="16" align="absmiddle" title="" />
                <?php Lang::_lang('Publicar') ?> <?php Lang::_lang('PdeOc') ?>
            </div>
        <?php } ?>
    <?php } ?>

    <?php if (UsCredencial::getEsAcreditado('PDE_OC_GESTION_ACCION_ACCIONES_ANULAR')) { ?>
        <?php if ($pde_oc_tipo_estado->getActivo()) { ?>
            <div class="uno anular">
                <img class="icono" src="imgs/btn_anular.png" width="16" align="absmiddle" title="" />
                <?php Lang::_lang('Anular') ?> <?php Lang::_lang('PdeOc') ?>
            </div>
        <?php } ?>
    <?php } ?>

    <?php if (UsCredencial::getEsAcreditado('PDE_OC_GESTION_ACCION_ACCIONES_RECLAMAR')) { ?>
        <div class="uno reclamar">
            <img class="icono" src="imgs/btn_reclamar.png" width="18" align="absmiddle" />
            <?php Lang::_lang('Reclamar') ?> <?php Lang::_lang('PdeOc') ?>
        </div>
    <?php } ?>

    <?php if (!$pde_centro_recepcion->getEsPanol()) { ?>
        <?php if (UsCredencial::getEsAcreditado('PDE_OC_GESTION_ACCION_ACCIONES_RECIBIR')) { ?>
            <?php if ($pde_oc_tipo_estado->getActivo()) { ?>
                <div class="uno recibir">
                    <img class="icono" src="imgs/btn_recibir.png" width="18" align="absmiddle" />
                    <?php Lang::_lang('Recibir') ?> <?php Lang::_lang('PdeOc') ?> <?php Lang::_lang('en Centro Recepcion') ?>
                </div>
            <?php } ?>
        <?php } ?>

    <?php } else { ?>
        <?php if (UsCredencial::getEsAcreditado('PDE_OC_GESTION_ACCION_ACCIONES_RECIBIR')) { ?>
            <?php if ($pde_oc_tipo_estado->getActivo()) { ?>
                <div class="uno recibir-en-panol">
                    <img class="icono" src="imgs/btn_recibir.png" width="18" align="absmiddle" />
                    <?php Lang::_lang('Recibir') ?> <?php Lang::_lang('PdeOc') ?> <?php Lang::_lang('en Panol') ?>
                </div>
            <?php } ?>
        <?php } ?>

    <?php } ?>

    <br />
</div>