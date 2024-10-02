<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$cntb_ejercicio = CntbEjercicio::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($cntb_ejercicio->getId()) ?>" modulo="cntb_ejercicio">

    <div class="titulo">
        <?php Lang::_lang('CntbEjercicio') ?>: 
        <strong><?php Gral::_echo($cntb_ejercicio->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('CNTB_EJERCICIO_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('CntbEjercicio') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

