<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$ope_operario = OpeOperario::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($ope_operario->getId()) ?>" modulo="ope_operario">

    <div class="titulo">
        <?php Lang::_lang('OpeOperario') ?>: 
        <strong><?php Gral::_echo($ope_operario->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('OPE_OPERARIO_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('OpeOperario') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

