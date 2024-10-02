<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$us_agrupador = UsAgrupador::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($us_agrupador->getId()) ?>" modulo="us_agrupador">

    <div class="titulo">
        <?php Lang::_lang('UsAgrupador') ?>: 
        <strong><?php Gral::_echo($us_agrupador->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('US_AGRUPADOR_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('UsAgrupador') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

