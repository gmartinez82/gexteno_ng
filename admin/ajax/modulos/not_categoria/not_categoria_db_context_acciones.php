<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$not_categoria = NotCategoria::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($not_categoria->getId()) ?>" modulo="not_categoria">

    <div class="titulo">
        <?php Lang::_lang('NotCategoria') ?>: 
        <strong><?php Gral::_echo($not_categoria->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('NOT_CATEGORIA_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('NotCategoria') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

