<?php
include "_autoload.php";
$user = UsUsuario::autenticado();

$vta_presupuesto_conflicto_id = Gral::getVars(Gral::VARS_GET, "vta_presupuesto_conflicto_id");
$vta_presupuesto_conflicto = VtaPresupuestoConflicto::getOxId($vta_presupuesto_conflicto_id);

?>

<div class="datos" vta_presupuesto_conflicto_id="<?php Gral::_echo($vta_presupuesto_conflicto->getId()); ?>" >

    <div class="titulo">
        <strong>
            <?php Gral::_echo($vta_presupuesto_conflicto->getCodigo()); ?> 
        </strong>
    </div>

    <?php //if((int)$ins_insumo->getId() == 0):  ?>

    <?php if (UsCredencial::getEsAcreditado('VTA_PRESUPUESTO_CONFLICTO_GESTION_ACCION_ACTUALIZAR_IMPORTE')): ?>
        <div class="uno vta_presupuesto_conflicto actualizar">
            <img class="icono" src="imgs/_btn_estado_1.gif" width="15" alt="vta-presupuesto-conflicto-actualizar-importe" align="absmiddle">
            <?php Lang::_lang("Actualizar a"); ?>
            <strong><?php Gral::_echoImp($vta_presupuesto_conflicto->getImporteActualizado()); ?></strong>
        </div>
    <?php endif; ?>

    <?php //else:  ?>

    <?php if (UsCredencial::getEsAcreditado('VTA_PRESUPUESTO_CONFLICTO_GESTION_ACCION_MANTENER_IMPORTE')): ?>
        <div class="uno vta_presupuesto_conflicto mantener">
            <img class="icono" src="imgs/_btn_estado_0.gif" width="15" alt="vta-presupuesto-conflicto-mantener-importe" align="absmiddle">
            <?php Lang::_lang("Mantener Original"); ?>
            <strong><?php Gral::_echoImp($vta_presupuesto_conflicto->getImporteInicial()); ?></strong>
        </div>
    <?php endif; ?>

    <?php //endif;  ?>

</div>