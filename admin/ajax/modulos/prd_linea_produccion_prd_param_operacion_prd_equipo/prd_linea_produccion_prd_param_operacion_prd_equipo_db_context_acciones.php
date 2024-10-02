<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$prd_linea_produccion_prd_param_operacion_prd_equipo = PrdLineaProduccionPrdParamOperacionPrdEquipo::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($prd_linea_produccion_prd_param_operacion_prd_equipo->getId()) ?>" modulo="prd_linea_produccion_prd_param_operacion_prd_equipo">

    <div class="titulo">
        <?php Lang::_lang('PrdLineaProduccionPrdParamOperacionPrdEquipo') ?>: 
        <strong><?php Gral::_echo($prd_linea_produccion_prd_param_operacion_prd_equipo->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('PRD_LINEA_PRODUCCION_PRD_PARAM_OPERACION_PRD_EQUIPO_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('PrdLineaProduccionPrdParamOperacionPrdEquipo') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

