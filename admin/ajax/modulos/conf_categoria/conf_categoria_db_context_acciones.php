<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$conf_categoria = ConfCategoria::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($conf_categoria->getId()) ?>" modulo="conf_categoria">

    <div class="titulo">
        <?php Lang::_lang('ConfCategoria') ?>: 
        <strong><?php Gral::_echo($conf_categoria->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('CONF_CATEGORIA_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('ConfCategoria') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

