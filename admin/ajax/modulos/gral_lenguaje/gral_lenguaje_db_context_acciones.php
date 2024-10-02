<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$gral_lenguaje = GralLenguaje::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($gral_lenguaje->getId()) ?>" modulo="gral_lenguaje">

    <div class="titulo">
        <?php Lang::_lang('GralLenguaje') ?>: 
        <strong><?php Gral::_echo($gral_lenguaje->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('GRAL_LENGUAJE_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('GralLenguaje') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

