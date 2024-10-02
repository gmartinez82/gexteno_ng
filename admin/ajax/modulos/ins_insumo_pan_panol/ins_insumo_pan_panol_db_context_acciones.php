<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$ins_insumo_pan_panol = InsInsumoPanPanol::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($ins_insumo_pan_panol->getId()) ?>" modulo="ins_insumo_pan_panol">

    <div class="titulo">
        <?php Lang::_lang('InsInsumoPanPanol') ?>: 
        <strong><?php Gral::_echo($ins_insumo_pan_panol->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('INS_INSUMO_PAN_PANOL_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('InsInsumoPanPanol') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

