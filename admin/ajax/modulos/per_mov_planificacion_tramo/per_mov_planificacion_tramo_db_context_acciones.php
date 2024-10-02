<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$per_mov_planificacion_tramo = PerMovPlanificacionTramo::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($per_mov_planificacion_tramo->getId()) ?>" modulo="per_mov_planificacion_tramo">

    <div class="titulo">
        <?php Lang::_lang('PerMovPlanificacionTramo') ?>: 
        <strong><?php Gral::_echo($per_mov_planificacion_tramo->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('PER_MOV_PLANIFICACION_TRAMO_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('PerMovPlanificacionTramo') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

