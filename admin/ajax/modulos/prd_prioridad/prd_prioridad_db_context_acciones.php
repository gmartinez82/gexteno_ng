<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$prd_prioridad = PrdPrioridad::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($prd_prioridad->getId()) ?>" modulo="prd_prioridad">

    <div class="titulo">
        <?php Lang::_lang('PrdPrioridad') ?>: 
        <strong><?php Gral::_echo($prd_prioridad->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('PRD_PRIORIDAD_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('PrdPrioridad') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

