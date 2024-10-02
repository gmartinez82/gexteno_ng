<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$ins_insumo_vinculado = InsInsumoVinculado::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($ins_insumo_vinculado->getId()) ?>" modulo="ins_insumo_vinculado">

    <div class="titulo">
        <?php Lang::_lang('InsInsumoVinculado') ?>: 
        <strong><?php Gral::_echo($ins_insumo_vinculado->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('INS_INSUMO_VINCULADO_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('InsInsumoVinculado') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

