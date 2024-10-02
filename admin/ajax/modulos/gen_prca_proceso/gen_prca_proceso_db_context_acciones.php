<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$gen_prca_proceso = GenPrcaProceso::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($gen_prca_proceso->getId()) ?>" modulo="gen_prca_proceso">

    <div class="titulo">
        <?php Lang::_lang('GenPrcaProceso') ?>: 
        <strong><?php Gral::_echo($gen_prca_proceso->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('GEN_PRCA_PROCESO_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('GenPrcaProceso') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

