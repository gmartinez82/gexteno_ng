<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$vta_tributo_exencion = VtaTributoExencion::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($vta_tributo_exencion->getId()) ?>" modulo="vta_tributo_exencion">

    <div class="titulo">
        <?php Lang::_lang('VtaTributoExencion') ?>: 
        <strong><?php Gral::_echo($vta_tributo_exencion->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('VTA_TRIBUTO_EXENCION_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('VtaTributoExencion') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

