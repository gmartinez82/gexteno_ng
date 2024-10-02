<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$ope_chofer = OpeChofer::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($ope_chofer->getId()) ?>" modulo="ope_chofer">

    <div class="titulo">
        <?php Lang::_lang('OpeChofer') ?>: 
        <strong><?php Gral::_echo($ope_chofer->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('OPE_CHOFER_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('OpeChofer') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

