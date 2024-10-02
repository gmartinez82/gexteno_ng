<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$alt_origen = AltOrigen::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($alt_origen->getId()) ?>" modulo="alt_origen">

    <div class="titulo">
        <?php Lang::_lang('AltOrigen') ?>: 
        <strong><?php Gral::_echo($alt_origen->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('ALT_ORIGEN_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('AltOrigen') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

