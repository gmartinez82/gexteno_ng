<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$gen_prca_ejecucion = GenPrcaEjecucion::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($gen_prca_ejecucion->getId()) ?>" modulo="gen_prca_ejecucion">

    <div class="titulo">
        <?php Lang::_lang('GenPrcaEjecucion') ?>: 
        <strong><?php Gral::_echo($gen_prca_ejecucion->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('GEN_PRCA_EJECUCION_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('GenPrcaEjecucion') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

