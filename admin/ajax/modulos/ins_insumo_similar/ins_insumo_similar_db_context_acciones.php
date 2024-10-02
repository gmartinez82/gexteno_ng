<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$ins_insumo_similar = InsInsumoSimilar::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($ins_insumo_similar->getId()) ?>" modulo="ins_insumo_similar">

    <div class="titulo">
        <?php Lang::_lang('InsInsumoSimilar') ?>: 
        <strong><?php Gral::_echo($ins_insumo_similar->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('INS_INSUMO_SIMILAR_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('InsInsumoSimilar') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

