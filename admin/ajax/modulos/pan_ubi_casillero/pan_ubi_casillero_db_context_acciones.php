<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$pan_ubi_casillero = PanUbiCasillero::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($pan_ubi_casillero->getId()) ?>" modulo="pan_ubi_casillero">

    <div class="titulo">
        <?php Lang::_lang('PanUbiCasillero') ?>: 
        <strong><?php Gral::_echo($pan_ubi_casillero->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('PAN_UBI_CASILLERO_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('PanUbiCasillero') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

