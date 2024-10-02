<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$us_navegacion = UsNavegacion::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($us_navegacion->getId()) ?>" modulo="us_navegacion">

    <div class="titulo">
        <?php Lang::_lang('UsNavegacion') ?>: 
        <strong><?php Gral::_echo($us_navegacion->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('US_NAVEGACION_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('UsNavegacion') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

