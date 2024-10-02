<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$ins_categoria_ins_marca = InsCategoriaInsMarca::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($ins_categoria_ins_marca->getId()) ?>" modulo="ins_categoria_ins_marca">

    <div class="titulo">
        <?php Lang::_lang('InsCategoriaInsMarca') ?>: 
        <strong><?php Gral::_echo($ins_categoria_ins_marca->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('INS_CATEGORIA_INS_MARCA_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('InsCategoriaInsMarca') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

